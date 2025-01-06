@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pelayanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pelayanan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pelayanan</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST" action="{{ route('service.update', $service->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <label for="category" class="form-label">Layanan</label>
                                    <input type="text" class="form-control" id="category" name="name"
                                        value="{{ $service->service }}">
                                </div>
                                <div class="col-12">
                                    <label for="category" class="form-label">Thumbnail</label>
                                    <input type="file" class="form-control" id="category" name="thumbnail">
                                </div>
                                <div class="col-12">
                                    <label for="category" class="form-label">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $service->description }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label for="category" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="category" name="price"
                                        value="{{ $service->price }}">
                                </div>
                                <div class="col-12">
                                    <label for="category" class="form-label">Estimasi</label>
                                    <input type="text" class="form-control" id="category" name="estimate"
                                        value="{{ $service->estimate }}">
                                </div>
                                <div class="col-12">
                                    <label for="category" class="form-label">Kategori</label>
                                    <select class="form-select" aria-label="Default select example" name="category">
                                        <option selected>Open this select menu</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $service->kategori_layanans_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->kategori }}</option>
                                        @endforeach
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
