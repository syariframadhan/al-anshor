<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Data Siswa</h1>

  </div>

  <!-- Content Row -->
  <div class="container"></div>
  <div class="row">




    <div class="col-lg-12">
      <section class="content">


        <div class="col-lg-10">
          <ul class="list-group" style="padding-left: 2px; padding-right: 13px;">

            <li class="list-group-item">
              <a href="<?= base_url() ?>/siswa" type="button" class="btn btn-primary">Kembali</a>
            </li>
            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <img src="<?= base_url(); ?>assets/img/<?php echo $siswa['foto']; ?>" width="120" height="140">
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">NIS</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $siswa['nis']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">NISN</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $siswa['nisn']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Nama</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $siswa['nama_siswa']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Nama Panggilan</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $siswa['nama_panggilan_siswa']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Tempat Tanggal Lahir</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $siswa['tempat_lahir_siswa']; ?> ,
                        <?= format_indo($siswa['tanggal_lahir_siswa']); ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Jenis Kelamin</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $siswa['jenis_kelamin_siswa']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>


            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Nama Ayah</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $siswa['nama_ayah']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Nama Ibu</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $siswa['nama_ibu']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Alamat</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $siswa['alamat_siswa']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>



          </ul>

        </div>




      </section>
    </div>

  </div>
  <!-- Content Row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->