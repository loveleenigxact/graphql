<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    /**
     * Create a new user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['max:30'],
            'is_completed' => ['max:4'],

        ]);

        $article = \App\Article::create($data);

        return response()->json(['article' => $article]);
    }
}
?>