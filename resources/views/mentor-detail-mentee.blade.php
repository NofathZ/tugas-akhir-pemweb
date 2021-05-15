@extends('layouts.mentor')

{{-- @section('title', 'Detail Mentee') --}}

@section('content')

<div class="card p-3">
    <div class="d-flex align-items-end">
        <img src="{{ asset('img/theme/team-1.jpg') }}" class="img-thumbnail" alt="picture" style="width: 15%">
        <div>
            <button class="btn btn-primary ml-2">Chat</button>
        </div>
    </div>
</div>

<div class="card p-3">
    <h1>Nama</h1>
    <h1>Email</h1>
    <h1>Nomor HP</h1>
</div>



@endsection