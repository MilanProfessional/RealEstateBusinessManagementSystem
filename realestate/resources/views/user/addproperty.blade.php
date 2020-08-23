@extends('layout.front.master')

@section('title')
Add Property
@endsection


@section('content')
<div class="row">   
<div class="well">
                <div class="panel-heading">Add Property</div>
                <div class="panel-body">
                    <form enctype ="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ route('user.addproperty') }}">
                        {{ csrf_field() }}

<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
        <label>Property Price:</label>
        <input type="text" class="form-control" name="property_price">
    </div>

        <div class="form-group">
        <label>Property Location:</label>
        <input type="text" class="form-control" name="property_location" >
    </div>

        <div class="form-group">
        <label>Property Area:</label>
        <input type="text" class="form-control" name="property_area" >
    </div>

    <div class="form-group">
        <label>Property Description:</label>
        <input type="text" class="form-control" name="property_description" >
    </div>

    <div class="form-group">
        <label>Property Image:</label>
        <input type="file" class="form-control" name="property_image" >
    </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>

     
@endsection