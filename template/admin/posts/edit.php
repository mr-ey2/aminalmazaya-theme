<?php


require_once BASE_PATH . '/template/admin/layouts/header.php';

?>


<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Edit Post</h1>
</section>

<section class="row my-3">
    <section class="col-12">

        <form method="post" action="<?= url('admin/post/update/' . $post['id']) ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $post['title'] ?> " required autofocus>
            </div>

            <div class="form-group">
                <label for="cat_id">Category</label>
                <select name="cat_id" id="cat_id" class="form-control" required autofocus>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?= $category['id'] ?>" <?php if ($category['id'] == $post['cat_id']) echo "selected" ?>>
                            <?= $category['name'] ?>
                        </option>
                    <?php } ?>


                </select>
            </div>

            <div class="form-group">
                <label for="image">Current Image :</label>
                <img style="width: 80px;" src="<?= asset($post['image']) ?>" alt="">
                <input type="file" id="image" name="image" class="form-control-file" autofocus>
            </div>

            <div class="form-group">
                <label for="created_at">Created At</label>
                <input type="text" class="form-control" id="created_at" value="<?= date("Y/m/d H:i:s", strtotime($post['created_at']))?>" autofocus>
            </div>

            <div class=" form-group">
                <label for="summary">Summary</label>
                <textarea class="form-control" id="summary" name="summary" rows="3" required autofocus><?= $post['summary'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5" required autofocus><?= $post['body'] ?></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-sm"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            <a href="<?= url('admin/post') ?>" role="button" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Back</a>
        </form>
    </section>
</section>



<?php

require_once BASE_PATH . '/template/admin/layouts/footer.php';

?>