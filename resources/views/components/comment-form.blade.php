<form action="/blogs/{{ $blog->slug }}/comment/send" method="POST">
    @csrf
    @error('body')
    <p class="text-danger"> <b>{{ $message }}</b> </p>
    @enderror
    <textarea required name="body" class="form-control" placeholder="write a comment..." rows="3"></textarea>
    <br>
    <button type="submit" class="btn btn-primary pull-right">Post</button>
</form>
