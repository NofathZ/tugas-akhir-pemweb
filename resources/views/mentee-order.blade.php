@extends('layouts.mentee')

@section('content')
    <div class="row pb-3">
        @foreach ($details as $item)
        <div class="col-lg-2">
            <img class="rounded img-thumbnail" src="{{ asset('storage/avatars/'.$item->id.'/'.$item->image) }}" alt="profilPict">
        </div>
        <div class="col-lg-6">
            <h1>{{ $item->name }}</h1>
            <h2>Rp {{ number_format($item->price, $decimals = 0, $decimal_separator=",", $thousand_separator = ".") }} /pertemuan</h2>
        </div>
    </div>
    <center>
        <p>Sebelum memesan, baca terlebih dahulu <a href="">Syarat dan Ketentuan</a> yang berlaku</p>
    </center>
    <form method="POST" action="{{ route('order') }}">
        <div class="mb-3">
            <label>Pilihan pelajaran</label><br>
            @foreach($subjects as $subject)
            <input type="radio" name="subject" id="{{ $subject->name }} - {{ $subject->degree }}" value="{{ $subject->id_course }}">
            <label for="{{ $subject->name }} - {{ $subject->degree }}">{{ $subject->name }} - {{ $subject->degree }}</label><br>
            @endforeach
            <br>
            <label for="inputDays" class="form-label">Jumlah hari yang diinginkan (maksimal 10)</label>
            <input type="number" name="qty" min="1" max="10" class="form-control" id="inputDays" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endforeach
@endsection