@extends('layouts.admin')

@section('title', 'List Voucher')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nominal</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($codes as $code)
        <tr>
            <td> {{$code->id}} </td>
            <td> {{$code->nominal}} </td>
            <td> {{$code->status}} </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
