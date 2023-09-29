<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Categories;
use App\Models\User;
use Carbon\Carbon;
use League\CommonMark\Extension\Table\Table;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProjects = Projects::count();
        $totalCategory = Categories::count();
        $totalUser = User::count();
        $data = Projects::select('id', 'created_at')->get()->groupBy(function ($data) {
            return Carbon::parse($data->created_at)->format('M');
        });

        $months = [];
        $monthCount = [];

        foreach ($data as $month => $values) {
            $months[] = $month;
            $monthCount[] = count($values);
        }

        return view('dashboard.index', compact('totalProjects', 'totalCategory', 'totalUser'), [
            'projects' => Projects::where('user_id', auth()->user()->id)->latest()->get(),
            'data' => $data,
            'months' => $months,
            'monthCount' => $monthCount,
            'title' => 'Dashboard',

        ]);
    }
}
