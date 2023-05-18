<x-admin.layout>
    <x-slot name="title"> </x-slot>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <x-admin.card>
                <x-slot name="title"> Edit Blog </x-slot>
                <form action="/admin/blogs/{{$blog->slug}}/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Title</label>
                        <input name="title" value="{{ old('title') ?? $blog->title }}" type="text" class="form-control"
                            id="inputTitle">
                        <x-error name="title" />
                    </div>
                    <div class="mb-3">
                        <label for="inputSlug" class="form-label">Slug</label>
                        <input name="slug" value="{{ old('slug') ?? $blog->slug }}" type="text" class="form-control"
                            id="inputSlug">
                        <x-error name="slug" />
                    </div>
                    <div class="mb-3">
                        <label for="inputBody">Body</label>
                        <textarea name="body" class="form-control editor" id="inputBody"
                            rows="10">{{ old('body') ?? $blog->body }}</textarea>
                        <x-error name="body" />
                    </div>
                    <div class="mb-3">
                        <label for="inputImage" class="form-label">Thumbnail</label>
                        <input name="thumbnail" type="file" class="form-control" id="inputImage">
                        <x-error name="thumbnail" />
                        <img src='{{ asset("/storage/$blog->thumbnail") }}' class="img-fluid mt-2 mb-3" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="inputCategory">Categories</label>
                        <select name="category_id" id="inputCategory" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $blog->
                                category_id==old('category_id',$blog->category_id)
                                ? "selected" : "" }} >{{
                                $category->name }}</option>
                            @endforeach
                        </select>
                        <x-error name="category_id" />
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </x-admin.card>
        </div>
    </div>
</x-admin.layout>
