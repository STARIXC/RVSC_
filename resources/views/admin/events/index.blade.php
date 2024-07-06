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
                <h2>Events and Updates</h2>

            </div>
            <div class="card-body">
                <table class="table table-striped table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>SNo.</th>
                            <th>Event Name</th>
                            <th>Entrance Fee</th>
                            <th>Event Date</th>
                            <th>Venue</th>
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

                        <tr>
                            <td>{{$events->firstItem()+$loop->index }}</td>
                            <td>{{ $item->event_name }}</td>
                            <td>{{ $item->entrance_fee }}</td>
                            <td>{{ $item->event_date }}</td>
                            <td>{{ $item->event_venue }}</td>
                            <td><img src="{{ asset($item->event_image)}}" width="100"></td>
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
                                            <a href="{{ url('admin/events/edit/'.$item->id) }}">Edit</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="{{ url('admin/events/delete/'.$item->id )}}">Remove</a>
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
    {{-- endtry form --}}
    <div class="col-4">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Add Events</h2>
            </div>
            <div class="card-body">
                <div class="form-body">

                    <form method="post" action="{{ route('store.event') }}" role="form" enctype="multipart/form-data"
                        id="eventsform">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control" name="simage" id="simage" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Name</label>
                            <input type="text" class="form-control" name="ename" value="" id="ename" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Description</label>
                            <input type="text" class="form-control" name="description" id="description" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Entrance Fee</label>
                            <input type="number" class="form-control" name="efee" id="efee" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Date</label>
                            <input type="date" class="form-control" name="edate" id="edate" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Start Time</label>
                            <input type="time" class="form-control" name="estime" id="estime" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event End Time</label>
                            <input type="time" class="form-control" name="eetime" id="eetime" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Venue</label>
                            <input type="text" class="form-control" name="evenue" id="evenue" />
                        </div>

                        <button type="submit" class="btn btn-info btn-md" name="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection