@extends('layouts.master')

@section('content')

<h1>Classes</h1>

<a class="" href="{{ route('class_create') }}">Create</a>

<div class="flash-message">
    @foreach (['danger', 'success'] as $msg)
        @if(Session::has($msg))
            <div class="alert alert-{{ $msg }}">{{ Session::get($msg) }}</div>
        @endif
    @endforeach
</div>

@foreach($classes as $class)
      <tr>
        <td>{{$class['class_title']}}</td>
        <td>{{$class['class_num']}}</td>   
        <td>
          <form action="{{action('ClassesController@destroy', $class['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach

@endsection