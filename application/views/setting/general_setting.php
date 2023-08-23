<?php include APPPATH . 'views/utils/header.php' ?>
<?php include APPPATH . 'views/utils/sidebar.php' ?>
<?php include APPPATH . 'views/utils/navbar.php' ?>
<style>
    label {
    font-weight: 600;
    color: #666;
}
body {
  background: #f1f1f1;
}
.box8{
  box-shadow: 0px 0px 5px 1px #999;
}
.mx-t3{
  margin-top: -3rem;
}
</style>


<div class="container">
    <div class="container mt-3">
        <?php echo form_open_multipart('setting/general_setting'); ?>
        <div class="row jumbotron box8">
            <div class="col-sm-6 form-group">
                <label for="name-f">Hospital Full Name</label>
                <input type="text" class="form-control" name="center_name" id="name-f" placeholder="Enter your Office name." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="name-l">Address</label>
                <input type="text" class="form-control" name="address" id="name-l" placeholder="Eg P.O.BOx 123." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="email">Hospital Phone Number</label>
                <input type="number" class="form-control" name="phone_number" id="email" placeholder="Enter Office Phone Number." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="address-1">Hospital Email</label>
                <input type="email" class="form-control" name="email" id="address-1" placeholder="Enter office email" >
            </div>
            <div class="mb-3 form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Footer Invoice/Receipt Message</label>
                <textarea class="form-control" name="footer" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-sm-3 form-group">
                <label for="State">Hospital Logo</label>
                <input type="file" id="myfile" name="logo_url">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-2 d-block mx-auto">
                    Submit
                </button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>


<?php include APPPATH . 'views/utils/footer.php' ?>
