@extends('layouts.app')
@section('content')
    
    <form class="mt-4 mb-4" action="{{route('menu.create')}}" method="POST">
        @csrf
        <div  class="row">
            <div class="col mb-3">
                <label for="exampleInputEmail1" class="form-label">Menu Name</label>
                <input name="menu_name" value="{{old('menu_name')}}" type="text" class="form-control">
            </div>
            <div class="col  mb-3">
                <label  class="form-label">Menu Link</label>
                <input  name="menu_link" value="{{old('menu_link')}}" type="text" class="form-control">
            </div>
            <div class="col  mb-3">
                <label  class="form-label">Menu Order</label>
                <input  name="menu_order" value="{{old('menu_order')}}" type="text" class="form-control">
            </div>
            <div class="col mb-3">
                <label  class="form-label">Target</label>
                <select  name="menu_link_target" value="{{old('menu_link_target')}}" class="form-select" aria-label="Default select example">
                    <option value="_self">Same page</option>
                    <option value="_blank">New Page</option>
                </select>
            </div>
        </div>
        
        @include('widget.errors')
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Link</th>
            <th scope="col">Order</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $menu)
                <tr>
                    <th scope="row">{{$menu->menu_id}}</th>
                    <td>{{$menu->menu_name}}</td>
                    <td>{{$menu->menu_link}}</td>
                    <td>{{$menu->menu_order}}</td>
                    <td>
                        <a href="{{route('menu.delete', $menu->menu_id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {{ $data->links() }}
@endsection