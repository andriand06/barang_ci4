<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
  
            <form>
            <div class="form-group"> 
                <input type="text" class="form-control" id="username"name="username" placeholder="Username" value="<?= session()->getTempdata('username');?>" disabled>
                
              </div>
            
              <div class="form-group"> 
                <input type="password" class="form-control" id="passwordlama" name="passwordbaru" placeholder="Password Baru">
                <small class="form-text text-danger"><?= Config\Services::validation()->getError('passwordbaru');?></small>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="ulangipasswordlama1" name="ulangipasswordbaru"placeholder="Ulangi Password Baru">
                <small class="form-text text-danger"><?= Config\Services::validation()->getError('ulangipasswordbaru');?></small>
              </div>

              <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
