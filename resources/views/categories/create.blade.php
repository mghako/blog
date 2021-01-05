@extends('layouts.dashboard')
@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/cards/card.css') }}">
@endsection
@section('page-title', 'Create Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group d-flex justify-content-between align-items-center">
                                <div class="">
                                    <label for="category_name">Name</label>
                                    <input type="text" name="name" class="form-control" id="category_name" autocomplete="off">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary mt-4 float-right">Create</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection