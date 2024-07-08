@extends('frontend.layouts.user_panel')
@section('panel_content')
<div>
<form action="{{route('submit_pickup')}}" method="post">
  @csrf
   <label for="lname">PickUp_Date:</label>
   <input class="form-control" type="date" name="date" value="" placeholder="{{ translate('Select Date') }}">
 

  <label for="fname">PickUp_Time:</label>

  <input class="form-control" type="time" name="time" value="00:00:00" step="1" placeholder="{{ translate('Select Time') }}">


  <label for="fname">PickUp_Location:</label>

  <input class="form-control" type="text" name="location" value="{{$pickup_name}}" placeholder="{{ translate(' Enter Location') }}">
  <label for="lname">PickUp_Count:</label>
  <input class="form-control" type="text" name="count" value="" placeholder="{{ translate('Enter Count') }}"></br>

  <input type="submit" value="Submit">
</form>
</div>

@endsection