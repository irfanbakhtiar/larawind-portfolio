<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('categories')) {
            $categories = Categories::firstWhere('slug', request('categories'));
            $title = ' in ' . $categories->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('projects', [
            "title" => "Projects",
            "projects" => Projects::latest()->filter(request(['search', 'categories', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Projects $projects)
    {
        return view('project', [
            "title" => $projects->title,
            "project" => $projects
        ]);
    }

    public function author(User $author)
    {
        return view('author', [
            "title" => 'Author',
            "author" => User::first(),
            'project' => $author->project
        ]);
    }
}
