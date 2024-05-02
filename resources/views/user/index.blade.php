@extends('layouts.app')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Datatables</h5>
                
                <!-- Table with stripped rows -->
                <table class="table datatable" id="myTable">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>
                        <b>N</b>ame
                    </th>
                    <th>Email</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Date Created</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                    <a href="{{ route('edit.user', $user->id ) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                    <a href="{{ route('delete.user', $user->id ) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach  
                </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
            </div>

        </div>
    </div>
</section>
@endsection