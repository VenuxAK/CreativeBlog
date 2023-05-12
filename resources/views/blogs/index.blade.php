<x-layout>
    <main>
        <section class="section">
            <div class="container">
                <div class="row no-gutters-lg">
                    <div class="col-12">
                        <h2 class="section-title">Latest Articles</h2>
                    </div>
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <x-blogs.latest-blog />
                            </div>
                            @foreach (range(1,4) as $item)
                            <div class="col-md-6 mb-4">
                                <x-blogs.blog-card />
                            </div>
                            @endforeach
                            <x-util.paginate />
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