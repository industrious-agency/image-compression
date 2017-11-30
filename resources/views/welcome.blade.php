<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

    <div class="container">

        <h4>Form Upload</h4>

        <div class="card bg-faded">
            <form class="card-body" action="{{ route('post::media.store') }}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div>
                    <label class="custom-file">
                        <input name="file" type="file" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </label>
                </div>

                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</body>
</html>
