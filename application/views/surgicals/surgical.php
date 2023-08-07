<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>

<section class="p-4">


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Register surgicals
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register surgicals</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label for="surgical" class="form-label">surgical</label>
                <input type="text" class="form-control" id="surgical" required>
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
    <h3 class="py-1">All surgicals</h3>

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
            <?php foreach($surgicals as $surgical): ?>
                <tr>
                    <td>01</td>
                    <td><?= $surgical->name ?></td>
                    <td><?= $surgical->price ?></td>
                    <td>
                        <a href="#">delete</a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>

<h5>
    Select2 Test
</h5>
 <select name="select" id="select2" style="width: 60%">
    <option value="1">option 1</option>
    <option value="1">option 2</option>
    <option value="1">option 1</option>
    <option value="1">option 12</option>
    <option value="1">option 122</option>
    <option value="1">opt22ion 1</option>
    <option value="1">optio12n 1</option>
    <option value="1">option qw1</option>
    <option value="1">opti2222on 1</option>
    <option value="1">option 1w</option>
    <option value="1">opti bsdj on 1</option>
    <option value="1">optio bhsxcn 1</option>
 </select>
</section>

<?php include APPPATH . "views/utils/footer.php"?>