@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Today Trains</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <b>
                    {{ $train -> code }}
                </b>:
                {{ $train -> start_time }}
                -
                {{ $train -> end_time }}
            </li>
        @endforeach
    </ul>
@endsection
