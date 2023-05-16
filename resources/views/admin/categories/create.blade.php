<x-admin.layout>
    <x-slot name="title"> </x-slot>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <x-admin.card>
                <x-slot name="title"> Create New Category </x-slot>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="inputName">
                    </div>
                    <div class="mb-3">
                        <label for="inputSlug" class="form-label">Slug</label>
                        <input name="slug" type="text" class="form-control" id="inputSlug">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </x-admin.card>
        </div>
    </div>
</x-admin.layout>