@include('layouts.navbar')

@extends('layouts.about')
@section('content')

<h2>Gadiza Food's Website</h2>
<p>Merupakan platform website yang digunakan untuk memesan makanan <br> dan minuman secara online. Ini membantu pengalaman berbelanja Anda <br> menjadi lebih mudah dan praktis.</p>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9828825556847!2d110.43815267412205!3d-7.011295692990137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c88dddfebed%3A0x95ba79de2c2caac6!2sJl.%20Cinde%20Utara%20VII%20No.6%2C%20Jomblang%2C%20Kec.%20Candisari%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050256!5e0!3m2!1sen!2sid!4v1717461650114!5m2!1sen!2sid" width="100%" height="250" style="border:0; margin-right: 25%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <p class="find" style="font-size: 25px;">FIND US ON </p>
            <a href="https://www.instagram.com/gadiza.homemadefood?igsh=MTI4Y2gyN3hzN3lpNA=="><i class="bi bi-instagram" style="font-size: 36px; margin-left: 5%; color: pink;"></i></a>
            <a href="https://api.whatsapp.com/send?phone=+62 822-9293-7849"><i class="bi bi-whatsapp" style="font-size: 36px; margin-left: 5%; color: green;"></i></a>

        </div>
    </div>
</div>

@endsection