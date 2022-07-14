<html>
    <body>
    <h1>Home page</h1>
    @if ($value = session('user_name'))
    <pre>session={{$value = session('user_name');}}</pre>
    <?php /*
    @foreach($user_name as $user)
        {{$user->name;}} 
        {{$user->password;}}
    @endforeach 
    @if($user_name)
        <h1> {{$user_name}} </h1>
    @endif
    */
    ?>
    @endif
   
    
    
    </body>
</html>