@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="top-right links"> 
        {{-- <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div> --}}
        <div class="dropdown">
            <div class="dropdown" role="menu" aria-labelledby="dropdownMenu" style='color: #ffffff !important'>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->fname . ' ' . Auth::user()->lname }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form action="{{ route('logout')}}" id='logout-form' method="post" accept-charset="utf-8" style='   display:none;'>
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div> 
            </div>
        </div> 

    <div class="content">
        @if (session('Status'))
            <h4>{{session('Status')}}</h4>
        @endif
        <div class="title m-b-md">
            User Dashboard
        </div>
    </div>
</div>
@endsection
