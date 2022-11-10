<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard Data Nilai Siswa</h1>





  </div>



  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <?php foreach ($mata_pelajaran as $mp) : ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                <h5>
                  <?= $mp['nama_pelajaran']; ?></h5>
              </div>
              <a href="<?= base_url(); ?>nilai/daftar_nilai_parameter/<?= $mp['kode_pelajaran']; ?>"
                class="btn btn-success">Lihat
                Nilai</a>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>




  </div>

  <!-- Content Row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->