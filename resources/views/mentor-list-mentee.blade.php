@extends('layouts.mentor')

@section('title', 'List Mentee')

@section('content')
@foreach ($list as $item)
<div class="card px-3 py-2">
    <div class="row">
        <div class="col-8 d-flex">
            <img src="{{ asset('storage/avatars/'.$item->mentee_id.'/'.$item->image) }}" alt="profilPict" style="width: 10%">
            <h1 class="pl-2">{{ $item->mentee_name }} </h1>
            <h3 class="pl-2">({{ $item->course_name }} - {{ $item->degree }}) </h3>
        </div>
        <div class="col d-flex flex-row-reverse">
            <div class="d-flex align-items-center">
                <form action="{{ route('detail-mentee') }}" method="POST">
                @csrf
                    <input type="hidden" name="id" value="{{ $item->schedule_id }}">
                    <button class="btn btn-primary" type="submit"> Show Detail </button>
                </form>
                {{-- <a href="/mentor/detail-mentee/{{$item->mentee_id}}"><button class="btn btn-primary">Show Detail</button> --}}
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection