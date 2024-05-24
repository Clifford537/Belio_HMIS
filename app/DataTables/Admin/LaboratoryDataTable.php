<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Admission;
use App\Models\Admin\Equipment;
use App\Models\Admin\Technician;
use App\Models\Admin\Department;
use App\Models\Admin\Laboratory;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class LaboratoryDataTable extends DataTable
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
            ->addColumn('technician', function (Laboratory $laboratory) {
                if ($laboratory->technician) {
                    return trim("{$laboratory->technician->first_name} {$laboratory->technician->surname} {$laboratory->technician->other_names}");
                }
                return 'No Technician';
            })
            ->addColumn('department', function (Laboratory $laboratory) {
                return $laboratory->department->name ?? 'No Department';
            })
        -> addColumn('equipment', function (Equipment $equipment) {
        return $equipment->equipment->name ?? 'No Equipment';
    });


        addColumn('action', 'Admin.laboratories.datatables_actions');
        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Laboratory $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Laboratory $model)
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
            'department',
            'location',
            'status',
            'equipment',
            'technician'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'laboratories_datatable_' . time();
    }
}
