<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<form method="post" action="{{route('login.check')}}" >
    @csrf
    <input type="text" name="email" placeholder="username" style="margin: 10px"/>
    <br>
    <input type="password" name="password" placeholder="password" style="margin: 10px"/>
    <br>
    <button type="submit" style="margin-left: 10px; margin-top: 10px">Login</button>
    <button><a href="/registerform" style=" text-decoration: none;">Register</a></button>
</form>
</body>
</html>
