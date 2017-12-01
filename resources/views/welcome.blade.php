<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Upload</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

    <div class="container">

        <h4>Form Upload</h4>

        @include('_partials.flash')

        <div class="card bg-faded">
            <form class="card-body" action="{{ route('post::media.store') }}" method="POST" enctype="multipart/form-data">
                <div>
                    <label class="custom-file">
                        <input name="file" type="file" class="custom-file-input form-control{{ $errors->has('file') ? ' is-invalid' : '' }}">
                        <span class="custom-file-control"></span>
                        @if ($errors->has('file'))
                        <div class="invalid-feedback">
                            {{ $errors->first('file') }}
                        </div>
                        @endif
                    </label>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
            </form>
        </div>

    </div>
</body>
</html>
