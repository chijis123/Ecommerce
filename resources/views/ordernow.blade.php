@extends('master')
@section("content")
<div class="custom-product">
<table class="table table-borderless">

  <tbody>
    <tr class="table-danger">
      <th scope="row">Amount</th>
      <td>{{$total}}</td>
    </tr>
    <tr class="table-success">
      <th scope="row">Tax</th>
      <td>$ 0</td>

    </tr>
    <tr class="table-warning">
      <th scope="row">Delivary charges</th>
      <td colspan="2">$ 10</td>
    </tr>
    <tr class="table-success">
      <th scope="row">Total Amount</th>
      <td colspan="2"> $ {{$total + 10}}</td>
    </tr>
  </tbody>
</table>
</div>
<div class="container">
  <div class="row justify-content-center">
  @if ($errors->any())
        <div class="alert alert-danger container text-center">
            <strong>Error!</strong> 
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <form action="/orderplace" method="post">
        @csrf
      <div class="form-group">
        <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="cash" checked>
        <label class="form-check-label" for="exampleRadios1">
          Online Transaction
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="cash">
        <label class="form-check-label" for="exampleRadios2">
          Equated Monthly Instalment
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios3" value="cash">
        <label class="form-check-label" for="exampleRadios3">
          Cash on Delivery
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
  </div>
</div>




@endsection 