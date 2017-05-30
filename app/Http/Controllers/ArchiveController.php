<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reflection;
use App\Feedback;

class ArchiveController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$reflections = Reflection::orderBy('created_at','desc')->get();
		return view('archive.index', compact('reflections'));
	}
}
