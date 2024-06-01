@extends('admin.index')
@section('title')
    Banner List
@endsection

@section('adminc')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <a href="/navbar/create" class="btn btn-primary btn-sm"> --}}
                            <h1>Banner</h1>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Stock Return list</li>
                        </ol>
                    </div>
                </div>


                <div>
                    <div class="card card-primary">
                        <div class="card-header bg-warning">
                            <h1 class="text-center">Service List</h1>
                            <a href="{{ route('nav.create') }}" class="btn btn-primary text-left">Add New</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table border="1" width="100%" class="table table-striped">
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Title1</th>
                                    <th>Title2</th>
                                    <th>Content</th>
                                    <th>btn</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($navdata as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('images/' . $d->photo) }}" alt="photo" height="100"></td>
                                        <td>{{ $d->title1 }}</td>
                                        <td>{{ $d->title2 }}</td>
                                        <td>{{ $d->content }}</td>
                                        <td>{{ $d->btn }}</td>
                                        
                                        <td>

                                            <a class="btn btn-primary btn-md" href="{{ route('nav.edit', $d->id) }}">Edit
                                            </a>
                                            <a class="btn btn-info btn-md" href="{{ route('nav.show', $d->id) }}">Show</a>

                                            <form action="{{ route('nav.destroy', $d->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-md"
                                                    onclick="return confirm('Are You Confirm to Delete')">Delete</button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="4">No Product found!</th>
                                    </tr>
                                @endforelse
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

    </div>
@endsection
