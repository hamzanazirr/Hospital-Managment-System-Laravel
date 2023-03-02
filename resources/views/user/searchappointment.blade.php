<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>One Health - Medical Center HTML5 Template</title>
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>
    @include('user.header')
    @include('user.bgimg')


    <div class="row ">
        
        <div class="col-12 grid-margin">

         
            <div class="card">
                
                <div class="card-body">
                    <p class="text-center text-xl " style=" color:mediumblue ">My Appointmet</p>
                    <div class="m-2">



                    <form class="search mx-5 mb-2" action="{{url('searchappointment')}}" method="GET" >
                        @csrf
                        <input type="search" name="search" class="form-control mb-1" placeholder="Search by NAME or EMAIL">
                        
                        <button type="submit" class="btn btn-outline-info " >Submit</button>
                    <a href="/myappointment">   <button type="button" class="btn btn-outline-info">Reset</button> </a>
                    </div>


                    <br> 
                    </form>

                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th> Patient Name </th>
                                   
                                    <th> Patient Email </th>
                                    <th> Doctor Name </th>
                                    <th> Date </th>
                                    <th> Phone Number </th>
                                    <th> Message </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>

                                
                                @foreach ($find as $appointment)


                                <tr>  
                                        <td> {{ $appointment->name }} </td>
                                        <td> {{ $appointment->email }} </td>
                                        <td> {{ $appointment->field }} </td>
                                       
                                        <td> {{ $appointment->date }} </td>
                                        <td> {{ $appointment->number }} </td>
                                        <td> {{ $appointment->message }} </td>
                                        <td> {{ $appointment->status }} </td>
                                      
                                       <td>
                                        <a class="btn btn-danger ml-lg-3 nav-link" href="{{ url ('cancelappointment',$appointment->id)}}">Cancel</a>
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




    @include('user.footer')
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>
