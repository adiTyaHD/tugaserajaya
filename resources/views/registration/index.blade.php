@extends('master-auth')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> {{$title}} </title>

</head>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registration Form</h1>
                                    </div>
                                    <form class="user" action="/registration" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="name" name="first_name" class="form-control form-control-user 
                                            @error('first_name') is-invalid @enderror"
                                                id="first-name"
                                                placeholder="Enter first name..."  value="{{old('first_name')}}">
                                            @if($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                        @endif
                                        </div> 
                                            </div>
                                                <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="name" name="last_name" class="form-control form-control-user @error('last_name') is-invalid @enderror"
                                                id="last_name"
                                                placeholder="Enter last name..."  value="{{old('last_name')}}">
                                                @if($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                        @endif
                                        </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."  value="{{old('email')}}">
                                            @if($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user  @error('password') is-invalid @enderror"
                                                id="password" placeholder="Enter Password ...">
                                        @if($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password-con" class="form-control form-control-user  @error('password-con') is-invalid @enderror"
                                                id="password-con" placeholder="Verified Password ...">
                                        @if($errors->has('password-con'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password-con') }}</strong>
                                        </span>
                                        @endif
                                        </div>
                                        </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Daftar
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{url('/')}}">Have an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection