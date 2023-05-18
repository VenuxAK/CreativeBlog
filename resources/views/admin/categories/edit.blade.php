<x-admin.layout>
    <x-slot name="title"> </x-slot>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <x-admin.card>
                <x-slot name="title"> Edit Category </x-slot>
                <form action="/admin/categories/{{$category->slug}}/update" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input name="name" value="{{ old('name') ?? $category->name }}" type="text" class="form-control"
                            id="inputName">
                        <x-error name="name" />
                    </div>
                    <div class="mb-3">
                        <label for="inputSlug" class="form-label">Slug</label>
                        <input name="slug" value="{{ old('slug') ?? $category->slug }}" type="text" class="form-control"
                            id="inputSlug">
                        <x-error name="slug" />
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </x-admin.card>
        </div>
    </div>
</x-admin.layout>
