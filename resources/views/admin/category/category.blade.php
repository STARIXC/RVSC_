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
        <h2>Room Categories</h2>

      </div>
      <div class="card-body">
        <table class="table table-striped table-responsive table-bordered">
          <thead>
            <tr>
              <th class="text-center">S.No</th>
              <th>Category Name</th>
              <th class="d-none d-sm-table-cell">Category Description</th>
              <th class="d-none d-sm-table-cell">Category Type</th>
              <th class="d-none d-sm-table-cell">Room Price</th>
              <th class="d-none d-sm-table-cell">Creation Date</th>
              <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

            </tr>
          </thead>
          <tbody>
            {{-- @php
                            $i=1;
                        @endphp --}}
            @foreach ($categories as $item)


            <tr>
              <td>{{$categories->firstItem()+$loop->index }}</td>
              <td>
                <a class="text-dark" href="">{{ $item->category_name }}</a>
              </td>
              <td class="d-none d-sm-table-cell">{{ $item->description }}</td>
              <td class="d-none d-sm-table-cell">{{ $item->room_type }}</td>
              <td class="d-sm-table-cell">{{ $item->price }}</td>
              <td>
                {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
              </td>
              <td class="text-right">
                <div class="dropdown d-inline-block widget-dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                    <li class="dropdown-item">
                      <a href="{{ url('/admin/room/add/'.$item->id) }}">Add More Details</a>
                    </li>
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
        {{ $categories ->links()}}
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

          <form method="post" action="{{ route('store.category') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="cname">Category Title</label>
              <input type="text" class="form-control" id="cname" name="cname" value=""
                placeholder="i.e. Executive, Single, Mini-suites">
              @error('cname')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              @error('image_category')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <label for="exampleInputEmail1">Image</label>
              <input type="file" class="form-control" name="image_category" value=""
                  onchange="mainImageUrl(this)">
              <img src="" alt="" class="thumbnail p-1 m-1" id="mainImageThumb">
          </div>
            <div class="form-group">
              <label for="ctype">Category Type</label>
              <input type="text" class="form-control" id="ctype" name="ctype" value=""
                placeholder="i.e. Single, Double">
              @error('ctype')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="catdes">Description / Location</label>
              <input type="text" class="form-control" id='catdes' name="catdes" value=""
                placeholder="i.e. Main Building,Parking Lot,Swimming Pool">
              @error('catdes')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="price">Price 1pax</label>
              <input type="text" class="form-control" id="price" name="price" value="">
              @error('price')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="dprice">Price 2pax</label>
              <input type="text" class="form-control" id="dprice" name="dprice" value="">
              @error('dprice')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
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
              <th>Category Name</th>
              <th class="d-none d-sm-table-cell">Category Description</th>
              <th class="d-none d-sm-table-cell">Category Type</th>
              <th class="d-none d-sm-table-cell">Room Price</th>
              <th class="d-none d-sm-table-cell">Creation Date</th>
              <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

            </tr>
          </thead>
          <tbody>
            {{-- @php
            $i=1;
        @endphp --}}
            @foreach ($trashedCategories as $item)


            <tr>
              <td>{{$trashedCategories->firstItem()+$loop->index }}</td>
              <td>
                <a class="text-dark" href="">{{ $item->category_name }}</a>
              </td>
              <td class="d-none d-sm-table-cell">{{ $item->description }}</td>
              {{-- <td class="d-none d-sm-table-cell">{{ $item->room_type }}</td> --}}
              <td class="d-sm-table-cell">{{ $item->price }}</td>
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
        {{ $trashedCategories ->links()}}
      </div>
    </div>
  </div>
  {{-- endtry form --}}
  <div class="col-4">

  </div>
</div>
<script type="text/javascript">
  function mainImageUrl(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              $('#mainImageThumb').attr('src',e.target.result).width(80).height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
  }
</script>

@endsection