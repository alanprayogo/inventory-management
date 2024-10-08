@extends('layouts.app')

@section('page-title', 'Receiving')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-2">
                        <button type="button" class="btn btn-block btn-primary btn-sm">Add Transaction</button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>ID</th>
                                <th>Vendor</th>
                                <th>Product</th>
                                <th>Date Added</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#2345</td>
                                <td>Vendor1</td>
                                <td>Original Milk</td>
                                <td>2 September 2023</td>
                                <td>50</td>
                                <td>
                                    <div style="display: flex; gap: 10px;">
                                        <button type="button" class="btn btn-success btn-sm">Confirm</button>
                                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
