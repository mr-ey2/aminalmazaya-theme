<?php

require_once(BASE_PATH . '/template/admin/layouts/header.php');


?>
<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Create Category</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <form method="post" action="<?= url('admin/category/store') ?>">
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name ...">
            </div>
            <button type="submit" class="btn btn-success btn-sm"><i class="fa-solid fa-floppy-disk"></i> Store</button>
            <a href="<?= url('admin/category') ?>" role="button" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Back</a
                </form>
    </section>
</section>
<?php

require_once(BASE_PATH . '/template/admin/layouts/footer.php');


?>