<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi Pemabayaran</h1>


  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12">
      <section class="content">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
          </ol>
        </nav>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-plus mr-2"></i>Tambah Data Pembayaran</button>
        <hr>


        <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Transaksi Pembayaran <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
                  <input type="text" class="form-control" placeholder="Cari data pembayaran..." name="keyword">
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
            <th>ID Transaksi</th>
            <th>NIS</th>
            <th>Tanggal Bayar</th>
            <th>Dari</th>
            <th>Sampai</th>
            <th>Tahun</th>
            <th>Total</th>
            <th>Aksi</th>
          </tr>
          <?php
          $no = 1;
          foreach ($pembayaran as $s) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $s['id_transaksi']; ?></td>
            <td><?= $s['nis']; ?></td>
            <td><?= $s['tgl_bayar']; ?></td>
            <td><?= $s['bulan_bayar_dari']; ?></td>
            <td><?= $s['bulan_bayar_sampai']; ?></td>
            <td><?= $s['tahun_bayar']; ?></td>
            <td><?= $s['total_bayar']; ?></td>
            <td>
              <a onclick="javascript: return confirm('Cetak Nota Pembayaran?')"
                href="<?= base_url(); ?>transaksi/pdf/<?= $s['id_transaksi']; ?>" type="button"
                class="btn btn-primary">Cetak
                Nota</a>
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
            <h4 class="modal-title" id="exampleModalLabel">Transaksi Pembayaran</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <?php echo form_open_multipart('transaksi/tambah'); ?>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">ID Transaksi</span>
              </div>
              <input type="text" class="form-control" name="id_transaksi" id="id_transaksi">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">NIS</span>
              </div>
              <input type="text" class="form-control" name="nis" id="nis">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Tanggal Bayar</span>
              </div>
              <input type="date" class="form-control" name="tgl_bayar" id="tgl_bayar">
              </class>
            </div>

            <div class="input-group mb-3">
              <select class="custom-select" id="bulan_bayar_dari" name="bulan_bayar_dari">
                <option selected>Bayar Dari Bulan</option>
                <?php foreach ($bulan_bayar_dari as $bulan) : ?>
                <option value="<?= $bulan ?>"><?= $bulan ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <select class="custom-select" id="bulan_bayar_sampai" name="bulan_bayar_sampai">
                <option selected>Bayar Sampai Bulan</option>
                <?php foreach ($bulan_bayar_sampai as $bulan) : ?>
                <option value="<?= $bulan ?>"><?= $bulan ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <select class="custom-select" id="tahun_bayar" name="tahun_bayar">
                <option selected>Tahun</option>
                <?php foreach ($tahun_bayar as $tahun) : ?>
                <option value="<?= $tahun ?>"><?= $tahun ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Total</span>
              </div>
              <input type="text" class="form-control" name="total_bayar" id="total_bayar" value="Rp.">
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