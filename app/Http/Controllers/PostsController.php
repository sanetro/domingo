<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = DB::select('select * from posts');

        // $posts = DB::select('select * from posts WHERE id = ?', [1]);
        // $posts = DB::select('select * from posts WHERE id = :id', ['id' => 1]);

        $id = 1;
        $posts2 = DB::table('posts')
            ->where('id', $id)
            ->get();

        // return every column named 'body' belong to that table
        $posts3 = DB::table('posts')
            ->select('body')
            ->get();

        // return query with statements
        $posts4 = DB::table('posts')
            ->where('created_at', '>', now()->subDay()) //find conections created yesterday
            ->orWhere('title', 'First title')
            ->get();

        // Important
        // Do not use ->whereRaw() method. Hacers will have easier access to data

        // insert values to table
        // $insertData = DB::table('posts')
        //     ->insert([
        //         'title' => 'New Post from app project', 'body' => 'New Body from app project. And that`s it'
        //     ]);
        //
        // I must comment it becouse It would inserting over and over when user refresh page

        // To do: Make eloquents

        dd(
            $posts,
            $posts2,
            $posts3,
            $posts4
        );

    }
}
