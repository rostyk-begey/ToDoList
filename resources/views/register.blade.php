<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 09.12.18
 * Time: 17:47
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login-register.css') }}">
</head>
<body>
    <div class="wrapper">
        <form class="form-signin" method="POST" action="{{URL::to('/home')}}">
            @csrf
            <h2 class="form-signin-heading">Please login</h2>
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required="" autofocus="" />
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="" />
            <input type="text" class="form-control" name="email" placeholder="Email Address" required="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
            <input type="password" class="form-control" name="password_repeat" placeholder="Repeat password" required=""/>
            <h5>
                Already registered? Login
                <a href="../login">here</a>!
            </h5>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>
</body>
</html>
