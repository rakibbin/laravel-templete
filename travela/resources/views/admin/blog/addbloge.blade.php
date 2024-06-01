@extends('admin.index')
@section('title')
    Add Bloge
@endsection

@section('adminc')
    <main>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Bloge</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Bloge</li>
                            </ol>
                        </div>
                    </div>
                    <div>
                        <div class="card card-primary">
                            <div class="card-header bg-warning">
                                <h1 class="text-center">Add Bloge </h1>
                            <a href="{{ route('rkbloge.index') }}" class="btn btn-primary text-left">Back To List</a>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            {!! Form::open(['url' => route('rkbloge.store'), 'files' => true]) !!}
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
                                            {!! Form::label('date', 'date') !!}
                                            {!! Form::text('date', '', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title1') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('title1', 'title1') !!}
                                            {!! Form::text('title1', '', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title1') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('title2', 'title2') !!}
                                            {!! Form::text('title2', '', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title1') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('content', 'content') !!}
                                            {!! Form::text('content', '', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title1') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('btn', 'btn') !!}
                                            {!! Form::text('btn', '', ['class' => 'form-control']) !!}
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
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>
    </main>
@endsection
