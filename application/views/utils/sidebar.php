<aside class="px-1 py-2">
  <div id="scroll-snap">
    <ul class="nav nav-pills mb-3 bg-white p-1 rounded" id="pills-tab" role="tablist">
      <li class="nav-item w-50" role="presentation">
        <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
      </li>
      <li class="nav-item w-50" role="presentation">
        <button class="nav-link w-100 " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reports</button>
      </li>
    </ul>
    <div class="text-center">
       <img src="<?php echo base_url('public/images/doctors/member1.png') ?>" style="box-shadow: 5px 5px 5px 5px rgb(236, 233, 233)" class="border border-3 p-1 border-white rounded-circle mx-auto d-block overflow-hidden" width="100" height="100" alt="Profile">
       <div>
         <h5>Dr John</h5>
         <p>Medical Doctor</p>
       </div>
    </div>
  </div>
  <div class="tab-content bg-white" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
       <ul class="d-grid gap-3 px-1 py-3">
          <li class="d-flex justify-content-between align-items-center">
            <a href="<?= site_url('') ?>" class="d-flex gap-2 align-items-center list-hover-effect">
              <i class="bi bi-house-door"></i>
              <span>Dashboard</span>
            </a>
            <!-- <i class="bi bi-chevron-right"></i> -->
          </li>

          <li class="d-grid gap-2" id="flip9">
            <div class="d-flex justify-content-between align-items-center list-hover-effect">
              <div class="d-flex gap-2 align-items-center">
              <i class="bi bi-gear-wide-connected"></i>
                <span> System Settings</span>
              </div>
              <i class="bi bi-chevron-right fs-6"></i>
            </div>
            <div class="drop-down-panel1">
               <ul class="d-grid gap-2">
                  <li>
                    <a href="<?php echo base_url('setting/general_setting') ?>"  class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>General settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('position') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Payment Account</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('category') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Register category</span>
                    </a>
                  </li>
               </ul>
            </div>
          </li>
          <li class="d-grid gap-2" id="flip1">
            <div class="d-flex justify-content-between align-items-center list-hover-effect">
              <div class="d-flex gap-2 align-items-center">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
              </div>
              <i class="bi bi-chevron-right fs-6"></i>
            </div>
            <div class="drop-down-panel1">
               <ul class="d-grid gap-2">
                  <li>
                    <a href="<?= site_url('departiment') ?>"  class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Register departiment</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('position') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Register position</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('category') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Register category</span>
                    </a>
                  </li>
               </ul>
            </div>
          </li>

          <li class="d-grid gap-2" id="flip2">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex gap-2 align-items-center list-hover-effect">
                <i class="bi bi-gear-fill"></i>
                <span>Billing Settings</span>
              </div>
              <i class="bi bi-chevron-right fs-6"></i>
            </div>
            <div class="drop-down-panel2">
               <ul class="d-grid gap-2">
                  <li>
                    <a href="<?= site_url('labtest') ?>"  class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Lab test price</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('procedure') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Procedure price</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('surgical') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Surgical price</span>
                    </a>
                  </li>
               </ul>
            </div>
          </li>

          <li class="d-grid gap-2" id="flip4">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex gap-2 align-items-center list-hover-effect">
                <i class="bi bi-person"></i>
                <span>Staff</span>
              </div>
              <i class="bi bi-chevron-right fs-6"></i>
            </div>
            <div class="drop-down-panel4">
               <ul class="d-grid gap-2">
                  <li>
                    <a href="<?= site_url('staff') ?>"  class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Add staff</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= site_url('staff/staffs') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>All staff</span>
                    </a>
                  </li>
                  <!-- <li>
                    <a href="<?php //site_url('surgical') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Surgical price</span>
                    </a>
                  </li> -->
               </ul>
            </div>
          </li>

          <li class="d-grid gap-2" id="flip3">
            <div class="d-flex justify-content-between align-items-center list-hover-effect">
              <div class="d-flex gap-2 align-items-center">
                <i class="bi bi-people"></i>
                <span>Patients</span>
              </div>
              <i class="bi bi-chevron-right fs-6"></i>
            </div>
            <div class="drop-down-panel3">
               <ul class="d-grid gap-2">
                  <li>
                    <a href="<?php echo base_url('patient/create') ?>"  class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Register patient</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Patient/all_patient') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Patient profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('setting/get_setting') ?>" class=" d-flex gap-2 align-items-center list-hover-effect">
                      <span>Patient profile</span>
                    </a>
                  </li>
               </ul>
            </div>
          </li>

          <li class="d-flex justify-content-between pl-2 align-items-center">
            <div class="d-flex gap-2 align-items-center">
              <i class="bi bi-sliders"></i>
              <span>Prescriptions</span>
            </div>
          </li>

          <li class="d-flex justify-content-between pl-2 align-items-center">
            <div class="d-flex gap-2 align-items-center">
              <i class="bi bi-credit-card-2-back"></i>
              <span>Payments</span>
            </div>
            <i class="bi bi-chevron-right fs-6"></i>
          </li>

          <li class="d-flex justify-content-between pl-2 align-items-center">
            <div class="d-flex gap-2 align-items-center">
              <i class="bi bi-sliders2-vertical"></i>
              <span>Departiments</span>
            </div>
            <i class="bi bi-chevron-right fs-6"></i>
          </li>

       </ul>
    </div>


    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
      <ul class="d-grid gap-3 px-2 py-4 reports-list">
          <li class="d-flex justify-content-between align-items-center list-hover-effect">
            <a href="#reports" class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </a>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 align-items-center">
              <i class="bi bi-file-earmark-pdf"></i>
              <span>Daily Report</span>
            </div>
          </li>
      </ul>
    </div>
  </div>
</aside>