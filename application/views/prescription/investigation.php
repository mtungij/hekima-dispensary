<?php include APPPATH."/views/utils/header.php"?>


<div class="mx-2 px-3 py-4 shadow-sm rounded-md relative -mt-14 z-">

<div class="flex gap-4">
    <div class="grid gap-5 h-fit">
        <div class="p-4 w-[300px] divide-y divide-slate-300 rounded-md shadow-sm bg-red-50 text-slate-500 grid gap-4">
            <img src="<?php echo base_url('assets/images/profile_av.jpg') ?>" alt="patient" class="rounded-full block max-w-full mx-auto" height="100" width="100">

            <div class="divide-y divide-slate-300 text-sm">
                <p class="py-4 flex items-center justify-between"><span>Full name:</span> <b>Alkado Heneliko</b></p>
                <p class="py-4 flex items-center justify-between"><span>Mobile:</span> <b>0744335566</b></p>
                <p class="py-4 flex items-center justify-between"><span>Age:</span> <b>25 years</b></p>
                <p class="py-4 flex items-center justify-between"><span>Status:</span> <span class="bg-red-400 py-1 px-3 rounded-3xl text-slate-50 text-sm">Urgent</span></p>
            </div>
        </div>
        <div>
            <!-- <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-[#01d8da] rounded py-2 px-4 block text-slate-50">Transfer</button> -->

                        <!-- Main modal -->
            <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                            <form class="space-y-6" action="#">
                                <div>
                                    <label for="from" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From </label>
                                    <input type="text" name="from" value="Reception" id="from" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-500 focus:border-violet-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                </div>
                                <div>
                                    <label for="to" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To</label>
                                    <select name="to" class="w-full form-select px-4 py-3 rounded-full" id="to">
                                        <option value="" class="font-bold">Select test</option>
                                        <?php foreach($departiments as $departiment):?>
                                            <option value="<?= $departiment->name ?>"><?= $departiment->name ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <button type="submit" class="w-full text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="bg-slate-200 w-full h-fit p-1 shadow-sm rounded-sm">
      <!-- <ul class="flex gap-2 flex-wrap text-sm font-medium py-2 text-center bg-slate-50 rounded-sm px-4" id="myTab" data-tabs-toggle="#tabContents" role="tablist">
        <li role="presentation" class="shrink border border-slate-200 px-2 rounded">
            <button class="w-full py-2 rounded-md focus:text-white focus:px-4 focus:bg-[#01d8da]" id="userinfo-tab" data-tabs-target="#userinfo" type="button" role="tab" aria-controls="userinfo" aria-selected="true">Vital Sign</button>
        </li>
    </ul> -->

    <div id="transfer" class="bg-white p-4" role="tabpanel" aria-labelledby="transfer-tab">
       <div id="userinfo" role="tabpanel" aria-labelledby="userinfo-tab">
          <?php echo form_open('vitalSign', ["class" => "grid grid-cols-2 gap-3 text-sm"])?>
                                <input type="hidden" name="from" value="Reception" id="from" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-500 focus:border-violet-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                <div>
                                    <label for="to" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Test Name</label>
                                    <select name="to" id="mydata" class="w-full form-select border border-slate-300 px-4 py-3 rounded-full" id="to">
                                        <option value="" class="font-bold">Select departiment</option>
                                        <?php// foreach($departiments as $departiment):?>
                                            <option value="Mrdt">MRT</option>
                                            <option value="Stool">Stool</option>
                                        <?php// endforeach ?>
                                    </select>
                                </div>
                                <div>
                                    <label for="staff_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select name="to" id="js-example-basic-multiple" class="w-full form-select border border-slate-300 px-4 py-3 rounded-full" multiple="multiple">
                                        <option value="" class="font-bold">Staff name</option>
                                        <!-- <?php //foreach($departiments as $departiment):?> -->
                                            <option value="micro">Micro</option>
                                            <option value="macro">Macro</option>
                                        <?php //endforeach ?>
                                    </select>
                                </div>
                                <!-- <button type="submit" class="w-fit ml-[35%] col-span-2 text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button> -->
                            </form>
    </div>
             
             
             
             
             <div class="col-span-2 max-w-full mx-auto">
               <button class="bg-cyan-400 py-2 px-4 rounded-md text-sm text-white">Submit</button>
               <button class="bg-cyan-400 py-2 px-4 rounded-md text-sm text-white">Back</button>
             </div>
          <?php echo form_close()?>
       </div>

    </div>
    
</div>

</div> 


<?php include APPPATH."/views/utils/footer.php"?>