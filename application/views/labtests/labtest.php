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
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register labtests</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label for="labtest" class="form-label">labtest</label>
                <input type="text" class="form-control" id="labtest" required>
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
    <h3 class="py-1">All labtests</h3>

    <table class="table table-striped" id="dataTable">
        <thead>
            <tr>
                <th>S/NO</th>
                <td>Name</td>
                <th>Price</th>
                <th>Acrion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($labtests as $labtest): ?>
                <tr>
                    <td>01</td>
                    <td><?= $labtest->name ?></td>
                    <td><?= $labtest->price ?></td>
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