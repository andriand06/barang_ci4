
<div class="container mt-5">
    <div class="row text-center">
      <div class="col-md-12">
        <h1>Halaman Login</h1>
        
      </div>
    </div>
      <div class="row">
          <div class="col-md-8">
          <?php if(session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
            
            <?php echo session()->getFlashdata('success'); ?>
            
            </div>
            <?php endif; ?>
          </div>
          
      </div>
      <div class="row">
        <div class="col-md-8">
        <?php if(session()->getFlashdata('error')): ?>
 
        <div class="alert alert-danger" data-flashdata = "<?= session()->getFlashdata('error');?>">
          <?php echo session()->getFlashdata('error'); ?>
        </div>
          <?php  endif;  ?>
        </div>
      </div>

  <form class="px-4 py-3" method="post" action="">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Minimal 8 Karakter" autocomplete="off"value="<?php set_value('username');?>">
      <small style="color:red;"><?= \Config\Services::validation()->getError('username');?></small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password"placeholder="Minimal 8 Karakter">
      <small style="color:red;"><?= \Config\Services::validation()->getError('password');?></small>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Sign In">
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="<?= base_url('Auth/registration');?>">New around here? Sign up</a>
  <a class="dropdown-item" href="<?= base_url('Forgot');?>">Forgot password?</a>
</div>