@extends('layouts.app')

@section('content')
    
    <form action="/orders" method="post" class="mt-5">
        @csrf
        <div class="mb-3">
            <label for="orderNumber" class="form-label">Numéro de commande</label>
            <input type="text" class="form-control @error('orderNumber') is-invalid @enderror" name="orderNumber" id="orderNumber">
            @error('orderNumber')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Statut</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status">
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="comments" class="form-label">Commentaires</label>
            <textarea class="form-control @error('comments') is-invalid @enderror" name="comments" id="comments" rows="5"></textarea>
            @error('comments')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="customerNumber" class="form-label">Numéro de client</label>
            <select class="form-select @error('customerNumber') is-invalid @enderror" name="customerNumber" id="customerNumber">
                @foreach($customers as $customer)
                    <option value="{{$customer->customerNumber}}">{{$customer->contactLastName}} {{$customer->contactFirstName}}</option>
                @endforeach
            </select>
            @error('customerNumber')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="requiredDate" class="form-label">Date requise</label>
            <input type="date" class="form-control @error('requiredDate') is-invalid @enderror" name="requiredDate" id="requiredDate">
            @error('requiredDate')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="shippedDate" class="form-label">Date expédiée</label>
            <input type="date" class="form-control @error('shippedDate') is-invalid @enderror" name="shippedDate" id="shippedDate">
            @error('shippedDate')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create order</button>
    </form>


@endsection
