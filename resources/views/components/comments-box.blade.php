<div class="comment-wrapper my-5">
    <div class="panel panel-info">
        <h4>Comments</h4>
        <div class="panel-body">
            @auth
            <form action="/blogs/{{ $blog->slug }}/comment/send" method="POST">
                @csrf
                @error('body')
                <p class="text-danger"> <b>{{ $message }}</b> </p>
                @enderror
                <textarea required name="body" class="form-control" placeholder="write a comment..."
                    rows="3"></textarea>
                <br>
                <button type="submit" class="btn btn-primary pull-right">Post</button>
            </form>
            @else
            <p>Please <a href="/login">Login</a> to comment</p>
            @endauth
            <div class="clearfix"></div>
            <hr>
            <ul class="media-list">
                @forelse ($blog->comments as $comment)
                <li class="media">
                    <a href="#" class="pull-left">
                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                    </a>
                    <div class="media-body ml-2">
                        <strong class="text-success">@ {{$comment->author->name}}</strong>
                        <span class="text-muted pull-right">
                            <small class="text-muted">{{ $comment->created_at->format('d M Y') }}</small>
                        </span>
                        <p> {{ $comment->body }} </p>
                    </div>
                </li>
                @empty

                @endforelse
            </ul>
        </div>
    </div>
</div>
