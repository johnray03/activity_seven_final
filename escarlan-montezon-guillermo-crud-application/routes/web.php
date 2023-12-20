<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\StudentContact;

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

    $studentContact = StudentContact::orderBy("id", "desc")->get();

    return view("home", ["contacts" => $studentContact]);
});


Route::get("/create", function() {
    return view("create");
});


Route::get("/details/{id}", function($id) {

    $studentContact = StudentContact::findOrFail($id);

    return view("edit", ["contact" => $studentContact]);
});


Route::post("/update/{id}", function($id, Request $request) {

    $studentContact = StudentContact::findOrFail(request("id"));

    $studentContact->student_number = request("student-number");
    $studentContact->lastname = request("lastname");
    $studentContact->firstname = request("firstname");
    $studentContact->middlename = request("middlename");
    $studentContact->course = request("course");
    $studentContact->email = request("email");
    $studentContact->contact_number = request("contact-number");
    $studentContact->address = request("address");
    $studentContact->parent = request("parent");
    $studentContact->parent_contact = request("parent-contact");

    $studentContact->save();

    return redirect("/details/{$id}")->with("msg", "Contact info has been updated");
});

Route::get("/delete/{id}", function($id) {

    StudentContact::destroy($id);
    
    return redirect("/")->with("msg", "Contact info has been deleted");
});

Route::post("/create", function(Request $request) {
    $studentContact = new StudentContact();
    
    $studentContact->student_number = request("student-number");
    $studentContact->lastname = request("lastname");
    $studentContact->firstname = request("firstname");
    $studentContact->middlename = request("middlename");
    $studentContact->course = request("course");
    $studentContact->email = request("email");
    $studentContact->contact_number = request("contact-number");
    $studentContact->address = request("address");
    $studentContact->parent = request("parent");
    $studentContact->parent_contact = request("parent-contact");

    $studentContact->save();

    return redirect("/")->with("msg", "Saved successfully!");
});


