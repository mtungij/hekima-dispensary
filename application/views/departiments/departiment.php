<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="p-4">


<!-- Button trigger modal -->
<button type="button" class="btn popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Register departiments
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Departiments</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label for="departiment" class="form-label">Departiment</label>
                <input type="text" class="form-control" id="departiment" required>
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


<div class="py-5">
    <h3 class="py-1">All departiments</h3>
    <table class="" id="dataTable">
        <thead>
            <tr>
                <th>S/NO</th>
                <td>Name</td>
                <th>Price</th>
                <th>Acrion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($departiments as $departiment): ?>
                <tr>
                    <td>1</td>
                    <td><?= $departiment->name ?></td>
                    <td>400</td>
                    <td>
                        <a href="#">delete</a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
</section>

<?php include APPPATH . "views/utils/footer.php"?>