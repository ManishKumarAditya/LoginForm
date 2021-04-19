 @extends('homepage.base')
@section('title')
    this is ||apply page
@endsection
@section('content')
{{-- <div class="container-fluid mt-4 ">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Apply for student
                </div>
                <div class="card-body bg-light">
                    <form action=" " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="">gender</label>
                            <select name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">other</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>   
        </div>
    </div>
</div> --}}


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-6 ">
                <div class="card border-dark shadow-lg bg-dark" style="height: 500px ; width: 450px;     ">
                    <div class="card-body bg-dark" style=" background:rgba(255, 255, 255, 0.04);">
                       <form action="">
                           <h2 style="color:skyblue; font-size: 30px; font-family: sans-serif;text-align: center;">Registration Form </h2>
                           <hr style="color: whitesmoke;">
                        <div class="mb-3 mt-5">
                            <label for="" style="color: seashell; font-size: 22px; font-family: sans-serif;" >Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" >    
                        </div>
                    
                        <div class="mb-3">
                            <label for="" style="color: seashell; font-size: 22px; font-family: sans-serif;">Email</label>
                            <input  id="data" type="Email" onkeyup="checkPass()" class=" form-control" placeholder="Email" >
                        </div>
                        <div class="mb-3">
                            <label for="" style="color: seashell; font-size: 22px; font-family: sans-serif;">Mobile No</label>
                            <input  id="data" type="text" onkeyup="checkPass()" class=" form-control" placeholder="Mobile no" >
                        </div>
                        
                        {{-- <p id="error" style="color:tan; font-size: 18px; font-family: sans-serif;">Please enter passward</p>
                       --}}
                        <div class="mb-3 mt-5">
              
          <a href="" class="btn btn-outline-info">Submit</a>
                        </div>
                        
                        <div class="mb-3 mt-5">
                            <input type="submit" value="SIGN IN" style="display:none;" id="btn" class="btn btn-outline-info col-6 ms-auto" >
                        </div>
                      
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //js code heres
        var a = document.getElementById("data");
        var error = document.getElementById("error");
        var btn= document.getElementById("btn");
        // a.style.backgroundColor="yellow";
        function checkPass(){
            var len = a.value.length;
            if(len == 0){
                error.innerHTML="please enter password";
                error.style.color="light";
                btn.style.display="none";
            }
           else if(len<6){
                error.innerHTML="weak password";
                error.style.color="red";
                btn.style.display="none";

            }
            else if(len<10){
                error.innerHTML="good password";
                error.style.color="blue";
                btn.style.display="none";

            }
            else if(len>=10){
                error.innerHTML="strong password";
                error.style.color="green";
                btn.style.display="inline-block";

            }

        }
    </script>

@endsection 