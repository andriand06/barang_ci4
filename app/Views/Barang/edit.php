<div class="container mt-3">

<div class="card">
  <h5 class="card-header">Ubah Data Barang</h5>
  
  <div class="card-body">
<form action="<?= base_url('Barang/update');?><?php '/'. $brg['id'];?>" method="post">
<input type="hidden" name="id" value="<?= $brg['id'];?>">
  <div class="form-group">
    <?php foreach($barang as $brg) : ?>
    <label for="namabarang">Nama Barang</label>
    <input type="text" class="form-control" id="namabarang" name="namabarang" autocomplete="off" value="<?= $brg['namabarang'];?>">
  </div>
 


  <div class="form-group">
    <label for="satuan">Satuan </label>
    <select class="form-control" id="satuan"name="satuan" >
    <?php if ($brg['satuan'] == 'Ball') {?>
      <option value= "<?= $brg['satuan'];?>" selected><?= $brg['satuan'];?></option>
      <option>Pak</option>
      <option>Pcs</option>
      <?php } elseif ($brg['satuan'] == 'Pak') { ?> 
      <option>Ball</option>
      <option value= "<?= $brg['satuan'];?>" selected><?= $brg['satuan'];?></option>
      <option>Pcs</option>
     <?php } elseif ($brg['satuan'] == 'Pcs') { ?>
        <option>Ball</option>
        <option>Pak</option>
        <option value= "<?= $brg['satuan'];?>" selected>><?= $brg['satuan'];?></option>
   <?php } ?>
?>
    </select>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah" autocomplete="off" value="<?= $brg['jumlah'];?>">
  </div>
  <div class="form-group">
    <label for="Harga">Harga</label>
    <input type="text" class="form-control" id="Harga" name="harga" autocomplete="off"value="<?= $brg['harga'];?>">
  </div>
  <input type="submit"class="btn btn-primary"value="Ubah Data">
    <?php endforeach; ?>
</form>
</div>
</div>
</div>