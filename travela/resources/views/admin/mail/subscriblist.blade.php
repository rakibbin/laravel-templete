@extends('admin.index')
@section('title')
    Subscribe List
@endsection

@section('adminc')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <a href="/navbar/create" class="btn btn-primary btn-sm"> --}}
                            <h1>Subscribe</h1>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Subscribe list</li>
                        </ol>
                    </div>
                </div>


                <div>
                    <div class="card card-primary">
                        <div class="card-header bg-warning">
                            <h1 class="text-center">Subscribe List</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table border="1" width="100%" class="table table-striped">
                                <tr>
                                    <th>SL</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($email as $e)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $e->email }}</td>
                                        
                                        <td>

                                            <a class="btn btn-primary btn-md" href="{{ route('mail.edit', $e->id) }}">Edit
                                            </a>
                                            <a class="btn btn-info btn-md" href="{{ route('mail.show', $e->id) }}">Show</a>

                                            <form action="{{ route('mail.destroy', $e->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-md"
                                                    onclick="return confirm('Are You Confirm to Delete')">Delete</button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="4">No Data found!</th>
                                    </tr>
                                @endforelse
                            </table><br>
                            {{ $email->links() }}
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

    </div>
@endsection
