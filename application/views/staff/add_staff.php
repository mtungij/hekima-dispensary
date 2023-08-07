<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="p-4 ">

<?php echo form_open('staff/create', array('class'=>"card p-3"))?>

<?php if($this->session->flashdata('userExist')): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> <?= $this->session->flashdata('userExist'); ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php elseif($this->session->flashdata('registerSuccess')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Success!</strong> <?= $this->session->flashdata('registerSuccess'); ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif ?>

  <div class="tab-pane fade show active" id="pills-current" role="tabpanel" aria-labelledby="pills-current-tab" tabindex="0">
      <div class="row g-3">
          <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="fname" required>
          </div>
          <div class="col-md-6">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="lname" required>
          </div>
      </div>
      <div class="row g-3">
          <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" required>
          </div>
      </div>
      <div class="row g-3 d-flex align-items-center">
          <div class="col-md-6">
            <label for="pnumber" class="form-label">Phone Number</label>
            <input type="number" class="form-control" name="phone_number" id="pnumber" required>
          </div>
          <div class="col-md-6">
              <label for="departiment" class="form-label">Departiment</label>
              <select class="form-select" aria-label="Default select example" name="departiment" id="departiment" required>
                <option value="">Select departiment</option>
                <?php foreach($departiments as $departiment): ?>
                <option value="<?= $departiment->name ?>"><?= $departiment->name ?></option>
                <?php endforeach ?>
             </select>
          </div>
      </div>
      <div class="row g-3">
          <div class="col-md-6">
              <label for="position" class="form-label">Position</label>
              <select class="form-select" aria-label="Default select example" name="position" id="position" required>
                <option value="">Select position</option>
                <?php foreach($positions as $position): ?>
                <option value="<?= $position->name ?>"><?= $position->name ?></option>
                <?php endforeach ?>
             </select>
          </div>
          <div class="col-md-6">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" aria-label="Default select example" name="gender" id="gender" required>
                <option selected>Open this select menu</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
             </select>
          </div>
      </div>
      <div class="row g-3">
          <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
          </div>
          <div class="col-md-6">
            <label for="confPass" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confiPass" id="confPass" required>
          </div>
      </div>

      <div class="row g-3 py-3">
        <div class="col-md-3">
            <label for="image_url" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" name="image_url">
        </div>
      </div>
    </div>

 <!-- Button trigger modal -->
<button type="submit" class="btn btn-primary my-2 d-block" style="width: 30%; margin-left: 35%">
  Submit
</button>

<!-- Modal
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload profile picture</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-grid gap-3 p-5 bg-white justify-content-center align-items-center" style="gap: 20px; border: 1px solid #ccc; border-radius: 8px">
            <div>
                <img src="<?php echo base_url('public/images/doctors/member2.png') ?>" height="150" width="150" class="rounded-circle mx-auto d-block bg-primary" alt="profile">
            </div>
            <input type="file" class="form-control" style="flex-grow: 0">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div> -->
<?php echo form_close()?>


 <div style="margin: 50px 0" class="card bg-white p-3">
    <h4>Recently Staff Members</h4>

    <table class="table table-striped" id="dataTable">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Gender</th>
                <th>Departiment</th>
                <th>Position</th>
                <th>Date Added</th>
            </tr>
        </thead>
        <tbody>
          <?php $rowId = 1?>
          <?php foreach($staffs as $staff): ?>
            <tr>
                <td><?= $rowId++ ?></td>
                <td><?= $staff->first_name . " ". $staff->last_name ?></td>
                <td><?= $staff->username ?></td>
                <td><?= $staff->gender ?></td>
                <td><?= $staff->departiment ?></td>
                <td><?= $staff->position ?></td>
                <td><?= $staff->created_at ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
    </table>
 </div>

</section>

<?php include APPPATH . "views/utils/footer.php"?>