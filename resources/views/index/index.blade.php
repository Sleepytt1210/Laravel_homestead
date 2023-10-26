@extends('layouts.lr-cards')

@section('name', 'Home Page')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>


    </style>
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid px-0">
        <div class="container text-center text-white">
            <h4 class="display-6">
                Laravel Blog
            </h4>
            <p class="lead">Only for educational purpose</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        @foreach (range(1, 10) as $item)
                            <div class="article-body">
                                <div>
                                    <span class="article-author">Dylon Wong</span>
                                    <span class="article-time">6 months ago</span>
                                </div>
                                <h2 class="font-weight-bold my-3 article-title"><a class="text-dark" href="{{ route('blog.show', 1) }}">{{ 'Blog Title' }}</a></h2>
                                <div class="article-desc">{{ 'Long long long long long long long long long long blog description.' }}</div>
                                <div>
                                    <a href="#" class="badge badge-warning mt-3 article-badge">Blog</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                        <nav class="d-flex justify-content-center mt-4">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only"></span></a>
                                </li>
                                <li class="page-item" aria-current="page">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-0">
                @include('common.right-card', [
                    'imgUrl' => 'https://kinsta.com/wp-content/uploads/2023/02/Untitled-21.png',
                    'title' => 'What\'s New in Laravel 10?',
                    'content' => 'Learn about what\'s new in Laravel 10 right now! Laravel 10 has new contents and new plugins that facilitates the development process even further! Get started here.',
                    'count' => '14' 
                ])
            </div>
        </div>
    </div>
@endsection