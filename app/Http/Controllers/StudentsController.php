<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Students;
use Session;

class StudentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();
        return view('students/index', compact('students'));
    }

    public function create()
    {
        return view('students/create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        if (Students::create(request(['name', 'cohort', '']))) {
            Session::flash('success', 'Student created');
        } else {
            Session::flash('danger', 'Student not created');
        }
        return redirect('students');
    }

    public function destroy($id)
    {
        $class = Students::find($id);
        $class->delete();
        return redirect('students')->with('success', 'Information has been deleted');
    }
}
