<!-- Modal CREATE -->
<div class="modal fade" id="ModalPernyataan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Pernyataan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin/pernyataan/store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Kode Pernyataan</label>
                        <input type="text" class="form-control" name="kode_pernyataan">
                        @error('kode_pernyataan')
                            <p class="text text-danger">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Pernyataan</label>
                        <input type="text" class="form-control" name="pernyataan">
                        @error('pernyataan')
                            <p class="text text-danger">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
