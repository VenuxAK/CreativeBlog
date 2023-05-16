<x-layout>
    <main>
        <section class="section">
            <div class="container">
                @if (session("success"))
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="alert alert-success" role="alert">
                            {{ session("success") }}
                        </div>
                    </div>
                </div>
                @endif
                <div class="row no-gutters-lg">
                    <div class="col-12">
                        <h2 class="section-title">
                            Articles
                        </h2>
                    </div>
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="row">
                            @if (!request('category') && !request('user') && !request('search'))
                            <div class="col-12 mb-4">
                                <x-blogs.latest-blog :latestBlog="$latestBlog" />
                            </div>
                            @endif

                            @forelse ($blogs as $blog)
                            <div class="col-md-6 mb-4">
                                <x-blogs.blog-card :blog="$blog" />
                            </div>
                            @empty
                            <div class="col-12 my-5">
                                <p class="text-center text-danger"> No Blog Post Found! </p>
                            </div>
                            @endforelse

                            <div class="col-12">
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <x-sidebar />
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>