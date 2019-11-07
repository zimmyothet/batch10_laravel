@extends('template')
@section('content')
<div class="container">
<div class="col-lg-8 col-md-10 mx-auto">
<form method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	<h1>Category Edit Form</h1>

	
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="{{$category->name}}">
	</div>

	

	<div class="form-group">
		
		<input type="submit" name="btn" value="Save">
	</div>

	
</form>
</div>
</div>


@endsection
