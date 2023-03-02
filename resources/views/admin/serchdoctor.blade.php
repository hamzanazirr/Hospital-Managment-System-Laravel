
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
                <h4 class="card-title text-center">Doctor</h4>
                <div class="table-responsive">



                    <div class="m-2">
                        <form class="search mx-5 mb-2" action="{{ url('searchdoctor') }}" method="GET">
                            @csrf
                            <input type="search" name="search" class="form-control mb-1"
                                placeholder="Search by NAME or EMAIL">

                            <button type="submit" class="btn btn-outline-info">Serch</button>
                            <a href="/doctor"> <button type="button" class="btn btn-outline-info">Reset</button> </a>
                    </div>



                    <table class="table">
                        <thead>
                            <tr>
                                <th> Dr Image </th>
                                <th> Name </th>                               
                                <th>  Email </th>
                                <th> Specility </th>                               
                                <th> City </th>
                                <th> Day </th>
                                <th> Action </th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($find as $doctor)
                            <tr>

                               
                              
                                    <td><img src="doctorimg/{{ $doctor->img }} " alt=""></td>
                                    <td> {{ $doctor->name }} </td>
                                    <td> {{ $doctor->email }} </td>
                                    <td> {{ $doctor->field }} </td>
                                    <td> {{ $doctor->location }} </td>
                                    <td> {{ $doctor->day }} </td>
                                  
                                   <td>
                                    
                                    <a class="btn btn-success ml-lg-3" href="{{ url ('update',$doctor->id)}}">Update</a>
                                    
                                    <a class="btn btn-danger ml-lg-3" href="{{ url ('delete',$doctor->id)}}">Delete</a>
                                   
                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>














   
        </div>
  @include('admin.script2')
</body>
</html>
