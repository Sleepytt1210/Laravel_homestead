@extends('layouts.app')

@section('title', "Profile")

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-3">
                @include('common.user-menu', ['nav' => 'info'])
            </div>
            <div class="col-sm-7 p-0">
                <div class="card">
                    <div class="card-header bg-white">
                        <h3 class="card-title">Personal Details</h2>
                    </div>
                    <div class="card-body">
                        @include('common.status')
                        <form  method="POST" action="{{ route('user.info.update') }}" class="col-md-6 offset-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="fs-14 font-weight-bold">Name</label>
                                <input type="text" name="name" placeholder="Please enter your user's name" value="{{ Auth::user()->name }}" class="form-control form-control-sm" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="fs-14 font-weight-bold">Email</label>
                                <input type="email" name="email" placeholder="Please enter your email address" value="{{ Auth::user()->email }}" class="form-control form-control-sm" id="email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm w-20">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection