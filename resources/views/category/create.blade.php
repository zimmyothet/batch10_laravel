@extends('template')
@section('content')
<div class="container">

<div class="row">
	<div class="col-lg-8 col-md-10 mx-auto">
	<h1>Create Category</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	
	<form method="post" action="{{route('category.store')}}" enctype="multipart/form-data" >
	@csrf

	<div class="form-group">
		<label>Name:</label>
		<input type="text" name="name" class="form-control" required="required">
	</div>

	

	<div class="form-group">
		
		<input type="submit" name="btn" value="Save">
	</div>

	
</form>
</div>
</div>
</div>


@endsection
