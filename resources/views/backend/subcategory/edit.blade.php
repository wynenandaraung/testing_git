@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">SubCategory Create Form</h1></div>
	<div class="row">
	<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
  
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="name"  value="{{$subcategory->name}}">
    </div>
  </div>

  

  



	<div class="form-group">
  <select class="form-control form-control" id="inputcategory" name="category" >
    <optgroup label="Choose category">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </optgroup>
  </select></div>


  
 
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
</div>
</div>

@endsection