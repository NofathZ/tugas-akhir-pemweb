@extends('layouts.mentee')

@section('content')
            {{-- Search Bar --}}
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                    <div class="input-group">
                        <input type="search" id="form1" class="form-control mt-3" placeholder="Search" />
                        <button type="button" class="btn btn-primary mt-3">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <hr>
                    <ul class="ps-0 flex-column text-white list-unstyled">
                        <li class="filter">
                            <div class="mb-4">
                                <label for="subjects" class="form-label">Grade</label>
                                <select class="form-control selectpicker" name="subjects[]" id="subjects"
                                    multiple data-actions-box="true" data-selected-text-format="count" required>
                                    <option value="1">SD</option>
                                    <option value="2">SMP</option>
                                    <option value="3">SMA</option>
                                </select>
                            </div>
                        </li>
                        <li class="filter">
                            <div class="mb-4">
                                <label for="subjects" class="form-label">Subjects</label>
                                <select class="form-control selectpicker" name="subjects[]" id="subjects"
                                    multiple data-actions-box="true" data-selected-text-format="count" required>
                                    <option value="1">Matematika</option>
                                    <option value="2">IPA</option>
                                    <option value="3">IPS</option>
                                    <option value="4">Bahasa Inggris</option>
                                    <option value="5">Bahasa Indonesia</option>
                                    <option value="6">Biologi</option>
                                    <option value="7">Fisika</option>
                                    <option value="8">Kimia</option>
                                    <option value="9">Geografi</option>
                                    <option value="10">Sejarah</option>
                                    <option value="11">Sosiologi</option>
                                    <option value="12">Ekonomi</option>
                                </select>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            {{-- End of Search Bar--}}
            {{-- Content  --}}
            <div class="col pt-3 ps-0">
                {{-- Isi content dari sini --}}
                <div class="card mb-3 mx-3">
                    <div class="row g-0">
                        <div class="col-3 rounded-3">
                            <img src="https://images.unsplash.com/photo-1621624893177-2a0292c32934?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                class="p-2 border w-100">
                        </div>
                        <div class="col-7 border">
                            <div class="card-body">
                                <div class="col">
                                    <h3 class="card-title name">NAMA</h5>
                                        <p class="card-text">PHONE</p>

                                        <div class="row matpel">
                                            <div class="btn-group" role="group">
                                                <button type="button"
                                                    class="btn btn-outline-primary mx-2">Matpel</button>
                                                <button type="button"
                                                    class="btn btn-outline-primary mx-2">Matpel</button>
                                                <button type="button"
                                                    class="btn btn-outline-primary mx-2">Matpel</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 border rounded-3">
                            <div class="row mt-5">
                                <h2 class="text-center mb-5">PRICE</h5>
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
                <div class="card mb-3 mx-3">
                    <div class="row g-0">
                        <div class="col-3 rounded-3">
                            <img src="https://images.unsplash.com/photo-1621624893177-2a0292c32934?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                class="p-2 border w-100">
                        </div>
                        <div class="col-7 border">
                            <div class="card-body">
                                <div class="col">
                                    <h3 class="card-title name">NAMA</h5>
                                        <p class="card-text">PHONE</p>

                                        <div class="row matpel">
                                            <div class="btn-group" role="group">
                                                <button type="button"
                                                    class="btn btn-outline-primary mx-2">Matpel</button>
                                                <button type="button"
                                                    class="btn btn-outline-primary mx-2">Matpel</button>
                                                <button type="button"
                                                    class="btn btn-outline-primary mx-2">Matpel</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 border rounded-3">
                            <div class="row mt-5">
                                <h2 class="text-center mb-5">PRICE</h5>
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
            </div>
            {{-- End Isi Content--}}
        </div>
        {{-- End of Content --}}
@endsection