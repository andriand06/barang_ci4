<div class="container mt-3">

<div class="card">
  <h5 class="card-header">Ubah Data Barang</h5>
  
  <div class="card-body">
<form action="<?= base_url('Barang/update/'.$barang['id']);?>" method="post">

  <div class="form-group">
      
    <label for="namabarang">Nama Barang</label>
    <input type="text" class="form-control" id="namabarang" name="namabarang" autocomplete="off" value="<?= $barang['namabarang'];?>">
  </div>
 


  <div class="form-group">
    <label for="satuan">Satuan </label>
    <select class="form-control" id="satuan"name="satuan" >
    <?php if ($barang['satuan'] == 'Ball') {?>
      <option value= "<?= $barang['satuan'];?>" selected><?= $barang['satuan'];?></option>
      <option>Pak</option>
      <option>Pcs</option>
      <?php } elseif ($barang['satuan'] == 'Pak') { ?> 
      <option>Ball</option>
      <option value= "<?= $barang['satuan'];?>" selected><?= $barang['satuan'];?></option>
      <option>Pcs</option>
     <?php } elseif ($barang['satuan'] == 'Pcs') { ?>
        <option>Ball</option>
        <option>Pak</option>
        <option value= "<?= $barang['satuan'];?>" selected>><?= $barang['satuan'];?></option>
   <?php } ?>
?>
    </select>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah" autocomplete="off" value="<?= $barang['jumlah'];?>">
  </div>
  <div class="form-group">
    <label for="Harga">Harga</label>
    <input type="text" class="form-control" id="Harga" name="harga" autocomplete="off"value="<?= $barang['harga'];?>">
  </div>
  <input type="submit"class="btn btn-primary"value="Ubah Data">

</form>
</div>
</div>
</div>