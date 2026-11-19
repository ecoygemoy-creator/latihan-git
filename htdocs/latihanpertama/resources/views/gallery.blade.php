```php
@extends('layouts.app')

@section('title', 'Galeri GEMARA')

@section('content')
    <h1>Galeri Kegiatan GEMARA</h1>

    <p>
        Dokumentasi kegiatan Generasi Muda Berkarya.
    </p>

    <div style="text-align: center; margin-top: 25px;">
        <img
            src="{{ asset('images/kegiatan-sosial.png') }}"
            alt="Kegiatan Sosial GEMARA"
            style="width: 100%; max-width: 700px; border-radius: 10px;"
        >

        <h3>Kegiatan Sosial</h3>
        <p>
            Anggota GEMARA berbagi dan membantu masyarakat
            melalui kegiatan sosial.
        </p>
    </div>
@endsection
```
