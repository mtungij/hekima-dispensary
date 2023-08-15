<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="p-4 ">

<!-- form validation -->

<?php echo form_open('patient/create', array('class'=>"card p-3"))?>

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
<?php elseif($this->session->flashdata('uploadError')): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Upload error!</strong> <?= $this->session->flashdata('uploadError'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif ?>

  <div class="tab-pane fade show active" id="pills-current" role="tabpanel" aria-labelledby="pills-current-tab" tabindex="0">
     
  <div class="row g-3">
          <div class="col-md-4">
          <label for="fname" class="form-label">
            <span style="color: red; font-weight: bold;">*</span>Jina La Kwanza
         </label>
            <input type="text" class="form-control" name="first_name" id="fname" required>
          </div>
          <div class="col-md-4">
          <label for="fname" class="form-label">
            <span style="color: red; font-weight: bold;">*</span>Jina La Kati
         </label>
            <input type="text" class="form-control" name="middle_name" id="lname" required>
          </div>
          <div class="col-md-4">
          <label for="fname" class="form-label">
            <span style="color: red; font-weight: bold;">*</span> Jina La Ukoo
         </label>
            <input type="text" class="form-control" name="last_name" id="lname" required>
          </div>
      </div>
      <div class="row g-3">
          <div class="col-md-4">
          <label for="fname" class="form-label">
            <span style="color: red; font-weight: bold;"></span>Nambari Ya Simu
         </label>
            <input type="text" class="form-control" name="phone_number">
          </div>
          <div class="col-md-4">
          <label for="fname" class="form-label">
            <span style="color: red; font-weight: bold;">*</span>Age
         </label>
                <input type="number" class="form-control" name="age" required >
          </div>
          <div class="col-md-4">
          <label for="fname" class="form-label">
            <span style="color: red; font-weight: bold;">*</span>Jinsia
         </label>
             <select class="form-select" aria-label="Default select example" name="gender" id="gender" required>
                <option selected>Chagua Jinsia</option>
                <option value="Male">Kiume</option>
                <option value="Female">Kike</option>
             </select>
          </div>
      </div>

      <div class="row g-3">  
      <div class="col-md-4">
          <label for="fname" class="form-label">
            <span style="color: red; font-weight: bold;">*</span>Patient Status
         </label>
             <select class="form-select" aria-label="Default select example" name="patient_status" id="gender" required>
                <option value="">select status</option>
                <option value="Urgent ">Not Urgent </option>
                <option value="Special need">Special need</option>
                <option value="Normal">Normal</option>
             </select>
          </div>
      
          <div class="col-md-4">
          <label for="fname" class="form-label">
            <span style="color: red; font-weight: bold;"></span>Jina la Msindikizaji
         </label>
                <input type="text" class="form-control" name="Escoter_name">
          </div>
          <div class="col-md-4">
          <label for="fname" class="form-label">
            <span style="color: red; font-weight: bold;"></span>Aina Ya Account
         </label>
             <select class="form-select" aria-label="Default select example" name="insurancer_type" id="gender" required>
                <option selected>Bila Bima</option>
                <!-- <option value="Male">Kiume</option>
                <option value="Female">Kike</option> -->
             </select>
          </div>
             </div>
             <div class="text-center">
  <button type="submit" class="btn btn-primary my-2 d-block mx-auto">
    Submit
  </button>
</div>

 <!-- Button trigger modal -->
   

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

</section>
<?php include APPPATH . 'views/utils/footer.php' ?>

