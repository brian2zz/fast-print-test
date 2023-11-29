@extends('layout.master')
@section('title', 'Kategori')
@section('content')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Kategori</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="surat_jalan" class="table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Kategori
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Kategori 1</p>
                                    </td>
                                    <td>
                                        <a href="/manifest/detail" type="button" class="btn btn-warning mx-1">
                                            <i class="align-middle" data-feather="edit"></i> Edit
                                        </a>
                                        <a href="" type="button" class="btn btn-danger mx-1">
                                            <i class="align-middle" data-feather="trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection