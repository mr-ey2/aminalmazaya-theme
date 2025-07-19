<?php

require_once(BASE_PATH . '/template/admin/layouts/header.php');


?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5"><i class="fas fa-newspaper"></i> Posts</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a role="button" href="<?= url('admin/post/create') ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-plus"></i> Create</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <caption>List of posts</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Summary</th>
                <th>View</th>
                <th>Status</th>
                <th>User ID</th>
                <th>Cat ID</th>
                <th>Image</th>
                <th>Setting</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($posts as $post) { ?>
                <tr>
                    <td>
                        <?= $post['id'] ?>
                        </a>
                    </td>
                    <td>
                        <?= $post['title'] ?>
                    <td>
                        <?= $post['summary'] ?>
                    </td>
                    <td>
                        <?= $post['view'] ?>
                    </td>
                    <td>
                        <?= $post['breaking_news'] == 1 ? '<span class="badge badge-success">#breaking_news</span>' : '' ?>
                        <?= $post['selected'] == 1 ? ' <span class="badge badge-dark">#editor_selected</span>' : '' ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($post['user_name'] ?? 'Not Found!') ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($post['category_name'] ?? 'Not Found!') ?>
                    </td>
                    <td><img style="width: 80px;" src="<?= asset($post['image']) ?>" alt=""></td>
                    <td style="width: 25rem;">
                        <a role="button" class="btn btn-sm btn-warning btn-dark text-white" href="<?= url('admin/post/breaking-news/' . $post['id']) ?>">
                            <?= $post['breaking_news'] == 1 ? 'Remove Breaking News' : 'Add Breaking News' ?>
                        </a>
                        <a role="button" class="btn btn-sm btn-warning btn-dark text-white" href="<?= url('admin/post/selected/' . $post['id']) ?>">
                            <?= $post['selected'] == 1 ? 'Remove Selcted' : 'Add Selected' ?>
                        </a>
                        <hr class="my-1" />
                        <a role="button" class="btn btn-sm btn-primary text-white" href="<?= url('admin/post/edit/' . $post['id']) ?>"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a role="button" class="btn btn-sm btn-danger text-white" href="<?= url('admin/post/delete/' . $post['id']) ?>"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</div>

<?php

require_once(BASE_PATH . '/template/admin/layouts/footer.php');


?>