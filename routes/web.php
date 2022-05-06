<?php

Route::get('/', function () {
    return view('welcome');
});

// Unauthenticated group 
Route::group(array('before' => 'guest'), function() {
 
	// CSRF protection 
	Route::group(array('before' => 'csrf'), function() {

		// Create an account (POST) 
		Route::post('/create', array(
			'as' => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));

		// Sign in (POST) 
		Route::post('/sign-in', array(
			'as' => 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));
	});

	// Sign in (GET) 
	Route::get('/', array(
		'as' 	=> 'account-sign-in',
		'uses'	=> 'AccountController@getSignIn'
	));

	// Create an account (GET) 
	Route::get('/create', array(
		'as' 	=> 'account-create',
		'uses' 	=> 'AccountController@getCreate'
	));

    // Render search books panel
    Route::get('/book', array(
        'as' => 'search-book',
        'uses' => 'BooksController@searchBook'
    ));    
	
});

// Main books Controlller left public so that it could be used without logging in too
Route::resource('/books', 'BooksController');

// Authenticated group 
// Route::group(array('before' => 'auth'), function() {
Route::group(['middleware' => ['auth']] , function() {

	// Home Page of Control Panel
	

	// Render Add Books panel
    Route::get('/add-books', array(
        'as' => 'add-books',
        'uses' => 'BooksController@create'
	));
	
	// Route::post('/bookcategory', 'BooksController@BookCategoryStore')->name('bookcategory.store');
	

	// Render All Books panel
    Route::get('/all-books', array(
        'as' => 'all-books',
        'uses' => 'BooksController@showAll'
	));
	
	// Route::get('/bookBycategory/{cat_id}', array(
    //     'as' => 'bookBycategory',
    //     'uses' => 'BooksController@BookByCategory'
    // ));

	// Students
    Route::get('/registered-students', array(
        'as' => 'registered-students',
        'uses' => 'StudentController@renderStudents'
    ));

    // Render students approval panel
    Route::get('/students-for-approval', array(
        'as' => 'students-for-approval',
        'uses' => 'StudentController@renderApprovalStudents'
	));
	
	  // Render students approval panel
	  Route::get('/settings', array(
        'as' => 'settings',
        'uses' => 'StudentController@Setting'
	));
	
	  // Render students approval panel
	  Route::post('/setting', array(
        'as' => 'settings.store',
        'uses' => 'StudentController@StoreSetting'
    ));

    // Main students Controlller resource
	Route::resource('/student', 'StudentController');
	
	Route::post('/studentByattribute', array(
        'as' => 'studentByattribute',
        'uses' => 'StudentController@StudentByAttribute'
    ));

    // Issue Logs
    Route::get('/issue-return', array(
        'as' => 'issue-return',
        'uses' => 'LogController@renderIssueReturn'
    ));

    // Render logs panel
    Route::get('/currently-issued', array(
        'as' => 'currently-issued',
        'uses' => 'LogController@renderLogs'
    ));

    // Main Logs Controlller resource
    Route::resource('/issue-log', 'LogController');

	// Sign out (GET) 
    Route::get('/sign-out', array(
    	'as' => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
    ));

	//Route::get('/alluser','AccountController@alluser')->name('logUserIndex');
	
	Route::get('/alluser', array(
        'as' => 'alluser',
        'uses' => 'AccountController@alluser'
	));

	// Route::get('/edit', array(
    //     'as' => 'edit',
    //     'uses' => 'AccountController@edit'
	// ));

	Route::get('/edit{id}','AccountController@edit')->name('edit');
	Route::put('/update{id}','AccountController@update')->name('update');
	Route::delete('/destroy{id}','AccountController@destroy')->name('destroy');

	//routes book
	Route::post('/addbookings', array(
		'as' => 'addbookings',
        'uses' => 'BooksController@store'
	));

	//routes category book
	Route::get('/book-category', array(
        'as' => 'book-category',
        'uses' => 'CategoriesBooks@create'
	));
	
	Route::POST('/add-book-category', array(
        'as' => 'add-book-category',
        'uses' => 'CategoriesBooks@store'
	));

	Route::get('/allbook', array(
        'as' => 'allbook',
        'uses' => 'BooksController@allbook'
    ));

	Route::get('/editbook/{id}', array(
		'as' => 'editbook',
		'uses' => 'BooksController@editbook'
	));

	Route::get('/allemprestimo', array(
        'as' => 'allemprestimo',
        'uses' => 'EmprestimoController@allemprestimo'
    ));
	Route::get('/meusemprestimos', array(
        'as' => 'meusemprestimos',
        'uses' => 'EmprestimoController@meusemprestimos'
    ));

    Route::get('/todosemprestimos', array(
        'as' => 'todosemprestimos',
        'uses' => 'EmprestimoController@todosemprestimos'
    ));
    

	Route::get('/emprestimo-aprove{id}', array(
        'as' => 'aprovaremprestimo',
        'uses' => 'EmprestimoController@aprove'
    ));

	Route::get('/emprestimo-reprove{id}', array(
        'as' => 'reprovaremprestimo',
        'uses' => 'EmprestimoController@reject'
    ));

	Route::get('/renovacaolist', array(
        'as' => 'renovacaolist',
        'uses' => 'EmprestimoController@renovacaolist'
    ));

	Route::get('/devolucaolist', array(
        'as' => 'devolucaolist',
        'uses' => 'EmprestimoController@devolucaolist'
    ));

	Route::get('/emprestimo-reprove{id}', array(
        'as' => 'reprovaremprestimo',
        'uses' => 'EmprestimoController@reject'
    ));
	
	Route::put('/update-book/{id}', 'BooksController@update')->name('updatebook');
	Route::delete('/delete_book/{id}','BooksController@delete_book')->name('delete_book');


	Route::POST('/emprestimo/{id}', 'EmprestimoController@store')->name('emprestimo-new');

    Route::get('/renovacao-book/{id}', 'EmprestimoController@solicitarRenovacao')->name('renovacao-book');
    Route::get('/solicitacos-renovacao-book/{id}', 'EmprestimoController@renovar')->name('solicitacao-renovacao-book');

    Route::get('/devolver-book/{id}', 'EmprestimoController@solicitarDevolucao')->name('devolver-book');
    

    Route::get('/renovacao-reprove{id}', array(
        'as' => 'reprovarrenovacao',
        'uses' => 'EmprestimoController@reject'
    ));

    Route::get('/aprovardevolucao{id}', array(
        'as' => 'aprovardevolucao',
        'uses' => 'EmprestimoController@aprovardevolucao'
    ));

    Route::get('/home', array(
        'as' => 'home',
        'uses' => 'BooksController@index'
    ));
});