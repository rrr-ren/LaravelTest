<?php


namespace App\Http\Controllers;


use App\News;

class IndexController extends MainController{



    public function index(News $news){

        $this->data['news'] = $news->getNews();


        return view('pages.news', $this->data);
    }

} 