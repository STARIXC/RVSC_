@extends('admin.admin_master')
@section('content')
<div class="row">
  <div class="col-8">
  
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Events</h2>
        </div>
        <div class="card-body">
            <div class="form-body">
 {{--  `news_id`,
                        `title`, 
                        `description`,
                        `category`,
                        `image`,
                        `expiry_date`  --}}
                <form method="post" action="{{ url('admin/news/update/'.$events->news_id) }}" role="form" enctype="multipart/form-data"
                    id="eventsform">
                    @csrf
                    <input type="hidden" name="id" value="{{ $events->news_id }}">
            <input type="hidden" name="old_img" value="{{ $events->image }}">
 <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="news_image" id="news_image" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="news_name" value="{{ $events->title }}" id="ename" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Description</label>
                        <textarea class="ckeditor form-control" name="newsdes">{{ $events->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Category</label>
                        <select name="newscat" id="" class="form-control">
                            <option value="{{ $events->category }}" selected >{{ $events->category }}</option>
                            <option value="jobs">Vacancies</option>
                            <option value="tender">Tenders</option>
                            <option value="offers">Offers</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">End Date</label>
                        <input type="date" class="form-control" name="edate" id="edate" value="{{ $events->expiry_date }}" />
                    </div>
                  
                    <button type="submit" class="btn btn-info btn-md" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <img src="{{ asset($events->image) }}" alt="" width="300">
      </div>
    </div>
  </div>
</div>


@endsection