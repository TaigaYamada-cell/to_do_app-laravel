<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task-edit</title>
</head>
<body>
    <h1>タスク編集</h1>
    <form method="POST" action="/edit">
    @csrf
        <input type="hidden" name="id" value="{{$todo->id}}">
        <input type="text" name="task_name" value="{{$todo->task_name}}">
        <input type="text" name="task_description" value="{{$todo->task_description}}">
        <input type="number" name="time" value="{{$todo->time}}">
        <input type="submit" name="edit" value="更新"> 
    </form>
    <a href="/">戻る</a>
</body>
</html>