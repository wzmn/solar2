@section("title", "Press Releases – Latest News & Announcements from Enernew")

@extends("layouts.website")

@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
  <h1 class="text-white">Press Release</h1>
  <div class="hero__content text-white mb-3">
    Home > Press Release
  </div>
</div>
@endsection

@section("content")
<div class="container my-5">
    <div class="row mb-5">
        <div class="col">
            {!! $seo->content !!}
        </div>
    </div>
</div>
@endsection