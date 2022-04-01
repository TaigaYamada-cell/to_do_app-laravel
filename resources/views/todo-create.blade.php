<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todoの作成</title>
</head>
<body>
    <h1>タスクの新規作成</h1>
<div>

    <form method="POST" action="/create" >
        @csrf
        <p>
            タイトル：<input type="text" name="task_name">
        </p>
        <p>
            説明：<input type="text" name="task_description">
        </p>
        <p>
            かかる時間：<input type="number" name="time">
        </p>
        <input type="submit" name="create" value="送信">
    </form>
</div>
    <a href="/">戻る</a>
</body>
</html>