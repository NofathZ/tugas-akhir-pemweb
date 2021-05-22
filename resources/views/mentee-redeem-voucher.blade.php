@extends('layouts.mentee')

@section('content')
<div class="container">
    <h1>Redeem Voucher</h1>
    <form action="{{ route('redeem-voucher') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="idVoucher" class="form-label">Masukkan ID Voucher</label>
            <input type="text" name="id" class="form-control" id="idVoucher" required>
        </div>
        <button type="submit" class="btn btn-primary">Redeem</button>
    </form>
</div>
@endsection
