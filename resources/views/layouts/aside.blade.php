<div class="col-md-3 ms-auto">
    <aside class="blog-sidebar sticky">
        <h3>Ближайшие мероприятия</h3>
        @foreach ($corporates as $corp)
            
        <div class="card mb-4 border-0 border-bottom bg-info bg-opacity-10">
            <div class="card-body ">
                <h4 class="card-title">{{$corp->name}}</h4>
                <img class="card-img" src="/storage/img/{{$corp->picture}}" height="220" alt="Image" />
                <p class="card-text">{{mb_strimwidth($corp->description, 0, 60, '...')}}</p>
                <a href="/corporates/schedule/{{$corp->id}}/reg" class="btn btn-primary">Записаться</a>
            </div>
        </div><!-- /.card -->
        @endforeach

        <?/*
        <div class="card mb-4 border-0 border-bottom">
            <div class="card-body">
                <h4 class="card-title">Tags</h4>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Journey</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Work</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Lifestype</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Photography</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Food & Drinks</a>
            </div>
        </div><!-- /.card -->
        <div class="card mb-4 border-0 border-bottom">
            <div class="card-body">
                <h4 class="card-title">Popular stories</h4>

                <a href="post-image.html" class="d-inline-block">
                <h4 class="h6">The blind man</h4>
                <img class="card-img" src="img/articles/2.jpg" alt="" />
                </a>
                <time class="timeago" datetime="2021-09-03 20:00">3 october 2021</time> in Lifestyle

                <a href="post-image.html" class="d-inline-block mt-3">
                <h4 class="h6">Crying on the news</h4>
                <img class="card-img" src="img/articles/3.jpg" alt="" />
                </a>
                <time class="timeago" datetime="2021-07-16 20:00">16 july 2021</time> in Work

            </div>
            */?>
        </div><!-- /.card -->
    </aside>
</div>