<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach

    </ul>
    @endif


    <form action="/form/submit" method = "post">
        @csrf
        <label for="">name </label>
        <input type="text" name = "name" >
        <br><br>

        <label for="">email </label>
        <input type="text" name = "email" >
        <br><br>

        <label for="">password </label>
        <input type="password" name = "password" required>
        <br><br>

        <input type="submit" value = "Register">
    </form>
</body>
</html>