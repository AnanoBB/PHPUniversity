<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
        
    </style>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>surname</th>
            <th>address</th>
            <th>bio</th>
            <th>date</th>
        </tr>
        <tr>
            @foreach ($newdata as $data)
                
                <td>{{$data}}</td>
            @endforeach
        </tr>
    </table>
</body>
</html>