<div class="container mt-3">
<div class="card" style="width: 18rem;">
<ul class="list-group list-group-flush">
    <?php foreach ($barang as $brg ) : ?>

    
    </ul>
  <div class="card-header">
  <?= $brg['namabarang'];?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $brg['satuan'];?></li>
    <li class="list-group-item"><?= $brg['jumlah'];?></li>
    <li class="list-group-item"><?= $brg['harga'];?></li>
  </ul>
  <?php endforeach;?>
</div>