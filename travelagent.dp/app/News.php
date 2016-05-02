<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	protected $table = 'news';

    public function getNews(){

        return $this->published()->latest()->get();
    }

    public function scopePublished($query){
        $query->where(['active' => 1]);
    }

}
