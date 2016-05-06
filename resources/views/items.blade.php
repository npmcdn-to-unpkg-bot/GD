@extends('layouts.dashboard')



@section('content')

    <div class="row">
        <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Items</h4>
                                <p class="category">A list of all items</p>
                            </div>
                            <div class="content table-responsive table-full-width">


                                <table class="table table-striped">
                                    <thead>


                                        <th>ID</th>
                                        <th>Room ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Owner</th>
                                    </thead>
                                    <tbody>

                                        @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item -> id }}</td>
                                            <td>{{ $item -> room_id }}</td>
                                            <td>{{ $item -> name }}</td>
                                            <td>{{ $item -> description }}</td>
                                            <td><a href="{{ url('/user_profile') . '/' . ($item -> created_by) }}">{{ $item -> created_by }}</a></td>
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
    $('#items').addClass("active");

});
    
</script>
    
@endsection
