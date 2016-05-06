@extends('layouts.dashboard')

@section ('content')
<div class="card card-map">
	<div class="header">
        <h4 class="title">Mappa illustrativa</h4>
                    </div>
					<div class="map">
						<div id="map"></div>
					</div>
				</div>
@endsection


@section ('scripts')
<script>
        



$(document).ready(function(){
    $('#maps').addClass("active");

});

$().ready(function(){
            demo.initGoogleMaps();
        });

</script>

@endsection