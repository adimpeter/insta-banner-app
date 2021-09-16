<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image as ImageHandler;

class AdminController extends Controller
{
    public function index(){
        $images = ImageHandler::orderBy('updated_at', 'desc')->paginate(9);
        return view('admin.dashboard', compact('images'));
    }
}
