@extends('layouts.app')

@section('content')
    <h1>All Colleges and Programs</h1>
    <ul>
        @foreach($colleges as $college)
            <li>
                <strong>{{ $college->collfullname }}</strong>
                <ul>
                    @foreach($college->programs as $program)
                        <li>{{ $program->progfullname }} </li>

                    @endforeach
                </ul>
            </li>
            <a href="{{ route('colleges.show', ['id' => $college->collid]) }}">Show</a>
        @endforeach
    </ul>
@endsection
