@extends('layouts.master') 
@section ('content')

<h1>Create Class</h1>

<form method="POST" action="/classes">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="class_title">Class Title</label>
        <input type="text" class="form-control" id="class_title" name="class_title">
    </div>

    <div class="form-group">
        <label for="class_num">Class Number</label>
        <input type="text" class="form-control" id="class_num" name="class_num">
    </div>

    <button type="submit" class="btn btn-primary">Add Class</button>
</form>
@endsection