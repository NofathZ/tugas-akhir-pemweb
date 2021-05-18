@extends('layouts.mentor')

@section('title', 'Detail Mentee')

@section('content')
@foreach($info as $item)
<div class="card p-3">
    <div class="d-flex align-items-end">
        <img src="{{ asset('storage/avatars/'.$item->id.'/'.$item->image) }}" class="img-thumbnail" alt="picture" style="width: 15%">
        <div>
            <button class="btn btn-primary ml-2">Chat</button>
        </div>
    </div>
</div>

<div class="card p-3">
    <h1>{{ $item->name }}</h1>
    <h1>{{ $item->email }}</h1>
    <h1>{{ $item->phone_number }}</h1>
</div>
@endforeach


@endsection