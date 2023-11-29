<div class="modal fade" id="createProductApi" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Produk Menggunakan API</h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/produk-api" method="post">
                <div class="modal-body">
                    <div class="container">
                        @csrf
                        <div class="form-group-row">
                            <label for="link_api" class="col-form-label">Link API</label>
                            <input type="text" class="form-control" name="link" id="link_api"
                                placeholder="Masukkan link api produk">
                        </div>
                        <div class="form-group-row">
                            <label for="username_api" class="col-form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username_api"
                                placeholder="Masukkan username">
                        </div>
                        <div class="form-group-row">
                            <label for="password_api" class="col-form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password_api"
                                placeholder="Masukkan password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
