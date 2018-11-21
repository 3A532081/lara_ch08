<?php

Route::get('/','HomeController@index');

Route::pattern('student_no','s[0-9]{10}');

Route::group(['prefix'=>'student'],function ()
{

    Route::get('{student_no}',[
        'as'=>'student',
        'uses'=>'StudentController@getStudentData'
    ]);

    Route::get('{student_no}/score/{subject?}', [
    'as'=>'student.score',
    'uses'=>'StudentController@getStudentScore'
    ])->where(['subject'=>'(chinese|english|math)']);
});


Route::group(['namespace'=>'cool'],function (){
    Route::get('cool','Cool\TestController@index');
});

Route::get('/board', 'BoardController@getIndex');