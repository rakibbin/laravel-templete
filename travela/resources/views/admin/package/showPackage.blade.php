@extends('admin.index')
@section('title')
    Package Details
@endsection

@section('adminc')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Rakib Khan</li>
                        </ol>
                    </div>
                </div>


                <div>
                    <div class="card card-primary">
                        <div class="card-header bg-warning">
                            <h1 class="text-center">Package Details</h1>
                            <a href="{{ route('pack.index') }}" class="btn btn-primary text-left">Back To List</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card card-body">

                            <h2>Photo: <img src="{{ asset('images/' . $packdata->photo) }}" alt="title" height="100"></h2>
                            <h1>Title1: {{ $packdata->title1 }}</h1>
                            <h1>Title2: {{ $packdata->title2 }}</h1>
                            <h1>Title3: {{ $packdata->title3 }}</h1>
                            <h1>Price: {{ $packdata->price }}</h1>
                            <h1>Title4: {{ $packdata->title4 }}</h1>
                            <h1>Title5: {{ $packdata->title5 }}</h1>
                            <h1>Content: {{ $packdata->content }}</h1>
                            <h1>Title6: {{ $packdata->title6 }}</h1>
                            <h1>Title7: {{ $packdata->title7 }}</h1>
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

    </div>
@endsection
