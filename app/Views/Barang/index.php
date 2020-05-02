<div class="container">
<h1>Data Barang</h1>
<ul class="list-group">
    <?php foreach($barang as $brg) : ?>

     <li class="list-group-item">
      <a href="" class="badge badge-primary float-right">Detail</a>
      <?=$brg['namabarang'];?></li>
    <?php endforeach; ?>
</ul>
</div>