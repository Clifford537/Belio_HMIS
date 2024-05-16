<!-- need to remove -->

<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }} text-success" >
    <i class="fa fa-tachometer text-warning" aria-hidden="true"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.users.index') }}" class="nav-link {{ Request::is('admin.users*') ? 'active' : '' }} text-success">
       <i class="fa fa-users text-warning" aria-hidden="true"></i>
        <p>Users</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('admin.titles.index') }}" class="nav-link {{ Request::is('admin.titles*') ? 'active' : '' }} text-success">
    <i class="fa fa-user text-warning" aria-hidden="true"></i>
        <p>Titles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.admissionChecklists.index') }}" class="nav-link {{ Request::is('admin.admissionChecklists*') ? 'active' : '' }} text-success">
    <i class="fa fa-th-list text-warning" aria-hidden="true"></i>
        <p>Admission Checklists</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.admissions.index') }}" class="nav-link {{ Request::is('admin.admissions*') ? 'active' : '' }} text-success">
    <i class="fa fa-pencil-square-o text-warning" aria-hidden="true"></i>
        <p>Admissions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.bedTypes.index') }}" class="nav-link {{ Request::is('admin.bedTypes*') ? 'active' : '' }} text-success">
    
    <i class="fa fa-bed text-warning" aria-hidden="true"></i>
        <p>Bed  Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.beds.index') }}" class="nav-link {{ Request::is('admin.beds*') ? 'active' : '' }} text-success">
    <i class="fa fa-bed text-warning" aria-hidden="true"></i>
        <p>Beds</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.billings.index') }}" class="nav-link {{ Request::is('admin.billings*') ? 'active' : '' }} text-success">
    <i class="fa fa-money text-warning" aria-hidden="true"></i>
        <p>Billings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.departments.index') }}" class="nav-link {{ Request::is('admin.departments*') ? 'active' : '' }} text-success">
    <i class="fa fa-building text-warning" aria-hidden="true"></i>
        <p>Departments</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.doctors.index') }}" class="nav-link {{ Request::is('admin.doctors*') ? 'active' : '' }} text-success">
    <i class="fa fa-user-md text-warning" aria-hidden="true"></i>
        <p>Doctors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.discharges.index') }}" class="nav-link {{ Request::is('admin.discharges*') ? 'active' : '' }} text-success">
    <i class="fa fa-sign-out text-warning" aria-hidden="true"></i>
        <p>Discharges</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.wardTypes.index') }}" class="nav-link {{ Request::is('admin.wardTypes*') ? 'active' : '' }} text-success">
   
    <i class="fa fa-bed text-warning" aria-hidden="true"></i>
        <p>Ward Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.employmentStatuses.index') }}" class="nav-link {{ Request::is('admin.employmentStatuses*') ? 'active' : '' }} text-success">
    <i class="fa fa-briefcase text-warning" aria-hidden="true"></i>
        <p>Employment Statuses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.imagingResults.index') }}" class="nav-link {{ Request::is('admin.imagingResults*') ? 'active' : '' }} text-success">
    <i class="fa fa-picture-o text-warning" aria-hidden="true"></i>
        <p>Imaging Results</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.insurances.index') }}" class="nav-link {{ Request::is('admin.insurances*') ? 'active' : '' }} text-success">
    <i class="fa fa-shield text-warning" aria-hidden="true"></i>
        <p>Insurances</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.nextOfKins.index') }}" class="nav-link {{ Request::is('admin.nextOfKins*') ? 'active' : '' }} text-success">
        <i class="fa fa-user-circle-o text-warning" aria-hidden="true"></i>
        <p>Next Of Kins</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.laboratories.index') }}" class="nav-link {{ Request::is('admin.laboratories*') ? 'active' : '' }} text-success">
  </i><i class="fa fa-flask red-color text-warning" aria-hidden="true"></i>
        <p>Laboratories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.medicalRecords.index') }}" class="nav-link {{ Request::is('admin.medicalRecords*') ? 'active' : '' }} text-success">
    <i class="fa fa-folder-open-o text-warning" aria-hidden="true"></i>
        <p class="green">Medical Records</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.nurses.index') }}" class="nav-link {{ Request::is('admin.nurses*') ? 'active' : '' }} text-success">
    <i class="fa fa-user-md text-warning" aria-hidden="true"></i>
        <p>Nurses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.patients.index') }}" class="nav-link {{ Request::is('admin.patients*') ? 'active' : '' }} text-success">
    <i class="fa fa-wheelchair text-warning" aria-hidden="true"></i>
        <p>Patients</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.relationships.index') }}" class="nav-link {{ Request::is('admin.relationships*') ? 'active' : '' }} text-success">
    <i class="fa fa-heart text-warning" aria-hidden="true"></i>
        <p>Relationships</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.physicians.index') }}" class="nav-link {{ Request::is('admin.physicians*') ? 'active' : '' }} text-success">
    <i class="fa fa-user-md text-warning" aria-hidden="true"></i>
        <p>Physicians</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.radiologists.index') }}" class="nav-link {{ Request::is('admin.radiologists*') ? 'active' : '' }} text-success">
    <i class="fa fa-user-md text-warning" aria-hidden="true"></i>
        <p>Radiologists</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.radiologyProcedures.index') }}" class="nav-link {{ Request::is('admin.radiologyProcedures*') ? 'active' : '' }} text-success">
    <i class="fa fa-heartbeat text-warning" aria-hidden="true"></i>
        <p>Radiology Procedures</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.shifts.index') }}" class="nav-link {{ Request::is('admin.shifts*') ? 'active' : '' }} text-success">
    <i class="fa fa-random text-warning" aria-hidden="true"></i>
        <p>Shifts</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.specialisations.index') }}" class="nav-link {{ Request::is('admin.specialisations*') ? 'active' : '' }} text-success">
    <i class="fa fa-cogs text-warning" aria-hidden="true"></i>
        <p>Specialisations</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.technicians.index') }}" class="nav-link {{ Request::is('admin.technicians*') ? 'active' : '' }} text-success">
    <i class="fa fa-wrench text-warning" aria-hidden="true"></i>
        <p>Technicians</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.theatres.index') }}" class="nav-link {{ Request::is('admin.theatres*') ? 'active' : '' }} text-success">
    <i class="fa fa-h-square text-warning" aria-hidden="true"></i>
        <p>Theatres</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.wards.index') }}" class="nav-link {{ Request::is('admin.wards*') ? 'active' : '' }} text-success">
    <i class="fa fa-hospital text-warning" aria-hidden="true"></i>
        <p>Wards</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.admissionTypes.index') }}" class="nav-link {{ Request::is('admin.admissionTypes*') ? 'active' : '' }} text-success">
    <i class="fa fa-caret-square-o-down text-warning" aria-hidden="true"></i>
        <p>Admission Types</p>
    </a>
</li>

