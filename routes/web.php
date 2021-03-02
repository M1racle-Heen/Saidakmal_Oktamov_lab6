<?php

use Illuminate\Support\Facades\Route;
use App\Student;
use App\Http\Controllers\LolController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Web programming: back end';
});

Route::get('/user/{name?}/{lname?}', function ($name = "Azamat",$lname = "Oktamov") {
    return 'Your name is '.$name." ".$lname;
});

Route::get('/insert',function(){
	DB::insert('insert into student(Name,Date_of_birth,GPA,advisor) values(?,?,?,?)',["Said","2008-11-11","3.15","Marzhan"]);
});

Route::get('/select',function(){
	$result = DB::select('select * from student where id = ?',[1]);
	foreach ($result as $student) {
		echo "Name is:".$student -> Name;
		echo "<br>";
		echo "Date_of_birth is:".$student -> Date_of_birth;
		echo "<br>";
		echo "GPA is:".$student -> GPA;
		echo "<br>";
		echo "Advisor is:".$student -> advisor;
	}
});
Route::get('/update',function(){
	$update = DB::update('update student set Name = "Dias" where id = ?',[1]);
	return $update;
});

Route::get('/delete',function(){
	$delete = DB::delete('delete from student where id = ?',[2]);
	return $delete;
});

Route::get('/select2',function(){
	$students = Student::all();	
	foreach ($students as $student) {
		echo $student -> Name;
		echo "<br>";
		echo .$student -> Date_of_birth;
		echo "<br>";
		echo $student -> GPA;
		echo "<br>";
		echo .$student -> advisor;
	}
});

Route::get('/insert2',function(){
	$student = new Student;
	$student ->Name = "Said"; 
	$student ->Date_of_birth = "2008-11-11";
	$student ->GPA = "2.8";
	$student ->advisor = "Hello";
	$student ->save();
});

Route::get('/update2',function(){
	$student = Student::find(1);
	$student ->Name = "Dastan"; 
	$student ->Date_of_birth = "2108-11-11";
	$student ->GPA = "3.8";
	$student ->advisor = "Assya";
	$student ->save();
});

Route::get('/delete2',function(){
	$student = Student::find(1);	
	$student ->delete();
});


//Route::get('/show/{name}','LolController@show_name'
//);

/*Route::get('/insert',function(){
	DB::insert('insert into posts(title,body,is_admin) values(?,?,?)',["My title","My body",1])
});
/*Route::get('/select',funtion(){
	$results=DB::select('select * from posts where if = ?',[1]);
	foreach ($ as $key => $value) {
		# code...
	}
});*/
/*
Route::get('/redirect-example', function () {
    return redirect("/test");
});
Route::get('student/{number}/{sign}/{number2}',"CalculatorController@operation"
);

//optional parameter не обязательно
Route::get('/user/{name?}', function ($name = "Azamat") {
    return $name;
});
//required parameter обязательно
Route::get('/user/{name}', function () {
    return $name;
});
Route::resource('/student','TeacherController');*/