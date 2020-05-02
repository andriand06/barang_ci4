<div class="container">
<h1>Data Barang</h1>
<ul class="list-group">
<div class="container">
  <div class="row">
    <div class="col-md-6">
    <a href="<?= base_url('Barang/tambah');?>" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
</div>
<?php if(session()->getFlashdata('success')): ?>
  <div class="alert alert-success mt-3">
    <?= session()->getFlashdata('success'); ?>
  </div>
<?php  endif;  ?>

<div class="container mt-3">

    <?php foreach($barang as $brg) : ?>

     <li class="list-group-item">
      <a href="<?= base_url('Barang/detail');?><?= '/'. $brg['id'];?>" class="badge badge-primary float-right mr-3">Detail</a>
      <a href="<?= base_url('Barang/hapus');?><?= '/'. $brg['id'];?>" class="badge badge-danger float-right mr-2" onclick="return confirm('Yakin ingin menghapus Data?');">Hapus</a>
      <a href="<?= base_url('Barang/edit');?><?= '/'. $brg['id'];?>" class="badge badge-warning float-right mr-2">Edit</a>
      <?=$brg['namabarang'];?></li>
    <?php endforeach; ?>
</ul>
</div>
</div>