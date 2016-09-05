@extends('layouts.master')

@section('title')
Welcome
@endsection()

@section('content')
@include('includes.message-block')

<div class="row" style="  padding:30px; border-radius: 5px;">
    <div class="col-md-6">
        <h3>Sign Up</h3>
        <form action="{{ route('signup') }}" method="post">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Your E-Mail</label>
                <input class="form-control" type="email" name="email" id="email" value="{{ Request::old('email') }}" placeholder="Pleace enter your E-mail">
            </div>
            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }} ">
                <label for="first_name">Your First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}"placeholder="Pleace enter your First name">
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Your Password</label>
                <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}" placeholder="Pleace enter your Password">
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>


    <div class="col-md-6">
        <h3>Sign In</h3>
        <form action="{{ route('signin') }}" method="post">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Your E-Mail</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}" placeholder="Pleace enter your E-mail">
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Your Password</label>
                <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}"placeholder="Pleace enter your Password">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>

@endsection()