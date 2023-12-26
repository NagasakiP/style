<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
    <form action="{{ route('test.store') }}" method="post">
        @csrf
        <label>
            <span>Имя</span>
            <input type="text" name="name">
            <input type="text" name="last_name">
        </label>
        <button type="submit">Отправить</button>
    </form>
    <ul>
        @foreach($all as $test)
            <ol>{{$test->name}} {{$test->last_name}}</ol>
        @endforeach
    </ul>
    </body>
</html>
