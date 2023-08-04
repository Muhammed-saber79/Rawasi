<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Project;
use Illuminate\Http\Request;

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
        
        return view('front.projects',compact('projects'));
    }

    public function get_project($id){

        $project = Project::findOrFail($id);
        $images = $project->images ;
        return view('front.project-details',compact('project','images'));
    }
}
