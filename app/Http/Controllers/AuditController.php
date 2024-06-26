<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;

class AuditController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:audit-list|audit-create|audit-edit|audit-delete', ['only' => ['index','store']]);
        $this->middleware('permission:audit-create', ['only' => ['create','store']]);
        $this->middleware('permission:audit-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:audit-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $audits = Audit::orderBy('created_at', 'desc')->get(); // Retrieve audits from the database
        return view('admin.audits.index', compact('audits'));
    }

    public function show($id)
    {
        $audit = Audit::findOrFail($id); // Retrieve a single audit by its ID
        return view('admin.audits.show', compact('audit'));
    }
}
