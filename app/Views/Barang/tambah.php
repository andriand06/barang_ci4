<div class="container mt-3">
  <div class="card">
    <h5 class="card-header">Tambah Data Barang</h5>
  <div class="card-body">
  
<form action="" method="post">
  <div class="form-group">
    <label for="namabarang">Nama Barang</label>
    <input type="text" class="form-control" id="namabarang" name="namabarang" autocomplete="off">
    <small style="color:red;"><?= \Config\Services::validation()->getError('namabarang');?></small>
  </div>
  <div class="form-group">
    <label for="satuan">Satuan </label>
    <select class="form-control" id="satuan"name="satuan">
      <option>Ball</option>
      <option>Pak</option>
      <option>Pcs</option>
    </select>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah" autocomplete="off">
    <small style="color:red;"><?= \Config\Services::validation()->getError('jumlah');?></small>
  </div>
  <div class="form-group">
    <label for="Harga">Harga</label>
    <input type="text" class="form-control" id="Harga" name="harga" autocomplete="off">
    <small style="color:red;"><?= \Config\Services::validation()->getError('harga');?></small>
  </div>
  <input type="submit"class="btn btn-primary"value="Tambah Data">

</form>
</div>
</div>
</div>