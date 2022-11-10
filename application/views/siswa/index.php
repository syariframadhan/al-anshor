<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>


  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12">
      <section class="content">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
          </ol>
        </nav>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-plus mr-2"></i>Tambah Data Siswa</button>
        <hr>


        <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Siswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php endif; ?>

        <hr>

        <div class="row">

          <div class="col-lg-4">
            <div class="navar-form navbar-right">
              <form action="" method="post">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Cari data siswa..." name="keyword">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                  </div>
                </div>
              </form>

            </div>
          </div>



          <div class="col-lg-4">
            <div class="navar-form navbar-right">

              <a href="<?= base_url('siswa/index'); ?>" type="button" class="btn btn-success">Semua</a>
              <a href="<?= base_url('siswa/kelas1'); ?>" type="button" class="btn btn-success">Kelas 1</a>
              <a href="<?= base_url('siswa/kelas2'); ?>" type="button" class="btn btn-success">Kelas 2</a>
              <a href="<?= base_url('siswa/kelas3'); ?>" type="button" class="btn btn-success">Kelas 3</a>
              <a href="<?= base_url('siswa/pdf'); ?>" type="button" class="btn btn-success">Cetak</a>

            </div>
          </div>


        </div>

        <br>



        <table class="table table hovered">
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
          <?php
          $no = 1;
          foreach ($siswa as $s) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $s['nama_siswa']; ?></td>
            <td><?= $s['nis']; ?></td>
            <td><?= $s['jenis_kelamin_siswa']; ?></td>
            <td><?= $s['alamat_siswa']; ?></td>
            <td>
              <a href="<?= base_url(); ?>siswa/detail/<?= $s['nis']; ?>" type="button"
                class="btn btn-primary">Detail</a> |
              <a href="<?= base_url(); ?>siswa/ubah/<?= $s['nis']; ?>" type="button" class="btn btn-secondary">Ubah</a>
              |
              <a onclick="javascript: return confirm('Anda yakin hapus?')"
                href="<?= base_url(); ?>siswa/hapus/<?= $s['nis']; ?>" type="button" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SISWA</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <?php echo form_open_multipart('siswa/tambah'); ?>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">NIS</span>
              </div>
              <input type="text" class="form-control" name="nis" id="nis">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">NISN</span>
              </div>
              <input type="text" class="form-control" name="nisn" id="nisn">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Nama Lengkap</span>
              </div>
              <input name="nama_siswa" id="nama_siswa" type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Nama Panggilan</span>
              </div>
              <input type="text" class="form-control" name="nama_panggilan_siswa" id="nama_panggilan_siswa">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Tempat Lahir</span>
              </div>
              <input type="text" class="form-control" name="tempat_lahir_siswa" id="tempat_lahir_siswa">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Tanggal Lahir</span>
              </div>
              <input type="date" class="form-control" name="tanggal_lahir_siswa" id="tanggal_lahir_siswa">
            </div>

            <div class="input-group mb-3">
              <select class="custom-select" id="jenis_kelamin_siswa" name="jenis_kelamin_siswa">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Nama Ayah</span>
              </div>
              <input type="text" class="form-control" name="nama_ayah" id="nama_ayah">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Nama Ibu</span>
              </div>
              <input type="text" class="form-control" name="nama_ibu" name="nama_ibu">
            </div>

            <div class="input-group mb-3">
              <select class="custom-select" name="kode_kelas" id="kode_kelas">

                <?php foreach ($nama_kelas as $key) : ?>

                <option value="<?= $key->kode_kelas; ?>"><?= $key->nama_kelas; ?></option>

                <?php endforeach; ?>

              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Alamat Lengkap</span>
              </div>
              <textarea class="form-control" name="alamat_siswa" id="alamat_siswa"></textarea>
            </div>

            <div class="form-group">
              <label>Upload Foto</label>
              <input type="file" name="foto" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

            <?php echo form_close(); ?>

          </div>



        </div>
      </div>
    </div>

  </div>
  <!-- Content Row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->