<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Admission;
use App\Models\Admin\Bed;
use App\Models\Admin\Doctor;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class AdmissionDataTable extends DataTable
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

            ->addColumn('doctor', function (Admission $admission) {
                if ($admission->doctor) {
                    return trim("{$admission->doctor->first_name} {$admission->doctor->surname} {$admission->doctor->other_names}");
                }
                return 'No Doctor';
            })

            ->addColumn('patient', function (Admission $admission) {
                $first_name =  $admission->patient->first_name ?? '';
                $surname =  $admission->patient->surname ?? '';
                $other_names =  $admission->patient->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Patient' if full name is empty
                return $full_name !== '' ? $full_name : 'No Patient';
            })


            ->addColumn('admission_type', function (Admission $admission) {
                return $admission->admissionTypes->type ?? 'No Admission Type';
            })

            ->addColumn('action', 'admin.admissions.datatables_actions');
        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Admission $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Admission $model)
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
            'patient',
            'admission_date',
            'doctor',
            'reason_for_admission',
            'discharge_status',
            'admission_type'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'admissions_datatable_' . time();
    }
}
