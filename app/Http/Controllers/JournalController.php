<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Journal;
use Session;

class JournalController extends Controller
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
        $journal = Journal::all();
        // dd($journal);
        return view('journal/index', compact('journal'));
    }

    public function create()
    {
        return view('journal/create');
    }
}
