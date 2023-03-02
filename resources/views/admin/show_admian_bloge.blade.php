<!DOCTYPE html>
<html lang="en">
@include('admin.script1')

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.navbar')




            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body mt-5 ">
                            <h4 class="card-title text-center">Admian Bloag</h4>
                            <div class="m-2">




                                <div class="row">
                                    @foreach ($data as $data)
                                        <div class="col-4 m-auto">
                                            <div class="card ">
                                                <img src="bloag/{{ $data->img }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $data->heading }}</h5>
                                                    <p class="card-text">{{ $data->bloag }}</p>
                                                    <p class="card-text"><small class="text-muted">{{ $data->created_at}}</small></p>
                                                    <a href="{{url('delete_blog',$data->id)}}"><button class="btn btn-outline-danger">Delete</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                
                                




                            </div>
                        </div>
                    </div>
                </div>
            </div>















        </div>
        @include('admin.script2')
</body>

</html>
