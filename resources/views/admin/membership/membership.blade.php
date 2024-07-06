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
        <h2>RVSC membership</h2>

      </div>
      <div class="card-body">
        <table class="table table-striped table-responsive table-bordered">
          <thead>
            <tr>
              <th class="text-center">S.No</th>
              <th>Membership Name</th>
              <th class="d-none d-sm-table-cell">Membership Description</th>
              <th class="d-none d-sm-table-cell">Membership Icon</th>
              <th class="d-none d-sm-table-cell">Creation Date</th>
              <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

            </tr>
          </thead>
          <tbody>
            {{-- @php
                            $i=1;
                        @endphp --}}
            @foreach ($membership as $item)


            <tr>
              <td>{{$membership->firstItem()+$loop->index }}</td>
              <td>
                <a class="text-dark" href="">{{ $item->membership_name }}</a>
              </td>
              <td class="d-none d-sm-table-cell">{{ $item->description }}</td>
              <td class="d-none d-sm-table-cell"><img src="{{ asset($item->membership_icon) }}" width="100" height="100">
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
                      <a href="{{ url('/admin/membership/edit/'.$item->id) }}">Edit</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="{{ url('/admin/softdelete/membership/'.$item->id )}}">Remove</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $membership ->links()}}
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

          <form method="post" action="{{ route('store.membership') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Membership Icon</label>
              <input type="file" class="form-control" name="membership_icon" value="" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Membership Name</label>
              <input type="text" class="form-control" name="membership_name" value="" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Membership Description</label>
              <div class="form-group">
                <textarea class="ckeditor form-control" name="description"></textarea>
            </div>
             
            </div>

            <button type="submit" class="btn btn-info" name="submit-membership">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- trashed membership --}}
  <div class="col-8 mt-1">
  
    <!-- Recent Order Table -->
    <div class="card" id="recent-orders">
      <div class="card-header justify-content-between">
        <h2>Trashed membership</h2>

      </div>
      <div class="card-body">
        <table class="table table-striped table-responsive table-bordered">
          <thead>
            <tr>
                <th class="text-center">S.No</th>
                <th>Membership Name</th>
                <th class="d-none d-sm-table-cell">Membership Description</th>
                <th class="d-none d-sm-table-cell">Membership Icon</th>
                <th class="d-none d-sm-table-cell">Creation Date</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
            </tr>
          </thead>
          <tbody>
            {{-- @php
                            $i=1;
                        @endphp --}}
            @foreach ($trashedMemberships as $item)


            <tr>
              <td>{{$trashedMemberships->firstItem()+$loop->index }}</td>
              <td>
                <a class="text-dark" href="">{{ $item->smembership_name }}</a>
              </td>
              <td class="d-none d-sm-table-cell">{{ $item->description }}</td>
              <td class="d-none d-sm-table-cell"><img src="{{ asset($item->membership_icon) }}" width="100" height="100">
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
                      <a href="{{ url('admin/membership/restore/'.$item->id) }}">Restore</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="{{ url('admin/membership/delete/'.$item->id )}}">Delete</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $trashedMemberships ->links()}}
      </div>
    </div>
  </div>
  {{-- endtry form --}}
  <div class="col-4">
    
  </div>
</div>


@endsection