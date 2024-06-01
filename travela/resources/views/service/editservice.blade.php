<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<main>
    <div class="container crad card-body">
        <div class="card-header bg-warning">
            <h1 class="text-center">Add New Service</h1>
            <a href="{{ route('ser.index') }}" class="btn btn-primary text-left">Back To List</a>
        </div>
        {{-- {!! Form::open(['url' => route('ser.store'), 'files' => true]) !!} --}}
        {!! Form::open(['url' => route('ser.update',$id->id), 'files' => true,'method'=>'PATCH']) !!}
        <div class="card-body">

            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('title', 'title') !!}
                            {!! Form::text('title', $id->title, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <br>
                    @if ($errors->has('title1'))
                        {{ $errors->first('title1') }}
                    @endif

                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('content', 'content') !!}
                            {!! Form::text('content', $id->content, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <br>
                    @if ($errors->has('title'))
                        {{ $errors->first('title') }}
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        {!! Form::label('photo', 'Upload Photo') !!}
                        {!! Form::file('photo', ['class' => 'form-control']) !!}
                    </div>
                </div>
                <br>
                @if ($errors->has('title'))
                    {{ $errors->first('title') }}
                @endif

                <br><br><br>
                <div class="card-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</main>
