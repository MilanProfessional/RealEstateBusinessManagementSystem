@extends('layout.admin.master')
@section('title')
View User
@endsection

@section('content')
<div class="row well" >

	<div class="col-md-8"><strong>View Users</strong></div>
	<div class="col-md-4 text-right" >

	<form class="form-inline" action="">
		<div class="form-group input-group">
			<input class="form-control" type="search" name="search_text" id="search_text" placeholder="Search">
		</div>
		<button class="btn btn-primary" type="submit" name="search" id="search">Search</button>
	</form>	

	</div>
	
</div>

<div class="row">	
<div class="well">
			<table class="table">
				<tr>
					
					<th>Name</th>
					<th>Email</th>
					
					
					<th>MobileNo</th>
					<th>Action</th>
				</tr>
					@foreach ($users as $user)
				<tr>
					<td>{{$user->name}}</a></td>
					<td>{{$user->email}}</td>
					
					
					<td>{{$user->mobileno}}</td>
					<td> 
					
					<a href="{{'/admin/deleteuser/'.$user->id}}"> Delete </a>
					 
					 </td>
				</tr>
				@endforeach
			</table>
</div>			


</div>		

@endsection