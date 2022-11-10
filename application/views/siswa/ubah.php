<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>

  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-8">
      <section class="content">
        <form action="" method="POST">

          <?php echo form_open_multipart('siswa/ubah'); ?>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">NIS</span>
            </div>
            <input type="text" class="form-control" name="nis" id="nis" value="<?= $siswa['nis']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">NISN</span>
            </div>
            <input type="text" class="form-control" name="nisn" id="nisn" value="<?= $siswa['nisn']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Nama Lengkap</span>
            </div>
            <input name="nama_siswa" id="nama_siswa" type="text" class="form-control"
              value="<?= $siswa['nama_siswa']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Nama Panggilan</span>
            </div>
            <input type="text" class="form-control" name="nama_panggilan_siswa" id="nama_panggilan_siswa"
              value="<?= $siswa['nama_panggilan_siswa']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Tempat Lahir</span>
            </div>
            <input type="text" class="form-control" name="tempat_lahir_siswa" id="tempat_lahir_siswa"
              value=" <?= $siswa['tempat_lahir_siswa']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Tanggal Lahir</span>
            </div>
            <input type="date" class="form-control" name="tanggal_lahir_siswa" id="tanggal_lahir_siswa"
              value="<?= $siswa['tanggal_lahir_siswa']; ?>">
          </div>

          <div class="input-group mb-3">
            <select class="custom-select" id="jenis_kelamin_siswa" name="jenis_kelamin_siswa">
              <?php foreach ($jenis_kelamin_siswa as $jk) : ?>
              <?php if ($jk == $siswa['jenis_kelamin_siswa']) :  ?>
              <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
              <?php else :  ?>
              <option value="<?= $jk; ?>"><?= $jk; ?></option>
              <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Nama Ayah</span>
            </div>
            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?= $siswa['nama_ayah']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Nama Ibu</span>
            </div>
            <input type="text" class="form-control" name="nama_ibu" name="nama_ibu" value="<?= $siswa['nama_ibu']; ?>">
          </div>

          <div class="input-group mb-3">

            <select class="custom-select" id="kode_kelas" name="kode_kelas"
              aria-label="Example select with button addon">
              <?php foreach ($nama_kelas as $key) : ?>

              <option value="<?= $key->kode_kelas ?>"><?= $key->nama_kelas ?></option>

              <?php endforeach; ?>


            </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Alamat Lengkap</span>
            </div>
            <textarea class="form-control" name="alamat_siswa"
              id="alamat_siswa"><?= $siswa['alamat_siswa'] ?></textarea>
          </div>

          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" value="<?= $siswa['foto']; ?>">
          </div>
          <a href="<?= base_url('siswa'); ?>" class="btn btn-danger" data-dismiss="modal">Kembali</a>
          <button type="submit" class="btn btn-primary">Simpan</button>

          <?php echo form_close(); ?>


        </form>
      </section>
    </div>

  </div>
  <!-- Content Row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script type="text/javascript">
function eraseText() {
  document.getElementById("nama-lengkap").value = "";
  document.getElementById("nis").value = "";
  document.getElementById("nisn").value = "";
  document.getElementById("nama-panggilan").value = "";
  document.getElementById("tempat-lahir").value = "";
  document.getElementById("tanggal-lahir").value = "";
  document.getElementById("jenis-kelamin").value = "";
  document.getElementById("nama-ayah").value = "";
  document.getElementById("nama-ibu").value = "";
  document.getElementById("kelas").value = "";
  document.getElementById("alamat-lengkap").value = "";
  document.getElementById("foto").value = "";
}
</script>