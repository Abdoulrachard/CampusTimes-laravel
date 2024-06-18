<?php

namespace App\Http\Controllers;

use App\Models\User;


class StudentController extends Controller
{
    public function index()
    {
        $students = User::query() ;
        $students->where('role_id', '=', 3);
        return view('admin.student',[ 'students' =>   $students->get()] );
    }
    public function blocked()
    {
        // return view('admin.form.student',[ 'student' => new User()]) ;
    }

}
