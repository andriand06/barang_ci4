
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
  <form class="px-4 py-3">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="email" class="form-control" id="username" placeholder="Minimal 8 Karakter" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Minimal 8 Karakter">
    </div>
    <div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="<?= base_url('Registration');?>">New around here? Sign up</a>
  <a class="dropdown-item" href="<?= base_url('Forgot');?>">Forgot password?</a>
</div>