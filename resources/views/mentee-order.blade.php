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
    <form method="GET" action="{{ route('order') }}">
        <div class="mb-3">
            <label>Pilihan pelajaran</label><br>
            <input type="hidden" name="id" value="{{ $item->id }}">
            {{-- @foreach($subjects as $subject)
            <input type="radio" name="subject" id="{{ $subject->name }} - {{ $subject->degree }}" value="{{ $subject->id_course }}">
            <label for="{{ $subject->name }} - {{ $subject->degree }}">{{ $subject->name }} - {{ $subject->degree }}</label><br>
            @endforeach --}}
            <div class="mb-4">
                <label for="validationSubjects" class="form-label">Subjects</label>
                <select class="form-control selectpicker" name="subjects[]" id="validationSubjects" data-actions-box="true" data-selected-text-format="count" required>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id_course}}">{{ $subject->name }} - {{ $subject->degree }}</option>
                    @endforeach
                    {{-- <option value="1">SD - Matematika</option>
                    <option value="2">SD - IPA</option>
                    <option value="3">SD - IPS</option>
                    <option value="4">SD - Bahasa Inggris</option>
                    <option value="5">SD - Bahasa Indonesia</option>
                    <option value="6">SMP - Matematika</option>
                    <option value="7">SMP - IPA</option>
                    <option value="8">SMP - IPS</option>
                    <option value="9">SMP - Bahasa Inggris</option>
                    <option value="10">SMP - Bahasa Indonesia</option>
                    <option value="11">SMA - Matematika</option>
                    <option value="12">SMA - Biologi</option>
                    <option value="13">SMA - Fisika</option>
                    <option value="14">SMA - Kimia</option>
                    <option value="15">SMA - Geografi</option>
                    <option value="16">SMA - Sejarah</option>
                    <option value="17">SMA - Sosiologi</option>
                    <option value="18">SMA - Ekonomi</option>
                    <option value="19">SMA - Bahasa Inggris</option>
                    <option value="20">SMA - Bahasa Indonesia</option> --}}
                </select>
                
            </div>
            <br>
            <label for="inputDays" class="form-label">Jumlah hari yang diinginkan (maksimal 10)</label>
            <input type="number" name="qty" min="1" max="10" class="form-control" id="inputDays" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endforeach
@endsection