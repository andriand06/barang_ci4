<div class="container mt-3">
<div class="row">
    <div class="col-md-4">

        <form action="<?= base_url('admin/updaterole');?>/<?= $role['id'];?>" method="post">
        
        <div class="form-group">
        <input type="text" placeholder="New Role" name="role" class="form-control" value="<?= $role ['role'];?>" autocomplete="off">
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
       
        </form>
    </div>
</div>
</div>