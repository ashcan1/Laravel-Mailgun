<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><strong>Name:</strong>{{ $dataRecevied ['name'] }}</p>
    <p><strong>Email:</strong>{{ $dataRecevied ['email'] }}</p>
<br>
<h2>Message</h2>
{{ $dataRecevied['message']}}
</body>
</html>