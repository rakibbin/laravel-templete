@extends('admin.index')
@section('title')
About List
@endsection

@section('adminc')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <a href="/navbar/create" class="btn btn-primary btn-sm"> --}}
                            <h1>About</h1>
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
                            <h1 class="text-center">About List</h1>
                            <a href="{{ route('abt.create') }}" class="btn btn-primary text-left">Add New</a>
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
                                    <th>Action</th>
                                </tr>
                                @forelse ($data as $t)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('images/' . $t->photo) }}" alt="photo" height="100"></td>
                                        <td>{{ $t->title1 }}</td>
                                        <td>{{ $t->title2 }}</td>
                                        <td>{{ $t->content }}</td>
                                        
                                        <td>
                                            <a class="btn btn-success btn-sm" href="{{ route('abt.edit', $t->id) }}">Edit
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{ route('abt.show', $t->id) }}">Show</a>

                                            <form action="{{ route('abt.destroy', $t->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
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
