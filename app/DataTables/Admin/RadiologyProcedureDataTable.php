<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Bed;
use App\Models\Admin\Doctor;
use App\Models\Admin\Nurse;
use App\Models\Admin\RadiologyProcedure;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RadiologyProcedureDataTable extends DataTable
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
            ->addColumn('patient', function (RadiologyProcedure $radiologyProcedure) {
                $first_name =  $radiologyProcedure->patient->first_name ?? '';
                $surname =  $radiologyProcedure->patient->surname ?? '';
                $other_names =  $radiologyProcedure->patient->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Patient' if full name is empty
                return $full_name !== '' ? $full_name : 'No Patient';
            })

            ->addColumn('doctor', function (RadiologyProcedure $radiologyProcedure) {
                $first_name = $radiologyProcedure->doctor->first_name ?? '';
                $surname = $radiologyProcedure->doctor->surname ?? '';
                $other_names = $radiologyProcedure->doctor->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Doctor' if full name is empty
                return $full_name !== '' ? $full_name : 'No Doctor';
            })

            ->addColumn('radiologist_name', function (RadiologyProcedure $radiologyProcedure) {
                return $radiologyProcedure->radiologist->name ?? 'No Department';
            })

        ->addColumn('action', 'Admin.radiology_procedures.datatables_actions');
        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\RadiologyProcedure $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RadiologyProcedure $model)
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
            'patient_full_name',
            'procedure_code',
            'procedure_date',
            'description',
            'doctor',
            'radiologist_name',
            'procedure_notes',
            'procedure_results',
            'procedure_cost',
            'insurance_id',
            'procedure_location',
            'theatre_id'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'radiology_procedures_datatable_' . time();
    }
}
