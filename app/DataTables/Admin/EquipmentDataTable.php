<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Equipment;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class EquipmentDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'admin.equipment.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Admin\Equipment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Equipment $model)
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
            'type',
            'serial_number',
            'manufacturer',
            'model',
            'purchase_date',
            'warranty_expiry_date',
            'location',
            'status',
            'last_maintenance_date',
            'next_maintenance_date',
            'cost',
            'notes',
            'laboratory_id'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'equipment_datatable_' . time();
    }
}
