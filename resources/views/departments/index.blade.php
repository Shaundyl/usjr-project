@extends('layouts.app')

@section('content')
    <h1>All Departments</h1>
    <ul>
        @foreach($departments as $department)
            <li>{{ $department->deptfullname }} - College: {{ $department->college->collfullname }}</li>
        @endforeach
    </ul>
@endsection
