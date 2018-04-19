@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
            <form action="{{ route('custom.login')}}" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
                <fieldset>
                    <legend>Register</legend>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email"  value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
