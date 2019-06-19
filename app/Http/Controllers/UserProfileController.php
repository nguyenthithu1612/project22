<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class UserProfileController extends Controller
{
    public function showProfile() {
        $id = 1;
        $employee = Employee::where('id', $id)->first();
     
        return view('frontend/profile', ['employee' => $employee]);
    }
}
