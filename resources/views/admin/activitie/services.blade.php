@extends('admin.admin_master')
@section('content')
<div class="row">

  <div class="col-8">
    @if (session('notification'))
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
        <h2>RVSC Services</h2>

      </div>
      <div class="card-body">
        <table class="table table-striped table-responsive table-bordered">
          <thead>
            <tr>
              <th class="text-center">S.No</th>
              <th>Service Name</th>
              <th class="d-none d-sm-table-cell">Service Description</th>
              <th class="d-none d-sm-table-cell">Service Image</th>

              <th class="d-none d-sm-table-cell">Creation Date</th>
              <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

            </tr>
          </thead>
          <tbody>
            {{-- @php
                            $i=1;
                        @endphp --}}
            @foreach ($services as $item)


            <tr>
              <td>{{$services->firstItem()+$loop->index }}</td>
              <td>
                <a class="text-dark" href="">{{ $item->service_title }}</a>
              </td>
              <td class="d-none d-sm-table-cell">{{ $item->service_description }}</td>
              <td class="d-none d-sm-table-cell"><img src="{{ asset($item->service_image) }}" width="100" height="100">
              </td>

              <td>
                {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
              </td>
              <td class="text-right">
                <div class="dropdown d-inline-block widget-dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                    <li class="dropdown-item">
                      <a href="{{ url('admin/services/edit/'.$item->id) }}">Edit</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="{{ url('admin/softdelete/service/'.$item->id )}}">Remove</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $services ->links()}}
      </div>
    </div>
  </div>
  {{-- endtry form --}}
  <div class="col-4">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom">
        <h2>Add Category</h2>
      </div>
      <div class="card-body">
        <div class="form-body">

          <form method="post" action="{{ route('store.services') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Image</label>
              <input type="file" class="form-control" name="simage" value="" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Service Name</label>
              <input type="text" class="form-control" name="sname" value="" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Service Description</label>
              <input type="text" class="form-control" name="description" value="" >
            </div>

            <button type="submit" class="btn btn-info" name="submit-service">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- trashed services --}}
  <div class="col-8 mt-1">
  
    <!-- Recent Order Table -->
    <div class="card" id="recent-orders">
      <div class="card-header justify-content-between">
        <h2>Trashed services</h2>

      </div>
      <div class="card-body">
        <table class="table table-striped table-responsive table-bordered">
          <thead>
            <tr>
              <th class="text-center">S.No</th>
              <th>Category Name</th>
              <th class="d-none d-sm-table-cell">Category Description</th>
              <th class="d-none d-sm-table-cell">Category Type</th>

              <th class="d-none d-sm-table-cell">Creation Date</th>
              <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

            </tr>
          </thead>
          <tbody>
            {{-- @php
                            $i=1;
                        @endphp --}}
            @foreach ($trashedServices as $item)


            <tr>
              <td>{{$trashedServices->firstItem()+$loop->index }}</td>
              <td>
                <a class="text-dark" href="">{{ $item->service_title }}</a>
              </td>
              <td class="d-none d-sm-table-cell">{{ $item->service_description }}</td>
              <td class="d-none d-sm-table-cell"><img src="{{ asset($item->service_image) }}" width="100" height="100">
              </td>

              <td>
                {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
              </td>
              <td class="text-right">
                <div class="dropdown d-inline-block widget-dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                    <li class="dropdown-item">
                      <a href="{{ url('admin/service/restore/'.$item->id) }}">Restore</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="{{ url('admin/service/delete/'.$item->id )}}">Delete</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $trashedServices ->links()}}
      </div>
    </div>
  </div>
  {{-- endtry form --}}
  <div class="col-4">
    
  </div>
</div>


@endsection