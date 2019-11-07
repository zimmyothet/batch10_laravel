@extends('template')
@section('content')

  
  <div class="container my-5">
    <div class="row">
    <div class="col-md-8">
      <h1 class="my-4"></h1>
      <div class="row">
        <h2>Categories </h2>
        <a href="#" class="btn btn-primary mx-5">Add Category</a>
      </div>
      

  <table border="1" cellspacing="0" cellpadding="10">
  <thead>
    
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $row)
    <tr>
      <td>{{$row->id}}</td>
      <td>{{$row->name}}</td>
      <td><a href="{{route('category.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
      <td>
        <form method="post" action="{{route('category.destroy',$row->id)}}">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-danger" value="Delete">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>

  


@endsection

