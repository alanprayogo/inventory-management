@extends('layouts.app')

@section('page-title', 'Procurement')

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
                                <th>Vendor</th>
                                <th>Product</th>
                                <th>Date Added</th>
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
                                <td>
                                    <button type="button" class="btn btn-block btn-primary btn-sm">Request</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
