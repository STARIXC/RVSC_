@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
  <div class="col-8">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="row">
      <div class="col-md-12">
        <!-- Recent Order Table -->
        <div class="card" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Management</h2>

          </div>
          <div class="card-body">
            <table class="table table-striped table-responsive table-bordered">
              <thead>
                <tr>
                  <th class="text-center">S.No</th>
                  <th>Director Name</th>
                  <th class="d-none d-sm-table-cell">Position</th>
                  <th class="d-none d-sm-table-cell">Image</th>
                  <th class="d-none d-sm-table-cell">Creation Date</th>
                  <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                </tr>
              </thead>
              <tbody>
                {{-- @php
                        $i=1;
                    @endphp --}}
                @foreach ($directors as $item)

                <tr>
                  <td>{{$directors->firstItem()+$loop->index }}</td>
                  <td>{{ $item->director_name }}</td>
                  <td>{{ $item->director_position }}</td>
                  <td><img src="{{ asset($item->director_image)}}" width="100"></td>
                  <td>
                    {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                  </td>
                  <td class="text-right">
                    <div class="dropdown d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                        <li class="dropdown-item">
                          <a href="{{ url('admin/management/edit/'.$item->id) }}">Edit</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="{{ url('admin/softdelete/Management/'.$item->id )}}">Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>


                </tr>


                @endforeach
              </tbody>
            </table>
            {{ $directors ->links()}}
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-3">
        <!-- Recent Order Table -->
        <div class="card" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Transed Records</h2>

          </div>
          <div class="card-body">
            <table class="table table-striped table-responsive table-bordered">
              <thead>
                <tr>
                  <th class="text-center">S.No</th>
                  <th>Image Name</th>
                  <th class="d-none d-sm-table-cell">Image Description</th>
                  <th class="d-none d-sm-table-cell">Image Preview</th>

                  <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($trashed as $item)
                <tr>
                  <td>{{$trashed->firstItem()+$loop->index }}</td>
                  <td>
                    <a class="text-dark" href="">{{ $item->director_name }}</a>
                  </td>
                  <td class="d-none d-sm-table-cell">{{ $item->director_position }}</td>

                  <td class="d-sm-table-cell"><img src="{{ asset($item->director_image)}}" width="100"></td>
                  <td>
                    {{ Carbon\Carbon::parse($item->deleted_at)->diffForHumans() }}
                  </td>
                  <td class="text-right">
                    <div class="dropdown d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                        <li class="dropdown-item">
                          <a href="{{ url('admin/management/restore/'.$item->id) }}">Restore</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="{{ url('admin/management/delete/'.$item->id )}}">P Delete</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $trashed ->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- endtry form --}}
  <div class="col-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Add Director</h2>
          </div>
          <div class="card-body">
            <div class="form-body">

              <form method="post" action="{{ route('store.director') }} " enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" name="image" value="" required='true'>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                  <select name="man_cat" id="man_cat" class="form-control">
                    <option value="">Select one</option>
                    <option value="BOD">Board of Directors</option>
                    <option value="BOT">Board of Trustees</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="dtitle" value="" required='true'>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Position</label>
                  <input type="text" class="form-control" name="dpos" value="" required='true'>
                </div>
                <button type="submit" class="btn btn-info btn-md" name="submit">Add</button>
               
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>



@endsection