<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url("assets/libs/quill/quill.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/custom-styles.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/libs/select2/select2.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css") ?>">
      <script src="<?php echo base_url("assets/libs/jquery/jquery.js") ?>"></script>
      <script src="<?php echo base_url("assets/libs/Datatables/datatable.js") ?>"></script>
      <script src="<?php echo base_url("assets/libs/select2/select2.js") ?>"></script>

      <title>Homepage</title>
      <style>
         tbody tr {
            border-bottom: 1px solid #cbd5e1 !important;
         }

         .dataTables_wrapper {
            display: grid;
            width: 100%;
            grid-template-columns: auto auto;
            justify-content: space-between;
         }

         .dataTables_filter input, .dataTables_length select {
               border: 1px solid #cbd5e1;
               border-radius: 5px;
               outline: none !important;
         }

         .dataTables_filter input:focus {
            border: 1px solid #cbd5e1 !important;
            outline: 2px solid #cbd5e1 !important;
         }

         .dataTables_paginate {
            display: flex;
            align-items: center;
            gap: 0.7rem;
         }

         .dataTables_paginate a, .dataTables_paginate span {
            background-color: #6366f1;
            border: none;
            border-radius: 4px;
            padding: 7px 10px;
            color: white;
            cursor: pointer;
         }

         .dataTables_paginate a:hover {
            background-color: #818cf8;
            font-weight: 600;
         }

         table {
            grid-column: 1/span 2;
         }
      </style>

    
    
</head>
<body>

<!-- navigation bar -->
<nav class="fixed top-0 z-50 w-full  bg-[#01d8da] text-white shadow-lg border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center gap-5">
          <div class="flex items-center justify-start">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
             </button>
            <a href="<?= base_url("dashboard") ?>" class="flex ml-2 md:mr-24">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-red-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
              </svg>
              <span class="self-center pl-2 text-lg font-bold sm:text-xl whitespace-nowrap ">HEKIMA DISPENSARY</span>
            </a>
          </div>

          <button type="button" class="relative p-2 bg-cyan-400 inline-flex items-center text-sm font-medium text-center text-white rounded-lg ">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
            </svg>
            <span class="sr-only">Notifications</span>
            <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">20</div>
         </button>

          <button type="button" class="relative p-2 bg-cyan-400 inline-flex items-center text-sm font-medium text-center text-white rounded-lg ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>

            <span class="sr-only">Notifications</span>
            <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">20</div>
         </button>
      </div>
      <div class="flex items-center gap-3">
        <form action="search">
            <input type="search" class="py-1 px-4 rounded-lg border-none" placeholder="Search" name="search">
        </form>
        <a href="<?= site_url('staff/logout') ?>">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
           <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
          </svg>

        </a>
      </div>
    </div>
  </div>
</nav>

<!-- sidebar -->
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
  <div class="mb-3 bg-slate-100 p-1 border-gray-200 dark:border-gray-700">
    <ul class="flex gap-2 text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li role="presentation" class="shrink">
            <button class="inline-block w-full px-8 py-2 rounded-md focus:text-white focus:bg-[#01d8da]" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Home</button>
        </li>
        <li role="presentation" class="shrink">
            <button class="inline-block w-full px-8 py-2 rounded-md focus:text-white focus:bg-[#01d8da]" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Reports</button>
        </li>
    </ul>
   </div>

   <div class="p-3 grid gap-2 items-center justify-center">
      <div class="h-32 w-32 bg-[#01d8da] overflow-hidden border-4 border-violet-400 rounded-full flex items-center justify-center">
        <img src="<?php echo base_url('assets/images/profile_av.jpg') ?>" alt="profile pic">
      </div>
      <div class="text-center">
        <h5 class="font-bold text-xl">John Doe</h5>
        <p class="text-sky-600">Medical Doctor</p>
      </div>
   </div>

   <div class="pb-4 h-1/2 overflow-y-auto">
   <div id="myTabContent">
       <ul class="h-full px-3 pb-4 overflow-y-auto bg-white  dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <li x-data="{ expanded: false }">
                <a href="<?= site_url('') ?>">
                    <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                            </svg>
                            <span>Dashboard</span>
                        </span>
                    </button>
                </a>
            </li>
           

            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                   </svg>

                        <span>System Settings</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('settings/general') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>General Settings</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url('settings/payment_method') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Payments Method</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Settings</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('departiment') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Departiments</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('position') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Positions</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('category') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Categories</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>
                        <span>Billing Settings</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('labtest') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Lab-test Categories</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('procedure') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Procedures</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('surgical') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Surgical</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('surgical') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Services</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>

                        
                        <span>Staff</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('staff') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Add Staff</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('staff/staffs') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>All Staff</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>

                        
                        <span>Leave</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('staff') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Leave Type</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('staff/staffs') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Leave</span>
                        </a>
                    </li>
                </ul>
            </li>


             <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span>OutPatients</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('patient') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Register Patient</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Search Patient</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Patient Profile</span>
                        </a>
                    </li>
                </ul>
            </li>



            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l1.5 1.5.75-.75V8.758l2.276-.61a3 3 0 10-3.675-3.675l-.61 2.277H12l-.75.75 1.5 1.5M15 11.25l-8.47 8.47c-.34.34-.8.53-1.28.53s-.94.19-1.28.53l-.97.97-.75-.75.97-.97c.34-.34.53-.8.53-1.28s.19-.94.53-1.28L12.75 9M15 11.25L12.75 9" />
                   </svg>

                        <span>Medicine</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('patient') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Add Medicine</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>All Medicine</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Stock Alert</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Stack Movement</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Today Sales</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Inventory Management</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Sales</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span>Purchase Orders</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('patient') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Register Supplier</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>All Suppliers</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Place Order</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Order History</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span>Expenditure</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('patient') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Register Expenditure</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Request Expenditure</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>All Expenditures</span>
                        </a>
                    </li>
                </ul>
            </li>



            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span>Appointment</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('patient') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Today's Appointments</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Upcomming Appointments</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>All Appointments</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span>Schedule</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('patient') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Add Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>All Schedules</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span>Notices</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('patient') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Add Notice</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>All Notices</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span>Human Resources</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('patient') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Doctor</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Pharmacist</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Receptionist</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span>Financials </span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="<?= site_url('patient') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Due Collections</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/search') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span></span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?= site_url('patient/patient_profile') ?>" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Patient Profile</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li x-data="{ expanded: false }">
                <a href="<?= site_url('prescription') ?>">
                    <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                            </svg>
                            <span>Prescription</span>
                        </span>
                    </button>
                </a>
            </li>
            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>
                        <span>Payments</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="#" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Dashboard 1</span>
                        </a>
                    </li>
                    <li>
                        <a  href="#" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Dashboard 1</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li x-data="{ expanded: false }">
                <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>
                        <span>Departiments</span>
                    </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 stroke-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                <ul class="grid gap-2 pl-3" x-show="expanded" x-collapse>
                    <li>
                        <a  href="#" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Dashboard 1</span>
                        </a>
                    </li>
                    <li>
                        <a  href="#" class="flex items-center gap-2 hover:text-[#01d8da]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                            <span>Dashboard 1</span>
                        </a>
                    </li>
                </ul>
            </li>
       </ul>



       <ul class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <li x-data="{ expanded: false }">
                <a href="<?= site_url('dashboard') ?>">
                    <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span>System Report</span>
                        </span>
                    </button>
                </a>
            </li>

               <li x-data="{ expanded: false }">
                <a href="<?= site_url('dashboard') ?>">
                    <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span>System Report</span>
                        </span>
                    </button>
                </a>
            </li>

              <li x-data="{ expanded: false }">
                <a href="<?= site_url('dashboard') ?>">
                    <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span>System Report</span>
                        </span>
                    </button>
                </a>
            </li>


               <li x-data="{ expanded: false }">
                <a href="<?= site_url('dashboard') ?>">
                    <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span>System Report</span>
                        </span>
                    </button>
                </a>
            </li>

               <li x-data="{ expanded: false }">
                <a href="<?= site_url('dashboard') ?>">
                    <button type="button" @click="expanded = ! expanded" class="flex items-center justify-between w-full py-3 font-medium text-left text-gray-500 hover:text-[#01d8da]">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span>System Report</span>
                        </span>
                    </button>
                </a>
            </li>
       </ul>   
   </div>
 </div>
</aside>

<div class=" sm:ml-64 mt-14 mb-0">
    <div class="bg-[#01d8da] h-36 px-5 text-white relative pt-6 flex justify-between items-start">
        <div>
            <h3 class="text-xl font-bold">Dashboard</h3>
            <p>Welcome to Afyasoft</p>
        </div>

        <div class="flex gap-1 bg-[#02f9fd] rounded-3xl px-5 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-white stroke-white">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            <span>Afyasoft</span>
            <span class="text-slate-800">/</span>
            <span>dashboard</span>
        </div>
    </div>

    
