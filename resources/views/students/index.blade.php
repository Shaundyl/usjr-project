@extends('layouts.app')

@section('content')
    <h1>All Students</h1>
    <ul>
        @foreach($students as $student)
            <li>
                {{ $student->studid }} - 
                {{ $student->studfirstname }} - 
                {{  $student->studlastname}} -
                <a href="{{ route('student.show', ['id' => $student->studid]) }}">Show</a>
            </li>
        @endforeach
    </ul>
@endsection
