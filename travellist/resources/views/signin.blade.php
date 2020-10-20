@extends('layouts.app')

@section('style')

@endsection
@section('privet')
  <form name="reg"  action="log.php" method="POST">
            Имя:&nbsp;<input type="text" name="login"><br>
            Пароль:&nbsp;<input type="password" name="password"><br>
            <input type="submit" name="data" value="Вход">
           </form>
@endsection