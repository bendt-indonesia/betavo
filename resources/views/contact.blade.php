@extends('layouts.frontend', [
    "meta_title" => el($contact,'meta-title'),
    "meta_desc" => el($contact,'meta-description'),
    "meta_keys" => el($contact,'meta-keys'),
])

@section('head')

@endsection

@section('content')
    @include('component.contact')
@endsection

@section('script')

@endsection
