<?php include APPPATH."/views/utils/header.php"?>


<div class="mx-4 px-5 py-4 grid grid-cols-2 gap-5 bg-slate-100 shadow-md rounded-md relative -mt-14 z-">
   <div class="bg-white p-4 w-[350px] shadow-lg rounded-md grid justify-center gap-3 h-fit">
     <img class="rounded-full border-2 block border-violet-300" width="150" height="150" src="<?php echo base_url('assets/images/profile_av.jpg') ?>" alt="recent">

     <div class="grid justify-center">
        <p class="font-bold"><?= $staff->first_name . " " . $staff->last_name ?></p>
        <p><?= $staff->position ?></p>

        <button class="bg-green-400 text-white w-fit rounded-2xl py-1 px-2 text-sm ml-[30%]"><?= $staff->status ?></button>
     </div>

     <div class="flex justify-between gap-4">
        <?php if($staff->status == "active"):?>
           <a class="bg-rose-500 text-white text-sm rounded-lg py-1 px-3 shrink-0" href="<?= site_url('staff/update_status/'.$staff->status.'/'.$staff->id) ?>">Block</a>
        <?php else: ?>
           <a class="bg-rose-500 text-white text-sm rounded-lg py-1 px-3 shrink-0" href="<?= site_url('staff/update_status/'.$staff->status.'/'.$staff->id) ?>">Unblock</a>
        <?php endif?>
        <a class="bg-rose-500 text-white text-sm rounded-lg py-1 px-3 shrink-0" href="<?= site_url('staff/delete/'.$staff->id) ?>">Delete</a>
     </div>
   </div>

   <div class="bg-white shrink -ml-32 p-4">
     <ul class="flex gap-2 text-sm font-medium py-4 text-center" id="myTab" data-tabs-toggle="#tabContents" role="tablist">
        <li role="presentation" class="shrink">
            <button class="inline-block w-full pr-8 py-2 rounded-md focus:text-white focus:px-4 focus:bg-[#01d8da]" id="recent-tab" data-tabs-target="#recent" type="button" role="tab" aria-controls="recent" aria-selected="true">Recent activities</button>
        </li>
        <li role="presentation" class="shrink">
            <button class="inline-block w-full px-8 py-2 rounded-md focus:text-white focus:bg-[#01d8da]" id="userinfo-tab" data-tabs-target="#userinfo" type="button" role="tab" aria-controls="userinfo" aria-selected="false">Staff Information</button>
        </li>
    </ul>

    <div id="tabContents">
       <ul class="" id="recent" role="tabpanel" aria-labelledby="recent-tab">
         <li>Patient treatment</li>
         <li>Patient treatment</li>
         <li>Patient treatment</li>
         <li>Patient treatment</li>
         <li>Patient treatment</li>
       </ul>

       <div id="userinfo" role="tabpanel" aria-labelledby="userinfo-tab">
          <?php if($this->session->flashdata('userExist')): ?>
            <div id="alert-2" class="flex items-center border border-red-400 p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                  <?= $this->session->flashdata('userExist') ?>
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
            </button>
            </div>
         <?php elseif($this->session->flashdata('updateSuccess')): ?>
               <div id="alert-3" class="flex items-center border border-green-400 p-4 mb-4 text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400" role="alert">
                  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                     <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  <span class="sr-only">Info</span>
                  <div class="ml-3 text-sm font-medium">
                     <?= $this->session->flashdata('updateSuccess') ?>
                  </div>
                  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                     <span class="sr-only">Close</span>
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                     </svg>
                  </button>
               </div>
         
         <?php endif ?>
         <?php echo form_open('staff/update', array("class"=> "grid grid-cols-1 gap-4"))?>
            <div>
                  <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                  <input type="text" value="<?= $staff->first_name ?>" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
            </div>
            <input type="hidden" name="id" value="<?= $staff->id ?>">
            <div>
                  <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                  <input type="text" value="<?= $staff->last_name ?>" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
            </div>
            <div>
                  <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                  <input type="text" value="<?= $staff->username ?>" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
            </div>
            <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                  <input type="text" value="<?= $staff->email ?>" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
            </div>
            <div>
                  <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                  <input type="text" value="<?= $staff->phone_number ?>" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
            </div>

            <div>
            <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
            <select name="position" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" id="position" required>
                <option value="<?= $staff->position ?>"><?= $staff->position ?></option>
                <?php foreach($positions as $position):?>
                    <option class="p-4" value="<?= $position->name ?>"><?= $position->name ?></option>
                <?php endforeach?>
            </select>
            </div>
            <div>
                  <label for="departiment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departiment</label>
                  <select name="departiment" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" id="departiment" required>
                     <option value="<?= $staff->departiment ?>"><?= $staff->departiment ?></option>
                     <?php foreach($departiments as $departiment):?>
                        <option class="p-4" value="<?= $departiment->name ?>"><?= $departiment->name ?></option>
                     <?php endforeach?>
                  </select>
            </div>
            <div>
                  <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                  <select name="gender" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" id="gender" required>
                     <option value="<?= $staff->gender ?>"><?= $staff->gender ?></option>
                     <option class="p-4" value="Male">Male</option>
                     <option class="p-4" value="Female">Female</option>
                  </select>
            </div>
            
            <button type="submit" class="w-1/2 ml-[30%] text-white bg-[#01d8da] hover:bg-[hsl(181,99%,43%)] focus:ring-4 focus:outline-none focus:ring-[hsl(181,99%,43%)] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[hsl(181,99%,43%)] dark:hover:bg-[hsl(181,99%,43%)] dark:focus:ring-[hsl(181,99%,43%)]">Update</button>
         </form>
       </div>
   </div>
</div>

<?php include APPPATH."/views/utils/footer.php"?>