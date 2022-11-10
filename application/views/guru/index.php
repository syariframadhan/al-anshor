<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>


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
            class="fa fa-plus mr-2"></i>Tambah Data Guru</button>
        <hr>


        <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Guru<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
                  <input type="text" class="form-control" placeholder="Cari data guru..." name="keyword">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                  </div>
                </div>
              </form>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="navar-form navbar-right">


              <a href="<?= base_url('guru/pdf'); ?>" type="button" class="btn btn-success">Cetak</a>

            </div>
          </div>




        </div>

        <br>



        <table class="table table hovered">
          <tr>
            <th>No.</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
          <?php
          $no = 1;
          foreach ($guru as $g) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $g['nik']; ?></td>
            <td><?= $g['nama_guru']; ?></td>
            <td><?= $g['telepon_guru']; ?></td>
            <td><?= $g['email_guru']; ?></td>
            <td><?= $g['alamat_guru']; ?></td>
            <td>
              <a href="<?= base_url(); ?>guru/detail/<?= $g['nik']; ?>" type="button" class="btn btn-primary">Detail</a>
              |
              <a href="<?= base_url(); ?>guru/ubah/<?= $g['nik']; ?>" type="button" class="btn btn-secondary">Ubah</a>
              |
              <a onclick="javascript: return confirm('Anda yakin hapus?')"
                href="<?= base_url(); ?>guru/hapus/<?= $g['nik']; ?>" type="button" class="btn btn-danger">Hapus</a>
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
            <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA GURU</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <?php echo form_open_multipart('guru/tambah'); ?>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">NIK</span>
              </div>
              <input type="text" class="form-control" name="nik" id="nik">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Nama Guru</span>
              </div>
              <input type="text" class="form-control" name="nama_guru" id="nama_guru">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Tempat Lahir</span>
              </div>
              <input name="tempat_lahir_guru" id="tempat_lahir_guru" type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Tanggal Lahir</span>
              </div>
              <input type="date" class="form-control" name="tanggal_lahir_guru" id="tanggal_lahir_guru">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Agama</span>
              </div>
              <input type="text" class="form-control" name="agama_guru" id="agama_guru">
            </div>

            <div class="input-group mb-3">
              <select class="custom-select" id="jenis_kelamin_guru" name="jenis_kelamin_guru">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Telepon</span>
              </div>
              <input type="text" class="form-control" name="telepon_guru" id="telepon_guru">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
              </div>
              <input type="text" class="form-control" name="email_guru" id="email_guru">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Alamat</span>
              </div>
              <input type="text" class="form-control" name="alamat_guru" name="alamat_guru">
            </div>

            <div class="input-group mb-3">
              <select class="custom-select" name="pendidikan_guru" id="pendidikan_guru">
                <option selected>Pendidikan</option>
                <option value="SMK">SMK</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <select class="custom-select" name="status_kawin_guru" id="status_kawin_guru">
                <option selected>Status Pernikahan</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Sudah Menikah">Sudah Menikah</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Jabatan</span>
              </div>
              <input type="text" class="form-control" name="jabatan" name="jabatan">
            </div>

            <div class="input-group mb-3">
              <select class="custom-select" name="status_aktif_guru" id="status_aktif_guru">
                <option selected>Status Aktif</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
              </select>
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