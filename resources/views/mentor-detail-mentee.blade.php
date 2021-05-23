@extends('layouts.mentor')

@section('title', 'Detail Mentee')

@section('content')
{{-- <div class="card p-3">
    <div class="d-flex align-items-end">
        @foreach($info as $item)
        <img src="{{ asset('storage/avatars/'.$item->id.'/'.$item->image) }}" class="img-thumbnail" alt="picture" style="width: 15%">
        @endforeach
        <div>
            @foreach ($schedule as $sched)
            @if ($sched->end_session == 1)
            <h5>(Permintaan pengakhiran sesi telah terkirim)</h5>
            @else
            <form action="{{ '/mentor/stop-session' }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                @foreach ($subject as $s)
                <input type="hidden" name="subject" value="{{ $s->id_course }}">
                @endforeach
                <button class="btn btn-primary ml-2" type="submit">Akhiri sesi</button>
            </form>
            @endif
            @endforeach
        </div>
    </div>
</div>

<div class="card p-3">
@foreach ($info as $item)
    @foreach ($subject as $s)
    <h1>Nama</h1>{{ $item->name }}
    <h1>Email</h1>{{ $item->email }}
    <h1>Nomor</h1>{{ $item->phone_number }}
    <h1>Pelajaran</h1>
        {{ $s->name }} - {{ $s->degree }}
    @endforeach
</div>
@endforeach --}}

<div class="card p-3">
    <div class="d-flex align-items-end">
        @foreach($list as $item)
        {{-- <img src="{{ asset('storage/avatars/'.$item->mentee_id.'/'.$item->image) }}" class="img-thumbnail" alt="picture" style="width: 15%"> --}}
        <div style="width: 250px; height: 250px; background-size: cover; background-position: center; background-image: url({{ asset('storage/avatars/'.$item->mentee_id.'/'.$item->image) }}")"></div>
        <div>
            @if ($item->end_session == 1)
            <h5>(Permintaan pengakhiran sesi telah terkirim)</h5>
            @else
            <form action="{{ '/mentor/stop-session' }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $item->mentee_id }}">
                <input type="hidden" name="subject" value="{{ $item->course_id }}">
                <button class="btn btn-primary ml-2" type="submit">Akhiri sesi</button>
            </form>
            @endif
        </div>
    </div>
</div>

<div class="card p-3">
    <div class="mb-3">
        <h1>Nama</h1>{{ $item->mentee_name }}
    </div>
    <div class="mb-3">
        <h1>Email</h1>{{ $item->email }}
    </div>
    <div class="mb-3">
        <h1>Nomor</h1>{{ $item->phone_number }}
    </div>
    <div class="mb-3">
        <h1>Pelajaran</h1>
            {{ $item->course_name }} - {{ $item->degree }}
    </div>
</div>
@endforeach


@endsection