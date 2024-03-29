<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <header>
            <div class="d-flex justify-content-center">
                <h1>Trains</h1>
            </div>
            <ul>
                @foreach ($trains as $train)
                <li>{{$train['company']}}
                    <br> parte da:
                    {{$train['departure_station']}}
                </li>
                @endforeach
            </ul>
        </header>
    </div>

</body>

</html>