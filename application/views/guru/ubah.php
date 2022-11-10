<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Data Guru</h1>

  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-8">
      <section class="content">
        <form action="" method="POST">

          <?php echo form_open_multipart('guru/ubah'); ?>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">NIK</span>
            </div>
            <input type="text" class="form-control" name="nik" id="nik" value="<?= $guru['nik']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Nama Guru</span>
            </div>
            <input type="text" class="form-control" name="nama_guru" id="nama_guru" value="<?= $guru['nama_guru']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Tempat Lahir</span>
            </div>
            <input name="tempat_lahir_guru" id="tempat_lahir_guru" type="text" class="form-control"
              value="<?= $guru['tempat_lahir_guru']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Tanggal Lahir</span>
            </div>
            <input type="date" class="form-control" name="tanggal_lahir_guru" id="tanggal_lahir_guru"
              value="<?= $guru['tanggal_lahir_guru']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Agama</span>
            </div>
            <input type="text" class="form-control" name="agama_guru" id="agama_guru"
              value="<?= $guru['agama_guru']; ?>">
          </div>

          <div class="input-group mb-3">
            <select class="custom-select" id="jenis_kelamin_guru" name="jenis_kelamin_guru">
              <?php foreach ($jenis_kelamin_guru as $jk) : ?>
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
              <span class="input-group-text">Telepon</span>
            </div>
            <input type="text" class="form-control" name="telepon_guru" id="telepon_guru"
              value="<?= $guru['telepon_guru']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Email</span>
            </div>
            <input type="text" class="form-control" name="email_guru" id="email_guru"
              value="<?= $guru['email_guru']; ?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Alamat</span>
            </div>
            <input type="text" class="form-control" name="alamat_guru" name="alamat_guru"
              value="<?= $guru['alamat_guru']; ?>">
          </div>

          <div class="input-group mb-3">
            <select class="custom-select" id="pendidikan_guru" name="pendidikan_guru">
              <?php foreach ($pendidikan_guru as $pg) : ?>
              <?php if ($pg == $guru['pendidikan_guru']) :  ?>
              <option value="<?= $pg; ?>" selected><?= $pg; ?></option>
              <?php else :  ?>
              <option value="<?= $pg; ?>"><?= $pg; ?></option>
              <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="input-group mb-3">
            <select class="custom-select" id="status_kawin_guru" name="status_kawin_guru">
              <?php foreach ($status_kawin_guru as $pg) : ?>
              <?php if ($pg == $guru['status_kawin_guru']) :  ?>
              <option value="<?= $pg; ?>" selected><?= $pg; ?></option>
              <?php else :  ?>
              <option value="<?= $pg; ?>"><?= $pg; ?></option>
              <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Jabatan</span>
            </div>
            <input type="text" class="form-control" name="jabatan" name="jabatan" value="<?= $guru['jabatan']; ?>">
          </div>

          <div class="input-group mb-3">
            <select class="custom-select" id="status_aktif_guru" name="status_aktif_guru">
              <?php foreach ($status_aktif_guru as $pg) : ?>
              <?php if ($pg == $guru['status_aktif_guru']) :  ?>
              <option value="<?= $pg; ?>" selected><?= $pg; ?></option>
              <?php else :  ?>
              <option value="<?= $pg; ?>"><?= $pg; ?></option>
              <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="foto" class="form-control" value="<?= $guru['foto']; ?>">
          </div>
          <a href="<?= base_url('guru') ?>" class="btn btn-danger" data-dismiss="modal">Kembali</a>
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