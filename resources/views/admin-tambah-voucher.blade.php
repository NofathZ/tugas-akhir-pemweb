
@extends('layouts.admin')

@section('title', 'Tambah Voucher')

@section('content')
<div class="container">
    <form action="{{ route('addcode') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="idVoucher" class="form-label">ID Voucher</label>
            <input type="text" name="id" class="form-control" id="idVoucher" required>
        </div>
        <div class="mb-3">
            <label for="voucherNominal" class="form-label">Nominal (Rp)</label>
            <input type="number" name="nominal" class="form-control" id="voucherNominal" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
