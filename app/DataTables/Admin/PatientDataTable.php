<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Admission;
use App\Models\Admin\Doctor;
use App\Models\Admin\MedicalRecord;
use App\Models\Admin\Patient;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PatientDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        $dataTable
            ->addColumn('doctor_full_name', function (Doctor $doctor) {
                $first_name = $doctor->doctor->first_name ?? '';
                $surname = $doctor->doctor->surname ?? '';
                $other_names = $doctor->doctor->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Doctor' if full name is empty
                return $full_name !== '' ? $full_name : 'No Doctor';

            })
            ->addColumn('nurse_full_name', function (Nurse $nurse) {
                $first_name = $nurse->nurse->first_name ?? '';
                $surname = $nurse->nurse->surname ?? '';
                $other_names = $nurse->nurse->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Nurse' if full name is empty
                return $full_name !== '' ? $full_name : 'No Nurse';
            })

        ->addColumn('action', 'Admin.patients.datatables_actions');
        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Patient $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Patient $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    // Enable Buttons as per your need
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'gender',
            'phone_number',
            'address',
            'email',
            'blood_group',
            'first_name',
            'surname',
            'other_names',
            'emergency_contact_name',
            'emergency_contact_phone',
            'status',
            'insurance',
            'nurse_full_name',
            'doctor_full_name'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'patients_datatable_' . time();
    }
}
