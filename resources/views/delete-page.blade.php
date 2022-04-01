<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
    <h1>タスク削除</h1>
    <p>タイトル：{{$todo->task_name}}</p>
    <p>説明：{{$todo->task_description}}</p>
    <p>かかる時間：{{$todo->time}}</p>
    <form action="/delete" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$todo->id}}">
        <input type="submit" name="delete" value="削除">
    </form>
</body>
</html>