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

                <form method="post" action="{{ url('admin/events/update/'.$events->id) }}" role="form" enctype="multipart/form-data"
                    id="eventsform">
                    @csrf
                    <input type="hidden" name="id" value="{{ $events->id }}">
            <input type="hidden" name="old_img" value="{{ $events->event_image }}">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="simage" id="simage" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Name</label>
                        <input type="text" class="form-control" name="ename" value="{{$events->event_name  }}" id="ename" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Description</label>
                        <input type="text" class="form-control" name="description" id="description" value="{{ $events->event_description }}" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Entrance Fee</label>
                        <input type="number" class="form-control" name="efee" id="efee" value="{{ $events->entrance_fee }}" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Date</label>
                        <input type="date" class="form-control" name="edate" id="edate" value="{{ $events->event_date  }}"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Start Time</label>
                        <input type="time" class="form-control" name="estime" id="estime" value="{{ $events->event_from }}" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event End Time</label>
                        <input type="time" class="form-control" name="eetime" id="eetime" value="{{ $events->event_to }}" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Venue</label>
                        <input type="text" class="form-control" name="evenue" id="evenue" value="{{ $events->event_venue }}" />
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
        <img src="{{ asset($events->event_image) }}" alt="" width="300">
      </div>
    </div>
  </div>
</div>


@endsection