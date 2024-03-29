<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                @foreach ($models as $model)
                    <div class="alert alert-danger">
                        <h6>ID : {{ $model->id }} , {{ $model->title }}</h6>
                        <span>{{ $model->created_at->format('H:i , D-m-Y') }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
