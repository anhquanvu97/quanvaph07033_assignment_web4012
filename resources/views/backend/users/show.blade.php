@extends('layouts')

@section('content')
    @if(empty($userData))
        Nodata
    @else
        <p style="text-align: center;">{{ $userData->name }}</p>
        <p style="text-align: center;">{{ $userData->email }}</p>
        <p style="text-align: center;">{{ $userData->dob }}</p>
    @endif
@endsection
