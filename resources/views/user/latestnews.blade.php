<div class="page-section" style="background: rgb(94, 71, 71)">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Bloge</h1>
        <div class="row mt-5">




            <div class="row">
                @foreach ($data as $data)
                    <div class="col-4 m-auto">
                        <div class="card ">
                            <img src="bloag/{{ $data->img }}" class="card-img-top" alt="..." style="height: 400px ;width: 350px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->heading }}</h5>
                                <p class="card-text">{{ $data->bloag }}</p>
                                <p class="card-text"><small class="text-muted">{{ $data->created_at}}</small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

















            <div class="col-12 text-center mt-4 wow zoomIn">
                <a href="blog.html" class="btn btn-outline-info">Read More</a>
            </div>

        </div>
    </div>
</div> <!-- .page-section -->
