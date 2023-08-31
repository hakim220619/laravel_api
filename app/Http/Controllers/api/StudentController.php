<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    function student()  {
        $students = DB::table('students')->get();
        return response()->json([
            'status' => true,
            'data' => $students
        ]);
    }
    
}
