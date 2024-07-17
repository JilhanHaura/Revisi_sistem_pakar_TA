    <!-- Modal EDIT -->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Pernyataan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin/rule/update', 'rule') }}">
                        @csrf
                        <div class="form-group">
                            <label>Kode Rule</label>
                            <input type="text" class="form-control" name="rule" id="rule" readonly>
                            @error('rule')
                                <p class="text text-danger">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama gejala</label>
                            <select class="form-select" name="gejala_id" id="gejala_id">
                                @foreach ($data_gejala as $gejala)
                                    <option value="{{ $gejala->kode_gejala }}">
                                        {{ $gejala->nama_gejala }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <label>Pernyataan</label>
                            <select class="form-select" name="pernyataan_id" id="pernyataan_id">
                                @foreach ($pernyataan as $rule_pernyataan)
                                    <option value="{{ $rule_pernyataan->kode_pernyataan }}">
                                        {{ $rule_pernyataan->pernyataan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nilai MB</label>
                            <input type="number" step="0.1"class="form-control" name="nilai_mb" id="nilai_mb">
                            @error('nilai_mb')
                                <p class="text text-danger">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nilai MD</label>
                            <input type="number" step="0.1"class="form-control" name="nilai_md" id="nilai_md">
                            @error('nilai_md')
                                <p class="text text-danger">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nilai CF</label>
                            <input type="number" class="form-control" name="nilai_cf" id="nilai_cf" readonly>
                            @error('nilai_cf')
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

    <script>
        // Menambahkan event listener untuk memantau perubahan pada input nilai_md
        document.querySelector('input[name="nilai_md"]').addEventListener('input', function() {
            // Ambil nilai dari input nilai_mb dan nilai_md
            var nilai_mb = parseFloat(document.querySelector('input[name="nilai_mb"]').value);
            var nilai_md = parseFloat(document.querySelector('input[name="nilai_md"]').value);

            // Hitung nilai_cf
            var nilai_cf = nilai_mb - nilai_md;

            // Masukkan nilai_cf ke dalam input nilai_cf
            document.querySelector('input[name="nilai_cf"]').value = nilai_cf.toFixed(
                2); // Memperbaiki nilai_cf menjadi dua angka di belakang koma
        });
    </script>
