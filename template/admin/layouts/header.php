<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <link rel="stylesheet" href="<?= asset('public/admin-panel/css/bootstrap.min.css') ?>" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.1.0/mdb.min.css" rel="stylesheet">

    <link href="<?= asset('public/admin-panel/css/style.css') ?>" rel="stylesheet" type="text/css">

</head>

<body>

    <nav class="navbar  navbar-light bg-gradiant-green-blue nav-shadow">

        <a class="navbar-brand" href=""></a>
        <span class="">
            </a>
            <span class="dropdown">
                <a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>

                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">logout</a>
                </div>
            </span>
        </span>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block pt-3 bg-sidebar sidebar px-0">
                <a class="text-decoration-none d-flex align-items-center py-1 px-2 mt-1" href=""><i class="fas fa-home me-2"></i><span>Home</span></a>
                <a class="text-decoration-none d-flex align-items-center py-1 px-2 mt-1" href="<?= url('admin/category') ?>"><i class="fas fa-clipboard-list me-2"></i><span> Category</span></a>
                <a class="text-decoration-none d-flex align-items-center py-1 px-2 mt-1" href="<?= url('admin/post') ?>"><i class="fas fa-newspaper me-2"></i><span>Post</span></a>
                <a class="text-decoration-none d-flex align-items-center py-1 px-2 mt-1" href=""><i class="fas fa-image me-2"></i><span>Banner</span></a>
                <a class="text-decoration-none d-flex align-items-center py-1 px-2 mt-1" href=""><i class="fas fa-comments me-2"></i><span>Comment</span></a>
                <a class="text-decoration-none d-flex align-items-center py-1 px-2 mt-1" href=""><i class="fas fa-bars me-2"></i><span>Menus</span></a>
                <a class="text-decoration-none d-flex align-items-center py-1 px-2 mt-1" href=""><i class="fas fa-users me-2"></i><span>User</span></a>
                <a class="text-decoration-none d-flex align-items-center py-1 px-2 mt-1" href=""><i class="fas fa-tools me-2"></i><span>Web Setting</span></a>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">