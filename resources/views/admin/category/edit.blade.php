@extends('admin.admin_master')
@section('content')
<div class="row">
								<div class="col-8">
                  @if (session('success'))
                    <span class="alert alert-success">
                      {{ section('success') }}
                    </span>
                  @endif

<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Add Category</h2>
										</div>
										<div class="card-body">
											<div class="form-body">
									
									<form method="POST" action="{{ url('admin/category/update/'.$categories->id) }}">
                                    @csrf
									 <div class="form-group"> 
                                     <label for="cname">Category Title</label>
                                      <input type="text" class="form-control" id="cname" name="cname" value="{{ $categories->category_name }}"  placeholder="i.e. Executive, Single, Mini-suites"> 
                                      @error('cname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                      </div> 
									  <div class="form-group">
                                       <label for="ctype">Category Type</label>
                                        <input type="text" class="form-control" id="ctype" name="ctype" value="{{ $categories->room_type }}" placeholder="i.e. Single, Double"> 
                                        @error('ctype')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                        </div>
									 <div class="form-group">
                                      <label for="catdes">Description / Location</label>
                                       <input type="text" class="form-control" id='catdes' name="catdes" value="{{ $categories->description }}" placeholder="i.e. Main Building,Parking Lot,Swimming Pool"> 
                                       @error('catdes')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                       </div>
									<div class="form-group"> 
                                    <label for="price">Price</label>
                                     <input type="text" class="form-control" id="price" name="price" value="{{ $categories->price }}" > 
                                     @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                     </div>
									   <button type="submit" class="btn btn-info btn-md" name="submit">Update</button> </form> 
								</div>
										</div>
									</div>
</div>
							</div>
  
   
@endsection