@extends('layouts.mentee')

@section('content')
    <center>
        @foreach ($list as $item)
            
        <h1>Mentor {{ $item->mentor_name }} ingin menghentikan sesi belajar {{ $item->course_name }} - {{ $item->degree }}. Apakah anda setuju?</h1>
        <form action="{{ route('end-session') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $item->schedule_id }}">
            <button type="submit" class="btn btn-primary">Berhenti Sesi</button>
        </form>
        @endforeach
    </center>
@endsection