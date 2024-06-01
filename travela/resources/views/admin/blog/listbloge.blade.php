@extends('admin.index')
@section('title')
    Bloge List
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
                                <li class="breadcrumb-item active">Rakib Khan</li>
                            </ol>
                        </div>
                    </div>
                    <div>
                        <div class="container card card-body">
                            <div class="card-header bg-warning">
                                <h1 class="text-center">Bloge List</h1>
                                <a href="{{ route('rkbloge.create') }}" class="btn btn-primary text-left">Add New</a>
                            </div>

                            <table border="1" width="100%" class="table table-striped">
                                <tr>

                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Date</th>
                                    <th>Title1</th>
                                    <th>Title2</th>
                                    <th>Content</th>
                                    <th>BTN</th>
                                    <th style="width: 165px">Action</th>
                                </tr>
                                @forelse ($bldata as $p)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('images/' . $p->photo) }}" alt="photo" height="100">
                                        </td>
                                        <td>{{ $p->date }}</td>
                                        <td>{{ $p->title1 }}</td>
                                        <td>{{ $p->title2 }}</td>
                                        <td>{{ $p->content }}</td>
                                        <td>{{ $p->btn }}</td>



                                        <td>

                                            <a class="btn btn-primary btn-md" href="{{ route('rkbloge.edit', $p->id) }}">Edit
                                            </a>
                                            <a class="btn btn-info btn-md" href="{{ route('rkbloge.show', $p->id) }}">Show</a>

                                            <form action="{{ route('rkbloge.destroy', $p->id) }}" method="POST">
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
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>
    </main>
@endsection
