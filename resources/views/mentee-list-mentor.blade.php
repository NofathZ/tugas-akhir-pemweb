@extends('layouts.mentee')

@section('title', 'List Mentor')

@section('content')
@foreach ($mentees as $mentee)
<div class="card px-3 py-2">
    <div class="row">
        <div class="col-8 d-flex">
            <img src="{{ asset('storage/avatars/'.$mentee->id.'/'.$mentee->image) }}" alt="profilPict" style="width: 10%">
            <h1 class="pl-2">{{ $mentee->name }} </h1>
        </div>
        <div class="col d-flex flex-row-reverse">
            <div class="d-flex align-items-center">
                <a href="/mentor/detail-mentee/{{$mentee->id}}"><button class="btn btn-primary">Show Detail</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection