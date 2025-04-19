@extends('layouts.app')
@section('content')
    <h1 class="mt-4 mb-4">Home page Sections</h1>
    <a href="{{route('home.create')}}" class="btn btn-primary">Create New Section</a>
    <table class="table mt-4 mb-4">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Order</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $menu)
                <tr>
                    <th scope="row">{{$menu->section_id}}</th>
                    <td>{{$menu->section_name}}</td>
                    <td>{{$menu->section_order}}</td>
                    <td>
                        <a href="{{route('menu.delete', $menu->section_id)}}" class="btn btn-danger">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {{ $data->links() }}
@endsection