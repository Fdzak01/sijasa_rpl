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
                <div class="col-lg-12">
                    <a href="{{ route('service.create') }}" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">Data Layanan</h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Layanan</th>
                                        <th>Thumbnail</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Estimasi</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->service }}</td>
                                            <td><img src="{{ asset('storage/' . $item->thumbnail) }}"
                                                    alt="{{ $item->service }}" width="50"></td>
                                            <td>{{ Str::limit($item->description, 50, '...') }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->estimate }}</td>
                                            <td>{{ $item->kategori_layanans->kategori }}</td>
                                            <td class="d-flex gap-2">
                                                <a href="{{ route('service.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('service.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
