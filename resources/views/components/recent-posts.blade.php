<div class="recent">
  <h4 class="mb-4 text-orange">Recent Posts</h4>
  	@foreach ($posts as $post)
    <div class="recent__post d-xl-grid mb-4">
        @if($post->image) 
        <a href="{{ route('blog.show', $post->slug) }}"><img src="{{Storage::disk('public')->url($post->image)}}" class=""></a>
        @endif
        <div class="recent__post_content">
            <div class="recent__post__date">{{ date_format(date_create($post->date),"d-M-Y") }}</div>
            <a href="/knowledge-center/{{ $post->slug }}" class="post-title text-green">{{ $post->title }}</a>
        </div>
    </div>
    @endforeach
</div>