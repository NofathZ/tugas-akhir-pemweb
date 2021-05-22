@extends('layouts.mentee')

@section('content')
<div class="container">
    @foreach($list as $item)
    <center>
        <img class="rounded img-thumbnail" src="{{ asset('storage/avatars/'.$item->mentor_id.'/'.$item->image) }}" alt="profilPict">
    </center>
    <center>
        <h1>{{ $item->mentor_name }}</h1>
    </center>
    <div>
        <div class="card rounded py-3 px-3" style="background-color: rgb(229 231 235);">
            <span class="pb-3">Pelajaran Yang dipesan : {{ $item->course_name }}</span>
            <span>Jumlah Hari : {{ $item->days }}</span>
        </div>
    </div>
    <div>
        <button class="btn btn-danger disabled" data-toggle="modal" data-target="#exampleModal" style="float: right">Konfirmasi Penghentian Session</button> {{-- ini if else in aja --}}
        <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="float: right">Konfirmasi Penghentian Session</button> {{-- ini if else in aja --}}
    </div>
    @endforeach
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin konfirmasi penghentian session?</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Konfirmasi') }}</a>
            </div>
        </div>
    </div>
</div>

<style>
    .img-thumbnail {
        width: 200px;
    }
</style>
@endsection