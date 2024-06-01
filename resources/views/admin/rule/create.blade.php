<div class="modal fade" id="ModalRule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('admin/rule/store') }}">
                                @csrf
                                <div class="card-header">
                                    <h4>Tambahkan Data Rule</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Kode Rule</label>
                                        <input type="text" class="form-control" name="rule">
                                        @error('rule')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama gejala</label>
                                        <select class="form-select" name="gejala_id">
                                            @foreach ($data_gejala as $gejala)
                                                <option value="{{ $gejala->kode_gejala }}">
                                                    {{ $gejala->nama_gejala }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Pernyataan</label>
                                        <select class="form-select" name="pernyataan_id">
                                            @foreach ($pernyataan as $rule_pernyataan)
                                                <option value="{{ $rule_pernyataan->kode_pernyataan }}">
                                                    {{ $rule_pernyataan->pernyataan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai MB</label>
                                        <input type="number" step="0.1"class="form-control" name="nilai_mb">
                                        @error('nilai_mb')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai MD</label>
                                        <input type="number" step="0.1"class="form-control" name="nilai_md">
                                        @error('nilai_md')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai CF</label>
                                        <input type="number" class="form-control" name="nilai_cf" readonly>
                                        @error('nilai_cf')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
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
