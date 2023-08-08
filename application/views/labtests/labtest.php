<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="p-4">


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Register labtests
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <?php echo form_open('labtest/create')?>
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register sub-category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
           <div class="col-md-6">
              <label for="category" class="form-label">Category</label>
              <select class="form-select form-select mb-3" name="category_id" aria-label="Category" required>
                <option value="">select category</option>
                <?php foreach($categories as $category):?>
                <option value="<?= $category->test_category_id ?>"><?= $category->name ?></option>
                <?php endforeach ?>
              </select>
           </div>
            <div class="col-md-6">
                <label for="labtest" class="form-label">Sub Category</label>
                <input type="text" class="form-control" name="labtest" id="labtest" required>
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
    <?php echo form_close()?>
  </div>
</div>


<div class="py-5">
   <!-- Alert box -->
    <?php if($this->session->flashdata('labtestRegistered')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> <?= $this->session->flashdata('labtestRegistered') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif($this->session->flashdata('labtestDeleted')): ?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Deleted!</strong> <?= $this->session->flashdata('labtestDeleted') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>
    <h3 class="py-1">All labtest sub-categories</h3>

    <table class="table table-striped" id="dataTable">
        <thead>
            <tr>
                <th>S/NO</th>
                <td>Category Name</td>
                <td>Subcategory</td>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php $rowId = 1 ?>
            <?php foreach($labtests as $labtest): ?>
                <tr>
                    <td><?= $rowId++ ?></td>
                    <td><?= $labtest->category_name ?></td>
                    <td><?= $labtest->subcategory_name ?></td>
                    <td><?= number_format($labtest->price) ?></td>
                    <td>
                        <a href="<?= site_url('labtest/delete/'.$labtest->test_subcategory_id) ?>">delete</a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
</section>

<?php include APPPATH . "views/utils/footer.php"?>