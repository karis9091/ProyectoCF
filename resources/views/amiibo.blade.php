<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>

<body>

    <table>
        <thead>
            <th>character</th>
            <th>image</th>
            <th>gameSeries</th>
        </thead>
        <tbody>
            @foreach($amiibos as $amiibos)
            <tr>
                <td>{{$amiibos['character']}}</td>
                <td>
                    <img src="{{$amiibos['image']}}" width="100px">
                    </td>
                <td>{{$amiibos['gameSeries']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
