<article class="card article-card">
    <a href="/blogs/{{ $latestBlog->slug }}">
        <div class="card-image">
            <div class="post-info">
                <span class="text-uppercase"> {{ $latestBlog->created_at->format('d M Y') }} </span>
            </div>
            <img loading="lazy" decoding="async" src="/assets/images/post/post-1.jpg" alt="Post Thumbnail"
                class="w-100">
        </div>
    </a>
    <div class="card-body px-0 pb-1">
        <ul class="d-flex justify-content-between post-meta mb-2">
            <li>
                <a href="/?category={{ $latestBlog->category->slug }}"> {{ $latestBlog->category->name }} </a>
            </li>
            <li>
                Author <a href="/?user={{$latestBlog->author->username}}"> {{ $latestBlog->author->name }} </a>
            </li>
        </ul>
        <h2 class="h1">
            <a class="post-title" href="/blogs/{{ $latestBlog->slug }}"> {{ $latestBlog->title }} </a>
        </h2>
        <p class="card-text"> {!! substr($latestBlog->body, 0, 100)."..." !!} <a
                href="/blogs/{{$latestBlog->slug}}">Read
                More</a> </p>
        <div class="content">
            <a class="read-more-btn" href="/blogs/{{ $latestBlog->slug }}">Read Full Article</a>
        </div>
    </div>
</article>
