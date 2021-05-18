@extends('layouts.mentee')

@section('content')
    <div class="chat-container row">
        <div class="col">
            <center>
                <h1>Judul</h1>
            </center>
        </div>
        <div class="w-100"></div>
        <div class="people-list col-2 d-flex flex-column p-0">
            <div class="people-card p-2">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-square">
                        <img alt="Image placeholder" src="{{ asset('img/theme/team-4.jpg') }}">
                    </span>
                    <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                    </div>
                </div>
            </div>
            <div class="people-card p-2">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-square">
                        <img alt="Image placeholder" src="{{ asset('img/theme/team-4.jpg') }}">
                    </span>
                    <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 chat-column">
            <section>
                <center>
                    <p>Today</p>
                </center>
                <div class="message-box sender">
                    <h5>Nofath</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sit voluptatibus totam sunt nihil reprehenderit error corporis! Fuga fugiat voluptatum facilis sit rerum alias, excepturi molestiae velit, aliquid, quam ex.
                    </p>
                </div>
            </section>
            <div class="pt-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Type a message" aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text send-message" >Kirim</span>
                </div>
            </div>
        </div>
    </div>

    <style>
        .chat-container {
            background-color: white;
            border: 2px solid black;
        }
        .people-list, .chat-column {
            border: 2px solid rgb(146, 46, 46);
        }
        .people-card:hover {
            background-color: black;
            color: White
        }
        .message-box {
            border: 2px solid red;
            display: flex;
            flex-direction: column;
        }
        .receiver {
            align-items: flex-start;
            text-align: left;
        }
        .sender {
            align-items: flex-end;
            text-align: right;
        }
        .message-box p {
            margin: 0;
            width: 70%;
            border: 2px solid green;
        }
        .send-message {
            cursor: pointer;
        }
    </style>
@endsection