<?php include APPPATH."/views/utils/header.php"?>


<div class="mx-4 px-5 py-4 shadow-sm rounded-md relative -mt-14 z-">

<div class="flex gap-4">
    <div class="grid gap-5">
        <div class="p-4 w-[300px] rounded-md shadow-lg bg-red-50 text-slate-500 grid gap-4">
            <img src="<?php echo base_url('assets/images/profile_av.jpg') ?>" alt="patient" class="rounded-full block max-w-full mx-auto" height="100" width="100">

            <div class="grid gap-3">
                <p>Full name: <b>Alkado Heneliko</b></p>
                <p>Mobile: <b>0744335566</b></p>
                <p>Date of birth: <b>12/3/2001</b></p>
                <p>Age: <b>25 years</b></p>
                <p>Ailment: <b>Demo Test</b></p>
            </div>
        </div>
        <div>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-[#01d8da] rounded py-2 px-4 block text-slate-50">Transfer</button>

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
                                    <input type="text" name="from" value="Reception" id="from" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                </div>
                                <div>
                                    <label for="to" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To</label>
                                    <select name="to" class="w-full form-select px-4 py-3 rounded-full" id="to">
                                        <option value="" class="font-bold">Select departiment</option>
                                        <?php foreach($departiments as $departiment):?>
                                            <option value="<?= $departiment->name ?>"><?= $departiment->name ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Make transfer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="bg-slate-200 w-full p-4 shadow-lg rounded-md">
      <ul class="flex gap-2 text-sm font-medium py-2 text-center bg-slate-50 rounded-sm px-4" id="myTab" data-tabs-toggle="#tabContents" role="tablist">
        <li role="presentation" class="shrink">
            <button class="inline-block w-full pr-8 py-2 rounded-md focus:text-white focus:px-4 focus:bg-[#01d8da]" id="recent-tab" data-tabs-target="#recent" type="button" role="tab" aria-controls="recent" aria-selected="true">Prescription</button>
        </li>
        <li role="presentation" class="shrink">
            <button class="inline-block w-full px-8 py-2 rounded-md focus:text-white focus:bg-[#01d8da]" id="userinfo-tab" data-tabs-target="#userinfo" type="button" role="tab" aria-controls="userinfo" aria-selected="false">Vitals</button>
        </li>
        <li role="presentation" class="shrink">
            <button class="inline-block w-full px-8 py-2 rounded-md focus:text-white focus:bg-[#01d8da]" id="lab-tab" data-tabs-target="#lab" type="button" role="tab" aria-controls="lab" aria-selected="false">Lab Records</button>
        </li>
    </ul>

    <div id="tabContents" class="bg-slate-50 p-4">
         <ol class="relative text-gray-500 border-l px-4 border-gray-200 dark:border-gray-700 dark:text-gray-400" id="recent" role="tabpanel" aria-labelledby="recent-tab">                  
                <li class="mb-10 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <h3 class="font-medium leading-tight">Demo test</h3>
                    <p class="text-sm">Step details here</p>
                </li>
                <li class="mb-10 ml-6">
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                        <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <h3 class="font-medium leading-tight">Demo test3</h3>
                    <p class="text-sm">Step details here</p>
                </li>
                <li class="mb-10 ml-6">
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                        <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <h3 class="font-medium leading-tight">Review</h3>
                    <p class="text-sm">Step details here</p>
                </li>
                <li class="ml-6">
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                        <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <h3 class="font-medium leading-tight">Demo test 3</h3>
                    <p class="text-sm">Step details here</p>
                </li>
            </ol>

       <div id="userinfo" role="tabpanel" aria-labelledby="userinfo-tab">
        <table class="w-full">
           <thead>
            <tr class= " text-slate-800">
                <th class="bg-slate-200 ">Body Temperature</th>
                <th class="bg-slate-200 ">Heart Rate/Pulse</th>
                <th class="bg-slate-200 ">Respiratory Rate</th>
                <th class="bg-slate-200 ">Blood Pressure</th>
                <th class="bg-slate-200 ">Date Recorded</th>
            </tr>
           </thead>
        </table>
       </div>

       <div id="lab" role="tabpanel" aria-labelledby="lab-tab">
        user info
       </div>
    </div>
</div>

</div> 

<?php include APPPATH."/views/utils/footer.php"?>