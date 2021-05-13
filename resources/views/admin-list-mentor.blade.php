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
        <th scope="col">Reg. Link</th>
    </tr>
    </thead>
    <tbody>
        @foreach($mentors as $mentor)
        <tr>
            <td> {{$mentor->id}} </td>
            <td> {{$mentor->name}} </td>
            <td> {{$mentor->email}} </td>
            <td> {{$mentor->phone_number}} </td>
            <td> {{$mentor->registration_link}} </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
