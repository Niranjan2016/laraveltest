@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>

                    <a href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form action="{{ route('logout')}}" id='logout-form' method="post" accept-charset="utf-8" style='display:none;'>
                        {{ csrf_field() }}
                    </form>
                @else
                    <a href="{{ url('custom-login') }}">Login</a>
                    <a href="{{ url('custom-register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">
            @if (session('Status'))
                <h4>{{session('Status')}}</h4>
            @endif
            <div class="title m-b-md">
                Laravel Test project
            </div>
        </div>
    </div>
@endsection
