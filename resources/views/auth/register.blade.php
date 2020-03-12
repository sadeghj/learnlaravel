@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data"> --}}
                 {!! Form::open(['method'=>'POST','url'=>route('register') ,'enctype'=>'multipart/form-data']) !!}
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                               {!! Form::text( 'name','name',  old('name') , ['id'=>'name' ,'class'=>'form-control ','autocomplete'=>'name', 'autofocus'=>'autofocus','required'=>'required']) !!}
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                              {!! Form::label('email', __('E-Mail Address'), ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::email( 'email',  old('email') , ['id'=>'email','class'=>'form-control ','autocomplete'=>'name', 'autofocus'=>'autofocus','required'=>'required']) !!}

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="path" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="path" type="file" class="@error('path') is-invalid @enderror" name="pathimage" value="{{ old('path') }}" required autocomplete="path">

                                @error('path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(__('Register'), ['class'=>'btn btn-primary']) !!}

                            </div>
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
