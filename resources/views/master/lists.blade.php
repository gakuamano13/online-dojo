<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>内部結合・外部結合のテスト</h3>
<p style="color: tomato;">※INNER JOIN</p>
@foreach($employees as $employee)
  {{$employee->dept_name." ".$employee->name}}<br>
@endforeach

</body>
</html>