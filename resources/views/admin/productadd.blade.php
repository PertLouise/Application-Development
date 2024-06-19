@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- Start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Products</h4>
                </div>
            </div>
        </div>
        <!-- End page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <a href="#" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;">
                            <i class="fas fa-plus-circle"></i> Add Product
                        </a> 
                        <br><br>    

                        <h4 class="card-title">All Products</h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Supplier Name</th>
                                    <th>Unit</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->supplier_name }}</td>
                                        <td>{{ $product->unit }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>
                                            <!-- Define actions like edit or delete here -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>

@endsection
