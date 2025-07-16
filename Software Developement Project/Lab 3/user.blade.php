<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> User Data</h1>
    <h2> User ID: {{$id}} </h2>
    @if ($name == null)
        <h2> No user found </h2>
    @else
         <h2> User Name: {{$name}}</h2>
    @endif


    

   
</body>
</html>