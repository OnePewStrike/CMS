@extends('layouts.master')

@section('title', 'Category')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4 class="mt-2"> View Category <a href=" {{ url('admin/add-category') }} "
                        class="btn btn-quarternary btn-sm float-end" style="padding-left, padding-right: 20px">
                        Add Category </a></h4>
            </div>
            <div class="card-body">

                @if (session('message'))
                    <div class="alert alert-success"> {{ session('message') }} </div>
                @endif

                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td> {{ $item->name }} </td>
                                <td>
                                    <img src=" {{ asset('uploads/category/' . $item->image) }}" width="50px"
                                        height="50px" alt="">
                                </td>
                                <td> {{ $item->status == '1' ? 'Hidden' : 'Shown' }} </td>
                                <td>
                                    <a href=" {{ url('admin/edit-category/' . $item->id) }}" class="btn btn-success"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a href=" {{ url('admin/delete-category/' . $item->id) }}" class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>

@endsection
