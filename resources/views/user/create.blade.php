@extends('layouts.app')

@section('content')
<section class="section">
    <div class="row">
    <div class="col-lg-12">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create User</h5>

            <!-- General Form Elements -->
            <form method="post" action="{{ route('store.user') }}" enctype="multipart/form-data">
                @method('POST')
            @csrf
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                <input type="text" name="name" class="form-control">
                @error('name')
                    <span class="badge border-danger border-1 text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" name="email" class="form-control">
                @error('email')
                    <span class="badge border-danger border-1 text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" name="password" class="form-control">
                @error('password')
                    <span class="badge border-danger border-1 text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            </form><!-- End General Form Elements -->

        </div>
        </div>

    </div>
    </div>
</section>
@endsection