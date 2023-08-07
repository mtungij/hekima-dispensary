<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="p-4">


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Register positions
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
   <?php echo form_open('position/create')?>
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register positions</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" value="1">
        <div class="row g-3">
            <div class="col-md-6">
                <label for="position" class="form-label">position</label>
                <input type="text" class="form-control" name="position" id="position" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
    <?php echo form_close()?>
  </div>
</div>


<div class="py-5">
  <!-- Alert box -->
    <?php if($this->session->flashdata('positionRegistered')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> <?= $this->session->flashdata('positionRegistered') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif($this->session->flashdata('positionDeleted')): ?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Deleted!</strong> <?= $this->session->flashdata('positionDeleted') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>

    <h3 class="py-1">All positions</h3>

    <table class="table table-striped" id="dataTable">
        <thead>
            <tr>
                <th>S/NO</th>
                <td>Name</td>
                <th>Acrion</th>
            </tr>
        </thead>
        <tbody>
           <?php $rowId = 1 ?>
            <?php foreach($positions as $position): ?>
                <tr>
                    <td><?= $rowId++ ?></td>
                    <td><?= $position->name ?></td>
                    <td>
                        <a href="<?= site_url('position/delete/'.$position->position_id) ?>">delete</a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
</section>

<?php include APPPATH . "views/utils/footer.php"?>