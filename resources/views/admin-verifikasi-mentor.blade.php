@extends('layouts.admin')

@section('title', 'Verifikasi Mentor')

@section('content')

<div class="d-flex">
    @foreach($info as $item)
    <img src="{{ asset('storage/avatars/'.$item->id.'/'.$item->image) }}" class="img-thumbnail" alt="picture" style="width: 15%">
    <div class="pl-2 pt-1">
        <h5><b>Name: </b>{{ $item->name }}</h5>
        <h5><b>Email: </b>{{ $item->email }}</h5>
        <h5><b>Phone Number: </b>{{ $item->phone_number }}</h5>
        <h5><b>Harga : Rp. </b> {{ $item->price }} / hari</h5>
    </div>
</div>

<div class="mt-3">
    <h1>Deskripsi</h1>
    <p>{{ $item->description }}</p>
</div>
<div class="mt-3">
    {{-- @foreach ($collection as $item)
        
    @endforeach --}}
    <h1>Subjek</h1>
    <p>Skill</p>
</div>

<h1 class="mt-3">File Lampiran</h1>
<div class="card p-3">
    <div class="input-group flex-nowrap">
        <h5><a href="{{ asset('storage/registrations/'.$item->id.'/'.$item->req_files) }}"> Download File Registrasi {{ $item->name }}</a></h5>
    </div>
</div>
<div class="d-flex flex-row-reverse mt-3">
    <button class="btn btn-success ml-2" data-toggle="modal" data-target="#acceptModal">Terima</button>
    <button class="btn btn-danger" data-toggle="modal" data-target="#refuseModal">Tolak</button>
</div>

<!-- Modal -->
<div class="modal fade" id="acceptModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Accept Mentor
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ route('verify', $item->id) }}"><button type="button" class="btn btn-success">Terima</button></a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="refuseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Refuse Mentor
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ route('reject', $item->id) }}"><button type="button" class="btn btn-danger">Tolak</button></a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
