<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="p-4">
    <div class="row g-3" style="display: grid; grid-template-columns: auto auto auto; gap: 18px">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo base_url('public/images/doctors/member2.png') ?>" class="card-img-top bg-primary" width="100" height="200" style="object-fit: contain" alt="">
            <div class="card-body">
                <h5 class="card-title">Alkado Hs</h5>
                <p class="card-text"> bulk of the card's content.</p>
                <a href="<?php echo base_url("staff/staff_profile/1") ?>" class="btn text-white" style="background: #01d8da">View profile</a>
            </div>
          </div>
      </div>
</section>

<?php include APPPATH . "views/utils/footer.php"?>