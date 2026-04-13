<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function downloadExcel(Lead $lead)
    {
        abort_unless($lead->excel_file && Storage::disk('private')->exists($lead->excel_file), 404);

        return Storage::disk('private')->download(
            $lead->excel_file,
            $lead->company . '_excel.' . pathinfo($lead->excel_file, PATHINFO_EXTENSION)
        );
    }
}
