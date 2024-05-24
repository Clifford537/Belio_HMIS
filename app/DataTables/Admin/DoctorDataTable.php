<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Doctor;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class DoctorDataTable extends DataTable
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
        ->addColumn('specialisation', function (Doctor $doctor) {
            return $doctor->specialisation->specialty ?? 'No Specialization';
        })
        ->addColumn('employment_status', function (Doctor $doctor) {
            return $doctor->employmentStatus->status ?? 'No Status';

        })
        ->addColumn('department', function (Doctor $doctor) {
            return $doctor->department->name ?? 'No Department';
        })
        ->addColumn('shift', function (Doctor $doctor) {
            return optional($doctor->shift)->dayOfTheWeek ?? 'No Shift';
        })


        ->addColumn('action', 'Admin.doctors.datatables_actions');
    return $dataTable;
}
    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Doctor $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Doctor $model)
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
            'date_of_birth',
            'gender',
            'phone_number',
            'address',
            'email',
            'specialisation',
            'first_name',
            'surname',
            'other_names',
            'lisence_number',
            'years_of_experience',
            'employment_status',
            'shift',
            'department',

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'doctors_datatable_' . time();
    }
}
