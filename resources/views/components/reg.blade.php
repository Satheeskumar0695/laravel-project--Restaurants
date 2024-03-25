<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('user_register')}}" method="POST">
        @csrf
    <div class="container">
        <div class="fromcontrol">
            <label for="">name:</label><br>
            <input type="text" name="name" id="name">
        </div>
        <div class="fromcontrol">
            <label for="">email:</label><br>
            <input type="text" name="email" id="email">
        </div>
        <div class="fromcontrol">
            <label for="">password:</label><br>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">submit</button>
    </div>
</form>
</body>
</html>
