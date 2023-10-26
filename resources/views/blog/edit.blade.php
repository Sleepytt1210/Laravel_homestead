@extends('layouts.app')

@section('title', "Edit Blog 1")

@section('content')
    <div class="container">
        <div class="card mb-3 mt-4">
            <div class="card-body">
                <div class="card-header bg-white mb-3">
                    <h2 class="card-title">Edit Blog 1</h4>
                </div>
                <form action="">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="How to Laravel?">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category" id="category">
                            <option value="">--Select category--</option>
                            @foreach (["php", "html", "css", "js"] as $value) {
                                <option value="" {{ $loop->index == 2 ? 'selected' : '' }}>{{ $value }}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-25 offset-4">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection