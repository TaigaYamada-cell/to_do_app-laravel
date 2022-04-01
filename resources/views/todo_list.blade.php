<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo-list</title>
</head>
<body>
    <h1>ToDO一覧</h1>
    <a href="/create-page">タスクを新規作成</a>
    @foreach($todos as $todo)
    <hr>
    <p>タイトル：{{ $todo->task_name }}</p>
    <p>説明：{{ $todo->task_description }}</p>
    <p>必要時間：{{ $todo->time }}</p>
    <a href="/edit-page/{{$todo->id}}">タスク編集</a>
    <a href="/delete-page/{{$todo->id}}">タスク削除</a>
    <hr>
    @endforeach
</body>
</html>