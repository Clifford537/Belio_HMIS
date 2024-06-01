<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Doctor;
use App\Models\Admin\Radiologist;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RadiologistDataTable extends DataTable
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
            ->addColumn('department', function (Radiologist $radiologist) {
                return $radiologist->department->name ?? 'No Department';})

            ->addColumn('specialisation', function (Radiologist $radiologist) {
                return $radiologist->specialisation->specialty ?? 'No Specialization';})


        ->addColumn('action', 'Admin.radiologists.datatables_actions');
                return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Radiologist $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Radiologist $model)
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
            'name',
            'specialization',
            'phone_number',
            'email',
            'department'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'radiologists_datatable_' . time();
    }
}
