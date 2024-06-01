@extends('admin.index')
@section('title')
    Update Package
@endsection

@section('adminc')
    <main>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Package</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Rakib Khan</li>
                            </ol>
                        </div>
                    </div>
                    <div>
                        <div class="container crad card-body">
                            <div class="card-header bg-warning">
                                <h1 class="text-center">Package Update</h1>
                                <a href="{{ route('pack.index') }}" class="btn btn-primary text-left">Back To List</a>
                            </div>
                            {{-- {!! Form::open(['url' => route('pack.store'), 'files' => true]) !!} --}}
                            {!! Form::open(['url' => route('pack.update',$id->id), 'files' => true,'method'=>'PATCH']) !!}
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
                                            {!! Form::text('title1', $id->title1, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title1') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('title2', 'title2') !!}
                                            {!! Form::text('title2', $id->title2, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title1') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('title3', 'title3') !!}
                                            {!! Form::text('title3', $id->title3, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('price', 'price') !!}
                                            {!! Form::text('price', $id->price, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title1') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('title4', 'title4') !!}
                                            {!! Form::text('title4', $id->title4, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('title5', 'title5') !!}
                                            {!! Form::text('title5', $id->title5, ['class' => 'form-control']) !!}
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
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title1') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('title6', 'title6') !!}
                                            {!! Form::text('title6', $id->title6, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <br>
                                    @if ($errors->has('title1'))
                                        {{ $errors->first('title1') }}
                                    @endif

                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('title7', 'title7') !!}
                                            {!! Form::text('title7', $id->title7, ['class' => 'form-control']) !!}
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
