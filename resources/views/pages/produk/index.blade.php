@extends('layout.master')
@section('title', 'Produk')
@section('content')
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Produk</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createProductApi">
                            Tambah Produk Dari API
                        </button>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createProduct">
                            Tambah Produk
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="surat_jalan" class="table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Produk
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kategori
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Harga
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produk as $Produk)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $Produk->nama_produk }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $Produk->kategori->nama_kategori }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $Produk->harga }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $Produk->status->nama_status }}
                                                </p>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#" type="button" class="btn btn-warning mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editProduct{{ $Produk->id_produk }}">
                                                        <i class="align-middle" data-feather="edit"></i> Edit
                                                    </a>
                                                    <form class="deleteForm"
                                                        action="{{ url("/produk/$Produk->id_produk") }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" type="button"
                                                            class="btn btn-danger mx-1 deleteButton">
                                                            <i class="align-middle" data-feather="trash"></i> Hapus
                                                        </a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.produk.create')
    @include('pages.produk.edit')
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.deleteButton');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    if (confirm('Apakah Anda yakin ingin menghapus data?')) {
                        var form = button.closest('form');
                        form.submit();
                    }
                });
            });
        });
    </script>
    @if (session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
@endpush
