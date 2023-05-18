@props(['blog'])

<article class="card article-card article-card-sm h-100">
    <a href="/blogs/{{$blog->slug}}">
        <div class="card-image">
            <div class="post-info">
                <span class="text-uppercase"> {{$blog->created_at->format('j F Y')}} </span>
            </div>
            <img loading="lazy" decoding="async" src="/assets/images/post/post-2.jpg" alt="Post Thumbnail"
                class="w-100">
        </div>
    </a>
    <div class="card-body px-0 pb-0">
        <ul class="d-flex justify-content-between post-meta mb-2">
            <li>
                <a href="/?category={{ $blog->category->slug }} {{ request('user') ? '&user='.request('user') : '' }}">{{
                    $blog->category->name }}</a>
            </li>
            <li>
                <a
                    href="/?user={{ $blog->author->username }} {{ request('category') ? '&category='.request('category') : '' }}">
                    {{ $blog->author->name }} </a>
            </li>
        </ul>
        <h2>
            <a class="post-title" href="/blogs/{{$blog->slug}}"> {{ substr($blog->title, 0, 15)."..." }} </a>
        </h2>
        <p class="card-text"> {!! substr($blog->body, 0, 70)."..." !!} </p>
        <div class="content"> <a class="read-more-btn" href="/blogs/{{$blog->slug}}">Read Full
                Article</a>
        </div>
    </div>
</article>
