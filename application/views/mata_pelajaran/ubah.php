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

          <?php echo form_open_multipart('mata_pelajaran/ubah'); ?>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Kode Pelajaran</span>
            </div>
            <input type="text" class="form-control" name="kode_pelajaran" id="kode_pelajaran"
              value="<?= $mata_pelajaran['kode_pelajaran']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Nama Pelajaran</span>
            </div>
            <input type="text" class="form-control" name="nama_pelajaran" id="nama_pelajaran"
              value="<?= $mata_pelajaran['nama_pelajaran']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">KKM</span>
            </div>
            <input type="text" class="form-control" name="kkm" id="kkm" value="<?= $mata_pelajaran['kkm']; ?>">
          </div>


          <a href="<?= base_url('mata_pelajaran') ?>" class="btn btn-danger" data-dismiss="modal">Kembali</a>
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