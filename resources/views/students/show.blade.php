@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>
    <p><strong>Name:</strong> {{ $student->full_name }}</p>
    <p><strong>College ID:</strong> {{ $student->studcollid }}</p>
    <p><strong>Program ID:</strong> {{ $student->studprogid }}</p>
    <p><strong>Year:</strong> {{ $student->studyear }}</p>
    <a href="{{ url('/show/students/all') }}">Back to All Students</a>
@endsection
