@extends('layouts.app')

@section('css')
    <style>
        #contact {
            height: 150vh;
        }

        #contact form {
            height: 100vh;
        }

        textarea {
            resize: none !important;
        }

        .input {
            height: 40vh;

        }

        form {
            height: 60vh !important;
            padding-bottom: 10rem;
        }
    </style>
@endsection

@section('page')
    @include('partials.second_nav', ['title' => 'KONTAK KAMI'])
    <section id="contact" class="bg-slate-100 w-screen flex flex-col px-[150px]   gap-28">

        <h1 class="text-4xl text-4xl font-bold overflow-hidden mt-32">KONTAK KAMI</h1>
        <form action="post w-screen  justify-center flex items-center flex-col gap-28 ">
            <div class="input flex flex-row gap-8">
                <div class="left flex flex-col w-1/2 gap-8">
                    <input type="text" placeholder="Subject"
                        class="h-2/6 text-2xl p-8 rounded-2xl border-2 border-slate-400">
                    <input type="text" placeholder="Name"
                        class="h-2/6 text-2xl p-8 rounded-2xl border-2 border-slate-400">
                    <input type="text" placeholder="Email"
                        class="h-2/6 text-2xl p-8 rounded-2xl border-2 border-slate-400">
                </div>
                <div class="right w-1/2">
                    <textarea name="message" id="" placeholder="Message"
                        class="rounded-2xl text-2xl border-1 p-8 border-2 border-slate-400" cols="55" rows="10"></textarea>
                </div>
            </div>
            <button type="submit"
                class="w-full bg-slate-950 h-28 text-slate-50 text-2xl rounded-2xl font-bold mt-12">KIRIM</button>
        </form>
        <div id="social-list ">
            <ul class="flex flex-row justify-center gap-96 text-center items-center">
                <li class="flex flex-col items-center"><img src="{{ asset('assets/images/Group 66.png') }}" alt="">
                    <h1 class="text-2xl font-bold">EMAIL</h1>
                    <p class="text-xl font-medium">tastyfood@gmail.com</p>
                </li>
                <li class="flex flex-col items-center"><img src="{{ asset('assets/images/Group 67.png') }}" alt="">
                    <h1 class="text-2xl font-bold">PHONE</h1>
                    <p class="text-xl font-medium">+62 812 3456 7890</p>
                </li>
                <li class="flex flex-col items-center"><img src="{{ asset('assets/images/Group 68.png') }}" alt="">
                    <h1 class="text-2xl font-bold">LOCATION</h1>
                    <p class="text-xl font-medium">Kota Bandung, Jawa Barat</p>
                </li>

            </ul>
        </div>


    </section>
    <section id="map" class="h-screen w-screen flex justify-center items center">
        <iframe class="p-48"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56211042157!2d107.64315755!3d-6.90344945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1725595847422!5m2!1sid!2sid"
            width="1920" height="1000" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
