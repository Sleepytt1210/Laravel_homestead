@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-9">
                @yield('left-card')
            </div>

            <div class="col-sm-3 p-0">
                @include('common.right-card', [
                    'imgUrl' => 'https://kinsta.com/wp-content/uploads/2023/02/Untitled-21.png',
                    'title' => 'What\'s New in Laravel 10?',
                    'content' =>
                        'Learn about what\'s new in Laravel 10 right now! Laravel 10 has new contents and new plugins that facilitates the development process even further! Get started here.',
                    'count' => '14',
                ])
            </div>
        </div>
    </div>
@endsection
