<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Admission;
use App\Models\Admin\Insurance;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class InsuranceDataTable extends DataTable
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
            ->addColumn('patient_full_name', function (Insurance $insurance) {
                $first_name = $insurance->patient->first_name ?? '';
                $surname = $insurance->patient->surname ?? '';
                $other_names = $insurance->patient->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Patient' if full name is empty
                return $full_name !== '' ? $full_name : 'No Patient';
            });


        return $dataTable->addColumn('action', 'Admin.insurances.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Insurance $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Insurance $model)
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
            'insurance_company',
            'policy_number',
            'coverage_start_date',
            'coverage_end_date',
            'billing_information',
            'patient_full_name'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'insurances_datatable_' . time();
    }
}
