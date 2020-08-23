@extends('layout.admin.master')

@section('title')
Edit Property
@endsection

@section('content')
<div class="row well" >

	<div class="col-md-8"><strong>Edit Property</strong></div>
	<div class="col-md-4 text-right" >

	

	</div>
	
</div>

<div class="row">	
<div class="well">
			
<form action="{{route('property.update')}}" method="post" enctype ="multipart/form-data">
	{{ csrf_field() }}
	

	<input type="hidden" name="property_id" value="{{$properties->property_id}}">
	<div class="form-group">
		<label>Property Price:</label>
		<input type="text" class="form-control" name="property_price" value="{{$properties->property_price}}">
	</div>

		<div class="form-group">
		<label>Property Location:</label>
		<input type="text" class="form-control" name="property_location" value="{{$properties->property_location}}">
	</div>

		<div class="form-group">
		<label>Property Area:</label>
		<input type="text" class="form-control" name="property_area" value="{{$properties->property_area}}">
	</div>

	<div class="form-group">
		<label>Property Description:</label>
		<input type="text" class="form-control" name="property_description" value="{{$properties->property_description}}">
	</div>

	<div class="form-group">
		<label>Property Image:</label>
		<input type="file" class="form-control" name="property_image" value="{{$properties->property_image}}">
	</div>

	<input type="hidden" name="id" value="{{$properties->property_id}}">

	<input type="submit" name="update" value="Update" class="btn btn-primary">
</form>

</div>			
</div>		

@endsection