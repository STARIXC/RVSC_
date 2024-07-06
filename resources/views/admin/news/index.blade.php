@extends('admin.admin_master')
@section('content')
<div class="row">
   {{-- endtry form --}}
   <div class="mb-5 col-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add News/Update</h2>
        </div>
        <div class="card-body">
            <div class="form-body">

                <form method="post" action="{{ route('store.news') }}" role="form" enctype="multipart/form-data"
                    id="eventsform">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="news_image" id="news_image" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="news_name" value="" id="ename" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Description</label>
                        <textarea class="ckeditor form-control" name="newsdes"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Category</label>
                        <select name="newscat" id="" class="form-control">
                            <option value="">Select One</option>
                            <option value="jobs">Vacancies</option>
                            <option value="tender">Tenders</option>
                            <option value="offers">Offers</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">End Date</label>
                        <input type="date" class="form-control" name="edate" id="edate" />
                    </div>
                  
                    <button type="submit" class="btn btn-info btn-md" name="submit">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
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
                <h2>News and Updates</h2>

            </div>
            <div class="card-body">
                <table class="table table-striped table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>SNo.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Expiry Date</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>date_created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            $i=1;
                        @endphp --}}
                        @foreach ($events as $item)
                        {{--  `news_id`,
                        `title`, 
                        `description`,
                        `category`,
                        `image`,
                        `expiry_date`  --}}
                        <tr>
                            <td>{{$events->firstItem()+$loop->index }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->expiry_date }}</td>
                            <td><img src="{{ asset($item->image)}}" width="100"></td>
                            <td>
                                {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                            </td>
                            <td class="text-right">
                                <div class="dropdown d-inline-block widget-dropdown">
                                    <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                        id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static"></a>
                                    <ul class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdown-recent-order1">
                                        <li class="dropdown-item">
                                            <a href="{{ url('admin/news/edit/'.$item->news_id) }}">Edit</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="{{ url('admin/news/delete/'.$item->news_id )}}">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>


                        </tr>


                        @endforeach
                    </tbody>
                </table>
                {{ $events ->links()}}
            </div>
        </div>
    </div>
 
</div>


@endsection