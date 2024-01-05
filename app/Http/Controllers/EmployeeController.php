<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getAllEmployees (){
        $employees = Employee::get();
        return response(['data' => $employees]);
    }
}
