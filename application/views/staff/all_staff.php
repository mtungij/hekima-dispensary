<?php include APPPATH."/views/utils/header.php"?>


<div class="mx-4 px-5 py-4 bg-slate-100 shadow-md rounded-md relative -mt-14 z-">
<div class="grid grid-cols-2  md:grid-cols-4 gap-4">
    <?php foreach($staffs as $staff):?>
    <div class="bg-white shadow-md rounded-md p-4">
        <div class="flex items-center justify-center">
            <img class="h-auto max-w-full rounded-lg" src="<?php echo base_url('assets/images/profile_av.jpg') ?>" alt="">
        </div>
        <div class="grid content-center justify-center">
            <p class="font-bold py-2 text-xl"><?= $staff->first_name . " " . $staff->last_name ?></p>
            <p><?= $staff->position ?></p>
            <a href="<?= site_url('staff/staff_profile/'.$staff->id) ?>" class="bg-cyan-400 text-white rounded-md py-2 px-5 my-2">View..</a>
        </div>
    </div>
    <?php endforeach ?>
</div>
</div>


<?php include APPPATH."/views/utils/footer.php"?>