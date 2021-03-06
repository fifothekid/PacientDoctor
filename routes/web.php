<?php

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();
Route::post('/password_reset','Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/validate_session', 'Auth\LoginController@getValidateSession');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/profile', 'ProfileController@profile');
Route::post('/update_profile', 'ProfileController@update_profile');

Route::get('/doctors/form', 'DoctorsController@form');
Route::post('/doctors/add', 'DoctorsController@addDoctor');
Route::get('/doctors/list', 'DoctorsController@list');
Route::get('/doctors/questionslist', 'DoctorsController@questionslist');
Route::get('/doctors/edit/{id}', 'DoctorsController@edit');
Route::get('/doctors/delete/{id}', 'DoctorsController@list');
Route::post('/doctors/next_patient', 'DoctorsController@nextPatient');
Route::get('/doctors/doctor_cases', 'DoctorsController@doctor_cases');
Route::post('/doctors/send_message', 'DoctorsController@send_message');
Route::get('/doctors/waiting_patients', 'DoctorsController@waiting_patients');

Route::get('/pacients/form', 'PacientsController@form');
Route::post('/pacients/add', 'PacientsController@addPacient');
Route::get('/pacients/list', 'PacientsController@list');
Route::get('/pacients/edit/{id}', 'PacientsController@edit');
Route::get('/pacients/delete/{id}', 'PacientsController@delete');

Route::get('/categories/form', 'CategoriesController@form');
Route::post('/categories/add', 'CategoriesController@addCategory');
Route::get('/categories/list', 'CategoriesController@list');
Route::get('/categories/selcategory', 'CategoriesController@selCategory');
Route::get('/categories/edit/{id}', 'CategoriesController@edit');
Route::get('/categories/delete/{id}', 'CategoriesController@delete');

Route::get('/questions/form', 'QuestionsController@form');
Route::post('/questions/add', 'QuestionsController@addQuestion');
Route::get('/questions/list', 'QuestionsController@list');
Route::get('/questions/edit/{id}', 'QuestionsController@edit');
Route::get('/questions/delete/{id}', 'QuestionsController@delete');
Route::any('/questions/select_questions', 'QuestionsController@selectQuestions');
Route::post('/questions/select_doctor', 'QuestionsController@selectDoctor');

Route::any('/doubts/savedoubt', 'DoubtsController@saveDoubt');

Route::get('/answers/form', 'AnswersController@form');
Route::post('/answers/add', 'AnswersController@addAnswer');
Route::get('/answers/list', 'AnswersController@list');
Route::get('/answers/edit/{id}', 'AnswersController@edit');
Route::get('/answers/delete/{id}', 'AnswersController@delete');

Route::get('/register/verify/{token}','Auth\RegisterController@verify');

Route::get('/queue/index/{case_id}', 'QueueController@index');
Route::post('/queue/submit_evaluation', 'QueueController@submitEvaluation');
Route::post('/queue/submit_notes', 'QueueController@submitNotes');
Route::post('/queue/submit_case_result', 'QueueController@submitCaseResult');
Route::get('/queue/receive_notes/{case_id}', 'QueueController@getNotes');
Route::post('/queue/start_call', 'QueueController@startCall');
Route::get('/queue/next_patient', 'QueueController@nextPatient');
Route::get('/queue/case_data', 'QueueController@case_data');
Route::post('/queue/finish_call', 'QueueController@finishCall');