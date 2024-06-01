@extends('admin.index')
@section('title')
    Package List
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
                        <div class="container card card-body">
                            <div class="card-header bg-warning">
                                <h1 class="text-center">Package List</h1>
                                <a href="{{ route('pack.create') }}" class="btn btn-primary text-left">Add New</a>
                            </div>

                            <table border="1" width="100%" class="table table-striped">
                                <tr>

                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Title1</th>
                                    <th>Title2</th>
                                    <th>Title3</th>
                                    <th>Price</th>
                                    <th>Title4</th>
                                    <th>Title5</th>
                                    <th>Content</th>
                                    <th>Title6</th>
                                    <th>Title7</th>
                                    <th style="width: 165px">Action</th>
                                </tr>
                                @forelse ($packdata as $p)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('images/' . $p->photo) }}" alt="photo" height="100">
                                        </td>
                                        <td>{{ $p->title1 }}</td>
                                        <td>{{ $p->title2 }}</td>
                                        <td>{{ $p->title3 }}</td>
                                        <td>{{ $p->price }}</td>
                                        <td>{{ $p->title4 }}</td>
                                        <td>{{ $p->title5 }}</td>
                                        <td>{{ $p->content }}</td>
                                        <td>{{ $p->title6 }}</td>
                                        <td>{{ $p->title7 }}</td>



                                        <td>

                                            <a class="btn btn-primary btn-md" href="{{ route('pack.edit', $p->id) }}">Edit
                                            </a>
                                            <a class="btn btn-info btn-md" href="{{ route('pack.show', $p->id) }}">Show</a>

                                            <form action="{{ route('pack.destroy', $p->id) }}" method="POST">
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
