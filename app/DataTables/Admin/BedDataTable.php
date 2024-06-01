<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Admission;
use App\Models\Admin\Bed;
use App\Models\Admin\Ward;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class BedDataTable extends DataTable
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
            ->addColumn('patient', function (Bed $bed) {
                $first_name =  $bed->patient->first_name ?? '';
                $surname =  $bed->patient->surname ?? '';
                $other_names =  $bed->patient->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Patient' if full name is empty
                return $full_name !== '' ? $full_name : 'No Patient';
            })
            ->addColumn('ward', function ($ward) {
                return $ward->ward->description;  })

            ->addColumn('bed_type', function (Bed $bed) {
                return $bed->bedTypes->type ?? 'No Bed Type';
            })




->addColumn('action', 'Admin.beds.datatables_actions');

        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Bed $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Bed $model)
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
            'bed_number',
            'occupancy_status',
            'ward',
            'bed_type',
            'patient',
            'bedside_equipment',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'beds_datatable_' . time();
    }
}
