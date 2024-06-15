<?php

namespace App\Http\Controllers;

use App\Models\Admin\Bed;
use App\Models\Admin\Department;
use App\Models\Admin\Laboratory;
use App\Models\Admin\Nurse;
use App\Models\Admin\Patient;
use App\Models\Admin\Physician;
use App\Models\Admin\Radiologist;
use App\Models\Admin\Technician;
use App\Models\Admin\Theatre;
use App\Models\Admin\Ward;
use Illuminate\Http\Request;
use App\Models\Admin\Doctor;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:admin-dashboard-list|admin-dashboard-create|admin-dashboard-edit|admin-dashboard-delete', ['only' => ['index','store']]);
        $this->middleware('permission:admin-dashboard-create', ['only' => ['create','store']]);
        $this->middleware('permission:admin-dashboard-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:admin-dashboard-delete', ['only' => ['destroy']]);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $totalDoctors = Doctor::count();
        $beds = Bed::count();
        $departments= Department::count();
        $laboratories= Laboratory::count();
        $nurses=Nurse::count();
        $patients=Patient::count();
        $physicians=Physician::count();
        $radiologists=Radiologist::count();
        $technicians=Technician::count();
        $theatres=Theatre::count();
        $wards=Ward::count();
        return view('home', compact('totalDoctors','nurses','beds','departments','laboratories','nurses','patients','physicians','radiologists','technicians','theatres','wards'));
    }
}
