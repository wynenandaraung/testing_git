@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1></div>
	<div class="row">
	<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
		@csrf
  <div class="form-group row " >
    <label for="inputCode3" class="col-sm-2 col-form-label">Code No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('codeno')is-invliad @enderror" id="inputCode3" name="codeno" >
      <span class="text-danger">{{$errors->first('codeno')}}</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="name">
      <span class="text-danger">{{$errors->first('name')}}</span>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPhoto3" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputPhoto3" name="photo" >
      <span class="text-danger">{{$errors->first('photo')}}</span>
    </div>
  </div>

  <div class="form-group row ">
    <label for="inputPrice3" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrice3" name="price" ><span class="text-danger">{{$errors->first('price')}}</span>
    </div>
  </div>

<div class="form-group row ">
    <label for="inputDiscount3" class="col-sm-2 col-form-label">Discount</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputDiscount3" name="discount" value=0 >
      <span class="text-danger">{{$errors->first('discount')}}</span>
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required="required"></textarea>
    <span class="text-danger">{{$errors->first('description')}}</span>
  </div>
<div class="form-group">
	<select class="form-control form-control-md" id="inputBrand" name="brand" >
		<optgroup label="Choose Brand">
			@foreach($brands as $brand)
			<option value="{{$brand->id}}">{{$brand->name}}</option>
			@endforeach
		</optgroup>
	</select></div>

	<div class="form-group">
	<select class="form-control form-control" id="inputSubcategory" name="subcategory">
		<optgroup label="Choose Subcategory">
			@foreach($subcategories as $subcategory)
			<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
			@endforeach
		</optgroup>
	</select></div>


  
 
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
</div>
</div>

@endsection