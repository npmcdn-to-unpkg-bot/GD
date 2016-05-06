@extends('layouts.dashboard')



@section('content')
<div class="container"> 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Statistics go here!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section ('scripts')
    <script>

    $(document).ready(function(){



    /* 
        Set to active the corresponding link

        var listedLink = document.getElementById('dashboard');

        listedLink.class.set("active");
        */

        // Set current page corresponding link to active.
        $('#dashboard').addClass("active");


 

    });


    </script>
@endsection