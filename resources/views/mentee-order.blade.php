@extends('layouts.mentee')

@section('content')
    <div class="row pb-3">
        <div class="col-lg-2">
            <img class="rounded img-thumbnail" src="{{ asset('img/theme/team-2.jpg') }}" alt="profilPict">
        </div>
        <div class="col-lg-6">
            <h1>Nofath</h1>
            <p>Lead - Analytics & Data Science Amazon</p>
            <h2>Rp 200.000</h2>
        </div>
    </div>
    <center>
        <p>Sebelum memesan, baca terlebih dahulu <a href="">Syarat dan Ketentuan</a> yang berlaku</p>
    </center>
    <form>
        <div class="mb-3">
            <label for="inputDays" class="form-label">Jumlah hari yang diinginkan (maksimal 10)</label>
            <input type="number" min="1" max="10" class="form-control" id="inputDays" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection