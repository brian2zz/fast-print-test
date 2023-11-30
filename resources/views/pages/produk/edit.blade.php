@foreach ($produk as $Produk)
    <div class="modal fade" id="editProduct{{ $Produk->id_produk }}" tabindex="-1" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Produk</h5>
                    <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url("/produk/$Produk->id_produk") }}" method="post">
                    <div class="modal-body">
                        <div class="container">
                            @csrf
                            @method('put')
                            <div class="form-group-row">
                                <label for="produk" class="col-form-label">Nama Produk</label>
                                <input type="text" class="form-control" value="{{ $Produk->nama_produk }}" name="nama_produk" id="produk"
                                    placeholder="Masukkan Nama produk" required>
                            </div>
                            <div class="form-group-row">
                                <label for="kategori_produk" class="col-form-label">Kategori</label>
                                <select type="text" class="form-control" name="kategori" id="kategori_produk"
                                    required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $Kategori)
                                        <option value="{{ $Kategori->id_kategori }}" {{ $Kategori->id_kategori == $Produk->kategori_id ? 'selected' : '' }}>
                                            {{ $Kategori->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group-row">
                                <label for="harga" class="col-form-label">Harga</label>
                                <input type="number" class="form-control" value="{{ $Produk->harga }}" name="harga" id="harga"
                                    placeholder="Masukkan harga" required>
                            </div>
                            <div class="form-group-row">
                                <label for="status" class="col-form-label">Status</label>
                                <select type="text" class="form-control" name="status" id="status" required>
                                    <option value="">Pilih Status</option>
                                    @foreach ($status as $Status)
                                        <option value="{{ $Status->id_status }}" {{ $Status->id_status == $Produk->status_id ? 'selected' : '' }}>
                                            {{ $Status->nama_status }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Edit</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
