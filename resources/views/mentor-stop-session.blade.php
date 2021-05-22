@extends('layouts.mentor')

@section('content')
    <center>
        @foreach ($mentee as $item)
        @foreach ($subject as $s)
        <h1>Hentikan Sesi Belajar Dari {{ $item->name }} (Pelajaran: {{$s->name}} - {{$s->degree}})?</h1>
        <h5>(mentee yang bersangkutan akan dimintai verifikasi untuk mengakhiri sesi ini)</h5>
        <form action="{{ route('request-end-session') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <input type="hidden" name="subject" value="{{ $s->id_course }}">
            <button type="submit" class="btn btn-primary">Berhenti</button>
        </form>
        @endforeach
        @endforeach
    </center>
@endsection