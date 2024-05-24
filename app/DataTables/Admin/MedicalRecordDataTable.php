<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Admission;
use App\Models\Admin\MedicalRecord;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class MedicalRecordDataTable extends DataTable
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
            ->addColumn('patient_full_name', function (MedicalRecord $medicalRecord) {
                $first_name = $medicalRecord->patient->first_name ?? '';
                $surname = $medicalRecord->patient->surname ?? '';
                $other_names = $medicalRecord->patient->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Patient' if full name is empty
                return $full_name !== '' ? $full_name : 'No Patient';
            })
            ->addColumn('nurse_full_name', function (MedicalRecord $medicalRecord) {
                $first_name = $medicalRecord->nurse->first_name ?? '';
                $surname = $medicalRecord->nurse->surname ?? '';
                $other_names = $medicalRecord->nurse->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Nurse' if full name is empty
                return $full_name !== '' ? $full_name : 'No Nurse';
            })
            ->addColumn('doctor_full_name', function (MedicalRecord $medicalRecord) {
                $first_name = $medicalRecord->patient->first_name ?? '';
                $surname = $medicalRecord->patient->surname ?? '';
                $other_names = $medicalRecord->patient->other_names ?? '';

                // Concatenate the names with a space between them
                $full_name = trim("$first_name $surname $other_names");

                // Return 'No Doctor' if full name is empty
                return $full_name !== '' ? $full_name : 'No Doctor';

            });

        return $dataTable->addColumn('action', 'Admin.medical_records.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\MedicalRecord $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(MedicalRecord $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder
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
            'visit_date',
            'medical_history',
            'diagnoses',
            'treatments',
            'lab_results',
            'imaging_studies',
            'progress_notes',
            'patient_full_name',
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
        return 'medical_records_datatable_' . time();
    }
}
