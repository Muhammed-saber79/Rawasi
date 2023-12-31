<?php

namespace App\Http\Controllers\Front;

use App\Models\City;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function articles() {
        $articles = Article::all();
        $favorites = Article::where('is_favorite',1)->get();
        return view('front.blog',compact('articles','favorites'));
    }

    public function get_article($id){

        $article = Article::findOrFail($id);
        $comments = $article->comments->where('is_accepted',1) ;
        $favorites = Article::where('is_favorite',1)->get();

        return view('front.blog-details',compact('article','comments', 'favorites'));
    }

    public function projects() {
        $projects = Project::all();
        $cities = City::all();

        return view('front.projects',compact('projects', 'cities'));
    }

    public function get_project($id){

        $project = Project::findOrFail($id);
        $images = $project->images ;
        return view('front.project-details',compact('project','images'));
    }
}
