<html><head>
  <title>Document</title>
</head><body>

  <h3 style="text-align: center;">DAFTAR GURU</h3>

  <table class="table table-warning" border="1">
    <tr>
      <th style="text-align: center">NO</th>
      <th>NIK</th>
      <th>NAMA</th>
      <th>TEMPAT LAHIR</th>
      <th>TANGGAL LAHIR</th>
      <th>JENIS KELAMIN</th>
      <th>ALAMAT</th>
      <th>JABATAN</th>
    </tr>

    <?php
    $no = 1;
    foreach ($guru as $s) : ?>

    <tr>
      <td style="text-align: center"><?php echo $no++ ?></td>
      <td><?php echo $s->nik ?></td>
      <td><?php echo $s->nama_guru ?></td>
      <td><?php echo $s->tempat_lahir_guru ?></td>
      <td><?php echo $s->tanggal_lahir_guru?></td>
      <td><?php echo $s->jenis_kelamin_guru ?></td>
      <td><?php echo $s->alamat_guru?></td>
      <td><?php echo $s->jabatan ?></td>
     

    <?php endforeach; ?>
  </table>


</body></html>