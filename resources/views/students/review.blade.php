@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manage Students</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('students') }}" aria-label="{{ __('students') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first-name" class="col-sm-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first-name" type="text" class="form-control{{ $errors->has('first-name') ? ' is-invalid' : '' }}" name="first-name" required autofocus>

                                @if ($errors->has('first-name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first-name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="form-group row">

                            <label for="last-name" class="col-sm-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last-name" type="text" class="form-control{{ $errors->has('last-name') ? ' is-invalid' : '' }}" name="last-name" required autofocus>

                                @if ($errors->has('last-name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last-name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    
                            <div class="list-group row">
                                    <div class="col-md-8 offset-md-2">
                                <button type="button" class="list-group-item list-group-item-action active">
                                  Cras justo odio
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                                <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                                <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                                <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
                              </div>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection