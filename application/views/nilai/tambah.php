<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Input Data Nilai</h1>

  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-8">
      <section class="content">

        <?php echo form_open_multipart('nilai/tambah'); ?>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">ID</span>
          </div>
          <input type="hidden" class="form-control" name="id_nilai" id="id_nilai" value="">
        </div>

        <div class="input-group mb-3">

          <select class="custom-select" id="kode_kelas" name="kode_kelas" aria-label="Example select with button addon">
            <?php foreach ($nama_kelas as $key) : ?>

            <option value="<?= $key->kode_kelas ?>"><?= $key->nama_kelas ?></option>

            <?php endforeach; ?>


          </select>
        </div>

        <div class="input-group mb-3">

          <select class="custom-select" id="nis" name="nis" aria-label="Example select with button addon">
            <?php foreach ($nama_siswa as $key) : ?>

            <option value="<?= $key->nis ?>"><?= $key->nama_siswa ?></option>

            <?php endforeach; ?>


          </select>
        </div>

        <div class="input-group mb-3">

          <select class="custom-select" id="nik" name="nik" aria-label="Example select with button addon">
            <?php foreach ($nama_guru as $key) : ?>

            <option value="<?= $key->nik ?>"><?= $key->nama_guru ?></option>

            <?php endforeach; ?>


          </select>
        </div>

        <div class="input-group mb-3">

          <select class="custom-select" id="kode_pelajaran" name="kode_pelajaran"
            aria-label="Example select with button addon">
            <?php foreach ($nama_pelajaran as $key) : ?>

            <option value="<?= $key->kode_pelajaran ?>"><?= $key->nama_pelajaran ?></option>

            <?php endforeach; ?>


          </select>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Semester</span>
          </div>
          <input type="text" class="form-control" name="semester" id="semester" value="">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Nilai UTS</span>
          </div>
          <input type="text" class="form-control" name="nilai_uts" id="nilai_uts" value="">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Nilai UAS</span>
          </div>
          <input type="text" class="form-control" name="nilai_uas" id="nilai_uas" value="">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Nilai TUGAS</span>
          </div>
          <input type="text" class="form-control" name="nilai_tugas" id="nilai_tugas" value="">
        </div>


        <a href="<?= base_url('siswa'); ?>" class="btn btn-danger" data-dismiss="modal">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>


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