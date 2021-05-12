
@extends('layouts.admin')

@section('title', 'Tambah Voucher')

@section('content')
<div class="container">
    <form>
        <div class="mb-3">
            <label for="idVoucher" class="form-label">ID Voucher</label>
            <input type="email" class="form-control" id="idVoucher" required>
        </div>
        <div class="mb-3">
            <label for="voucherNominal" class="form-label">Nominal (Rp)</label>
            <input type="number" class="form-control" id="voucherNominal" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
