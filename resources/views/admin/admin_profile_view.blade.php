@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        
      <!--  @@include("partials/page-title.html", {"pagetitle": "Upcube", "title": "Dashboard"})

         start page title -->
         <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Name : {{$adminData->name}}</h4>
                        <hr>
                        <h4 class="card-title">Email : {{$adminData->email}}</h4>

                        <hr>
                        <a href="#" class="btn btn-primary waves-effect waves-light"> Edit Profile</a>
                        </p>
                    </div>
                </div>
            </div>

           

            

        </div>

       <!-- end row -->


       
    </div>
    
</div>


@endsection