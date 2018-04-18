<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    
    

</head>

<body>
    <div class="container">
        <div class="row">
            
            <div class="col-lg-offset-3 col-lg-6">
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <form action="{{ route('custom.register')}}" method="post" accept-charset="utf-8">
                {{ csrf_field() }}
                    <fieldset>
                        <legend>Register</legend> 
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" name="fname" value="{{old('fname')}}" placeholder="Enter First Name">
                        </div> 
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" name="lname" value="{{old('lname')}}" placeholder="Enter Last Name">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email"  value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
                        </div> 
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>