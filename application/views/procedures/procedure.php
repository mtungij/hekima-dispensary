<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="p-4">


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Register procedures
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <?php echo form_open('procedure/create')?>
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register procedures</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label for="procedure" class="form-label">procedure</label>
                <input type="text" class="form-control" name="procedure" id="procedure" required>
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


<div class="py-5">

 <!-- Alert box -->
    <?php if($this->session->flashdata('procedureRegistered')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> <?= $this->session->flashdata('procedureRegistered') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif($this->session->flashdata('procedureDeleted')): ?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Deleted!</strong> <?= $this->session->flashdata('procedureDeleted') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>
    <h3 class="py-1">All procedures</h3>

    <table class="table table-striped" id="dataTable">
        <thead>
            <tr>
                <th>S/NO</th>
                <td>Name</td>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php $rowId = 1 ?>
            <?php foreach($procedures as $procedure): ?>
                <tr>
                    <td><?= $rowId++ ?></td>
                    <td><?= $procedure->name ?></td>
                    <td><?= number_format($procedure->price) ?></td>
                    <td>
                        <a href="<?= site_url('procedure/delete/'.$procedure->procedure_id) ?>">delete</a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
</section>

<?php include APPPATH . "views/utils/footer.php"?>