@extends('layouts.main')
@section('main')
    @include('layout-home.header')
    @include('layout-home.jam_operational')
    {{-- @include('layout-home.tentang_kami') --}}
    @include('layout-home.our_best_menu')
    @include('layout-home.event_botanika')
    {{-- @include('layout-home.gallery_botanika') --}}
@endsection