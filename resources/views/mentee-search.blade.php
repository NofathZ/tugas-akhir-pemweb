@extends('layouts.mentee')
@push('styles')
<link rel="stylesheet" href="css/search.css">
@endpush

@section('content')
            {{-- Search Bar --}}
        <div class="row flex-nowrap mt-0">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                    <form action="{{ route('search-and-filter') }}" method="get">
                        <div class="input-group">
                            <input type="search" name="name" id="form1" class="form-control mt-3" placeholder="Search" value="">
                            <button type="submit" class="btn btn-primary mt-3">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                        <hr>
                        <ul class="ps-0 flex-column text-white list-unstyled">
                            {{-- <li class="filter">
                                <div class="mb-4">
                                    <label for="subjects" class="form-label">Grade</label>
                                    <select class="form-control selectpicker" name="degree[]" id="subjects"
                                        multiple data-actions-box="true" data-selected-text-format="count">
                                        <option value="1">SD</option>
                                        <option value="2">SMP</option>
                                        <option value="3">SMA</option>
                                    </select>
                                </div>
                            </li> --}}
                            <li class="filter">
                                <div class="mb-4">
                                    <label for="subjects" class="form-label">Subjects</label>
                                    <select class="form-control selectpicker" name="subjects[]" id="subjects"
                                        multiple data-actions-box="true" data-selected-text-format="count">
                                        <option value="1">SD - Matematika</option>
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
                                        <option value="20">SMA - Bahasa Indonesia</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </form>

                </div>
            </div>
            {{-- End of Search Bar--}}
            {{-- Content  --}}
            <div class="col pt-3 ps-0">
                {{-- Isi content dari sini --}}

                @foreach ($mentors as $mentor)
                <div class="card mb-3 mx-3">
                    <div class="row g-0">
                        <div class="col-3 rounded-3">
                            <img src="{{ asset('storage/avatars/'.$mentor->id.'/'.$mentor->image) }}"
                                class="p-2 border w-100">
                        </div>
                        <div class="col-7 border">
                            <div class="card-body">
                                <div class="col">
                                    <h3 class="card-title name">{{ $mentor->name }}</h5>
                                        <p class="card-text">{{ $mentor->phone_number }}</p>

                                        <div class="row matpel">
                                            <div class="btn-group" role="group">
                                                @foreach ($list as $item)
                                                @if ($mentor->id == $item->mentor_id)
                                                <button type="button"
                                                    class="btn btn-outline-primary mx-2">{{ $item->course_name }} - {{ $item->degree }}</button>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 border rounded-3">
                            <div class="row mt-5">
                                <h2 class="text-center mb-5">Rp {{ number_format($mentor->price, $decimals = 0, $decimal_separator=",", $thousand_separator = ".") }}</h5>
                            </div>
                            <div class="row">
                                <div class="mt-5">
                                    <div class=" d-grid mx-2">
                                        <button type="button" class="btn btn-primary  btn-lg">View Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- End Isi Content--}}
        </div>
        {{-- End of Content --}}
@endsection