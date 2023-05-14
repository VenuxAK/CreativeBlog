<div class="widget">
    <h2 class="section-title mb-3">Categories</h2>
    <div class="widget-body">
        <ul class="widget-list">

            @foreach ($categories as $category)
            <li>
                <a href="/?category={{$category->slug}}"> {{
                    $category->name }}
                    <span class="ml-auto"> ( {{$category->blogs->count()}} ) </span>
                </a>
            </li>
            @endforeach

        </ul>
    </div>
</div>