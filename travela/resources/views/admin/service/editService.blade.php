@extends('admin.index')
@section('title')
    Update Service
@endsection

@section('adminc')
    <main>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Service</h1>
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
                                <h1 class="text-center">Service Update</h1>
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
                                        @if ($errors->has('title'))
                                            {{ $errors->first('title') }}
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
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>
    </main>
@endsection
