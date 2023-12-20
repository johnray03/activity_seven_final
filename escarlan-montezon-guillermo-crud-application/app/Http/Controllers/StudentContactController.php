<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentContact;

class StudentContactController extends Controller
{
    public function store() {

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

        return redirect("/home")->with("msg", "Saved successfully!");
    }
}
