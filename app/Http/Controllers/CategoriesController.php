<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function form(){
        return view('categories.categoryForm');
    }
    public function  addCategory(Request $request)
    {
        $request->validate([
            'category' => 'required'
        ]);

        DB::beginTransaction();

        $category = new Category();
        $category->category = $request['category'];
        $category->save();

        DB::commit();

        return view('home');

    }

    public function list()
    {
        $categories = DB::table('categories')->get();

        return view('categories.list', ['categories' => $categories]);
    }


    public function delete($id)
    {
        DB::table('categories')->delete($id);

        return view('home');
    }
}