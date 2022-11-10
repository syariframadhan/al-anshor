<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kelas</h1>


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
            class="fa fa-plus mr-2"></i>Tambah Data Kelas</button>
        <hr>


        <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Kelas<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
                  <input type="text" class="form-control" placeholder="Cari data kelas..." name="keyword">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                  </div>
                </div>
              </form>

            </div>
          </div>




        </div>

        <br>



        <table class="table table hovered">
          <tr>
            <th>No.</th>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th>Kapasitas Kelas</th>
            <th>Wali Kelas</th>
          </tr>
          <?php
          $no = 1;
          foreach ($kelas as $g) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $g['kode_kelas']; ?></td>
            <td><?= $g['nama_kelas']; ?></td>
            <td><?= $g['kapasitas_kelas']; ?></td>
            <td><?= $g['wali_kelas']; ?></td>
            <td>
              <a href="<?= base_url(); ?>kelas/ubah/<?= $g['kode_kelas']; ?>" type="button"
                class="btn btn-secondary">Ubah</a>
              |
              <a onclick="javascript: return confirm('Anda yakin hapus?')"
                href="<?= base_url(); ?>kelas/hapus/<?= $g['kode_kelas']; ?>" type="button"
                class="btn btn-danger">Hapus</a>
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
            <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA KELAS</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <?php echo form_open_multipart('kelas/tambah'); ?>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Kode Kelas</span>
              </div>
              <input type="text" class="form-control" name="kode_kelas" id="kode_kelas">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Nama Kelas</span>
              </div>
              <input type="text" class="form-control" name="nama_kelas" id="nama_kelas">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Kapasitas Kelas</span>
              </div>
              <input name="kapasitas_kelas" id="kapasitas_kelas" type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Wali Kelas</span>
              </div>
              <input name="wali_kelas" id="wali_kelas" type="text" class="form-control">
            </div>


            <a href="<?= base_url('kelas') ?>" class="btn btn-danger" data-dismiss="modal">Kembali</a>
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