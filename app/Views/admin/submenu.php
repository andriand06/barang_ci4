<div class="container mt-3">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New Sub Menu
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
        <h5 class="modal-title" id="exampleModalLabel">New Sub Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/addsubmenu');?>" method="post">
      <div class="modal-body">
          
        <input type="text" placeholder="Menu Id" name="menuid" class="form-control" autocomplete="off">
        <small class="text-danger"><?= \Config\Services::validation()->getError('menuid');?></small>
        <input type="text" placeholder="Title" name="title" class="form-control" autocomplete="off">
        <small class="text-danger"><?= \Config\Services::validation()->getError('title');?></small>
        <input type="text" placeholder="Url" name="url" class="form-control" autocomplete="off">
        <small class="text-danger"><?= \Config\Services::validation()->getError('url');?></small>
        <input type="text" placeholder="Icon" name="icon" class="form-control" autocomplete="off">
        <small class="text-danger"><?= \Config\Services::validation()->getError('icon');?></small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add Sub Menu" name="submit">
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
      <th scope="col">Menu Id</th>
      <th scope="col">Title</th>
      <th scope="col">Url</th>
      <th scope="col">Icon</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1;
       foreach($submenu as $sub) :?>    
    <tr>
      <th scope="row"><?=$i; ?></th>
      <td><?= $sub['menuid'];?></td>
      <td><?= $sub['title'];?></td>
      <td><?= $sub['url'];?></td>
      <td><?= $sub['icon'];?></td>
      <td>
          <a href="<?= base_url('admin/editsubmenu');?>/<?= $sub['id'];?>" class="btn btn-warning">Edit</a>
          <a href="<?= base_url('admin/deletesubmenu');?>/<?= $sub['id'];?>" class="btn btn-danger">Delete</a>
      </td>
     <?php $i++; ?> 
    </tr>
       <?php endforeach;
        ; ?>
  </tbody>
</table>