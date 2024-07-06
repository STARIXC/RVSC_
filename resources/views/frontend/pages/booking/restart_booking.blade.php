@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/css/booking.css')}}" rel="stylesheet" type="text/css" media="all" />

<div class="content">
    <header class="roomsHero">
        <div class="banner">
            <h1>Start Your Reservation</h1>
            <div></div>
            <p></p>
            <a class="btn-primary" href="index.php">return home</a>
        </div>
    </header>

    <section class="roomslist">

        <div class="container">
  
  
          <div class="card p-3">
            <form action="room_select.php" method="post">
  
  
              <div class="bg">
                <!--For Row containing all card-->
                <div class="row mainRow">
                  <!--Card 1-->
  
                  <div class="col-sm-12 col-md-4 booking-side-wrapper">
                    <h4 class="title1">Your Reservation</h4>
                    <!--Card Body-->
  
                    <div class="mb-1">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <label for="room-selection">Rooms</label>
                          <div class="select-wrapper room-selection-wrapper">
                          <input type="text" value="1" name="room-selection" id="room-selection">
                          <span id="error_room" class="text-danger"></span>
                          </div>
  
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="rooms-wrapper">
  
  
                            <div class="room-1 room-booking rv-clearfix" style="display: block;">
  
                              <p>No of Guests</p>
                              <div class="guest-2-cols">
                                <label for="adult">Adult</label>
                                <div class="select-wrapper">
                                <input type="text" value="1" name="adult" id="adult">
                                <span id="error_adults" class="text-danger"></span>
                                </div>
                              </div>
  
  
                              <div class="guest-2-cols">
                                <label for="child">Child</label>
                                <div class="select-wrapper">
                                <input type="text" value="0" name="child" id="child">
                              
  
                                </div>
                              </div>
                            </div>
                            <!-- END .rooms-wrapper -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Card footer-->
  
  
                  </div>
                  <!--Card 2-->
                  <div class="col-sm-12 col-md-8 ">
                    <div>
                      <!--Card image-->
                      <div class="booking-main-wrapper">
                        <div class="rooms-wrapper">
                          <div class="room-1 room-booking rv-clearfix" style="display: block;">
                            <p>Select Dates</p>
                            <div class="guest-2-cols">
                              <label for="checkinn">Checkin Date</label>
                              <div class="select-wrapper">
                                <input type="text" value="" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd" name="checkin" id="checking">
                                
                              </div>
                            </div>
                            <div class="guest-2-cols">
                              <label for="child">Checkout Date</label>
                              <div class="select-wrapper">
                                <input type="text" name="checkout" id="checkout" value="" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                              </div>
                            </div>
                          </div>
                          <!-- END .rooms-wrapper -->
                        </div>
                      </div>
                    </div>
                    <div>
                      <!--Card image-->
                      <div class="booking-main-wrapper">
                        <div class="rooms-wrapper">
                          <div class="room-1 room-booking rv-clearfix" style="display: block;">
                            <p></p>
                            <div class="guest-1-cols">
                              <button type="submit" id="search-room" name="submitBtn" class="purchaseLink card-footer text-center btn btn-block">Check Availability →</button>
                            </div>
  
                          </div>
                          <!-- END .rooms-wrapper -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
  
            </form>
  
          </div>
  
  
  
        </div>
      </section>


</div>
<!-- cards services -->
<script>
    $(function() {
      if ($('#checkin, #checkout').length) {
        // check if element is available to bind ITS ONLY ON HOMEPAGE
        var currentDate = moment().format("DD-MM-YYYY");
  
        $('#checkin, #checkout').daterangepicker({
          locale: {
            format: 'DD-MM-YYYY'
          },
          "alwaysShowCalendars": true,
          "minDate": currentDate,
          "maxDate": moment().add('months', 2),
          autoApply: true,
          autoUpdateInput: false
        }, function(start, end, label) {
          // console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
          // Lets update the fields manually this event fires on selection of range
          var selectedStartDate = start.format('DD-MM-YYYY'); // selected start
          var selectedEndDate = end.format('DD-MM-YYYY'); // selected end
  
          $checkinInput = $('#checkin');
          $checkoutInput = $('#checkout');
  
          // Updating Fields with selected dates
          $checkinInput.val(selectedStartDate);
          $checkoutInput.val(selectedEndDate);
  
          // Setting the Selection of dates on calender on CHECKOUT FIELD (To get this it must be binded by Ids not Calss)
          var checkOutPicker = $checkoutInput.data('daterangepicker');
          checkOutPicker.setStartDate(selectedStartDate);
          checkOutPicker.setEndDate(selectedEndDate);
  
          // Setting the Selection of dates on calender on CHECKIN FIELD (To get this it must be binded by Ids not Calss)
          var checkInPicker = $checkinInput.data('daterangepicker');
          checkInPicker.setStartDate(selectedStartDate);
          checkInPicker.setEndDate(selectedEndDate);
  
        });
  
      } // End Daterange Picker
    });
  </script>
@endsection