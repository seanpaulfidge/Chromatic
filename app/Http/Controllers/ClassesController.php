<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Classes;
use Session;

class ClassesController extends Controller
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
        $classes = Classes::all();
        // dd($classes);
        return view('classes/index', compact('classes'));
    }

    public function create()
    {
        return view('classes/create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        if (Classes::create(request(['class_title', 'class_num']))) {
            Session::flash('success', 'Class created');
        } else {
            Session::flash('danger', 'Class not created');
        }
        return redirect('classes');
    }

    public function destroy($id)
    {
        $class = Classes::find($id);
        $class->delete();
        return redirect('classes')->with('success', 'Information has been deleted');
    }
}
