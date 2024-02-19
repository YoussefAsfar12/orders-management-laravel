@extends('layouts.app')
@section('content')
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Order Details</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Order Number:</strong> {{ $order->orderNumber }}</li>
                        <li class="list-group-item"><strong>Order Date:</strong> {{ $order->orderDate }}</li>
                        <li class="list-group-item"><strong>Required Date:</strong> {{ $order->requiredDate }}</li>
                        <li class="list-group-item"><strong>Shipped Date:</strong> {{ $order->shippedDate }}</li>
                        <li class="list-group-item"><strong>Status:</strong> {{ $order->status }}</li>
                        <li class="list-group-item"><strong>Comments:</strong> {{ $order->comments }}</li>
                        <li class="list-group-item"><strong>Customer Number:</strong> {{ $order->customerNumber }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Customer Information</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Customer Number:</strong> {{ $order->customer->customerNumber }}</li>
                        <li class="list-group-item"><strong>Customer Name:</strong> {{ $order->customer->customerName }}</li>
                        <li class="list-group-item"><strong>Contact Name:</strong> {{ $order->customer->contactLastName }} {{ $order->customer->contactFirstName }}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{ $order->customer->phone }}</li>
                        <li class="list-group-item"><strong>Address:</strong> {{ $order->customer->addressLine1 }}</li>
                        <li class="list-group-item"><strong>City:</strong> {{ $order->customer->city }}</li>
                        <li class="list-group-item"><strong>State:</strong> {{ $order->customer->state }}</li>
                        <li class="list-group-item"><strong>Postal Code:</strong> {{ $order->customer->postalCode }}</li>
                        <li class="list-group-item"><strong>Country:</strong> {{ $order->customer->country }}</li>
                        <li class="list-group-item"><strong>Sales Rep Employee Number:</strong> {{ $order->customer->salesRepEmployeeNumber }}</li>
                        <li class="list-group-item"><strong>Credit Limit:</strong> {{ $order->customer->creditLimit }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Order Line Items</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Product Code</th>
                                    <th>Quantity Ordered</th>
                                    <th>Price Each</th>
                                    <th>Order Line Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderdetails as $detail)
                                    <tr>
                                        <td>{{ $detail->orderNumber }}</td>
                                        <td>{{ $detail->productCode }}</td>
                                        <td>{{ $detail->quantityOrdered }}</td>
                                        <td>{{ $detail->priceEach }}</td>
                                        <td>{{ $detail->orderLineNumber }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection