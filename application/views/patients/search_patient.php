<?php include APPPATH."/views/utils/header.php"?>


<div class="mx-4 px-5 py-4 bg-slate-100 shadow-md rounded-md relative -mt-14 z-">

<form action="patient/process_patient">
    <select class="form-select px-4 py-2 w-1/2" name="search" id="mydata">
        <?php foreach($patients as $patient):?>
            <option  value="<?= $patient->patient_id ?>"><?= $patient->first_name . " " . $patient->middle_name . " " . $patient->last_name ?></option>
        <?php endforeach ?>
    </select>

    <button class="bg-[#01d8da] px-4 py-2 rounded-md text-white">Search</button>
</form>

</div> 

<?php include APPPATH."/views/utils/footer.php"?>