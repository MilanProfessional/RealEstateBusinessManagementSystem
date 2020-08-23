
@extends('layout.nonUsers.master')
@section('content')
<div class="row well" >

	<div class="col-md-8" > 

	@if (Route::has('login'))
                
                    @if (Auth::check())
                        <a href="{{ url('/home') }}"><span>Dashboard</span></a>
                    @else
               <a  style="color:red;" href="{{ url('login')}}" class="btn btn-lg">Please  Login to see full details of Properties.</a>
                    @endif
               
            @endif
            
            </div>
	<div class="col-md-4 text-right" >

	<form class="form-inline" action="" >
		<div class="form-group input-group">
			<input class="form-control" type="search" name="search_text" id="search_text" placeholder="Search">
		</div>
		<button class="btn btn-primary" type="submit" name="search" id="search">Search</button>
	</form>	

	</div>
	
</div>

<div class="row">	
<div class="well">
			<table class="table" style="background-color:#669999 !important;">
				<tr>
					<th>Property Price</th>
					<th>Property Area</th>
					<th>Property Image</th>
				</tr>
				@foreach ($property as $property)
				<tr>
					<td>{{$property->property_price}}</a></td>
					<td>{{$property->property_area}}</td>
					<td>
						<img style="height: 80px; width: 100px;" src="{{asset('storage/'.$property->property_image)}}"/>
					</td>
				</tr>
				@endforeach
				
			</table>
</div>			


</div>		

@endsection