@extends('layouts.app')

@section('title', 'Test Page')

@section('style')
    
@endsection

@section('content')
    <p>This is a child page</p>
@endsection

@section('script')
    <script>
        var name = @json($name);
        console.log(name);
    </script>
@endsection