@extends('layouts.main')
@section('content')

<form action="{{ route('create') }}">
    @csrf
    <button class="btn btn-primary w-40">Write New Post</button>
</form>

@foreach ($post as $data)



<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive top_static_article_img" src="assets/img/feature-top.jpg"
                             alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg red"><a href="category.html">Hot News</a></div>
                        <div class="feature_article_title"> // route('show', ["id"=>$value->id])
                            <h1><a href="{{ route('single', ["id"=>$data->id]) }}" target="_self">{{$data->title}}</a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="" target="_self">{{$data->author}}</a>,<a href="#"
                                                                                                         target="_self">Aug
                            4, 2015</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            {{$data->text}}
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>Comments</span>
                            <span>
                                <form action="{{ route('delete') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->id }}"></input>
                                    <button class="btn">Delete</button>
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endforeach

@endsection
