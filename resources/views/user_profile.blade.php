@extends('layouts.dashboard')



@section('content')

    <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="{{ url('assets/img/background.jpg') }}" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="{{ url('assets/img/faces/face-2.jpg') }}" alt="..."/>
                                  <h4 class="title">{{ $user -> name }}<br/>
                                     <a href="mailto: {{ $user -> email }}"><small>{{ $user -> email }}</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "I like the way you work it <br>
                                    No diggity <br>
                                    I wanna bag it up"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        

                                            <h5>{{ $rooms -> count() }}<br /><small>Rooms</small></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>2GB<br /><small>Items</small></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>24,6$<br /><small>Spent</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ( ($rooms -> count()) > 0)
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Rooms</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">

                                        @foreach ($rooms as $room)
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="{{ url('assets/img/faces/face-3.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        {{ $room -> name }}
                                                        <br />
                                                        <span class="text-danger"><small>Approved</small></span>
                                                    </div>


                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>

                                            @endforeach
                                            
                                        </ul>
                            </div>
                        </div>
                        @endif


                    </div>
                    

                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">

                                <form id="updateProfileForm" name="updateProfileForm">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="" value="Palmera">
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control border-input" value="{{ $user -> email }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control border-input" 
                                                value="{{ $user_profile -> first_name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Last Name" value="{{ $user_profile -> last_name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control border-input" placeholder="Home Address" value="{{ $user_profile -> address }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control border-input" placeholder="City" value="{{ $user_profile -> city }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control border-input" placeholder="Country" value="{{ $user_profile -> country }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control border-input" 
                                                id="zip_code" name="zip_code"
                                                placeholder="{{ $user_profile -> zip_code }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Tell a little bit about yourself"
                                                id="bio" name="bio" 
                                                value="{{ $user_profile -> bio }}">{{ $user_profile -> bio }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-info btn-fill" id="updateBtn" name="updateBtn" onclick="updateProfile();">Update Profile</button>
                                    </div>

                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>


@endsection

@section ('scripts')
<script>

$(document).ready(function(){
    // prevent form default behavior
    $('#updateProfileForm').submit(function(obj){
        obj.preventDefault();


    });


});

var updateProfile = function(){


    swal({

          title: "Are you sure?",
          text: "The changes will be made definitive.",
          type: "info",
          showCancelButton: true,
          closeOnConfirm: false,
          showLoaderOnConfirm: true,
          animation: true
    }, function () {
          setTimeout(function () {
            swal("Profile updated!");
          }, 2000);
});



}


</script>
@endsection
