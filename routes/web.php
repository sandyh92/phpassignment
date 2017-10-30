<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Post;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/post', 'PostsController@index');

//Route::resource('post','PostsController');

//Route::get('/contact', 'PostsController@contact');

//INSERT
// Route::get('/insert',function(){
// 	DB::insert('insert into posts(title,content) values(?,?)',['Laravel','PHP Laravel is best thing in PHP']);
// });

// Route::get('/read',function(){
// $results = DB::select('select * from posts where id=?',[1]);

// foreach($results as $post) {
// 	return $post->title;
// }

// });

//UPDATE
// Route::get('/update',function(){
// 	$results = DB::update('update posts set title = "Updated title" where id=?',[1]);

// 	return $results;
// });


// Route::get('/delete',function(){
// 	$deleted = DB::delete('delete from posts where id=?',[1]);
// 	return $deleted;
// });

// Route::get('/ormread',function(){

// $results = Post::all(){
// 		return $results;
// 	}
// });

Route::get('/read',function(){

    $posts = Post::all();
    foreach($posts as $post){
        return $post->title;
    }

});

Route::get('/forms', function(){
	return view('form');
});