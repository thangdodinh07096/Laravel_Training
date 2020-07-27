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
    <form action="register" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" style="margin: 10px">
        <br>
        <input type="text" name="email" placeholder="Enter your username/email" style="margin: 10px"/>
        <br>
        <input type="password" name="password" placeholder="Enter your password" style="margin: 10px"/>
        <br>
        <button type="submit" style="margin-left: 10px; margin-top: 10px">Register</button>
        <button><a href="/login" style=" text-decoration: none;">Login</a></button>
    </form>
</body>
</html>
