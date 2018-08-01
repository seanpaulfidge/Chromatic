@extends('layouts.master')

@section('content')

<h1>Students</h1>

<a class="" href="{{ route('student_add') }}">Create</a>

@include('layouts.alerts')

<table class="table table-striped">
  <thead>
    <th>Name</th>
    <th>Cohort</th>
    <th></th>
    <th></th>
  </thead>

@foreach($students as $student)
      <tr>
        <td>{{$student['name']}}</td>
        <td>{{$student['cohort']}}</td>
        <td>
            <form action="{{action('StudentsController@destroy', $student['id'])}}" method="post">
              @csrf
              <input name="_method" type="hidden" value="EDIT">
              <button class="btn btn-warning" type="submit">Edit</button>
            </form>
          </td>
        <td>
          <form action="{{action('StudentsController@destroy', $student['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
        
      </tr>
      @endforeach

@endsection