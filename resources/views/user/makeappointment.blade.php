<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        
        @if (session()->has('message'))
        <div>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                  {{ session()->get('message') }}
                  </strong> 
            </div>
        </div>
    @endif

     
    @if (session()->has('messages'))
    <div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>
              {{ session()->get('messages') }}
              </strong>  
        </div>
    </div>
@endif


        <form class="main-form" action="{{ route ('appointment') }}" method="POST">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" name="name" placeholder="Patient name">
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" name="email" placeholder="Email address..">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control" name="date">
                    @error('date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" >
                    <select name="field" id="departement" class="custom-select">
                        <option >---Select Doctor---</option>
                        @foreach ($doctordata as $doctor )
                            
                       
                        <option value="{{$doctor->name}}">
                            {{$doctor->name}}---Specility---{{$doctor->field}}</option>

                        @endforeach

                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" name="number" placeholder="Number..">
                    @error('number')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                    @error('message')
                    <p class="text-danger">{{$message}}</p>
                @enderror               
                </div>
            </div>

           
            <button type="submit" class="btn btn-outline-info " >Submit Request</button>
            
            

           




        </form>
    </div>
</div> <!-- .page-section -->
