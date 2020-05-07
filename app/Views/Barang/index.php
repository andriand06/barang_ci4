<div class="container">  

</div>
<div class="container mt-3">
  <div class="row">
    <div class="col-md-6">
    <a href="<?= base_url('Barang/tambah');?>" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
</div>

<?php if(session()->getFlashdata('success')): ?>
  <div class="container mt-3">
  <div class="alert alert-success" data-flashdata = "<?= session()->getFlashdata('success');?>">
    <?php echo session()->getFlashdata('success'); ?>
  </div>
  </div>
<?php  endif;  ?>

    <div class="container">
<div class="container mt-3">
  <div class="row">
    <div class="col-md-4">
      <form action="<?= base_url('barang');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="keyword" placeholder="Cari Nama Barang" aria-label="Recipient's username" aria-describedby="basic-addon2" autocomplete="off" autofocus >
          <div class="input-group-append">
          <input class="btn btn-primary" type="submit" name="submit" value="Cari"></input>
          </div>
        </div>
        </form>      
</div>
</div>
</div>
<?php if(empty($barang)) : ?>
  <p style="color:red;" class="container mr-3">Maaf,Data tidak ditemukan.</p>
<?php endif;?>
    
  <div class="row">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Barang</th>
      <th scope="col"></th>
     
    </tr>
  </thead>
  <tbody>
  <?php if($barang) : ?>
  <?php $i=1; foreach($barang as $brg) : ?>
    <tr>
      <th scope="row"><?php echo $i++;?></th>
      <td><a href="<?= base_url('Barang/detail');?><?= '/'. $brg['id'];?>" class="badge badge-primary float-right mr-3">Detail</a>
      <a href="<?= base_url('Barang/hapus');?><?= '/'. $brg['id'];?>" class="badge badge-danger float-right mr-2" id="hapus" onclick="return confirm('Yakin ingin menghapus Data?');">Hapus</a>
      <a href="<?= base_url('Barang/edit');?><?= '/'. $brg['id'];?>" class="badge badge-warning float-right mr-2">Edit</a>
      <?=$brg['namabarang'];?></td>
      
    </tr>
          
    <?php endforeach; ?>
  <?php endif; ?>
  </tbody>  
  
</table>

  
  </div>
    <div class="row float-right">
        <div class="col-md-12">
              <?php// if($pager) : ?>
                <?php //$pagi_path = 'barang/index';?>
                <?php //$pager->setPath($pagi_path); ?>
                <?php //echo  $pager->links() ?>
              <?php //endif;?>      
        </div>
    </div>    
</div>
<?php if(session()->getTempdata('role_id') == '2') : ?>
<script>
var hapus = document.querySelectorAll('.badge.badge-danger.float-right.mr-2')
hapus.forEach(function(e){
  e.parentNode.removeChild(e);
});
var edit = document.querySelectorAll('.badge.badge-warning.float-right.mr-2')
edit.forEach(function(e){
  e.parentNode.removeChild(e);
});

</script>
<?php endif; ?>
