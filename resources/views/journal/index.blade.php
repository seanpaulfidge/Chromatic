@extends('layouts.master')

@section('content')

<h1>Journal</h1>

<a class="" href="{{ route('journal_create') }}">Create</a>

@include('layouts.alerts')

<table class="table table-striped">
  <thead>
    <th>Title</th>
    <th>Number</th>
    <th></th>
    <th></th>
  </thead>

@foreach($journal as $entry)
      <tr>
        <td>{{$entry['entry_title']}}</td>
        <td>{{$entry['entry_num']}}</td>
        <td>
            <form action="{{action('JournalController@destroy', $entry['id'])}}" method="post">
              @csrf
              <input name="_method" type="hidden" value="EDIT">
              <button class="btn btn-warning" type="submit">Edit</button>
            </form>
          </td>
        <td>
          <form action="{{action('JournalController@destroy', $entry['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
        
      </tr>
      @endforeach

@endsection