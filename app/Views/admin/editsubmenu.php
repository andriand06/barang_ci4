<div class="container mt-3">
<div class="row">
    <div class="col-md-4">

        <form action="<?= base_url('admin/updatesubmenu');?>/<?= $submenu['id'];?>" method="post">
        
        <div class="form-group">
        <input type="text" placeholder="New Menu" name="menuid" class="form-control" value="<?= $submenu ['menuid'];?>" autocomplete="off">
        </div>
        <div class="form-group">
        <input type="text" placeholder="New Menu" name="title" class="form-control" value="<?= $submenu ['title'];?>" autocomplete="off">
        </div>
        <div class="form-group">
        <input type="text" placeholder="New Menu" name="url" class="form-control" value="<?= $submenu ['url'];?>" autocomplete="off">
        </div>
        <div class="form-group">
        <input type="text" placeholder="New Menu" name="icon" class="form-control" value="<?= $submenu ['icon'];?>" autocomplete="off">
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
       
        </form>
    </div>
</div>
</div>