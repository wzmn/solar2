@section('title', 'Terms of Use – Enernew Website and Services')

@extends('layouts.website')

@section('header')
    <div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
        <h1 class="text-white">Terms of Use</h1>
        <div class="hero__content text-white mb-3">
            Home > Terms of Use
        </div>
    </div>
@endsection

@section('content')
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-12">
                {!! $seo->content !!}
            </div>
        </div>
    </div>
@endsection
