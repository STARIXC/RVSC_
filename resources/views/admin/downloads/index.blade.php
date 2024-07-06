@extends('admin.admin_master')
@section('content')
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
    <!-- Recent Order Table -->
    <div class="card" id="recent-orders">
      <div class="card-header justify-content-between">
        <h2>Download Resources</h2>

      </div>
      <div class="card-body">
        <table class="table table-striped table-responsive table-bordered">
          <thead>
            <tr>
              <th class="text-center">S.No</th>
              <th>Name</th>
              <th class="d-none d-sm-table-cell">Subject</th>
              <th class="d-none d-sm-table-cell">Creation Date</th>
              <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

            </tr>
          </thead>
          <tbody>
            {{-- @php
                            $i=1;
                        @endphp --}}
            @foreach ($downloads as $item)


            <tr>
              <td>{{$downloads->firstItem()+$loop->index }}</td>
              <td>
                <a class="text-dark" href="">{{ $item->name }}</a>
              </td>
              <td class="d-none d-sm-table-cell">{{ $item->subject }}</td>
              <td>
                {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
              </td>
              <td class="text-right">
                <div class="dropdown d-inline-block widget-dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                 
                    <li class="dropdown-item">
                      <a href="{{ url('admin/category/edit/'.$item->id) }}">Edit</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="{{ url('admin/softdelete/category/'.$item->id )}}">Remove</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $downloads ->links()}}
      </div>
    </div>
  </div>
  {{-- endtry form --}}
  <div class="col-4">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom">
        <h2>Add Resource</h2>
      </div>
      <div class="card-body">
        <div class="form-body">

          <form method="post" action="{{ route('store.downloads') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">File Title</label>
              <input type="text" class="form-control" id="name" name="name" value=""
                >
              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
                <label for="ctype">File Description</label>
                <input type="text" class="form-control" id="subject" name="subject" value="" >
                @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="form-group">
              @error('document')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <label for="exampleInputEmail1">File</label>
              <input type="file" class="form-control" name="document" value=""  >
              </div>
         
           
            <button type="submit" class="btn btn-info btn-md" name="submit">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- deleted categories --}}
  <div class="col-8 mt-3">
 
    <!-- Recent Order Table -->
    <div class="card" id="recent-orders">
      <div class="card-header justify-content-between">
        <h2>Trashed Categories</h2>

      </div>
      <div class="card-body">
        <table class="table table-striped table-responsive table-bordered">
          <thead>
            <tr>
                <th class="text-center">S.No</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell">Subject</th>
                <th class="d-none d-sm-table-cell">Creation Date</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

            </tr>
          </thead>
          <tbody>
            {{-- @php
            $i=1;
        @endphp --}}
            @foreach ($trashedDownloads as $item)


            <tr>
              <td>{{$trashedDownloads->firstItem()+$loop->index }}</td>
              <td>
                <a class="text-dark" href="">{{ $item->name }}</a>
              </td>
              <td class="d-none d-sm-table-cell">{{ $item->subject }}</td>
              <td>
                {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
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
                      <a href="{{ url('admin/category/restore/'.$item->id) }}">Restore</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="{{ url('admin/category/delete/'.$item->id )}}">P Delete</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $trashedDownloads ->links()}}
      </div>
    </div>
  </div>
  {{-- endtry form --}}
  <div class="col-4">

  </div>
</div>


@endsection