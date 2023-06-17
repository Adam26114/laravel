@extends('layouts.layout')

@section('title','Member Page')


@section('heading')
        My First Member Template
@endsection


@section('contents')

    <div>
        <h4>This is ouur into form index</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
    </div>

    <hr/>

    @php
        echo count($students)
    @endphp

    @if(count($students))
        <ul>
            @foreach ($students as $student)
            <li>{{$student}}</li>
            @endforeach
        </ul>
    @endif

    <hr/>
@stop


@section("footer")
    Copyright {{$getyear}} .Design By ABC co., {{services}} {{$demo}}
@stop


{{-- 11YI --}}
