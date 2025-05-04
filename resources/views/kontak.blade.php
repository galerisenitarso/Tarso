@extends('layout')

@section('title', 'Kontak')

@section('content')
    <h2>Hubungi Kami</h2>
    <p>Alamat: Jl. Arsamedja No. 45, Kotayasa</p>
    <p>Email: tarsotar15@galeriseni.id</p>
    <p>Telepon: 021-1234567</p>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('kontak.store') }}">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}"><br>
        @error('nama')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <br>
        <label for="pesan">Pesan:</label><br>
        <textarea name="pesan" id="pesan" rows="4" cols="40">{{ old('pesan') }}</textarea><br>
        @error('pesan')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <br>
        <button type="submit">Kirim</button>
    </form>
@endsection