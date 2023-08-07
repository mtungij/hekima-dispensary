<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="content profile-page px-4" style="display: grid; grid-template-columns: 300px 1fr; gap: 18px;">   
     <div class="profile-container rounded my-2">
         <img src="<?php echo base_url('public/images/doctors/member2.png') ?>" width="150" height="150" class="rounded-circle mx-auto d-block" style="border: 3px solid #bbb" alt="">
         <div class="text-center">
            <h5><?= $staff->first_name . " " . $staff->last_name ?></h5>
            <p><?= $staff->position ?></p>
            <div>
                <?php if($staff->status == "active"): ?>
                    <span class="badge rounded-pill text-bg-success"><?= $staff->status ?></span>
                    <?php else: ?>
                    <span class="badge rounded-pill text-bg-danger"><?= $staff->status ?></span>
                <?php endif ?>
            </div>
            <div class="d-flex gap-3 py-4 justify-content-center">
              <?php if($staff->status == "active"): ?>
                <button class="btn btn-danger">
                    <a title="block this user?" class="text-white" href="<?= site_url('staff/update_status/'.$staff->status.'/'.$staff->id)?>">Block</a>
                </button>
                <?php else: ?>
                <button class="btn btn-danger">
                    <a title="unblock this user?" class="text-white" href="<?= site_url('staff/update_status/'.$staff->status.'/'.$staff->id) ?>">Unblock</a>
                </button>
              <?php endif ?>  
                <button class="btn btn-danger ">
                    <a class="text-white" title="Delete this user?" href="<?= site_url('staff/delete/'.$staff->id) ?>">Delete</a>
                </button>
                
            </div>
         </div>
     </div>

     <?php
     if($this->session->userdata('updateSuccess')) {
         $tab1 = ""; $tab2 = "active";
     } else {
        $tab1 = "active"; $tab2 = "";
     }
     
     ?>

     <div class="bg-white p-3 rounded profile">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <?php if($this->session->userdata('updateSuccess')): ?>
            <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Recent activities</button>
            <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Staff information</button>
            <?php else: ?>
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Recent activities</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Staff information</button>
            <?php endif ?>
        </div>
            <div class="tab-content py-2" id="nav-tabContent">
               <div class="tab-pane fade show <?= $tab1 ?>" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                  <ul>
                     <li>Making messages in ...</li>
                     <li>Making messages in ...</li>
                     <li>Making messages in ...</li>
                     <li>Making messages in ...</li>
                  </ul>
               </div>
               <div class="tab-pane fade show <?= $tab2 ?>" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <?php if($this->session->userdata('updateSuccess')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> <?= $this->session->userdata('updateSuccess') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif ?>
                  <?php echo form_open('staff/update')?>
                    <input type="hidden" name="id" id="id" class="form-control" value="<?= $staff->id ?>">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" name="first_name" id="fname" class="form-control" value="<?= $staff->first_name ?>">
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="last_name" id="lname" class="form-control" value="<?= $staff->last_name ?> ">
                    </div>

                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $staff->username ?>" >
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?= $staff->email?>">
                    </div>

                    <div class="form-group">
                        <label for="pnumber">Phone Number:</label>
                        <input type="number" name="phone_number" id="pnumber" class="form-control" value="<?= $staff->phone_number ?>">
                    </div>

                    <div class="form-group">
                        <label for="departiment">Department:</label>
                        <input type="text" name="departiment" id="departiment" class="form-control" value="<?= $staff->departiment ?>">
                    </div>

                    <div class="form-group">
                        <label for="position">Position:</label>
                        <input type="text" name="position" id="position" class="form-control" value="<?= $staff->position ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Change Password:</label>
                        <input type="text" name="password" id="confirm" class="form-control" placeholder="Enter New Password">
                    </div>

                    <input class="btn btn-primary my-3" type="submit"value="Update" name="update-btn">
                    
                    <?php form_close()?>
               </div>
            </div>
        </div>
</section>

<?php include APPPATH . "views/utils/footer.php"?>