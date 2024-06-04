<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="card-title pt-2">Edit SIP XML</h5>
        </div>
        <div class="card-body">
            <form action="query/query_product-add.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <div class="col-1"></div>
                    <label for="inputPassword" class="col-2 col-form-label">Phone description</label>
                    <div class="col-auto">
                        <input type="text" class="form-control border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-1"></div>
                    <label for="inputPassword" class="col-2 col-form-label">Phone number</label>
                    <div class="col-auto">
                        <input type="number" class="form-control border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-1"></div>
                    <label for="inputPassword" class="col-2 col-form-label">MAC address</label>
                    <div class="col-auto">
                        <input type="text" class="form-control border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-1"></div>
                    <label for="inputPassword" class="col-2 col-form-label">Phone type</label>
                    <div class="col-auto">
                        <input type="number" class="form-control border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-1"></div>
                    <label for="inputPassword" class="col-2 col-form-label">Location</label>
                    <div class="col-auto">
                        <input type="text" class="form-control border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-1"></div>
                    <label for="inputPassword" class="col-2 col-form-label">PABX server</label>
                    <div class="col-auto">
                        <input type="text" class="form-control border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-1"></div>
                    <label for="inputPassword" class="col-2 col-form-label">Generate XML</label>
                    <div class="col-auto">
                        <a href="" type="button" class="btn btn-success">
                            <i class="bi bi-download pe-2"></i>Get XML
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <a href="" type="button" class="btn btn-warning">
                        <i class="bi bi-trash pe-2"></i>Delete
                    </a>
                </div>
                <div class="col-auto">
                    <a href="" type="button" class="btn btn-danger">Cancel</a>
                    <a href="" type="button" class="btn btn-primary">Save</a>
                </div>
            </div>
        </div>
    </div>
</div>