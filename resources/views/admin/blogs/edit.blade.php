<x-admin.layout>
    <x-slot name="title"> </x-slot>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <x-admin.card>
                <x-slot name="title"> Edit Blog </x-slot>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="inputTitle">
                    </div>
                    <div class="mb-3">
                        <label for="inputSlug" class="form-label">Slug</label>
                        <input name="slug" type="text" class="form-control" id="inputSlug">
                    </div>
                    <div class="mb-3">
                        <label for="inputBody">Body</label>
                        <textarea name="body" class="form-control editor" id="inputBody" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputImage" class="form-label">Image</label>
                        <input name="image" type="file" class="form-control" id="inputImage">
                    </div>
                    <div class="mb-3">
                        <label for="inputCategory">Categories</label>
                        <select name="category_id" id="inputCategory" class="form-control">
                            <option value="">Travel</option>
                            <option value="">Nature</option>
                            <option value="">Tech</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </x-admin.card>
        </div>
    </div>
</x-admin.layout>