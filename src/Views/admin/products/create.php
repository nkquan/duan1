<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Products</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">products</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Thêm mới</h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control">

                                        <div class="mt-4">
                                            <label for="category">Category</label><br>
                                            <select name="id_category" id="">
                                                <option value="0">Chọn</option>
                                                <?php
                                                foreach ($categories as $category) {
                                                ?>
                                                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <label for="price" class="mt-3">Price</label>
                                        <input type="text" name="price" class="form-control">

                                        <label for="image" class="mt-3">Image</label>
                                        <input type="file" name="image" class="form-control">

                                        <div class="mt-4">
                                            <label for="description" class="mt-3">Description</label><br>
                                            <textarea name="description" id="" cols="142" rows="5"></textarea>
                                        </div>
                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/products" class="btn btn-primary mt-3">Quay lại d/s</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>