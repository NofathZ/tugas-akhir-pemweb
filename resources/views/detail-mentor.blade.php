@extends('layouts.mentee')

@section('content')
<div class="row">
    @foreach($details as $item)
    <div class="col-lg-2">
        <img class="rounded img-thumbnail" src="{{ asset('storage/avatars/'.$item->id.'/'.$item->image) }}" alt="profilPict">
    </div>
    <div class="col-lg-6">
        <h1>{{ $item->name }}</h1>
        <div class="skill d-flex flex-nowrap">
            @foreach($subjects as $subject)
            <span class="py-1 px-2 mr-1 card">{{ $subject->name }} - {{ $subject->degree }}</span>
            @endforeach
        </div>
    </div>
    <div class="col-lg">
        <div class="card rounded p-3" style="background-color: rgb(229 231 235);">
            <p>Mentorship Program</p>
            <h1>Rp {{ number_format($item->price, $decimals = 0, $decimal_separator=",", $thousand_separator = ".") }} /pertemuan</h1>
            <br>

            <section style="line-height: 0.5rem">
                <p>Tugas dan pembahasan di tiap pertemuan</p>
                <p>Pemberian modul pelajaran setiap sebelum pertemuan</p>
                <p>Chat via Whatsapp/LINE/Telegram</p>
            </section>

            <a href="/order/{{ $item->id }}"><button class="btn btn-primary">Reach Out</button></a>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-lg-8 description">
        <section>
            {{ $item->description}}
        </section>
    </div>
    @endforeach
</div>

<style>
    .img-thumbnail {
        width: 200px;
    }
    
    .description {
        line-height: 1.6rem;
    }

    .spot-left {
        float: left;
    }

    .skill span{
        background-color: #f3f4f6;
    }
</style>
@endsection