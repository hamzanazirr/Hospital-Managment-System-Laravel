<!DOCTYPE html>
<html lang="en">
<base href="/public">
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
            <div class="container-fluid page-body-wrapper">
                <div class="container">




                    <form action="{{url('updateadd',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf



                        @if (session()->has('message'))
                            <div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>
                                        {{ session()->get('message') }}
                                    </strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close">X</button>
                                </div>
                            </div>
                        @endif







                        <legend>Add Doctor</legend>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Doctor Name</label>
                            <input type="text" id="disabledTextInput" value="{{ $data->name }}" name="name"
                                class="form-control text-black" placeholder="Doctor Name">
                                @error('name')
    <p class="text-danger">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Doctor Email</label>
                            <input type="email" name="email" value="{{ $data->email }}" id="disabledTextInput"
                                class="form-control  text-black" placeholder="Doctor Email">
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label" style="">Location</label>
                            <input type="text" id="disabledTextInput" value="{{ $data->location }}" name="location"
                                class="form-control  text-black" placeholder="Location">
                                @error('location')
                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">DAY</label>
                            <input type="text" name="day" value="{{ $data->day }}" id="disabledTextInput"
                                class="form-control  text-black" placeholder="Disabled input">
                                @error('day')
                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Field </label>
                            <select id="disabledSelect" name="field" class="form-select">
                                <option>{{ $data->field }}</option>
                                <option>Physical therapy</option>
                                <option>Internal medicine</option>
                                <option>Optometry</option>
                                <option>Dermatology</option>
                                <option>Neurology</option>
                            </select>
                            @error('field')
                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                        </div>


                        <div class="mb-3">
                            <label for="formFile" class="form-label">Add New Image</label>
                            <input class="form-control" name="img" type="file" id="formFile">
                        </div>




                        <div class="card" style="width: 18rem;">
                            <label for="formFile" class="form-label">Old Image</label>

                            <img src="doctorimg/{{$data->img}}" class="card-img-top" alt="...">
                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                        </fieldset>
                    </form>


















                </div>
            </div>
        </div>
        @include('admin.script2')

</body>

</html>
