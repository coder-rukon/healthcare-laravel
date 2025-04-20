@extends('layouts.app')
@section('content')
    <h1 class="mt-4 mb-4">Create Home section</h1>
    <form action="{{route('home.create')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="section_name" class="form-label">Section Name</label>
            <input type="text" class="form-control" id="section_name" name="section_name" required value="{{ old('section_name') }}">
        </div>
        <div class="mb-3">
            <label for="section_order" class="form-label">Section Order</label>
            <input type="number" class="form-control" id="section_order" name="section_order" required>
        </div>
        <div class="mb-3">
            <label for="section_content" class="form-label">Contents</label>
            <textarea class="form-control" id="section_content" name="section_content" rows="20" required>{{ old('section_content') }}</textarea>
        </div>
        @include('widget.errors')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection