@extends('layouts.mentor')

{{-- @section('title', 'List Mentee') --}}

@section('content')

<div class="card px-3 py-2">
    <div class="row">
        <div class="col-8 d-flex">
            <img src="{{ asset('img/theme/team-2.jpg') }}" alt="profilPict" style="width: 10%">
            <h1 class="pl-2">Nama</h1>
        </div>
        <div class="col d-flex flex-row-reverse">
            <div class="d-flex align-items-center">
                <button class="btn btn-primary">Show Detail</button>
            </div>
        </div>
    </div>
</div>
<div class="card px-3 py-2">
    <div class="row">
        <div class="col-8 d-flex">
            <img src="{{ asset('img/theme/team-2.jpg') }}" alt="profilPict" style="width: 10%">
            <h1 class="pl-2">Nama</h1>
        </div>
        <div class="col d-flex flex-row-reverse">
            <div class="d-flex align-items-center">
                <button class="btn btn-primary">Show Detail</button>
            </div>
        </div>
    </div>
</div>

@endsection