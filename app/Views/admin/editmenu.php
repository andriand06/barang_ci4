<div class="container mt-3">
<div class="row">
    <div class="col-md-4">

        <form action="<?= base_url('admin/updatemenu');?>/<?= $menu['id'];?>" method="post">
        
        <div class="form-group">
        <input type="text" placeholder="New Menu" name="menu" class="form-control" value="<?= $menu ['menu'];?>" autocomplete="off">
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
       
        </form>
    </div>
</div>
</div>