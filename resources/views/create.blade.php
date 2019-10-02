<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <h1>Form Check</h1>
    @if(count($errors)>0)
        <div class="alert alert-dander">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-inline" method="post" {{route('store')}}>
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label class="sr-only">Number Only</label>
            <input type="text" class="form-control" placeholder="Number" name="number"/>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Check</button>
    </form>
</div>
</body>
</html>
