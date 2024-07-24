<?php

namespace App\Http\Controllers;

use App\Models\BatchCourseView;
use Illuminate\Http\Request;

class BatchCourseController extends Controller
{
    public function show($id)
    {
        $data = BatchCourseView::where('batch_id', $id)->first();
        
     
        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }
}

