    <!-- Modal EDIT -->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Gejala</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin/gejala/update', 'gejala') }}">
                        @csrf
                        <div class="form-group">
                            <label for="kode_gejala">Kode Gejala</label>
                            <input type="text" class="form-control" name="kode_gejala" id="kode_gejala" readonly>
                            @error('kode_gejala')
                                <p class="text text-danger">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_gejala">Nama Gejala</label>
                            <input type="text" class="form-control" name="nama_gejala" id="nama_gejala">
                            @error('nama_gejala')
                                <p class="text text-danger">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
