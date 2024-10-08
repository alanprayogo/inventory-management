@extends('layouts.app')

@section('page-title', 'Discount Member')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Set Discount for Members</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="discount">Discount (%)</label>
                            <input type="number" id="discount" name="discount" class="form-control"
                                placeholder="Enter discount percentage" required min="0" max="100">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Set Discount</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
