@extends('layouts.master') 
@section ('content')

<h1>Add Student</h1>

<form method="POST" action="/students">

    {{Form::open(['route' => 'students', 'files' => true])}}

    <div class="form-group">

        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', array('class' => 'form-control'))}}

        {{Form::label('cohort', 'Cohort')}}
        {{Form::text('cohort', '', array('class' => 'form-control'))}}

        {{Form::label('photo', 'Student Photo')}}
        {{Form::file('student_photo')}}

    </div>

    {{Form::submit('Add Student', ['class' => 'btn btn-primary'])}}

    {{Form::close()}}
    
</form>
@endsection