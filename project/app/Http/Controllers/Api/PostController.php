<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // tutti i post in una pagina
        // $posts = Post::all();
        // return response()->json([
        //     'sucess' => true,
        //     'results' => $posts 
        // ]);

        // paginazione
        $posts = Post::paginate(4);
        return response()->json([
            'sucess' => true,
            'results' => $posts 
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}