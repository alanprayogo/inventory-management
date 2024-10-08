@extends('layouts.app')

@section('page-title', 'Stock Product')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Date Added</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#2345</td>
                                <td>Original Milk</td>
                                <td>2 September 2023</td>
                                <td>128</td>
                                <td>Rp. 72000</td>
                                <td>
                                    <button type="button" class="btn btn-block btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
