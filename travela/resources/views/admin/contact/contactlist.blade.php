@extends('admin.index')
@section('title')
    Booking List
@endsection

@section('adminc')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <a href="/navbar/create" class="btn btn-primary btn-sm"> --}}
                            <h1>Booking</h1>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Booking list</li>
                        </ol>
                    </div>
                </div>


                <div>
                    <div class="card card-primary">
                        <div class="card-header bg-warning">
                            <h1 class="text-center">Booking List</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table border="1" width="100%" class="table table-striped">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($rkcontact as $c)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $c->name }}</td>
                                        <td>{{ $c->email }}</td>
                                        <td>{{ $c->subject }}</td>
                                        <td>{{ $c->message }}</td>
                                        
                                        <td>

                                            <a class="btn btn-primary btn-md" href="{{ route('rkcontact.edit', $c->id) }}">Edit
                                            </a>
                                            <a class="btn btn-info btn-md" href="{{ route('rkcontact.show', $c->id) }}">Show</a>

                                            <form action="{{ route('rkcontact.destroy', $c->id) }}" method="POST">
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
                            {{ $rkcontact->links() }}
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

    </div>
@endsection
