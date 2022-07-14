<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  
  <form action="{{url('/')}}/register" method="post">
    @csrf
    <div class="form-group">
      <span>
      @if($register_status==1)
      <div class="alert alert-success" role="alert">
        You are successfully Registered.
      </div>
      @endif
      </span>
      @error('name')
      <div class="alert alert-danger" role="alert">{{ $message }}</div>
      @enderror
      
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      @error('email')
      <div class="alert alert-danger" role="alert">{{ $message }}</div>
      @enderror
      
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      @error('password')
      <div  class="alert alert-danger" role="alert">{{ $message }}</div>
      @enderror
      
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
   
    <button type="submit" class="btn btn-default">Register</button>
  </form>
</div>

</body>
</html>
