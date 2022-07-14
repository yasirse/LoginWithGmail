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
  
  <form action="{{url('/')}}/login" method="post">
    @csrf
    @if($password=='no')
    <div class="alert alert-danger" role="alert">Your Email or Password does not match.</div>
    @endif
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
   
    <button type="submit" class="btn btn-default">Login</button>
  </form>
</div>

</body>
</html>
