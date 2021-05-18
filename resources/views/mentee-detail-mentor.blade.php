@extends('layouts.mentee');

@section('content')
    <div class="row">
        <div class="col-lg-2">
            <img class="rounded img-thumbnail" src="{{ asset('img/theme/team-2.jpg') }}" alt="profilPict">
        </div>
        <div class="col-lg-6">
            <h1>Nofath</h1>
            <p>Lead - Analytics & Data Science @ Amazon</p>
            <p>Malang, Jawa Timur</p>
            <div class="skill d-flex flex-nowrap">
                <span class="py-1 px-2 mr-1 card">Mate</span>
                <span class="py-1 px-2 mr-1 card">Mate</span>
            </div>
        </div>
        <div class="col-lg">
            <div class="card rounded p-3" style="background-color: rgb(229 231 235);">
                <p>Mentorship Program</p>
                <h1>Rp 2000/month</h1>
                <div class="pb-3">
                    <span class="card bg-light p-1 spot-left">1 spot left</span>
                </div>

                <section style="line-height: 0.5rem">
                    <p>Include unlimited QnA</p>
                    <p>Bla Bla bla</p>
                    <p>Bla Bla bla</p>
                    <p>Bla Bla bla</p>
                </section>

                <button class="btn btn-primary">Reach Out</button>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-lg-8 description">
            <section>
                👋 Hi! Are you considering/in the process of switching careers to UX? Let’s talk.
                <br>
                <br>
    
                By day, I am a Senior UX Designer at American Express in New York City.
                By night, I am mentoring Designlab UX Academy students.
                And helping them land the best UX jobs!
                <br>
                <br>
    
                As your UX mentor, I can help you:
                - Identify your unique talents within the UX field that will set you apart from the competition.
                - Show you how to leverage your transferrable skills and play to your strengths.
                - Tell a compelling story with your portfolio for the “right companies” to take notice of you.
                - Review your resume/cover letter(s) and prepare you for job interviews.
                - Power up your LinkedIn profile so that recruiters and hiring managers come to you instead of you chasing them.
                <br>
                <br>
                
                About me:
                - 20+ years in UX and Interactive Design fields
                - Worked in-house, at the startups, in agencies, and in academia
                - Worked with clients such as Starbucks, Intel, WebMD, Cornell University, and many more
                - Cofounded 2 tech startups
                - Currently Sr. UX Designer at Amex
                - Also, currently UX Mentor + Career Coach at Designlab
                <br>
                <br>
                
                If you are ready to put in work, I’ll help you to get where you want to take your UX career. And of course, I'm happy to share any resources, advice, or connections that might be helpful for you to grow your career.
                <br>
                <br>
                
                Rooting for you and your UX career! 🙌
            </section>
            <section>
                <h1>Skill</h1>
                <div class="skill d-flex flex-wrap">
                    <span class="py-1 px-2 mr-1 mb-2 card">Matematika</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Biologi</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                    <span class="py-1 px-2 mr-1 mb-2 card">Mate</span>
                </div>
            </section>
        </div>
    </div>

    <style>
        .box {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: black;
            border: 2px solid red
        }
        .img-thumbnail {
            width: 200px;
        }
        
        .description {
            line-height: 1.5rem;
        }

        .spot-left {
            /* position: relative; */
            float: left;
            /* width: 20px; */
            /* display: inline-block; */
        }

        .skill span{
            background-color: #f3f4f6;
        }
    </style>
@endsection