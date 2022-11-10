<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kelas</h1>

  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-8">
      <section class="content">
        <form action="" method="POST">

          <?php echo form_open_multipart('kelas/ubah'); ?>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Kode Kelas</span>
            </div>
            <input type="text" class="form-control" name="kode_kelas" id="kode_kelas"
              value="<?= $kelas['kode_kelas']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Nama Kelas</span>
            </div>
            <input type="text" class="form-control" name="nama_kelas" id="nama_kelas"
              value="<?= $kelas['nama_kelas']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Kapasitas Kelas</span>
            </div>
            <input name="kapasitas_kelas" id="kapasitas_kelas" type="text" class="form-control"
              value="<?= $kelas['kapasitas_kelas']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Wali Kelas</span>
            </div>
            <input name="wali_kelas" id="wali_kelas" type="text" class="form-control"
              value="<?= $kelas['wali_kelas']; ?>">
          </div>


          <a href="<?= base_url('kelas') ?>" class="btn btn-danger" data-dismiss="modal">Kembali</a>
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