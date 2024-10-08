@extends('layouts.app')

@section('page-title', 'Add Product')

@section('content')

    @push('css')
        {{-- sweetalert --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    @endpush

    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add Product</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('add-product') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="product-name">Product Name</label>
                            <input type="text" name="name" class="form-control" id="product-name"
                                placeholder="Product Name" required />
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="reset" class="btn btn-danger">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('js')
        {{-- sweetalert --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

        <script>
            @if (session('success'))
                swal({
                    title: "Success!",
                    text: "{{ session('success') }}",
                    type: "success",
                    confirmButtonText: "OK"
                }).then((result) => {
                    if (result) {
                        window.location.href = "{{ route('manage-product') }}";
                    }
                });
            @endif

            @if (session('error'))
                swal({
                    title: "Error!",
                    text: "{{ session('error') }}",
                    type: "error",
                    confirmButtonText: "OK"
                }).then((result) => {
                    if (result) {
                        window.history.back(); // Go back to the previous page
                    }
                });
            @endif
        </script>
    @endpush

@endsection
