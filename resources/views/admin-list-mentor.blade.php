@extends('layouts.admin')

@section('title', 'List Mentor')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
    </tr>
    </thead>
    <tbody>
        @foreach($mentors as $mentor)
        <tr>
            <td> {{$mentor->id}} </td>
            <td><a href="{{ route('verifikasi-mentor', $mentor->id) }}"> {{$mentor->name}}</a> </td>
            <td> {{$mentor->email}} </td>
            <td> {{$mentor->phone_number}} </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
