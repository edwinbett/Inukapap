@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading"><h3>Church Upcoming Events</h3></div>
<br/>
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action list-group-item-success">Visit Childrens' Home - Tue</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">VBS Training - Thur</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Weekly Fellowship - Fri</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Youth Choir Practice - Sat</a>
</div>
<br/>

                




            @if(Auth::guest())
              <a href="/login" class="btn btn-info"> Login</a>
            @endif
        </div>
    </div>
</div>
@endsection