<div class="widget">
    <h2 class="section-title mb-3">Recommended</h2>
    <div class="widget-body">
        <div class="widget-list">
            <article class="card mb-4">
                <div class="card-image">
                    <div class="post-info">
                        <span class="text-uppercase"> {{ $randomBlog->created_at->format('d M Y') }} </span>
                    </div>
                    <img loading="lazy" decoding="async" src="/images/post/post-9.jpg" alt="Post Thumbnail"
                        class="w-100">
                </div>
                <div class="card-body px-0 pb-1">
                    <h3>
                        <a class="post-title post-title-sm" href="/blogs/{{ $randomBlog->slug }}">
                            {{ substr($randomBlog->title, 0, 20)."..." }}
                        </a>
                    </h3>
                    <p class="card-text"> {{ substr($randomBlog->body, 0, 50).'...' }} </p>
                    <div class="content"> <a class="read-more-btn" href="/blogs/{{ $randomBlog->slug }}">Read Full
                            Article</a>
                    </div>
                </div>
            </article>

            @foreach ($randomBlogs as $blog)
            <a class="media align-items-center" href="/blogs/{{ $blog->slug }}">
                <img loading="lazy" decoding="async" src="/images/post/post-2.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                    <h3 style="margin-top:-5px"> {{ substr($blog->title, 0, 10) }} </h3>
                    <p class="mb-0 small"> {{ substr($blog->body, 0, 50)."..." }} </p>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</div>