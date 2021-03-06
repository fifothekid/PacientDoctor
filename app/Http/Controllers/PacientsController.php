<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Models\Pacient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\EmailVerification;

class PacientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['form', 'addPacient']);
    }

    public function form(){
        return view('pacients.pacientForm');
    }

    public function addPacient(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'genre'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'phone'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        DB::beginTransaction();

        $user = new User();

        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->email_token = str_random(10);

        $user->save();

        $pacient = new Pacient();

        $pacient->user_id = $user->id;
        $pacient->name= $request['name'];
        $pacient->genre= $request['genre'];
        $pacient->city= $request['city'];
        $pacient->state= $request['state'];
        $pacient->phone= $request['phone'];

        $pacient->save();

        $email = new EmailVerification($user);

        $email->from('admin@fam-doc.com');
        $email->subject('Activation Email');

        Mail::to($user->email)->send($email);

        DB::commit();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json(['status' => 0]);
        } else {
            return redirect()->action('QuestionsController@list');
        }
    }

    public function list()
    {
        $pacients = DB::table('pacients')->leftJoin('users', 'users.id', '=', 'pacients.user_id')->get();
        return view('pacients.list',['pacients' => $pacients]);
    }

    public function delete($id)
    {
        DB::table('pacients')->delete($id);

        return redirect()->action('QuestionsController@list');
    }
}