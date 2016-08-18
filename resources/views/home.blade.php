@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Events Page</div>

<div class="panel-body">
                  
  <h2>All Upcoming Events</h2>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Events</th>
        <th>Date</th>
        <th>Venue</th>
        <th>Going Users</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Baptism</td>
        <td>20/10/2016</td>
        <td>Uhuru Park</td>
        <td>20</td>
      </tr>
      <tr>
        <td>Bible Study</td>
        <td>12/09/2016</td>
        <td>Church Grounds</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Koibatek Mission</td>
        <td>12/12/2016</td>
        <td>Koibatek AGC Church</td>
        <td>30</td>
      </tr>
      <tr>
        <td>Marriage is Alive</td>
        <td>10/11/2016</td>
        <td>Church Grounds</td>
        <td>70</td>
      </tr>
    </tbody>
  </table>

<br/>
<br/>
<fieldset>
<legend>Create Event</legend>
  <form class="form-inline">
  <div class="form-group">
    <label for="event">Event</label>
    <input type="text" class="form-control" id="event" placeholder="E.g Baptism, missions">
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date">
  </div>
  <div class="form-group">
    <label for="venue">Event</label>
    <input type="text" class="form-control" id="venue" placeholder="E.g Church, school">
  </div>
  <button type="submit" class="btn btn-primary" style="float:right;">Create</button>
</form>
</fieldset>
</div>
               
            </div>
        </div>
    </div>
</div>
@endsection
