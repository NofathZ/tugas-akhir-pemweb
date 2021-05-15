@extends('layouts.admin')

@section('title', 'Verifikasi Mentor')

@section('content')

<div class="d-flex">
    <img src="{{ asset('img/theme/team-1.jpg') }}" class="img-thumbnail" alt="picture" style="width: 15%">
    <div class="pl-2 pt-1">
        <h5>Nofath</h5>
        <h5>nofath@gmail.com</h5>
        <h5>0812313</h5>
    </div>
</div>

<h1 class="mt-3">Link Lampiran</h1>
<div class="card p-3">
    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" id="linkRegistration" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" value="Nofath" readonly>
        <button class="btn btn-secondary" id="copyLink" onclick="copyLink()">Copy</button>
    </div>
</div>
<div class="d-flex flex-row-reverse mt-3">
    <button class="btn btn-success ml-2" data-toggle="modal" data-target="#acceptModal">Terima</button>
    <button class="btn btn-danger" data-toggle="modal" data-target="#refuseModal">Tolak</button>
</div>

<!-- Modal -->
<div class="modal fade" id="acceptModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Accept Mentor
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Terima</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="refuseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Refuse Mentor
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Tolak</button>
            </div>
        </div>
    </div>
</div>

<script>
    function copyLink() {
        document.querySelector('#copyLink').addEventListener('click', function() {
            document.querySelector('#linkRegistration').select();
            document.execCommand('copy');
        })
    }
</script>
@endsection
