<?php include APPPATH."/views/utils/header.php"?>


<div class="mx-4 px-5 py-4 bg-slate-100 shadow-md rounded-md relative -mt-14 z-">

<!-- Main modal -->
<div>
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
    <?php elseif($this->session->flashdata('registerSuccess')): ?>
         <div id="alert-3" class="flex items-center border border-green-400 p-4 mb-4 text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                <?= $this->session->flashdata('registerSuccess') ?>
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
         </div>
    <?php elseif($this->session->flashdata('uploadError')): ?>
         <div id="alert-2" class="flex items-center border border-red-400 p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                <?= $this->session->flashdata('uploadError') ?>
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
         </div>
    <?php endif ?>
    <?php echo form_open('settings/payment_method', array("class"=> "grid grid-cols-1 gap-4"))?>
        <div>
            <label for="confirmPass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Account</label>
            <input type="text" name="account name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5" required>
        </div>
        <button type="submit" style="width: 120px" class="col-span-2 ml-[35%] text-white bg-[#01d8da] hover:bg-[hsl(181,99%,43%)] focus:ring-4 focus:outline-none focus:ring-[hsl(181,99%,43%)] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[hsl(181,99%,43%)] dark:hover:bg-[hsl(181,99%,43%)] dark:focus:ring-[hsl(181,99%,43%)]">Submit</button>
    </form>
</div>
     

<div class="bg-slate-50 p-4 mt-7">
            <h3 class="py-2 my-4 text-2xl font-bold w-fit text-slate-700 border-b-4 border-cyan-600">Payment Accounts list</h3>
            <table class="table-auto w-full my-4" id="tabledata">
            <thead>
                <tr class="bg-cyan-500 text-white">
                    <th class="text-start py-3">S/No</th>
                    <th class="text-start">Account Name</th>
                    <th class="text-start">Phone Number</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-slate-300 ">
                    <td class="p-3">01</td>
                    <td>LIPA KWA M-PESA</td>
                    <td>196090</td>
                </tr>
                <tr class="border-b border-slate-300 ">
                    <td class="p-3">02</td>
                    <td class="p-3">Halopesa</td>
                    <td>062345678</td>
 
                </tr>
            </tbody>
            </table>
        </div>

<?php include APPPATH."/views/utils/footer.php"?>