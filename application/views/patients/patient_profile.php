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
                                        <option value="" class="font-bold">Select departiment</option>
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
      <ul class="flex gap-2 flex-wrap text-sm font-medium py-2 text-center bg-slate-50 rounded-sm px-4" id="myTab" data-tabs-toggle="#tabContents" role="tablist">
        <li role="presentation" class="shrink border border-slate-200 px-2 rounded">
            <button class="w-full py-2 rounded-md focus:text-white focus:px-4 focus:bg-[#01d8da]" id="userinfo-tab" data-tabs-target="#userinfo" type="button" role="tab" aria-controls="userinfo" aria-selected="true">Vital Sign</button>
        </li>
        <li role="presentation" class="shrink border border-slate-200 px-2 rounded">
            <button class="w-full py-2 rounded-md focus:text-white focus:px-4 focus:bg-[#01d8da]" id="transfer-tab" data-tabs-target="#transfer" type="button" role="tab" aria-controls="transfer" aria-selected="false">Transfer</button>
        </li>
        <li role="presentation" class="shrink border border-slate-200 px-2 rounded">
            <button class="w-full  py-2 rounded-md focus:text-white focus:px-4 focus:bg-[#01d8da]" id="patientHist-tab" data-tabs-target="#patientHist" type="button" role="tab" aria-controls="patientHist" aria-selected="false">Patient History</button>
        </li>
        <li role="presentation" class="shrink border border-slate-200 px-2 rounded">
            <button class="w-full py-2 rounded-md focus:text-white focus:px-4 focus:bg-[#01d8da]" id="recent-tab" data-tabs-target="#recent" type="button" role="tab" aria-controls="recent" aria-selected="false">Prescription</button>
        </li>
        <li role="presentation" class="shrink border border-slate-200 px-2 rounded">
            <button class="w-full py-2 rounded-md focus:text-white focus:bg-[#01d8da]" id="lab-tab" data-tabs-target="#lab" type="button" role="tab" aria-controls="lab" aria-selected="false">Lab Result</button>
        </li>
        <li role="presentation" class="shrink border  border-slate-200 px-2 rounded">
            <button class="w-full py-2 rounded-md focus:text-white focus:bg-[#01d8da]" id="invoice-tab" data-tabs-target="#invoice" type="button" role="tab" aria-controls="invoice" aria-selected="false">Invoice</button>
        </li>
        <li role="presentation" class="shrink border border-slate-200 px-2 rounded">
            <button class="w-full py-2 rounded-md focus:text-white focus:bg-[#01d8da]" id="appointment-tab" data-tabs-target="#appointment" type="button" role="tab" aria-controls="appointment" aria-selected="false">Appointment</button>
        </li>
    </ul>

    <div id="tabContents" class="bg-slate-50 p-4">
       <div id="userinfo" role="tabpanel" aria-labelledby="userinfo-tab">
          <?php echo form_open('vitalSign', ["class" => "grid grid-cols-2 gap-3 text-sm"])?>
             <div>
               <label for="body_temp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body Temperature</label>
               <input type="text" name="body_temp" id="body_temp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
             </div>
             <div>
               <label for="blood_pressure" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Pressure</label>
               <input type="text" name="blood_pressure" id="blood_pressure" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
             </div>
             <div>
               <label for="pulse_rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pulse Rate</label>
               <input type="text" name="pulse_rate" id="pulse_rate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
             </div>
             <div>
               <label for="respiratory_rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respiratory Rate</label>
               <input type="text" name="respiratory_rate" id="respiratory_rate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
             </div>
             <div>
               <label for="oxygen_saturation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Oxygen Saturation</label>
               <input type="text" name="oxygen_saturation" id="oxygen_saturation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
             </div>
             <div>
               <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight</label>
               <input type="text" name="weight" id="weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
             </div>
             <div>
               <label for="height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height</label>
               <input type="text" name="height" id="height" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
             </div>
             <div>
               <label for="pain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pain</label>
               <input type="text" name="pain" id="pain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
             </div>
             <div class="col-span-2 max-w-full mx-auto">
               <button class="bg-cyan-400 py-2 px-4 rounded-md text-sm text-white">Submit</button>
             </div>
          <?php echo form_close()?>
       </div>

        <div id="patientHist" role="tabpanel" aria-labelledby="patientHist-tab">
        patient Hist
        </div>

        <div id="recent" class="grid grid-cols-3 gap-x-20" role="tabpanel" aria-labelledby="recent-tab">
             <ol class="relative text-gray-500 border-l px-4 border-gray-200 dark:border-gray-700 dark:text-gray-400" >                  
                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="gynocological-modal" data-modal-toggle="gynocological-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Gynacological History</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="gynocological-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="gynocological-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Gynacological History</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>





                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="mainComplaint-modal" data-modal-toggle="mainComplaint-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">General Examination</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="mainComplaint-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="mainComplaint-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Gynacological History</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor5">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>



                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="patientHistory-modal" data-modal-toggle="patientHistory-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Patient History</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="patientHistory-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="patientHistory-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Patient History</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor2">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>




                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="pastMedical-modal" data-modal-toggle="pastMedical-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Past Medical</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="pastMedical-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="pastMedical-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Past Medical</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor3">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>
             </ol>



              <ol class="relative text-gray-500 border-l px-4 border-gray-200 dark:border-gray-700 dark:text-gray-400">
                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="reviewOtherSystem-modal" data-modal-toggle="reviewOtherSystem-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Review Other System</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="reviewOtherSystem-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="reviewOtherSystem-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Review Other System</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor4">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>





                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="generalExam-modal" data-modal-toggle="generalExam-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">General Examination</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="generalExam-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="generalExam-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Gynacological History</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor1">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>



                

                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="systematicExam-modal" data-modal-toggle="systematicExam-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Systematic Examination</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="systematicExam-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="systematicExam-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Systematic Examination</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor7">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>





                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="investigation-modal" data-modal-toggle="investigation-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Investigation</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="investigation-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="investigation-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Investigation</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor8">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>
              </ol>



              <ol class="relative text-gray-500 border-l px-4 border-gray-200 dark:border-gray-700 dark:text-gray-400">
                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="diag-modal" data-modal-toggle="diag-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Diagnosis</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="diag-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="diag-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Diagnosis</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor10">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>




                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="treatment-modal" data-modal-toggle="treatment-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Treatment</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="treatment-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="treatment-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Treatment</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor11">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>





                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="healthEdu-modal" data-modal-toggle="healthEdu-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Health Education</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="healthEdu-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="healthEdu-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Health Education</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor12">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>





                <li class="mb-14 ml-6">            
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                        <svg class="w-4 h-4 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    <button data-modal-target="appointment-modal" data-modal-toggle="appointment-modal" class="bg-violet-400 text-white hover:bg-violet-600 leading-tight text-left text-sm py-2 px-5 rounded inline-block">Appointment</button>
                    <p class="text-sm">Step details here</p>

                                    <!-- Main modal -->
                        <div id="appointment-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="appointment-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Appointment</h3>
                                        <p class="text-slate-600 text-sm py-2">Description</p>
                                        <form class="space-y-6" action="#">
                                            <div id="editor13">
                                            
                                            </div>
                                        <button type="submit" class="w-full text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>
            </ol>
        </div>


    <div id="lab" class="bg-white" role="tabpanel" aria-labelledby="lab-tab">
        Lab result
    </div>

    <div id="invoice" class="bg-white" role="tabpanel" aria-labelledby="invoice-tab">
        invoice
    </div>

    <div id="appointment" class="bg-white" role="tabpanel" aria-labelledby="appointment-tab">
        Appointment
    </div>

    <div id="transfer" class="bg-white p-4" role="tabpanel" aria-labelledby="transfer-tab">
        <form class="space-y-6 grid grid-cols-2 gap-4" action="#">
                                <input type="hidden" name="from" value="Reception" id="from" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-500 focus:border-violet-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                <div>
                                    <label for="to" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To</label>
                                    <select name="to" class="w-full form-select border border-slate-300 px-4 py-3 rounded-full" id="to">
                                        <option value="" class="font-bold">Select departiment</option>
                                        <?php foreach($departiments as $departiment):?>
                                            <option value="<?= $departiment->name ?>"><?= $departiment->name ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div>
                                    <label for="staff_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Staff</label>
                                    <select name="staff_id" class="w-full form-select border border-slate-300 px-4 py-3 rounded-full" id="staff_id">
                                        <option value="" class="font-bold">Staff name</option>
                                        <!-- <?php //foreach($departiments as $departiment):?> -->
                                            <option value="<? //= $departiment->name ?>"><?//= $departiment->name ?></option>
                                        <?php //endforeach ?>
                                    </select>
                                </div>
                                <button type="submit" class="w-fit ml-[35%] col-span-2 text-white bg-violet-400 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Make transfer</button>
                            </form>
    </div>

    </div>
    
</div>

</div> 


<!-- Include the Quill library -->
<script src="<?php echo base_url('assets/libs/quill/quill.js') ?>"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
  var quill = new Quill('#editor1', {
    theme: 'snow'
  });
  var quill = new Quill('#editor2', {
    theme: 'snow'
  });
  var quill = new Quill('#editor3', {
    theme: 'snow'
  });
  var quill = new Quill('#editor4', {
    theme: 'snow'
  });
  var quill = new Quill('#editor5', {
    theme: 'snow'
  });
  var quill = new Quill('#editor6', {
    theme: 'snow'
  });
  var quill = new Quill('#editor7', {
    theme: 'snow'
  });
  var quill = new Quill('#editor8', {
    theme: 'snow'
  });
  var quill = new Quill('#editor9', {
    theme: 'snow'
  });
  var quill = new Quill('#editor10', {
    theme: 'snow'
  });
  var quill = new Quill('#editor11', {
    theme: 'snow'
  });
  var quill = new Quill('#editor12', {
    theme: 'snow'
  });
  var quill = new Quill('#editor13', {
    theme: 'snow'
  });
  var quill = new Quill('#editor14', {
    theme: 'snow'
  });
</script>

<?php include APPPATH."/views/utils/footer.php"?>