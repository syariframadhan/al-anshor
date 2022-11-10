<html><head>
  <title>Document</title>
</head><body>

  <h3 style="text-align: center;">DAFTAR SISWA</h3>

  <table class="table table-warning" border="2">
    <tr>
      <th style="text-align: center">NO</th>
      <th>NIS</th>
      <th>NAMA</th>
      <th>TEMPAT LAHIR</th>
      <th>TANGGAL LAHIR</th>
      <th>ALAMAT</th>
    </tr>

    <?php
    $no = 1;
    foreach ($siswa as $s) : ?>

    <tr>
      <td style="text-align: center"><?php echo $no++ ?></td>
      <td><?php echo $s->nis ?></td>
      <td><?php echo $s->nama_siswa ?></td>
      <td><?php echo $s->tempat_lahir_siswa ?></td>
      <td><?php echo $s->tanggal_lahir_siswa ?></td>
      <td><?php echo $s->alamat_siswa ?></td>
    </tr>

    <?php endforeach; ?>
  </table>


</body></html>