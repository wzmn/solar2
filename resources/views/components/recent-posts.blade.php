<div class="recent">
  <h4 class="mb-4 text-orange">Recent Posts</h4>
  	@foreach ($posts as $post)
    <div class="recent__post d-xl-grid mb-4">
        <a href="{{ $post['link'] }}"><img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="post-image"></a>
        <div class="recent__post_content">
            <div class="recent__post__date">{{ $post['date'] }}</div>
            <a href="{{ $post['link'] }}" class="post-title text-green">{{ $post['title'] }}</a>
        </div>
    </div>
    @endforeach
</div>