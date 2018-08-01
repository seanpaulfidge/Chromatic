@extends('layouts.master') 
@section ('content')

<h1>Journal Entry</h1>

<form method="POST" action="/journal">

    {{Form::open(['route' => 'journal'])}}

    <div class="form-group">

        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', array('class' => 'form-control'))}}

        {{Form::label('note', 'Note')}}
        {{Form::text('cohort', '', array('class' => 'form-control'))}}

    </div>

    {{Form::submit('Add Entry', ['class' => 'btn btn-primary'])}}

    {{Form::close()}}
    
</form>
@endsection