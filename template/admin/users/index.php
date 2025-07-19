<?php

require_once(BASE_PATH . '/template/admin/layouts/header.php');

?>


<div class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class=" h5"><i class=" fas fa-newspaper"></i> Users</h1>
</div>
<section class=" table-responsive">
    <table class=" table table-striped table-sm">
        <caption>List of Users</caption>
        <thead>

            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Permission</th>
                <th>Created at</th>
                <th>Setting</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['permission'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td>

                        <?php if ($user['permission'] == 'user') { ?>
                            <a role=" button" class=" btn btn-sm btn-success text-white" href="<?= url('admin/user/permission/' . $user['id']) ?>">Click To Be Admin</a>
                        <?php } else { ?>
                            <a role=" button" class=" btn btn-sm btn-warning text-white" href="<?= url('admin/user/permission/' . $user['id']) ?>">Click To Be User</a>
                        <?php } ?>


                        <a role=" button" class=" btn btn-sm btn-primary text-white" href="<?= url('admin/user/edit/' . $user['id']) ?>"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a role=" button" class=" btn btn-sm btn-danger text-white" href="<?= url('admin/user/delete/' . $user['id']) ?>"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>


<?php

require_once(BASE_PATH . '/template/admin/layouts/footer.php');

?>