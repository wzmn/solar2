@section("title", "Solar Calculator – Estimate Panel Costs & Electricity Savings")

@extends("layouts.website")

@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
  <h1 class="text-white">{{$page->title}}</h1>
  <div class="hero__content text-white mb-3">
    Home > {{$page->title}}
  </div>
</div>
@endsection

@section("content")
<div class="container my-5">
    <div class="row mb-5">
        <div class="col">
          {!! $page->content !!}
        </div>
    </div>
</div>
@endsection