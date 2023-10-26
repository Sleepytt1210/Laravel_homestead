@extends('layouts.app')

@section('title', "Avatar")

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-3">
                @include('common.user-menu', ['nav' => 'avatar'])
            </div>
            <div class="col-sm-9 p-0">
                <div class="card">
                    <div class="card-header bg-white">
                        <h3 class="card-title">Avatar</h2>
                    </div>
                    <div class="card-body">
                        <form class="col-md-6 offset-3">
                            <img src="/img/avatar_placeholder_400x400.jpg" class="rounded" alt="avatar-placeholder" width="150rem" height="150rem">
                            <div class="form-group mt-2">
                                <label for="avatar" class="fs-16 font-weight-bold">Avatar</label>
                                <input type="file" name="avatar" class="form-control form-control-sm" id="avatar">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm w-20">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection