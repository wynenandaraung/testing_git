@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategories List</h1>
		<a href="{{ route('subcategories.create') }}" class="btn btn-primary">Add New</a>
	</div>
		<div class="row">
			<table class="table table-border">
				<thead class="thead">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Category Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($subcategories as $subcategory)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$subcategory->name}}</td>
						<td>{{$subcategory->category->name}}</td>
						<td><a href="" class="btn btn-primary">Delete</a>
						<a href="{{ route('subcategories.edit',$subcategory->id) }}" class="btn btn-primary">Edit</a>
					<a href="" class="btn btn-primary">Detail</a></td>
					</tr>
					@endforeach

					
				</tbody>
			</table>
		</div>
@endsection