@extends('layouts.app')

@section('page-title', 'Manage Product')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-2">
                        <a href="{{ route('show-add-product') }}" class="btn btn-block btn-primary btn-sm">Add Product</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Date Added</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <div style="display: flex; gap: 10px;">
                                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <h1>No data available yet!</h1>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
