<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'admin-dashboard-list',

            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',

            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'titles-list',
            'titles-create',
            'titles-edit',
            'titles-delete',

            'admissions-list',
            'admissions-create',
            'admissions-edit',
            'admissions-delete',

            'admission-checklist-list',
            'admission-checklist-create',
            'admission-checklist-edit',
            'admission-checklist-delete',

            'bed-types-list',
            'bed-types-create',
            'bed-types-edit',
            'bed-types-delete',

            'beds-list',
            'beds-create',
            'beds-edit',
            'beds-delete',

            'billing-list',
            'billing-create',
            'billing-edit',
            'billing-delete',

            'departments-list',
            'departments-create',
            'departments-edit',
            'departments-delete',

            'doctor-list',
            'doctor-create',
            'doctor-edit',
            'doctor-delete',

            'discharge-list',
            'discharge-create',
            'discharge-edit',
            'discharge-delete',

            'ward-types-list',
            'ward-types-create',
            'ward-types-edit',
            'ward-types-delete',

            'employment-status-list',
            'employment-status-create',
            'employment-status-edit',
            'employment-status-delete',

            'imaging-results-list',
            'imaging-results-create',
            'imaging-results-edit',
            'imaging-results-delete',

            'insurances-list',
            'insurances-create',
            'insurances-edit',
            'insurances-delete',

            'next-of-kin-list',
            'next-of-kin-create',
            'next-of-kin-edit',
            'next-of-kin-delete',

            'laboratories-list',
            'laboratories-create',
            'laboratories-edit',
            'laboratories-delete',

            'medical-records-list',
            'medical-records-create',
            'medical-records-edit',
            'medical-records-delete',

            'nurses-list',
            'nurses-create',
            'nurses-edit',
            'nurses-delete',

            'patients-list',
            'patients-create',
            'patients-edit',
            'patients-delete',

            'relationships-list',
            'relationships-create',
            'relationships-edit',
            'relationships-delete',

            'physicians-list',
            'physicians-create',
            'physicians-edit',
            'physicians-delete',

            'radiologists-list',
            'radiologists-create',
            'radiologists-edit',
            'radiologists-delete',

            'radiology-procedure-list',
            'radiology-procedure-create',
            'radiology-procedure-edit',
            'radiology-procedure-delete',

            'shifts-list',
            'shifts-create',
            'shifts-edit',
            'shifts-delete',

            'specialisations-list',
            'specialisations-create',
            'specialisations-edit',
            'specialisations-delete',

            'technicians-list',
            'technicians-create',
            'technicians-edit',
            'technicians-delete',

            'theatres-list',
            'theatres-create',
            'theatres-edit',
            'theatres-delete',

            'wards-list',
            'wards-create',
            'wards-edit',
            'wards-delete',

            'admission-types-list',
            'admission-types-create',
            'admission-types-edit',
            'admission-types-delete',

            'equipments-list',
            'equipments-create',
            'equipments-edit',
            'equipments-delete',

        ];

        foreach ($data as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
