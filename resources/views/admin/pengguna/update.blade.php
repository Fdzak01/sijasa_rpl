@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pengguna</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pengguna</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pengguna</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST" action="{{ route('pengguna.update', $data->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $data->email }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Role</label>
                                    <select name="role" id="" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                        <option value="pelayanan">Pelayanan</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main>
@endsection
