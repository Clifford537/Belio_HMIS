<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }} " >
    <i class="nav-icon fa fa-tachometer text-cyan" aria-hidden="true"></i>
        <p>Dashboard</p>
    </a>
</li>

@can('titles-list')
<li class="nav-item">
    <a href="{{ route('admin.titles.index') }}" class="nav-link {{ Request::is('admin/titles*') ? 'active' : '' }} ">
    <i class="nav-icon fa fa-user text-cyan" aria-hidden="true"></i>
        <p>Titles</p>
    </a>
</li>
@endcan

@can('patient-management')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-hospital-user text-cyan"></i>
            <p>
                Patient Management
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('patients-list')
            <li class="nav-item">
                <a href="{{ route('admin.patients.index') }}" class="nav-link {{ Request::is('admin/patients*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-wheelchair text-warning" aria-hidden="true"></i>
                    <p>Patients</p>
                </a>
            </li>
            @endcan
            @can('admissions-list')
                <li class="nav-item">
                    <a href="{{ route('admin.admissions.index') }}" class="nav-link {{ Request::is('admin/admissions*') ? 'active' : '' }} ">
                        <i class="nav-icon fa fa-pencil-square-o text-warning" aria-hidden="true"></i>
                        <p>Admissions</p>
                    </a>
                </li>
            @endcan
                @can('admission-types-list')
                <li class="nav-item">
                <a href="{{ route('admin.admissionTypes.index') }}" class="nav-link {{ Request::is('admin/admission-types*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-caret-square-o-down text-warning" aria-hidden="true"></i>
                    <p>Admission Types</p>
                </a>
            </li>
                @endcan

                @can('admission-checklist-list')
                <li class="nav-item">
                <a href="{{ route('admin.admissionChecklists.index') }}" class="nav-link {{ Request::is('admin/admission-checklists*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-th-list text-warning" aria-hidden="true"></i>
                    <p>Admission Checklists</p>
                </a>
            </li>
            <li class="nav-item">
                @endcan

                @can('discharge-list')
                <a href="{{ route('admin.discharges.index') }}" class="nav-link {{ Request::is('admin/discharges*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-sign-out text-warning" aria-hidden="true"></i>
                    <p>Discharges</p>
                </a>
            </li>
                @endcan

                @can('next-of-kin-list')
                <li class="nav-item">
                <a href="{{ route('admin.nextOfKins.index') }}" class="nav-link {{ Request::is('admin/next-of-kins*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-user-circle-o text-warning" aria-hidden="true"></i>
                    <p>Next Of Kins</p>
                </a>
            </li>
                @endcan

                @can('relationships-list')
                <li class="nav-item">
                <a href="{{ route('admin.relationships.index') }}" class="nav-link {{ Request::is('admin/relationships*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-heart text-warning" aria-hidden="true"></i>
                    <p>Relationships</p>
                </a>
            </li>
                @endcan
        </ul>
    </li>
@endcan

@can('administrative-management')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-tie text-cyan"></i>
            <p>
                Administrative Management
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('departments-list')
            <li class="nav-item">
                <a href="{{ route('admin.departments.index') }}" class="nav-link {{ Request::is('admin/departments*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-building text-warning" aria-hidden="true"></i>
                    <p>Departments</p>
                </a>
            </li>
            @endcan
                @can('admissions-list')
                <li class="nav-item">
                <a href="{{ route('admin.employmentStatuses.index') }}" class="nav-link {{ Request::is('admin/employment-statuses*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-briefcase text-warning" aria-hidden="true"></i>
                    <p>Employment Statuses</p>
                </a>
            </li>
                @endcan

                @can('shifts-list')
                    <li class="nav-item">
                <a href="{{ route('admin.shifts.index') }}" class="nav-link {{ Request::is('admin/shifts*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-random text-warning" aria-hidden="true"></i>
                    <p>Shifts</p>
                </a>
            </li>
                @endcan

                @can('specialisations-list')
                <li class="nav-item">
                <a href="{{ route('admin.specialisations.index') }}" class="nav-link {{ Request::is('admin/specialisations*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-cogs text-warning" aria-hidden="true"></i>
                    <p>Specialisations</p>
                </a>
            </li>
                @endcan



        </ul>
    </li>
@endcan

@can('finance-management')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-money-bill-wave text-cyan"></i>
            <p>
                Finance Management
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('billing-list')
            <li class="nav-item">
                <a href="{{ route('admin.billings.index') }}" class="nav-link {{ Request::is('admin/billings*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-money text-warning" aria-hidden="true"></i>
                    <p>Billings</p>
                </a>
            </li>
            @endcan
                @can('insurances-list')
                <li class="nav-item">
                <a href="{{ route('admin.insurances.index') }}" class="nav-link {{ Request::is('admin/insurances*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-shield text-warning" aria-hidden="true"></i>
                    <p>Insurances</p>
                </a>
            </li>
                    @endcan
            </a>
    </li>
    </ul>
    </li>
@endcan

@can('medical-personnel')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users text-cyan"></i>
            <p>
                Medical Personnel
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('doctor-list')
            <li class="nav-item">
                <a href="{{ route('admin.doctors.index') }}" class="nav-link {{ Request::is('admin/doctors*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-user-md text-warning" aria-hidden="true"></i>
                    <p>Doctors</p>
                </a>
            </li>
            @endcan
                @can('nurses-list')
                <li class="nav-item">
                <a href="{{ route('admin.nurses.index') }}" class="nav-link {{ Request::is('admin/nurses*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-user-nurse text-warning" aria-hidden="true"></i>
                    <p>Nurses</p>
                </a>
            </li>
                @endcan

                    @can('physicians-list')
                    <li class="nav-item">
                <a href="{{ route('admin.physicians.index') }}" class="nav-link {{ Request::is('admin/physicians*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-id-card text-warning" aria-hidden="true"></i>
                    <p>Physicians</p>
                </a>
            </li>
                @endcan

                @can('radiologists-list')
                <li class="nav-item">
                <a href="{{ route('admin.radiologists.index') }}" class="nav-link {{ Request::is('admin/radiologists*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-head-side-mask text-warning" aria-hidden="true"></i>
                    <p>Radiologists</p>
                </a>
            </li>
                @endcan

                @can('technicians-list')
                <li class="nav-item">
                <a href="{{ route('admin.technicians.index') }}" class="nav-link {{ Request::is('admin/technicians*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-wrench text-warning" aria-hidden="true"></i>
                    <p>Technicians</p>
                </a>
            </li>
                @endcan

        </ul>
    </li>
@endcan

@can('medical-records')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-medical text-cyan"></i>
            <p>
                Medical Records
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('medical-records-list')
            <li class="nav-item">
                <a href="{{ route('admin.medicalRecords.index') }}" class="nav-link {{ Request::is('admin/medical-records*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-folder-open-o text-warning" aria-hidden="true"></i>
                    <p class="green">Medical Records</p>
                </a>
            </li>
            @endcan
                @can('imaging-results-list')
                <li class="nav-item">
                <a href="{{ route('admin.imagingResults.index') }}" class="nav-link {{ Request::is('admin/imaging-results*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-picture-o text-warning" aria-hidden="true"></i>
                    <p>Imaging Results</p>
                </a>
            </li>
                @endcan

                @can('radiology-procedure-list')
                <li class="nav-item">
                <a href="{{ route('admin.radiologyProcedures.index') }}" class="nav-link {{ Request::is('admin/radiology-procedures*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-heartbeat text-warning" aria-hidden="true"></i>
                    <p>Radiology Procedures</p>
                </a>
            </li>
                @endcan
        </ul>
    </li>
@endcan

@can('facility-management')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-hospital-o text-cyan"></i>
            <p>
                Facility Management
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('bed-types-list')
            <li class="nav-item">
                <a href="{{ route('admin.bedTypes.index') }}" class="nav-link {{ Request::is('admin/bed_-types*') ? 'active' : '' }} ">

                    <i class="nav-icon fa fa-bed text-warning" aria-hidden="true"></i>
                    <p>Bed Types</p>
                </a>
            </li>
            @endcan
                @can('beds-list')
                <li class="nav-item">
                <a href="{{ route('admin.beds.index') }}" class="nav-link {{ Request::is('admin/beds*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-bed text-warning" aria-hidden="true"></i>
                    <p>Beds</p>
                </a>
            </li>
                @endcan
                @can('ward-types-list')
                <li class="nav-item">
                <a href="{{ route('admin.wardTypes.index') }}" class="nav-link {{ Request::is('admin/ward-types*') ? 'active' : '' }} ">

                    <i class="nav-icon fa fa-bed text-warning" aria-hidden="true"></i>
                    <p>Ward Types</p>
                </a>
            </li>
                @endcan
                @can('wards-list')
                <li class="nav-item">
                <a href="{{ route('admin.wards.index') }}" class="nav-link {{ Request::is('admin/wards*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-hospital text-warning" aria-hidden="true"></i>
                    <p>Wards</p>
                </a>
            </li>
                @endcan
                @can('theatres-list')
                <li class="nav-item">
                <a href="{{ route('admin.theatres.index') }}" class="nav-link {{ Request::is('admin/theatres*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-h-square text-warning" aria-hidden="true"></i>
                    <p>Theatres</p>
                </a>
            </li>
                @endcan

                @can('laboratories-list')
                <li class="nav-item">
                <a href="{{ route('admin.laboratories.index') }}" class="nav-link {{ Request::is('admin/laboratories*') ? 'active' : '' }} ">
                    </i><i class="nav-icon fa fa-flask red-color text-warning" aria-hidden="true"></i>
                    <p>Laboratories</p>
                </a>
            </li>
                @endcan
                @can('equipments-list')
                <li class="nav-item">
                <a href="{{ route('admin.equipment.index') }}" class="nav-link {{ Request::is('admin/equipment*') ? 'active' : '' }} ">
                    <i class="nav-icon fa fa-medkit text-warning" aria-hidden="true"></i>
                    <p>Equipments</p>
                </a>
            </li>
                    @endcan
        </ul>
    </li>
@endcan

@can('users-and-control-list')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-lock text-cyan"></i>
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

<!-- Add the system audit collapsible -->
@can('audit-module-list')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-search text-cyan"></i>
            <p>
                System Audit
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('audit-trails')
            <li class="nav-item">
                <a href="{{ route('admin.audits.index') }}" class="nav-link {{ Request::is('admin.audits*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-history text-warning"></i>
                    <p>Audit Trails</p>
                </a>
            </li>
            @endcan

            @can('logged-in-user')
            <li class="nav-item">
                <a href="{{ route('admin.logged-in-users') }}" class="nav-link {{ Request::is('admin.logged-in-users*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-id-badge text-warning"></i>
                    <p>Logged Users</p>
                </a>
            </li>
            @endcan

        </ul>
    </li>
@endcan
