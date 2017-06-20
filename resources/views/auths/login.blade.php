@extends('master')

@section('content')
<h1>Login</h1>   
 <form action="" method="post">
            {{csrf_field()}}
            <input type="email" name="email" class="form-control" placeholder="Email" ><br>
            <input type="password"  name="password" class="form-control" placeholder="password" ><br>
          
                <input  class="btn btn-primary" type="submit" value="Login">
                <input  class="btn btn-danger" type="reset" value="Cancal">
       
                
        </form>
@endsection
