<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }} " >
    <i class="nav-icon fa fa-tachometer text-warning" aria-hidden="true"></i>
        <p>Dashboard</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.titles.index') }}" class="nav-link {{ Request::is('admin/titles*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-user text-warning" aria-hidden="true"></i>
        <p>Titles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.admissionChecklists.index') }}" class="nav-link {{ Request::is('admin/admission-checklists*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-th-list text-warning" aria-hidden="true"></i>
        <p>Admission Checklists</p>
    </a>
</li>

@can('admissions-list')
<li class="nav-item">
    <a href="{{ route('admin.admissions.index') }}" class="nav-link {{ Request::is('admin/admissions*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-pencil-square-o text-warning" aria-hidden="true"></i>
        <p>Admissions</p>
    </a>
</li>
@endcan

<li class="nav-item">
    <a href="{{ route('admin.bedTypes.index') }}" class="nav-link {{ Request::is('admin/bed_-types*') ? 'active' : '' }} ">

    <i class="nav-icon fa fa-bed text-warning" aria-hidden="true"></i>
        <p>Bed Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.beds.index') }}" class="nav-link {{ Request::is('admin/beds*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-bed text-warning" aria-hidden="true"></i>
        <p>Beds</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.billings.index') }}" class="nav-link {{ Request::is('admin/billings*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-money text-warning" aria-hidden="true"></i>
        <p>Billings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.departments.index') }}" class="nav-link {{ Request::is('admin/departments*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-building text-warning" aria-hidden="true"></i>
        <p>Departments</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.doctors.index') }}" class="nav-link {{ Request::is('admin/doctors*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-user-md text-warning" aria-hidden="true"></i>
        <p>Doctors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.discharges.index') }}" class="nav-link {{ Request::is('admin/discharges*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-sign-out text-warning" aria-hidden="true"></i>
        <p>Discharges</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.wardTypes.index') }}" class="nav-link {{ Request::is('admin/ward-types*') ? 'active' : '' }} ">

    <i class="nav-icon fa fa-bed text-warning" aria-hidden="true"></i>
        <p>Ward Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.employmentStatuses.index') }}" class="nav-link {{ Request::is('admin/employment-statuses*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-briefcase text-warning" aria-hidden="true"></i>
        <p>Employment Statuses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.imagingResults.index') }}" class="nav-link {{ Request::is('admin/imaging-results*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-picture-o text-warning" aria-hidden="true"></i>
        <p>Imaging Results</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.insurances.index') }}" class="nav-link {{ Request::is('admin/insurances*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-shield text-warning" aria-hidden="true"></i>
        <p>Insurances</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.nextOfKins.index') }}" class="nav-link {{ Request::is('admin/next-of-kins*') ? 'active' : '' }} ">
        <i class="nav-icon fa fa-user-circle-o text-warning" aria-hidden="true"></i>
        <p>Next Of Kins</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.laboratories.index') }}" class="nav-link {{ Request::is('admin/laboratories*') ? 'active' : '' }} ">
  </i><i class="fa fa-flask red-color text-warning" aria-hidden="true"></i>
        <p>Laboratories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.medicalRecords.index') }}" class="nav-link {{ Request::is('admin/medical-records*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-folder-open-o text-warning" aria-hidden="true"></i>
        <p class="green">Medical Records</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.nurses.index') }}" class="nav-link {{ Request::is('admin/nurses*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-user-md text-warning" aria-hidden="true"></i>
        <p>Nurses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.patients.index') }}" class="nav-link {{ Request::is('admin/patients*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-wheelchair text-warning" aria-hidden="true"></i>
        <p>Patients</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.relationships.index') }}" class="nav-link {{ Request::is('admin/relationships*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-heart text-warning" aria-hidden="true"></i>
        <p>Relationships</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.physicians.index') }}" class="nav-link {{ Request::is('admin/physicians*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-user-md text-warning" aria-hidden="true"></i>
        <p>Physicians</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.radiologists.index') }}" class="nav-link {{ Request::is('admin/radiologists*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-user-md text-warning" aria-hidden="true"></i>
        <p>Radiologists</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.radiologyProcedures.index') }}" class="nav-link {{ Request::is('admin/radiology-procedures*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-heartbeat text-warning" aria-hidden="true"></i>
        <p>Radiology Procedures</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.shifts.index') }}" class="nav-link {{ Request::is('admin/shifts*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-random text-warning" aria-hidden="true"></i>
        <p>Shifts</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.specialisations.index') }}" class="nav-link {{ Request::is('admin/specialisations*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-cogs text-warning" aria-hidden="true"></i>
        <p>Specialisations</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.technicians.index') }}" class="nav-link {{ Request::is('admin/technicians*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-wrench text-warning" aria-hidden="true"></i>
        <p>Technicians</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.theatres.index') }}" class="nav-link {{ Request::is('admin/theatres*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-h-square text-warning" aria-hidden="true"></i>
        <p>Theatres</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.wards.index') }}" class="nav-link {{ Request::is('admin/wards*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-hospital text-warning" aria-hidden="true"></i>
        <p>Wards</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.admissionTypes.index') }}" class="nav-link {{ Request::is('admin/admission-types*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-caret-square-o-down text-warning" aria-hidden="true"></i>
        <p>Admission Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.equipment.index') }}" class="nav-link {{ Request::is('admin/equipment*') ? 'active' : '' }} ">
      <i class="nav-icon fa fa-medkit text-warning" aria-hidden="true"></i>
        <p>Equipments</p>
    </a>
</li>


@can('users-and-control-list')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-lock text-success"></i>
            <p>
                Users and Control
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">

            @can('user-list')
            <li class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users text-warning"></i>
                    <p>Users</p>
                </a>
            </li>
            @endcan

            @can('permission-list')
            <li class="nav-item">
                <a href="{{ route('admin.permissions.index') }}" class="nav-link {{ Request::is('admin.permissions*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-key text-warning"></i>
                    <p>Permissions</p>
                </a>
            </li>
                @endcan

                @can('role-list')
            <li class="nav-item">
                <a href="{{ route('admin.roles.index') }}" class="nav-link {{ Request::is('admin.roles*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-tag text-warning"></i>
                    <p>Roles</p>
                </a>
            </li>
                @endcan
        </ul>
    </li>
@endcan
