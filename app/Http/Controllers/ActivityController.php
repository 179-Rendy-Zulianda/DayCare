<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        // Ambil semua anak milik user login
        $children = Auth::user()->children()->with('activities')->get();
        return view('aktivitas', compact('children'));
    }
} 