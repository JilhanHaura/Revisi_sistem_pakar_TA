<div class="modal fade" id="ModalPernyataan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('admin/pernyataan/store') }}">
                                @csrf
                                <div class="card-header">
                                    <h4>Tambahkan Data Pernyataan</h4>
                                </div>
                                <div class="card-body">
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
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
