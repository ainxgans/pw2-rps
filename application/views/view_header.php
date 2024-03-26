<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $judul ?> | RPS</title>

    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>css/main/app.css" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>css/main/app-dark.css" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>css/pages/simple-datatables.css" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>extensions/simple-datatables/style.css" />

</head>

<body>
    <script src="<?php echo base_url('/assets/') ?>js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper">
                <div class="sidebar-header position-relative">
                    <div class="logo">
                        <a href="index.html"></a><img src="<?= base_url('assets/images') ?>/amikom.png" style="width:100%; height:100%" alt="Logo" srcset="" /></a>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer" />
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu overflow-auto">
                    <ul class="menu">
                        <?php if ($user['akses'] == 1) : ?>
                            <li class="sidebar-title">Menu</li>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Admin/') ?>" class="sidebar-link">
                                    <i class="bi bi-people-fill"></i>
                                    <span>List Dosen</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "listMatkul") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Admin/listMatkul') ?>" class="sidebar-link">
                                    <i class="bi bi-stack"></i>
                                    <span>List Matkul</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "listMahasiswa") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Admin/listMahasiswa') ?>" class="sidebar-link">
                                    <i class="bi bi-people-fill"></i>
                                    <span>List Mahasiswa</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($user['akses'] == 2) : ?>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Dosen/') ?>" class="sidebar-link">
                                    <i class="bi bi-stack"></i>
                                    <span>List Matkul</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "listRps") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Dosen/listRps') ?>" class="sidebar-link">
                                    <i class="bi bi-stack"></i>
                                    <span>List RPS</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($user['akses'] == 3) : ?>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Mahasiswa/') ?>" class="sidebar-link">
                                    <i class="bi bi-stack"></i>
                                    <span>Semester 1</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "semester2") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Mahasiswa/semester2') ?>" class="sidebar-link">
                                    <i class="bi bi-stack"></i>
                                    <span>Semester 2</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "semester3") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Mahasiswa/semester3') ?>" class="sidebar-link">
                                    <i class="bi bi-stack"></i>
                                    <span>Semester 3</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "semester4") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Mahasiswa/semester4') ?>" class="sidebar-link">
                                    <i class="bi bi-stack"></i>
                                    <span>Semester 4</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "semester5") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Mahasiswa/semester5') ?>" class="sidebar-link">
                                    <i class="bi bi-stack"></i>
                                    <span>Semester 5</span>
                                </a>
                            </li>
                            <li class="sidebar-item <?php if ($this->uri->segment(2) == "semester6") {
                                                        echo ' active';
                                                    } ?>">
                                <a href="<?php echo base_url('/Mahasiswa/semester6') ?>" class="sidebar-link">
                                    <i class="bi bi-stack"></i>
                                    <span>Semester 6</span>
                                </a>
                            </li>

                        <?php endif; ?>
                        <li class="sidebar-item" style="position: absolute; bottom:2em; width:14.5em">
                            <div class="card">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-primary avatar-md">
                                            <span class="avatar-content"><i class="bi bi-person-circle"></i>
                                            </span>
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold"><?= $user['nama'] ?></h5>
                                            <h6 class="text-muted mb-0"><?= $user['id'] ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('/logout') ?>" class="sidebar-link text-white" style="background-color: #dc3545">
                                    <i class="bi bi-box-arrow-left text-white"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3><?= $judul ?></h3>
                    </div>
                </div>
            </div>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <?php if ($this->session->flashdata('message')) : ?>
                <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('message'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> -->
            <?php endif; ?>