<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="p-4">
    <div class="row g-3" style="display: grid; grid-template-columns: auto auto auto; gap: 1rem">
          <?php foreach($staffs as $staff):?>
            <div class="card" style="width: 18rem;">
              <img src="<?php echo base_url('public/images/doctors/member2.png') ?>" class="card-img-top bg-primary" width="100" height="200" style="object-fit: contain" alt="">
              <div class="card-body">
                  <h5 class="card-title"><?= $staff->first_name . " " . $staff->last_name ?></h5>
                  <p class="card-text"> <?= $staff->position ?></p>
                  <a href="<?php echo base_url("staff/staff_profile/". $staff->id) ?>" class="btn text-white" style="background: #01d8da">View profile</a>
              </div>
            </div>
          <?php endforeach ?>
      </div>
</section>

<?php include APPPATH . "views/utils/footer.php"?>