<div class="container">
<?php if(session()->getFlashdata('success')): ?>
  <div class="row">
  <div class="col-md-4">
  <div class="alert alert-success" data-flashdata = "<?= session()->getFlashdata('success');?>">
    <?php echo session()->getFlashdata('success'); ?>
    </div>
  </div>
  </div>
<?php  endif;  ?>
    <div class="card" style="width: 18rem;">
    <img src="http://localhost/ci4/assets/img/andrian.jpg" class="card-img-top" alt="Profil <?= $user;?>">
    <div class="card-body">
        <h5 class="card-title">Profil <?= $user;?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Role ID : <?= $role_id;?></li>
        <li class="list-group-item">Email :</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
    </div>
</div>