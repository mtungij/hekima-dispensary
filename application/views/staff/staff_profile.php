<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="content profile-page px-4" style="display: grid; grid-template-columns: 300px 1fr; gap: 18px;">   
     <div class="profile-container rounded my-2">
         <img src="<?php echo base_url('public/images/doctors/member2.png') ?>" width="150" height="150" class="rounded-circle mx-auto d-block" style="border: 3px solid #bbb" alt="">
         <div class="text-center">
            <h5>kado Hs</h5>
            <p>Medical Doctor</p>
            <div>
                <span class="badge rounded-pill text-bg-success">Active</span>
            </div>
            <div class="d-flex gap-3 py-4 justify-content-center">
                <button class="btn btn-danger">Block</button>
                <button class="btn btn-danger">Delete</button>
            </div>
         </div>
     </div>

     <div class="bg-white p-3 rounded profile">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Recent activities</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Staff information</button>
        </div>
            <div class=     "tab-content py-2" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                  <ul>
                     <li>Making messages in ...</li>
                     <li>Making messages in ...</li>
                     <li>Making messages in ...</li>
                     <li>Making messages in ...</li>
                  </ul>
               </div>
               <div class="tab-pane fade show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                  <?php echo form_open('staff/update_staff')?>
                    <input type="hidden" name="id" id="id" class="form-control" value="">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" name="first_name" id="fname" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="last_name" id="lname" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" value="" >
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <label for="pnumber">Phone Number:</label>
                        <input type="number" name="phone_number" id="pnumber" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <label for="departiment">Department:</label>
                        <input type="text" name="departiment" id="departiment" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="departiment">Change Password:</label>
                        <input type="text" name="confirm" id="confirm" class="form-control" placeholder="Enter New Password">
                    </div>

                    <input class="btn btn-primary my-3" type="submit"value="Update" name="update-btn">
                    
                    <?php form_close()?>
               </div>
            </div>
        </div>
</section>

<?php include APPPATH . "views/utils/footer.php"?>