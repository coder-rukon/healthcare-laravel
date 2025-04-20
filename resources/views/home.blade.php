@extends('layouts.master')
@section('content')
@foreach ($data as $item)
    {!! $item->section_content !!}
@endforeach
@endsection