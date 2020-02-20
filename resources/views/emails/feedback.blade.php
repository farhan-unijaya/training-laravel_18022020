<?php
$url = route('login');
?>

@component('mail::message')

Salam sejahtera <b>{{ $feedback->name }}</b>,
<br><br>
Maklumbalas anda telah berjaya dihantar. Berikut adalah butiran maklumbalas anda:
<br><br>
Emel: <b> {{ $feedback->email }} </b>
<br>
Subjek: <b> {{ $feedback->subject }} </b>
<br>Mesej: 
<br>
<div style="border:1px solid #000;padding:10px 10px 10px 10px;color:#000">
    {!! nl2br($feedback->message) !!}
</div>
<br><br>
Sila klik pada pautan dibawah untuk log masuk ke dalam sistem.
<br>

@component('mail::button', ['url' => $url])
Kembali Ke Sistem
@endcomponent

@component('mail::panel')
{{ $url }}
@endcomponent

<small><i>P/S: Jika butang/pautan di atas tidak berfungsi, sila buka pautan tersebut pada pelayar web anda.</i></small>

<br>
Sekian, terima kasih.

<img src="{{ asset('images/jata negara-01.png') }}" height="100px" max-width="100%">

@endcomponent