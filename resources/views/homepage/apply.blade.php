@extends('homepage.base')
@section('title')
    this is ||apply page
@endsection
@section('content')
<div class="container-fluid mt-4 ">
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
</div>
@endsection