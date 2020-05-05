<div class="container mt-3">

<div class="card">
  <h5 class="card-header">Ubah Data Barang</h5>
  
  <div class="card-body">
<form action="<?= base_url('Barang/update/'.$barang['id']);?>" method="post">

  <div class="form-group">
      
  <label for="id">Id</label>
    <input type="hidden" class="form-control" id="id" name="id" autocomplete="off" value="<?= $barang['id'];?>">
    <label for="namabarang">Nama Barang</label>
    <input type="text" class="form-control" id="namabarang" name="namabarang" autocomplete="off" value="<?= $barang['namabarang'];?>">
    <small style="color:red;"><?= \Config\Services::validation()->getError('namabarang')?></small>
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
    <small style="color:red;"><?= \Config\Services::validation()->getError('jumlah')?></small>
  </div>
  <div class="form-group">
    <label for="Harga">Harga</label>
    <input type="text" class="form-control" id="Harga" name="harga" autocomplete="off"value="<?= $barang['harga'];?>">
    <small style="color:red;"><?= \Config\Services::validation()->getError('harga')?></small>
  </div>
  <input type="submit"class="btn btn-primary"value="Ubah Data">

</form>
</div>
</div>
</div>