<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Add Product | Skote - Admin & Dashboard Template</title>
    <?php include 'layouts/head.php'; ?>
    <!-- select2 css -->
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- dropzone css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Add Product</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Basic Information</h4>
                                <p class="card-title-desc">Fill all information below</p>

                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="productname">Product Name</label>
                                                <input id="productname" name="productname" type="text" class="form-control" placeholder="Product Name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturername">Manufacturer Name</label>
                                                <input id="manufacturername" name="manufacturername" type="text" class="form-control" placeholder="Manufacturer Name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturerbrand">Manufacturer Brand</label>
                                                <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control" placeholder="Manufacturer Brand">
                                            </div>
                                            <div class="mb-3">
                                                <label for="price">Price</label>
                                                <input id="price" name="price" type="text" class="form-control" placeholder="Price">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="control-label">Category</label>
                                                <select class="form-control select2">
                                                    <option>Select</option>
                                                    <option value="FA">Fashion</option>
                                                    <option value="EL">Electronic</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="control-label">Features</label>

                                                <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                    <option value="WI">Wireless</option>
                                                    <option value="BE">Battery life</option>
                                                    <option value="BA">Bass</option>
                                                </select>

                                            </div>
                                            <div class="mb-3">
                                                <label for="productdesc">Product Description</label>
                                                <textarea class="form-control" id="productdesc" rows="5" placeholder="Product Description"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Product Images</h4>

                                <form action="/" method="post" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>

                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                        </div>

                                        <h4>Drop files here or click to upload.</h4>
                                    </div>
                                </form>
                            </div>

                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Meta Data</h4>
                                <p class="card-title-desc">Fill all information below</p>

                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="metatitle">Meta title</label>
                                                <input id="metatitle" name="productname" type="text" class="form-control" placeholder="Metatitle">
                                            </div>
                                            <div class="mb-3">
                                                <label for="metakeywords">Meta Keywords</label>
                                                <input id="metakeywords" name="manufacturername" type="text" class="form-control" placeholder="Meta Keywords">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="metadescription">Meta Description</label>
                                                <textarea class="form-control" id="metadescription" rows="5" placeholder="Meta Description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                        <button type="submit" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>

<!-- select 2 plugin -->
<script src="assets/libs/select2/js/select2.min.js"></script>

<!-- dropzone plugin -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/ecommerce-select2.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>