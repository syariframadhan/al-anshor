<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Data Guru</h1>

  </div>

  <!-- Content Row -->
  <div class="container"></div>
  <div class="row">




    <div class="col-lg-12">
      <section class="content">


        <div class="col-lg-10">
          <ul class="list-group" style="padding-left: 2px; padding-right: 13px;">

            <li class="list-group-item">
              <a href="<?= base_url() ?>guru" type="button" class="btn btn-primary">Kembali</a>
            </li>
            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <img src="<?= base_url(); ?>assets/img/<?php echo $guru['foto']; ?>" width="120" height="140">
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">NIK</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $guru['nik']; ?></strong>
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
                    <td> <strong><?= $guru['nama_guru']; ?></strong>
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
                    <td> <strong><?= $guru['tempat_lahir_guru']; ?>,
                        <?= format_indo($guru['tanggal_lahir_guru']); ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Agama</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $guru['agama_guru']; ?></strong>
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
                    <td> <strong><?= $guru['jenis_kelamin_guru']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Telepon</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $guru['telepon_guru']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Email</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $guru['email_guru']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Alamat Lengkap</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $guru['alamat_guru']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Pendidikan</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $guru['pendidikan_guru']; ?></strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Status Menikah</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $guru['status_kawin_guru']; ?>
                      </strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Jabatan</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $guru['jabatan']; ?>
                      </strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </li>

            <li class="list-group-item">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top">Status Aktif</td>
                    <td width="2%">:</td>
                    <td> <strong><?= $guru['status_aktif_guru']; ?>
                      </strong>
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