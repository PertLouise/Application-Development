@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Product Page</h4><br><br>

                        <form method="post" action="{{ route('admin.storeproduct') }}" id="myForm">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="form-group col-sm-10">
                                    <input name="name" id="productName" class="form-control" type="text">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Supplier Name</label>
                                <div class="col-sm-10">
                                    <select name="supplier_id" class="form-select" id="supplierSelect" aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Unit Name</label>
                                <div class="col-sm-10">
                                    <select name="unit_id" class="form-select" id="unitSelect" aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <select name="category_id" class="form-select" id="categorySelect" aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Product">
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        // Populate the supplier dropdown
        var suppliers = ["Joseph Aaron", "Rupert Louise", "Kent Daryll", "Keith"];
        var supplierSelect = $('#supplierSelect');

        // Append each supplier as an option
        suppliers.forEach(function(supplier) {
            var option = $('<option>', {
                value: supplier,
                text: supplier
            });
            supplierSelect.append(option);
        });

        // Populate the category dropdown
        var categories = ["Android", "iOS"];
        var categorySelect = $('#categorySelect');

        // Append each category as an option
        categories.forEach(function(category) {
            var option = $('<option>', {
                value: category,
                text: category
            });
            categorySelect.append(option);
        });

        // Update unit dropdown based on product name input
        $('#productName').on('input', function() {
            var productName = $(this).val().toLowerCase();
            var unitSelect = $('#unitSelect');
            unitSelect.empty(); // Clear existing options

            if (productName.includes('samsung')) {
                var samsungUnits = [
                    "Open this select menu",
                    "NEW. Galaxy S24 Ultra",
                    "NEW. Galaxy S24 | S24+",
                    "Galaxy Z Flip5",
                    "Galaxy Z Fold5",
                    "Galaxy Watch6",
                    "Galaxy A55 5G",
                    "Galaxy Buds2 Pro",
                    "Galaxy Fit3"
                ];
                samsungUnits.forEach(function(unit) {
                    var option = $('<option>', {
                        value: unit,
                        text: unit
                    });
                    unitSelect.append(option);
                });
            } else if (productName.includes('iphone')) {
                var iphoneUnits = [
                    "Open this select menu",
                    "iPhone 7",
                    "iPhone 8",
                    "iPhone X",
                    "iPhone XS",
                    "iPhone 11",
                    "iPhone 12",
                    "iPhone 13",
                    "iPhone 14"
                ];
                iphoneUnits.forEach(function(unit) {
                    var option = $('<option>', {
                        value: unit,
                        text: unit
                    });
                    unitSelect.append(option);
                });
            } else {
                var defaultOption = $('<option>', {
                    value: '',
                    text: 'Open this select menu'
                });
                unitSelect.append(defaultOption);
            }
        });

        // Form validation
        $('#myForm').validate({
            rules: {
                name: {
                    required: true,
                },
                supplier_id: {
                    required: true,
                },
                unit_id: {
                    required: true,
                },
                category_id: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: 'Please Enter Your Product Name',
                },
                supplier_id: {
                    required: 'Please Select One Supplier',
                },
                unit_id: {
                    required: 'Please Select One Unit',
                },
                category_id: {
                    required: 'Please Select One Category',
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>

@endsection