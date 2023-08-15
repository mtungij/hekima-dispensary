<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>


<section class="p-4 ">
<div class="d-flex justify-content-center">
<select class="form-select w-100" name="select" id="select2" aria-label="Default select example">
    <?php foreach ($patients as $patient) : ?>
        <option value="<?= $patient->first_name . ' ' . $patient->middle_name . ' ' . $patient->last_name ?>">
         <a href=" <?php echo base_url("patient/patient_profile". $patient->patient_id) ?>/<?= $patient->patient_id  ?>" > <?= $patient->first_name . ' ' . $patient->middle_name . ' ' . $patient->last_name ?> </a>
        </option>
  <?php endforeach ?>
  </select>
</div>
<div class="text-center">
 <a href="<?php echo base_url('patient/profile') ?>"><button type="submit" class="btn btn-primary my-2 d-block mx-auto">
    Search  
  </button></a>
</div>

</section>
<?php include APPPATH . 'views/utils/footer.php' ?>

