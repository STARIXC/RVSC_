@extends('admin.admin_master')
@section('content')
<div class="row">
 
								<div class="col-12">
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                  <!-- Recent Order Table -->
                  <div class="card" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Room Categories</h2>
                      
                    </div>
                    <div class="card-body">
                      <table class="table table-striped table-responsive table-bordered" >
                        <thead>
                          <tr>
                            <th class="text-center">S.No</th>
                            <th>Room Name</th>
                            <th class="d-none d-sm-table-cell">Description</th>
                            <th class="d-none d-sm-table-cell">Image</th>
                            <th class="d-none d-sm-table-cell">Creation Date</th>
                            <th class="d-none d-sm-table-cell">Action</th>
                           </tr> 
                        </thead>
                        <tbody>
                        {{-- @php
                            $i=1;
                        @endphp --}}
                        @foreach ($rooms as $item)
                            
                        <tr>
                            <td class="text-center">{{$rooms->firstItem()+$loop->index }}</td>
                            <td class="font-w600">{{ $item->category_name}}</td>
                            <td class="d-none d-sm-table-cell">{{ $item->room_desc}}</td>
                             <td class="d-none d-sm-table-cell"><img src="{{ asset($item->category_image) }}" width="100" height="100"></td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-primary">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                            </td>
                             <td class="d-none d-sm-table-cell">
                             <a href="{{ url('admin/room/edit/'.$item->room_type) }}" class="btn btn-md  btn-primary">Edit</a>
                             <a href="{{ url('admin/room/edit_room_images/'.$item->room_type) }}"class="btn btn-md btn-success">Add Images</a>
                             <a href="{{ url('admin/room/delete/'.$item->id) }}" class="btn btn-md btn-danger">Delete</a>
                             </td>
                            
                        </tr>
                          
                      @endforeach
                        </tbody>
                      </table>
                      {{ $rooms ->links()}}
                    </div>
                  </div>
</div>
{{-- endtry form --}}

							</div>
  
   
@endsection