<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="container crad card-body">
        <div class="card-header bg-warning">
            <h1 class="text-center">Update Banner</h1>
            <a href="{{ route('nav.index') }}" class="btn btn-primary text-left">Back To List</a>
        </div>
        {!! Form::open(['url' => route('nav.update',$id->id), 'files' => true,'method'=>'PATCH']) !!}
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        {!! Form::label('photo', 'Upload Photo') !!}
                        {!! Form::file('photo', ['class' => 'form-control']) !!}
                    </div>
                </div>
                <br>
                @if ($errors->has('title1'))
                {{ $errors->first('title1') }}
                @endif

                <div class="col-6">
                    <div class="form-group">
                        {!! Form::label('title1', 'title1') !!}
                        {!! Form::text('title1',$id->title1, ['class' => 'form-control']) !!}
                    </div>id
                </div>
                <br>
                @if ($errors->has('title1'))
                {{ $errors->first('title1') }}
                @endif

                <div class="col-6">
                    <div class="form-group">
                        {!! Form::label('title2', 'title2') !!}
                        {!! Form::text('title2',$id->title2, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <br>
                @if ($errors->has('title1'))
                {{ $errors->first('title1') }}
                @endif

                <div class="col-6">
                    <div class="form-group">
                        {!! Form::label('content', 'content') !!}
                        {!! Form::text('content',$id->content, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <br>
                @if ($errors->has('title1'))
                {{ $errors->first('title1') }}
                @endif

                <div class="col-6">
                    <div class="form-group">
                        {!! Form::label('btn', 'btn') !!}
                        {!! Form::text('btn', $id->btn, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <br>
                @if ($errors->has('title1'))
                {{ $errors->first('title1') }}
                @endif


                <br><br><br>
                <div class="card-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>