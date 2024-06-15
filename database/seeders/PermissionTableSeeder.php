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


            'adhoc-list',
            'adhoc-create',
            'adhoc-edit',
            'adhoc-delete',

            'admission-list',
            'admission-create',
            'admission-edit',
            'admission-delete',


            'assessment-list',
            'assessment-create',
            'assessment-edit',
            'assessment-delete',


            'assessmenttype-list',
            'assessmenttype-create',
            'assessmenttype-edit',
            'assessmenttype-delete',



            'bulksmsaccount-list',
            'bulksmsaccount-create',
            'bulksmsaccount-edit',
            'bulksmsaccount-delete',

            'bulksms-list',
            'bulksms-create',
            'bulksms-edit',
            'bulksms-delete',

            'communication-list',
            'communication-create',
            'communication-edit',
            'communication-delete',

            'expensecategory-list',
            'expensecategory-create',
            'expensecategory-edit',
            'expensecategory-delete',

            'expense-list',
            'expense-create',
            'expense-edit',
            'expense-delete',

            'feebalance-list',
            'feebalance-create',
            'feebalance-edit',
            'feebalance-delete',

            'feebalances-list',
            'feebalances-create',
            'feebalances-edit',
            'feebalances-delete',

            'feepayment-list',
            'feepayment-create',
            'feepayment-edit',
            'feepayment-delete',

            'grade-list',
            'grade-create',
            'grade-edit',
            'grade-delete',

            'gradelearningarea-list',
            'gradelearningarea-create',
            'gradelearningarea-edit',
            'gradelearningarea-delete',

            'guardian-list',
            'guardian-create',
            'guardian-edit',
            'guardian-delete',

            'invoice-list',
            'invoice-create',
            'invoice-edit',
            'invoice-delete',


            'invoicereport-list',
            'invoicereport-create',
            'invoicereport-edit',
            'invoicereport-delete',


            'learningarea-list',
            'learningarea-create',
            'learningarea-edit',
            'learningarea-delete',

            'parentchild-list',
            'parentchild-create',
            'parentchild-edit',
            'parentchild-delete',


            'paymentmode-list',
            'paymentmode-create',
            'paymentmode-edit',
            'paymentmode-delete',


            'profile-list',
            'profile-create',
            'profile-edit',
            'profile-delete',

            'result-list',
            'result-create',
            'result-edit',
            'result-delete',

            'rubric-list',
            'rubric-create',
            'rubric-edit',
            'rubric-delete',

            'teacher-list',
            'teacher-create',
            'teacher-edit',
            'teacher-delete',



            'votehead-list',
            'votehead-create',
            'votehead-edit',
            'votehead-delete',

            'admin-dashboard-list',
            'admin-dashboard-create',
            'admin-dashboard-edit',
            'admin-dashboard-delete',

            'user-dashboard-list',
            'user-dashboard-create',
            'user-dashboard-edit',
            'user-dashboard-delete',


            'examination-module-list',
            'examination-module-create',
            'examination-module-edit',
            'examination-module-delete',



            'finance-module-list',
            'finance-module-create',
            'finance-module-edit',
            'finance-module-delete',


            'settings-list',
            'settings-create',
            'settings-edit',
            'settings-delete',


            'users-and-control-list',
            'users-and-control-create',
            'users-and-control-edit',
            'users-and-control-delete',

            'teachers-and-parents-list',
            'teachers-and-parents-create',
            'teachers-and-parents-edit',
            'teachers-and-parents-delete',


            'admission-module-list',
            'admission-module-create',
            'admission-module-edit',
            'admission-module-delete',

            'communication-module-list',
            'communication-module-create',
            'communication-module-edit',
            'communication-module-delete',

        ];

        foreach ($data as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
