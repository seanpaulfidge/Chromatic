@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body"> --}}

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    @guest
                    
Guest
                    @else
                    <!-- Example row of columns -->
                    <div class="row">
                            <div class="col-md-3">
                              <h2>Heading</h2>
                              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                            </div>
                            <div class="col-md-3">
                              <h2>Heading</h2>
                              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                            </div>
                            <div class="col-md-3">
                              <h2>Heading</h2>
                              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                            </div>
                          </div>
                        </div>
                    <a href="{{ route('journal') }}">Journal</a>
                    <a href="{{ route('classes') }}">Classes</a>
                    <a href="{{ route('students') }}">Students</a>
                    @endguest
                    

                    {{-- You are logged in! --}}
                {{-- </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection