<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    //
    public function show(Category $category, Request $request, Topic $topic)
    {
    	// $topics = Topic::where('category_id', $category->id)->paginate(20);
    	$topics = $topic->withOrder($request->order)
    					->where('category_id', $category->id)
    					->paginate(20);
    	



    	// 传参变量话题和分类到模版中
    	return view('topics.index', compact('topics', 'category'));
    }
    
}
