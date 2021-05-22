@extends('layouts.mentee')

@section('content')
    <center>
        <h1>Mentor {{"Nama"}} ingin menghentikan sesi belajar. Apakah anda setuju?</h1>
        <form action="">
            <button type="submit" class="btn btn-primary">Berhenti Sesi</button>
        </form>
    </center>
@endsection