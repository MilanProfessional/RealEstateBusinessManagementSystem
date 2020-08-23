@extends('layout.admin.master')

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
	<div class="col-md-4 text-right" >

	
	</div>
	
</div>

<div class="row">	
<div class="well">
			<table class="table" id="demo">
			<thead>
				<tr>
					<th>Uploaded By </th>
					<th> Mobile No </th>
					<th>Property Price</th>
					<th>Property Location</th>
					<th>Property Area</th>
					<th>Property Image</th>
					<th>Property Description </th>
					<th>Action</th>
				</tr>
			</thead>	
				<tbody>
					@foreach ($property as $property)

					<?php 
					if($property->name=='')
					{ 
						$name = 'admin';
					}
					else
					{
						$name =	$property->name;
					}
					?>	


				<tr>
				<td>{{ $name }}</td>
				<td> {{$property->mobileno}}</td>
					<td>{{$property->property_price}}</td>
					<td>{{$property->property_location}}</td>
					<td>{{$property->property_area}}</td>
					<td>
						<img style="height: 80px; width: 100px;" src="{{asset('storage/'.$property->property_image)}}"/>
					</td>
					<td> {{$property->property_description}}</td>
					<td> 
					<a href="{{'/admin/editproperty/'.$property->property_id}}"> Edit </a> 
					<a href="{{'/admin/deleteproperty/'.$property->property_id}}"> Delete </a>
					 
					 </td>
				</tr>
				@endforeach
				</tbody>
				
			</table>
</div>			


</div>		

@endsection