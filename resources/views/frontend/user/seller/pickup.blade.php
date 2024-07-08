@extends('frontend.layouts.user_panel')

@section('panel_content')
{{-- {{dd($order)}} --}}
<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">Pickup Status</h1>
        </div>
    </div>
</div>
<div class="card">
    <form class="" id="sort_sellers" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-md-0 h6">{{ translate('PickUp Details') }}</h5>
            <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Details</th>
                    <th>Open Form</th>
                </tr>
                </thead>
                @foreach($order as $key=>$item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>Wainsy</td>
                    <td>
                                    <a href="{{route('show_pickup_form',$item->id)}}">
                                      <span class="badge badge-inline badge-info">Show</span>
                                    </a>
        
                    </td>
                    </tr>
                @endforeach
                <tbody>
            </tbody>
</table>
@endsection