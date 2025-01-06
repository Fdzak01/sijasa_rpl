@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Kategori Layanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Kategori Layanan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kategori Layanan</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST" action="{{ route('category.update', $categories->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <label for="category" class="form-label">Kategori</label>
                                    <input type="text" class="form-control" id="category" name="category"
                                        value="{{ $categories->kategori }}">
                                </div>
                                <div class="col-12">
                                    <label for="category" class="form-label">Icon</label>
                                    <input type="file" class="form-control" id="category" name="icon">
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
