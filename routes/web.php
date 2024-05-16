<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('admin/users', App\Http\Controllers\Admin\UserController::class)
    ->names([
        'index' => 'admin.users.index',
        'store' => 'admin.users.store',
        'show' => 'admin.users.show',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
        'create' => 'admin.users.create',
        'edit' => 'admin.users.edit'
    ]);
Route::resource('admin/inpatients', App\Http\Controllers\Admin\InpatientController::class)
    ->names([
        'index' => 'admin.inpatients.index',
        'store' => 'admin.inpatients.store',
        'show' => 'admin.inpatients.show',
        'update' => 'admin.inpatients.update',
        'destroy' => 'admin.inpatients.destroy',
        'create' => 'admin.inpatients.create',
        'edit' => 'admin.inpatients.edit'
    ]);
Route::resource('admin/titles', App\Http\Controllers\Admin\TitleController::class)
    ->names([
        'index' => 'admin.titles.index',
        'store' => 'admin.titles.store',
        'show' => 'admin.titles.show',
        'update' => 'admin.titles.update',
        'destroy' => 'admin.titles.destroy',
        'create' => 'admin.titles.create',
        'edit' => 'admin.titles.edit'
    ]);
Route::resource('admin/admission-checklists', App\Http\Controllers\Admin\AdmissionChecklistController::class)
    ->names([
        'index' => 'admin.admissionChecklists.index',
        'store' => 'admin.admissionChecklists.store',
        'show' => 'admin.admissionChecklists.show',
        'update' => 'admin.admissionChecklists.update',
        'destroy' => 'admin.admissionChecklists.destroy',
        'create' => 'admin.admissionChecklists.create',
        'edit' => 'admin.admissionChecklists.edit'
    ]);
Route::resource('admin/admissions', App\Http\Controllers\Admin\AdmissionController::class)
    ->names([
        'index' => 'admin.admissions.index',
        'store' => 'admin.admissions.store',
        'show' => 'admin.admissions.show',
        'update' => 'admin.admissions.update',
        'destroy' => 'admin.admissions.destroy',
        'create' => 'admin.admissions.create',
        'edit' => 'admin.admissions.edit'
    ]);
Route::resource('admin/bed_-types', App\Http\Controllers\Admin\Bed_TypeController::class)
    ->names([
        'index' => 'admin.bedTypes.index',
        'store' => 'admin.bedTypes.store',
        'show' => 'admin.bedTypes.show',
        'update' => 'admin.bedTypes.update',
        'destroy' => 'admin.bedTypes.destroy',
        'create' => 'admin.bedTypes.create',
        'edit' => 'admin.bedTypes.edit'
    ]);
Route::resource('admin/beds', App\Http\Controllers\Admin\BedController::class)
    ->names([
        'index' => 'admin.beds.index',
        'store' => 'admin.beds.store',
        'show' => 'admin.beds.show',
        'update' => 'admin.beds.update',
        'destroy' => 'admin.beds.destroy',
        'create' => 'admin.beds.create',
        'edit' => 'admin.beds.edit'
    ]);
Route::resource('admin/billings', App\Http\Controllers\Admin\BillingController::class)
    ->names([
        'index' => 'admin.billings.index',
        'store' => 'admin.billings.store',
        'show' => 'admin.billings.show',
        'update' => 'admin.billings.update',
        'destroy' => 'admin.billings.destroy',
        'create' => 'admin.billings.create',
        'edit' => 'admin.billings.edit'
    ]);
Route::resource('admin/departments', App\Http\Controllers\Admin\DepartmentController::class)
    ->names([
        'index' => 'admin.departments.index',
        'store' => 'admin.departments.store',
        'show' => 'admin.departments.show',
        'update' => 'admin.departments.update',
        'destroy' => 'admin.departments.destroy',
        'create' => 'admin.departments.create',
        'edit' => 'admin.departments.edit'
    ]);

    
Route::resource('admin/doctors', App\Http\Controllers\Admin\DoctorController::class)
    ->names([
        'index' => 'admin.doctors.index',
        'store' => 'admin.doctors.store',
        'show' => 'admin.doctors.show',
        'update' => 'admin.doctors.update',
        'destroy' => 'admin.doctors.destroy',
        'create' => 'admin.doctors.create',
        'edit' => 'admin.doctors.edit'
    ]);
Route::resource('admin/discharges', App\Http\Controllers\Admin\DischargeController::class)
    ->names([
        'index' => 'admin.discharges.index',
        'store' => 'admin.discharges.store',
        'show' => 'admin.discharges.show',
        'update' => 'admin.discharges.update',
        'destroy' => 'admin.discharges.destroy',
        'create' => 'admin.discharges.create',
        'edit' => 'admin.discharges.edit'
    ]);
Route::resource('admin/ward-types', App\Http\Controllers\Admin\WardTypeController::class)
    ->names([
        'index' => 'admin.wardTypes.index',
        'store' => 'admin.wardTypes.store',
        'show' => 'admin.wardTypes.show',
        'update' => 'admin.wardTypes.update',
        'destroy' => 'admin.wardTypes.destroy',
        'create' => 'admin.wardTypes.create',
        'edit' => 'admin.wardTypes.edit'
    ]);
Route::resource('admin/employment-statuses', App\Http\Controllers\Admin\EmploymentStatusController::class)
    ->names([
        'index' => 'admin.employmentStatuses.index',
        'store' => 'admin.employmentStatuses.store',
        'show' => 'admin.employmentStatuses.show',
        'update' => 'admin.employmentStatuses.update',
        'destroy' => 'admin.employmentStatuses.destroy',
        'create' => 'admin.employmentStatuses.create',
        'edit' => 'admin.employmentStatuses.edit'
    ]);
Route::resource('admin/imaging-results', App\Http\Controllers\Admin\ImagingResultController::class)
    ->names([
        'index' => 'admin.imagingResults.index',
        'store' => 'admin.imagingResults.store',
        'show' => 'admin.imagingResults.show',
        'update' => 'admin.imagingResults.update',
        'destroy' => 'admin.imagingResults.destroy',
        'create' => 'admin.imagingResults.create',
        'edit' => 'admin.imagingResults.edit'
    ]);
Route::resource('admin/insurances', App\Http\Controllers\Admin\InsuranceController::class)
    ->names([
        'index' => 'admin.insurances.index',
        'store' => 'admin.insurances.store',
        'show' => 'admin.insurances.show',
        'update' => 'admin.insurances.update',
        'destroy' => 'admin.insurances.destroy',
        'create' => 'admin.insurances.create',
        'edit' => 'admin.insurances.edit'
    ]);
Route::resource('admin/next-of-kins', App\Http\Controllers\Admin\NextOfKinController::class)
    ->names([
        'index' => 'admin.nextOfKins.index',
        'store' => 'admin.nextOfKins.store',
        'show' => 'admin.nextOfKins.show',
        'update' => 'admin.nextOfKins.update',
        'destroy' => 'admin.nextOfKins.destroy',
        'create' => 'admin.nextOfKins.create',
        'edit' => 'admin.nextOfKins.edit'
    ]);
Route::resource('admin/laboratories', App\Http\Controllers\Admin\LaboratoryController::class)
    ->names([
        'index' => 'admin.laboratories.index',
        'store' => 'admin.laboratories.store',
        'show' => 'admin.laboratories.show',
        'update' => 'admin.laboratories.update',
        'destroy' => 'admin.laboratories.destroy',
        'create' => 'admin.laboratories.create',
        'edit' => 'admin.laboratories.edit'
    ]);
Route::resource('admin/medical-records', App\Http\Controllers\Admin\MedicalRecordController::class)
    ->names([
        'index' => 'admin.medicalRecords.index',
        'store' => 'admin.medicalRecords.store',
        'show' => 'admin.medicalRecords.show',
        'update' => 'admin.medicalRecords.update',
        'destroy' => 'admin.medicalRecords.destroy',
        'create' => 'admin.medicalRecords.create',
        'edit' => 'admin.medicalRecords.edit'
    ]);
Route::resource('admin/nurses', App\Http\Controllers\Admin\NurseController::class)
    ->names([
        'index' => 'admin.nurses.index',
        'store' => 'admin.nurses.store',
        'show' => 'admin.nurses.show',
        'update' => 'admin.nurses.update',
        'destroy' => 'admin.nurses.destroy',
        'create' => 'admin.nurses.create',
        'edit' => 'admin.nurses.edit'
    ]);
Route::resource('admin/patients', App\Http\Controllers\Admin\PatientController::class)
    ->names([
        'index' => 'admin.patients.index',
        'store' => 'admin.patients.store',
        'show' => 'admin.patients.show',
        'update' => 'admin.patients.update',
        'destroy' => 'admin.patients.destroy',
        'create' => 'admin.patients.create',
        'edit' => 'admin.patients.edit'
    ]);
Route::resource('admin/relationships', App\Http\Controllers\Admin\RelationshipController::class)
    ->names([
        'index' => 'admin.relationships.index',
        'store' => 'admin.relationships.store',
        'show' => 'admin.relationships.show',
        'update' => 'admin.relationships.update',
        'destroy' => 'admin.relationships.destroy',
        'create' => 'admin.relationships.create',
        'edit' => 'admin.relationships.edit'
    ]);
Route::resource('admin/physicians', App\Http\Controllers\Admin\PhysicianController::class)
    ->names([
        'index' => 'admin.physicians.index',
        'store' => 'admin.physicians.store',
        'show' => 'admin.physicians.show',
        'update' => 'admin.physicians.update',
        'destroy' => 'admin.physicians.destroy',
        'create' => 'admin.physicians.create',
        'edit' => 'admin.physicians.edit'
    ]);
Route::resource('admin/radiologists', App\Http\Controllers\Admin\RadiologistController::class)
    ->names([
        'index' => 'admin.radiologists.index',
        'store' => 'admin.radiologists.store',
        'show' => 'admin.radiologists.show',
        'update' => 'admin.radiologists.update',
        'destroy' => 'admin.radiologists.destroy',
        'create' => 'admin.radiologists.create',
        'edit' => 'admin.radiologists.edit'
    ]);
Route::resource('admin/radiology-procedures', App\Http\Controllers\Admin\RadiologyProcedureController::class)
    ->names([
        'index' => 'admin.radiologyProcedures.index',
        'store' => 'admin.radiologyProcedures.store',
        'show' => 'admin.radiologyProcedures.show',
        'update' => 'admin.radiologyProcedures.update',
        'destroy' => 'admin.radiologyProcedures.destroy',
        'create' => 'admin.radiologyProcedures.create',
        'edit' => 'admin.radiologyProcedures.edit'
    ]);
Route::resource('admin/shifts', App\Http\Controllers\Admin\ShiftController::class)
    ->names([
        'index' => 'admin.shifts.index',
        'store' => 'admin.shifts.store',
        'show' => 'admin.shifts.show',
        'update' => 'admin.shifts.update',
        'destroy' => 'admin.shifts.destroy',
        'create' => 'admin.shifts.create',
        'edit' => 'admin.shifts.edit'
    ]);
Route::resource('admin/specialisations', App\Http\Controllers\Admin\SpecialisationController::class)
    ->names([
        'index' => 'admin.specialisations.index',
        'store' => 'admin.specialisations.store',
        'show' => 'admin.specialisations.show',
        'update' => 'admin.specialisations.update',
        'destroy' => 'admin.specialisations.destroy',
        'create' => 'admin.specialisations.create',
        'edit' => 'admin.specialisations.edit'
    ]);
Route::resource('admin/technicians', App\Http\Controllers\Admin\TechnicianController::class)
    ->names([
        'index' => 'admin.technicians.index',
        'store' => 'admin.technicians.store',
        'show' => 'admin.technicians.show',
        'update' => 'admin.technicians.update',
        'destroy' => 'admin.technicians.destroy',
        'create' => 'admin.technicians.create',
        'edit' => 'admin.technicians.edit'
    ]);
Route::resource('admin/theatres', App\Http\Controllers\Admin\TheatreController::class)
    ->names([
        'index' => 'admin.theatres.index',
        'store' => 'admin.theatres.store',
        'show' => 'admin.theatres.show',
        'update' => 'admin.theatres.update',
        'destroy' => 'admin.theatres.destroy',
        'create' => 'admin.theatres.create',
        'edit' => 'admin.theatres.edit'
    ]);
Route::resource('admin/wards', App\Http\Controllers\Admin\WardController::class)
    ->names([
        'index' => 'admin.wards.index',
        'store' => 'admin.wards.store',
        'show' => 'admin.wards.show',
        'update' => 'admin.wards.update',
        'destroy' => 'admin.wards.destroy',
        'create' => 'admin.wards.create',
        'edit' => 'admin.wards.edit'
    ]);
Route::resource('admin/admission-types', App\Http\Controllers\Admin\AdmissionTypeController::class)
    ->names([
        'index' => 'admin.admissionTypes.index',
        'store' => 'admin.admissionTypes.store',
        'show' => 'admin.admissionTypes.show',
        'update' => 'admin.admissionTypes.update',
        'destroy' => 'admin.admissionTypes.destroy',
        'create' => 'admin.admissionTypes.create',
        'edit' => 'admin.admissionTypes.edit'
    ]);
