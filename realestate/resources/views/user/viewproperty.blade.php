@extends('layout.front.master')

@section('title')
View Property
@endsection

@section('content')
<script type="text/javascript">
$(document).ready(function() {
    $('#demo').DataTable();
} );
</script>

<div class="row well" >

	<div class="col-md-8"><strong>View Property</strong></div>
	
	
</div>

<div class="row">	
<div class="well">
			<table class="table">
				<tr>
					<th>Mobile No</th>
					<th>Property Price</th>
					<th>Property Location</th>
					<th>Property Area</th>
					<th>Property Image</th>
					<th>Property Description</th>


				</tr>
				@foreach ($property as $property)
				<tr>
					<td>061-540286</td>
					<td>{{$property->property_price}}</a></td>
					<td>{{$property->property_location}}</td>
					<td>{{$property->property_area}}</td>
					<td>

<img style="height: 80px; width: 100px;" src="{{asset('storage/'.$property->property_image)}}"/>
					</td>
					<td> {{$property->property_description}} </td>

				</tr>
				@endforeach
				
			</table>
</div>			


</div>		

@endsection