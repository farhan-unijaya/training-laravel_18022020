<?php
$url = route('login');
?>

@component('mail::message')
# {{ addcslashes($subject , '#') }}

Salam sejahtera <b>{{ $feedback->name }}</b>,
<br><br>
Maklumbalas anda telah berjaya dihantar. Berikut adalah butiran maklumbalas anda:
<br><br>
Emel: <b> {{ $feedback->email }} </b>
<br>
Subjek: <b> {{ $feedback->subject }} </b>
<br>Mesej: 
<br>
<div style="border:3px solid #efefef;padding:10px 10px 10px 10px">
    <b>{!! nl2br($feedback->message) !!}</b>
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

<strong>{{ config('app.name') }}</strong>
@endcomponent