<h4 class="mt-2">Data Pegawai Fakultas Vokasi-DIII-Teknologi Informasi-Universitas Brawijaya</h4>
<hr>
<a class="btn btn-success" href="<?= BASE_PATH ?>/pegawai/add"><i class="oi oi-plus"></i> Tambah</a>

<div class="table-responsive mt-3">
<table class="table table-striped table-hover table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Jenis Kelamin</th>
         <th>Tanggal Lahir</th>
         <th>Jabatan</th>
         <th>Keterangan</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $no = 0;
   foreach($data as $r){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><img src="<?= BASE_PATH ?>/public/images/<?= $r['foto'] ?>" width="100"></td>
         <td><?= $r['nama_pegawai'] ?></td>
         <td><?= $r['jenis_kelamin'] ?></td>
         <td><?= $r['tgl_lahir'] ?></td>
         <td><?= $r['nama_jabatan'] ?></td>
         <td><?= $r['keterangan'] ?></td>
         <td>
            <a class="btn btn-sm btn-info" href="<?= BASE_PATH ?>/pegawai/edit/<?= $r['id_pegawai'] ?>"> <i class="oi oi-pencil"></i> Edit </a>
            <a class="btn btn-sm btn-danger" href="<?= BASE_PATH ?>/pegawai/delete/<?= $r['id_pegawai'] ?>/<?= $r['foto'] ?>"> <i class="oi oi-trash"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>