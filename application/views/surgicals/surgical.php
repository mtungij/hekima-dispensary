<?php include APPPATH."/views/utils/header.php"?>
<!-- Modal toggle -->
<div class="mx-4 px-5 py-4 bg-slate-100 shadow-md rounded-md relative -mt-14 z-">
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-[#01d8da] hover:bg-[hsl(181,99%,43%)] focus:ring-4 focus:outline-none focus:ring-[hsl(181,99%,43%)] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[hsl(181,99%,43%)] dark:hover:bg-[#01d8da] dark:focus:ring-[hsl(181,99%,43%)]" type="button">
  Register Surgical
</button>

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
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Register Surgical</h3>
                <?php echo form_open('surgical/create', array("class"=> "space-y-6"))?>
                    <div>
                        <label for="surgical" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surgical Name</label>
                        <input type="text" name="surgical" id="surgical" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[hsl(181,99%,43%)] focus:border-[hsl(181,99%,43%)] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                    </div>
                    <button type="submit" class="w-full text-white bg-[#01d8da] hover:bg-[hsl(181,99%,43%)] focus:ring-4 focus:outline-none focus:ring-[hsl(181,99%,43%)] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[hsl(181,99%,43%)] dark:hover:bg-[hsl(181,99%,43%)] dark:focus:ring-[hsl(181,99%,43%)]">Create</button>
                </form>
            </div>
        </div>
    </div>
</div> 

<div class="bg-slate-50 p-4 mt-7">
            <h3 class="py-2 my-4 text-2xl font-bold w-fit text-slate-700 border-b-4 border-cyan-600">All surgicals</h3>
            <table class="table-auto w-full my-4" id="tabledata">
            <thead>
                <tr class="bg-slate-400 text-white">
                    <th class="text-start py-3">S/No</th>
                    <th class="text-start">Surgical Name</th>
                    <th class="text-start">Surgical Price</th>
                    <th class="text-start">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $rowId = 1 ?>
                <?php foreach($surgicals as $surgical):?>
                <tr class="border-b border-slate-300 ">
                    <td class="p-3"><?= $rowId++ ?></td>
                    <td><?= $surgical->name ?></td>
                    <td><?= $surgical->price ?></td>
                    <td class="p-3 flex items-center justify-start">
                        <button id="apple-imac-20-dropdown-button" data-dropdown-toggle="apple-imac-20-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </button>
                        <div id="apple-imac-20-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-20-dropdown-button">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
               <?php endforeach ?>
            </tbody>
            </table>
</div> 



<?php include APPPATH."/views/utils/footer.php"?>