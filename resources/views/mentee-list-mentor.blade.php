@extends('layouts.mentee')

@section('title', 'List Mentor')

@section('content')
@foreach ($list as $mentor)
<div class="card px-3 py-2">
    <div class="row">
        <div class="col-8 d-flex">
            <img src="{{ asset('storage/avatars/'.$mentor->mentor_id.'/'.$mentor->image) }}" alt="profilPict" style="width: 10%">
            <h1 class="pl-2">{{ $mentor->mentor_name }} </h1>
            <h3 class="pl-2">({{ $mentor->course_name }} - {{ $mentor->degree }})</h3>
        </div>
        <div class="col d-flex flex-row-reverse">
            <div class="d-flex align-items-center">
                <form action="/mentee/detail-mentor" method="POST">
                    @csrf
                        <input type="hidden" name="id" value="{{ $mentor->schedule_id }}">
                        <button class="btn btn-primary" type="submit"> Show Detail </button>
                    </form>
                {{-- <a href="/detail-mentor/{{$mentor->mentor_id}}"><button class="btn btn-primary">Show Detail</button> --}}
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection