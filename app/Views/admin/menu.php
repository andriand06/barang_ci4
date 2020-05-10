<div class="container mt-3">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New Menu
</button>
<?php if(session()->getFlashdata('success')) : ?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success">
            <?= session()->getFlashdata('success');?>
        </div>
    </div>
</div>
<?php endif;?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/addmenu');?>" method="post">
      <div class="modal-body">
          
        <input type="text" placeholder="New Menu" name="menu" class="form-control" autocomplete="off">
        <small class="text-danger"><?= \Config\Services::validation()->getError('menu');?></small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add Menu" name="submit">
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Menu</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1;
       foreach($menu as $m) :?>    
    <tr>
      <th scope="row"><?=$i; ?></th>
      <td><?= $m['menu'];?></td>
      <td>
          <a href="<?= base_url('admin/editmenu');?>/<?= $m['id'];?>" class="btn btn-warning">Edit</a>
          <a href="<?= base_url('admin/deletemenu');?>/<?= $m['id'];?>" class="btn btn-danger">Delete</a>
      </td>
     <?php $i++; ?> 
    </tr>
       <?php endforeach;
        ; ?>
  </tbody>
</table>