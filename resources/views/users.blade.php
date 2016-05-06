@extends('layouts.dashboard')



@section('content')

    <div class="row">
        <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width"
                            >


                                <table class="table table-striped">
                                    <thead>


                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Email</th>

                                    </thead>
                                    <tbody>

                                    
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/user_profile') . '/' . ($user -> id) }}">{{ $user -> id }}</a>
                                            </td>
                                            <td>{{ $user -> name }}</td>
                                            <td>
                                                <a href="mailto: {{ $user -> email }}">{{ $user -> email }}</a>
                                                </td>

                                        </tr>

                                        @endforeach
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


        
        
    </div>

@endsection

@section ('scripts')

<script>

$(document).ready(function(){
    $('#users').addClass("active");

});


// Autocompletion: users

$(function(){

                var users = [
                    "Richard", 
                    "Ronna",
                    "Marco",
                    "richard",
                    "richard@palmera.com",
                    "ronna@domain.com",
                    "ronna",
                    "more",
                    "less"
                ];

                // set autocompletion
                $("#searchInput").autocomplete({
                    source: users
                });



            });


    
</script>
    
@endsection