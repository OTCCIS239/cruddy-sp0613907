@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Edit Customer</h3>
  <form action="/customers/{{ $customer->id }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="fname">First Name</label>
        <input name="fname" type="text" class="form-control" id="fname" value="{{ @$customer ?$customer->fname : ''}}" placeholder="John">
      </div>
      <div class="form-group col-md-6">
        <label for="lname">Last Name</label>
        <input name="lname" type="text" class="form-control" id="lname" value="{{ @$customer ?$customer->lname : ''}}" placeholder="Doe">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input name="email" type="email" class="form-control" id="inputEmail4" value="{{ @$customer ?$customer->email : ''}}" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input name="password" type="password" class="form-control" id="inputPassword4" value="{{ @$customer ?$customer->password : ''}}" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input name="line1" type="text" class="form-control" id="inputAddress" value="{{ @$customer ?$customer->line1 : ''}}" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input name="line2" type="text" class="form-control" id="inputAddress2" value="{{ @$customer ?$customer->line2 : ''}}" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input name="city" type="text" class="form-control" id="inputCity" value="{{ @$customer ?$customer->city : ''}}">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option name="state" value="{{ @$customer ?$customer->state : ''}}" selected>Choose...</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District Of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input name="zip" type="text" class="form-control" id="inputZip" value="{{ @$customer ?$customer->zip : ''}}">
      </div>
    </div>
  <div class="form-group row">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-danger">Save Changes</button>
  </div>
  </div>
  </form>
</div>
@stop
