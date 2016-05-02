@extends('layouts.default')

@section('title', 'Новости')
@section('content')

    <div class="news">
        <h2>Новости</h2>
    </div>
    <div class="news_list">
                @foreach($news as $value)
                    <div class="table_call">
                        <h4>{{$value->title}}</h4>
                        <p>{{$value->updated_at}}</p>
                        <p >{!!mb_substr(strip_tags($value->text), 0, 100)!!}...<a href="#">Read more</a></p>
                        <img src="/images/original/{{$value->image}}" alt="">
                    </div>
                @endforeach
        <div class="clear"></div>
    </div>
    <div class="full_list">
        <a href="">
            <h2>Больше новостей</h2>
            <img src="images/click_full.png" alt="">
            <div class="clear"></div>
        </a>
    </div>


@stop