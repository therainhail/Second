@extends('layouts.app')

@section('style')

@endsection
@section('privet')
 <form name="reg"  action="/Controllers/AuthController.php" method="post">
 	@csrf
            Имя:&nbsp;<input type="text" name="login"><br>
            Фамилия:&nbsp;<input type="text" name="login2"><br>
            Mail:&nbsp;<input type="email" name="mail"><br>
            Пароль:&nbsp;<input type="password" name="password"><br>
            <input type="submit" name="data" value="Зарегестрироваться">
        </form>
@endsection