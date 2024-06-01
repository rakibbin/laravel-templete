@extends('admin.index')
@section('title')
    Service List
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
                        <div class="container card card-body">
                            <div class="card-header bg-warning">
                                <h1 class="text-center">Service List</h1>
                                <a href="{{ route('ser.create') }}" class="btn btn-primary text-left">Add New</a>
                            </div>
                    
                            <table border="1" width="100%" class="table table-striped">
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Photo</th>
                                    <th style="width: 165px">Action</th>
                                </tr>
                                @forelse ($data as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->title }}</td>
                                        <td>{{ $d->content }}</td>
                                        
                                        <td><img src="{{asset('images/'. $d->photo) }}" alt="photo" height="100" ></td>
                                        <td style="margin:5px">
                                            <div class="row">
                                                <div class="btn btn-display flex">
                                                    <a href="{{ route('ser.show', $d->id) }}" class="btn btn-warning">Show</a>
                                                </div><br>
                                                <div class="btn btn-display flex">
                                                    <a href="{{ route('ser.edit', $d->id) }}"class="btn btn-success">update</a>
                                                </div>
                    
                                                <div class="btn btn-display flex">
                                                    <form action="{{ route('ser.destroy', $d->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" value="Delete" class="btn btn-danger">
                                                    </form>
                                                </div>
                                            </div>
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
