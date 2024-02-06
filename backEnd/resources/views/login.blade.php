<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action={{ route('login') }}>

    @csrf
    @if (session()->has('tasjil'))
        <h1> {{session('tasjil')}} </h1>
    @endif
    <table>
        <tr>
            <td><label for="login"></label>Login :</td>
            <td><input name="login" id="login" type="text"></td>
        <tr>
        <tr>
            <td><label for="password"></label>password :</td>
            <td><input name="password" id="password" type="text"></td>
        <tr>
        <tr>
            <td><input  type="submit" value="connecter"></td>
        <tr>
    </table>
</form>

</body>
</html>
