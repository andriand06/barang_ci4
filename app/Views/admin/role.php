<div class="container mt-3">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 add New Role
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
        <h5 class="modal-title" id="exampleModalLabel">New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/addrole');?>" method="post">
      <div class="modal-body">
          
        <input type="text" placeholder="New Role" name="role" class="form-control" autocomplete="off">
        <small class="text-danger"><?= \Config\Services::validation()->getError('role');?></small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add Role" name="submit">
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
       foreach($role as $r) :?>    
    <tr>
      <th scope="row"><?=$i; ?></th>
      <td><?= $r['id'];?></td>
      <td><?= $r['role'];?></td>
      <td>
          <a href="<?= base_url('admin/editrole');?>/<?= $r['id'];?>" class="btn btn-warning">Edit</a>
          <a href="<?= base_url('admin/deleterole');?>/<?= $r['id'];?>" class="btn btn-danger">Delete</a>
      </td>
     <?php $i++; ?> 
    </tr>
       <?php endforeach;
        ; ?>
  </tbody>
</table>