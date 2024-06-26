<div class="modal fade" id="addPatient" tabindex="-1" aria-labelledby="modalTambahPasienLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahPasienLabel">Tambah Data Pasien</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <form id="formTambahPasien">
          <div class="mb-3">
            <label for="namaPasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="namaPasien" name="namaPasien" required>
          </div>
          <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea class="form-control" id="keluhan" name="keluhan"  required></textarea>
          </div>
          <div class="mb-3">
            <label for="diagnosa" class="form-label">Diagnosa</label>
            <textarea class="form-control" id="diagnosa" name="diagnosa"  required></textarea>
          </div>
          <div class="mb-3">
            <label for="tindakan" class="form-label">Tindakan</label>
            <textarea class="form-control" id="tindakan" name="tindakan"  required></textarea>
          </div>
          <div class="mb-3">
            <label for="obat" class="form-label">Obat-obatan</label>
            <input class="form-control" id="obat" name="obat" required></input>
          </div>
          <div class="mb-3">
            <label for="selectDokter" class="form-label">Dokter</label>
            <select class="form-select" id="selectDokter" name="selectDokter" >
              <option selected>--   pilih  --</option>
              <!-- Opsi akan diisi secara dinamis menggunakan JavaScript -->
            </select>
          </div>
          <div class="mb-3">
            <label for="spesialisasi" class="form-label">Spesialisasi</label>
            <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" readonly>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>