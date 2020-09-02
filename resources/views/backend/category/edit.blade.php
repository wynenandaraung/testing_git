@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brand Create Form</h1></div>
	<div class="row">
	<form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
  
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="name"  value="{{$category->name}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPhoto3" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputPhoto3" name="photo"   >
      <img src="{{ asset($category->photo)}}" class="img-fluid w-25">
      <input type="hidden" name="oldphoto" value="{{$category->photo}}" >
    </div>
  </div>

  


  



  
 
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
</div>
</div>

@endsection