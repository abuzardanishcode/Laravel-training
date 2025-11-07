@extends('comman.layout')
@section('title')
    Home page
@endsection

@section('styles')
    <style>
        .success {
            background: lightgreen;
            color: green;
            padding: 2px 10px;
            border-radius: 2px;
            margin: 2px;
        }

        .error {
            background: #f18d9a;
            color: red;
            padding: 2px 10px;
            border-radius: 2px;
            margin: 2px;
        }
    </style>
@endsection

@php
    $class = "success";
    $msg = "my message";
    
@endphp

@section('content')
    <div class="{{ $class }}">
        {{ $msg }}
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection