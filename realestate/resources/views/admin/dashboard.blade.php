@extends('layout.admin.master')


@section('title')
DashBoard
@endsection


@section('content')


<div class="row">	
<div class="well">
<div class="panel-heading">Properties Available</div>

			
								@foreach ($property as $property)
						<img style="height: 500px; width: 550px; padding-left: 35px; padding-bottom: 20px;" src="{{asset('storage/'.$property->property_image)}}"/>
					
					
				
				@endforeach
				
					


</div>
</div>

@endsection