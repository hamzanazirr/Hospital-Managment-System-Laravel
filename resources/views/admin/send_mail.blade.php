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
            <div class="container-fluid page-body-wrapper">
                <div class="container">




                    <form action="{{ url('send_email_touser',$data->id) }}" method="POST" >
                        @csrf



                        {{--  @if (session()->has('message'))
                            <div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>
                                      {{ session()->get('message') }}
                                      </strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close">X</button>
                                </div>
                            </div>

                        @endif  --}}





                        <legend>Add Doctor</legend>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label"  >From</label>
                            <input type="text" id="disabledTextInput" style="color: blue" name="from" class="form-control"
                                placeholder="From">
                                @error('from')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                        </div>




                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label" style="" >Body</label>
                            <textarea type="text" id="disabledTextInput" style="color: blue" name="body" class="form-control"
                                placeholder="Body"></textarea>
                                @error('body')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Active Url</label>
                            <input type="text" name="url" style="color: blue" id="disabledTextInput" class="form-control"
                                placeholder="Url">
                                @error('url')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>




                        <div class="mb-3">
                            <label for="formFile" class="form-label">End Port</label>
                            <input class="form-control" name="end" type="text" id="formFile" placeholder="End">
                            @error('end')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
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
