<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ข้อมูลงานอำนวยการ</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./dist/css/dash.css">
    <link rel="stylesheet" href="./plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="./plugins/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./dist/DataTables/datatables.min.css" />
    <link rel="stylesheet" href="./dist/DataTables/jquery.datatables.min.css" />
    <link rel="stylesheet" href="./plugins/bootstrap-datepicker-thai/css/datepicker.css" />

    <script src="./plugins/jquery/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./style/login.css">


    <link rel="shortcut icon" href="#" />

    <style>
        select {
            border: 1px solid #ccc;
            vertical-align: top;
            min-height: 20px;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed ">
    <div>
        <img id="main-bg" src="./img/dol.png" style="position: absolute;left: 31%;opacity: 0.15;width: 55vw;z-index: -1;">
    </div>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper navbar-expand" style="overflow: scroll;">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#" id="landoffice_name"></a>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Admin</span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <nav class="mt-auto sidebar-menu">
                    <ul class="nav-pills-main nav nav-pills nav-sidebar flex-column" style="overflow-x: hidden;" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item " role="menu" data-accordion="true">
                            <a data-toggle="pill" href="#" class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    ภาพรวมการถ่ายโอนข้อมูล
                                    <i class="fas fa-lg fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-overall" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ภาพรวมการถ่ายโอนข้อมูล</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview " data-widget="treeview" role="menu" data-accordion="true">
                            <a data-toggle="pill" href="#" class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    ระบบงานสารบรรณ
                                    <i class="fas fa-lg fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-recv_nosecret" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ข้อมูลหนังสือรับ (ไม่มีชั้นความลับ)</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-recv_secret" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ข้อมูลหนังสือรับ (มีชั้นความลับ)</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-sent_nosecret" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ข้อมูลหนังสือส่ง (ไม่มีชั้นความลับ)</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-sent_secret" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ข้อมูลหนังสือส่ง (มีชั้นความลับ)</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-province_nosecret" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ทะเบียนหนังสือส่ง (เลขขอจากจังหวัด)<br>(ไม่มีชั้นความลับ) </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-province_secret" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ทะเบียนหนังสือส่ง (เลขขอจากจังหวัด)<br>(มีชั้นความลับ) </p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-document" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ข้อมูลเลขที่คำสั่งสำนักงานที่ดิน</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview " data-widget="treeview" role="menu" data-accordion="true">
                            <a data-toggle="pill" href="#" class="nav-link">
                                <i class="nav-icon fa fa-file"></i>
                                <p>
                                    ระบบงานวัสดุ-ครุภัณฑ์
                                    <i class="fas fa-lg  fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-construct" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ทะเบียนคุมอาคาร</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-inv" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ทะเบียนคุมครุภัณฑ์</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-fin" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>แบบพิมพ์การเงิน</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-doc" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>แบบพิมพ์ทั่วไป</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-parcel" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>แบบพิมพ์แสดงสิทธิในที่ดิน</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-district" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ทะเบียนคุมหลักเขต</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview " data-widget="treeview" role="menu" data-accordion="true">
                            <a data-toggle="pill" href="#" class="nav-link">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    ระบบงานบุคลากร
                                    <i class="fas fa-lg  fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-adm" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>บุคลากร</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#tab-ctn-absence" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ข้อมูลการลา</p>
                                    </a>
                                </li>
                        </li>
                    </ul>

                </nav>
                <div class="sidebar-footer">
                    <button class="btn btn-block" id="sign-out-btn" onclick="location.href='./portal.php';">กลับสู่หน้า Portal</button>
                </div>

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="tab-pane fade" id="tab-ctn-overall">
                <div class="row justify-content-around">
                    <div class="col">
                        <div class="card" style="margin-top: 10px;">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-overall">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th style="vertical-align: middle;">ลำดับ</th>
                                        <th style="vertical-align: middle;text-align: center;">ประเภท</th>
                                        <th style="vertical-align: middle;">รับมอบ</th>
                                        <th style="vertical-align: middle;">ถ่ายโอนสำเร็จ</th>
                                        <th style="vertical-align: middle;">ถ่ายโอนไม่สำเร็จ</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ข้อมูลหนังสือรับ (ไม่มีชั้นความลับ) -->
            <div class="tab-pane fade" id="tab-ctn-recv_nosecret">
                <div class="row justify-content-around">
                    <div class="col">
                        <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-1" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-1" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-1" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-recv_nosecret-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table table-striped" id="table-ctn-recv_nosecret-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลหนังสือรับ</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ประเภทชั้นความลับ</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขทะเบียนรับ</label>
                                    <input type="text" name="recv_reg-ctn-recv_nosecret" id="recv_reg-ctn-recv_nosecret" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขที่หนังสือ</label>
                                    <input type="text" name="recv_no-ctn-recv_nosecret" id="recv_no-ctn-recv_nosecret" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">วันที่รับหนังสือ</label>
                                    <input name="date-ctn-recv_nosecret" id="date-ctn-recv_nosecret" class="form-control datepicker" type="text" data-provide="datepicker" data-date-language="th-th">
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-recv_nosecret">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-recv_nosecret">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="8" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="7" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">เลขทะเบียนรับ</th>
                                        <th class="w-auto">เลขที่หนังสือ</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">วันที่รับหนังสือ</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">ถึง</th>
                                        <th class="w-auto">เรื่อง</th>
                                        <th class="w-auto">เลขทะเบียนรับ</th>
                                        <th class="w-auto">เลขที่หนังสือ</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">วันที่รับหนังสือ</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">ถึง</th>
                                        <th class="w-auto">เรื่อง</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อมูลหนังสือรับ (มีชั้นความลับ) -->
            <div class="tab-pane fade" id="tab-ctn-recv_secret">
                <div class="row justify-content-around">
                    <div class="col">
                        <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-2" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-2" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-2" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-recv_secret-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table table-striped" id="table-ctn-recv_secret-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลหนังสือรับ</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ประเภทชั้นความลับ</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">ประเภทชั้นความลับ</label>
                                    <select class="form-control select2 select2-danger section-select" style="margin-top: 8px;" id="type-ctn-recv_secret"></select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขทะเบียนรับ</label>
                                    <input type="text" name="recv_reg-ctn-recv_secret" id="recv_reg-ctn-recv_secret" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขที่หนังสือ</label>
                                    <input type="text" name="recv_no-ctn-recv_secret" id="recv_no-ctn-recv_secret" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">วันที่รับหนังสือ</label>
                                    <input type="date" name="date-ctn-recv_secret" id="date-ctn-recv_secret" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-recv_secret">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table table-striped" id="table-ctn-recv_secret">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="8" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="7" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">เลขทะเบียนรับ</th>
                                        <th class="w-auto">เลขที่หนังสือ</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">วันที่รับหนังสือ</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">ถึง</th>
                                        <th class="w-auto">เรื่อง</th>
                                        <th class="w-auto">เลขทะเบียนรับ</th>
                                        <th class="w-auto">เลขที่หนังสือ</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">วันที่รับหนังสือ</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">ถึง</th>
                                        <th class="w-auto">เรื่อง</th>
                                    </tr>
                                </thead>

                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อมูลหนังสือส่ง (ไม่มีชั้นความลับ) -->
            <div class="tab-pane fade" id="tab-ctn-sent_nosecret">
                <div class="row justify-content-around">
                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-3" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-3" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-3" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-recv_nosecret-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table table-striped" id="table-ctn-sent_nosecret-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลหนังสือส่ง</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ประเภทชั้นความลับ</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขทะเบียนส่ง</label>
                                    <input type="text" name="recv_reg-ctn-sent_nosecret" id="recv_reg-ctn-sent_nosecret" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขที่หนังสือ</label>
                                    <input type="text" name="recv_no-ctn-sent_nosecret" id="recv_no-ctn-sent_nosecret" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">วันที่ส่งหนังสือ</label>
                                    <input type="date" name="date-ctn-sent_nosecret" id="date-ctn-sent_nosecret" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">

                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-sent_nosecret">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table table-striped" id="table-ctn-sent_nosecret">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="7" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="6" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">เลขทะเบียนส่ง</th>
                                        <th class="w-auto">เลขที่หนังสือ</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">วันที่ส่งหนังสือ</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">เรื่อง</th>
                                        <th class="w-auto">เลขทะเบียนส่ง</th>
                                        <th class="w-auto">เลขที่หนังสือ</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">วันที่ส่งหนังสือ</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">เรื่อง</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อมูลหนังสือส่ง (มีชั้นความลับ) -->
            <div class="tab-pane fade" id="tab-ctn-sent_secret">
                <div class="row justify-content-around">
                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-4" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-4" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-4" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-sent_secret-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table table-striped" id="table-ctn-sent_secret-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลหนังสือส่ง</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ประเภทชั้นความลับ</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">ประเภทชั้นความลับ</label>
                                    <select class="form-control select2 select2-danger section-select" style="margin-top: 8px;" id="type-ctn-sent_secret"></select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขทะเบียนส่ง</label>
                                    <input type="text" name="recv_reg-ctn-sent_secret" id="recv_reg-ctn-sent_secret" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขที่หนังสือ</label>
                                    <input type="text" name="recv_no-ctn-sent_secret" id="recv_no-ctn-sent_secret" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">วันที่ส่งหนังสือ</label>
                                    <input type="date" name="date-ctn-sent_secret" id="date-ctn-sent_secret" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-sent_secret">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table table-striped" id="table-ctn-sent_secret">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="7" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="6" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">เลขทะเบียนส่ง</th>
                                        <th class="w-auto">เลขที่หนังสือ</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">วันที่ส่งหนังสือ</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">เรื่อง</th>
                                        <th class="w-auto">เลขทะเบียนส่ง</th>
                                        <th class="w-auto">เลขที่หนังสือ</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">วันที่ส่งหนังสือ</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">เรื่อง</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ทะเบียนหนังสือส่ง (เลขขอจากจังหวัด) (ไม่มีชั้นความลับ)  -->
            <div class="tab-pane fade" id="tab-ctn-province_nosecret">
                <div class="row justify-content-around">
                    <div class="col">
                        <div class="card" id="tab-ctn-sent_secret-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table table-striped" id="table-ctn-province_nosecret-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลทะเบียนหนังสือส่ง (เลขขอจากจังหวัด)</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ประเภทความลับ</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">ปีของเลขที่หนังสือส่ง</label>
                                    <input type="number" name="sent_year-ctn-province_nosecret" id="sent_year-ctn-province_nosecret" class="form-control" maxlength="4">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขที่หนังสือส่งจังหวัด</label>
                                    <input type="text" name="sent_no-ctn-province_nosecret" id="sent_no-ctn-province_nosecret" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">

                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-province_nosecret">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-province_nosecret">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="4" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="3" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ปีของเลขที่หนังสือส่ง</th>
                                        <th class="w-auto">เลขที่หนังสือส่งจังหวัด</th>
                                        <th class="w-auto">สถานะการใช้เลข</th>
                                        <th class="w-auto">ปีของเลขที่หนังสือส่ง</th>
                                        <th class="w-auto">เลขที่หนังสือส่งจังหวัด</th>
                                        <th class="w-auto">สถานะการใช้เลข</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ทะเบียนหนังสือส่ง (เลขขอจากจังหวัด) (มีชั้นความลับ)  -->
            <div class="tab-pane fade" id="tab-ctn-province_secret">
                <div class="row justify-content-around">
                    <div class="col">
                        <div class="card" id="tab-ctn-sent_secret-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-province_secret-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลทะเบียนหนังสือส่ง (เลขขอจากจังหวัด)</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ประเภทชั้นความลับ</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">ปีของเลขที่หนังสือส่ง</label>
                                    <input type="number" name="sent_year-ctn-province_secret" id="sent_year-ctn-province_secret" class="form-control" maxlength="4">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">เลขที่หนังสือส่งจังหวัด</label>
                                    <input type="text" name="sent_no-ctn-province_secret" id="sent_no-ctn-province_secret" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">

                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-province_secret">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-province_secret">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="4" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="3" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ปีของเลขที่หนังสือส่ง</th>
                                        <th class="w-auto">เลขที่หนังสือส่งจังหวัด</th>
                                        <th class="w-auto">สถานะการใช้เลข</th>
                                        <th class="w-auto">ปีของเลขที่หนังสือส่ง</th>
                                        <th class="w-auto">เลขที่หนังสือส่งจังหวัด</th>
                                        <th class="w-auto">สถานะการใช้เลข</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อมูลเลขที่คำสั่งสำนักงานที่ดิน -->
            <div class="tab-pane fade" id="tab-ctn-document">
                <div class="row justify-content-around">
                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-7" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-7" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-7" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-document-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-document-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลข้อมูลเลขที่คำสั่งสำนักงานที่ดิน</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ชื่อเรื่อง</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">เลขที่คำสั่ง</label>
                                    <input type="text" name="order_no-ctn-document" id="order_no-ctn-document" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">ลงวันที่</label>
                                    <input type="date" name="recv_sign_date-ctn-document" id="recv_sign_date-ctn-document" class="form-control">
                                </div>
                            </div>
                            <div class="col">

                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-document">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-document">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="6" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="5" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">เลขที่คำสั่ง</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">ถึง</th>
                                        <th class="w-auto">เรื่อง</th>
                                        <th class="w-auto">เลขที่คำสั่ง</th>
                                        <th class="w-auto">ลงวันที่</th>
                                        <th class="w-auto">จาก</th>
                                        <th class="w-auto">ถึง</th>
                                        <th class="w-auto">เรื่อง</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-------------------------------------- วัสดุ ครุภัณฑ์ ------------------------------------>
            <!-- ทะเบียนคุมอาคาร -->
            <div class="tab-pane fade" id="tab-ctn-construct">
                <div class="row justify-content-around">
                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-8" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-8" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-8" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-construct-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-construct-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลข้อมูลทะเบียนคุมอาคาร</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">รายการอาคาร</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">รายการอาคาร</label>
                                    <select class="form-control select2 select2-danger section-select" style="margin-top: 8px;" id="type-ctn-construct"></select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">เลขที่อาคาร</label>
                                    <input type="text" name="id-ctn-construct" id="id-ctn-construct" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">ชื่ออาคาร</label>
                                    <input type="text" name="name-ctn-construct" id="name-ctn-construct" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-construct">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-construct">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="5" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="4" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ประเภทอาคาร</th>
                                        <th class="w-auto">เลขที่อาคาร</th>
                                        <th class="w-auto">ชื่ออาคาร</th>
                                        <th class="w-auto">วันที่ได้มาของอาคาร</th>
                                        <th class="w-auto">ประเภทอาคาร</th>
                                        <th class="w-auto">เลขที่อาคาร</th>
                                        <th class="w-auto">ชื่ออาคาร</th>
                                        <th class="w-auto">วันที่ได้มาของอาคาร</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ทะเบียนคุมครุภัณฑ์ -->
            <div class="tab-pane fade" id="tab-ctn-inv">
                <div class="row justify-content-around">
                    <div class="col">
                        <div class="card" id="tab-ctn-inv-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-inv-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลข้อมูลทะเบียนคุมครุภัณฑ์</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">หมวดครุภัณฑ์</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">หมวดครุภัณฑ์</label>
                                    <select class="form-control select2 select2-danger section-select" style="margin-top: 8px;" id="type-ctn-inv"></select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">ชื่อครุภัณฑ์</label>
                                    <input type="text" name="name-ctn-inv" id="name-ctn-inv" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">รหัสครุภัณฑ์กรม</label>
                                    <input type="text" name="id-ctn-inv" id="id-ctn-inv" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-inv">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-inv">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="6" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="5" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">หมวดครุภัณฑ์</th>
                                        <th class="w-auto">ชื่อครุภัณฑ์</th>
                                        <th class="w-auto">รหัสครุภัณฑ์กรม</th>
                                        <th class="w-auto">วันที่ได้มาของครุภัณฑ์</th>
                                        <th class="w-auto">วิธีการได้มาของครุภัณฑ์</th>
                                        <th class="w-auto">หมวดครุภัณฑ์</th>
                                        <th class="w-auto">ชื่อครุภัณฑ์</th>
                                        <th class="w-auto">รหัสครุภัณฑ์กรม</th>
                                        <th class="w-auto">วันที่ได้มาของครุภัณฑ์</th>
                                        <th class="w-auto">วิธีการได้มาของครุภัณฑ์</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- แบบพิมพ์การเงิน -->
            <div class="tab-pane fade" id="tab-ctn-fin">
                <div class="row justify-content-around">
                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-10" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-10" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-10" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-fin-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-fin-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลข้อมูลแบบพิมพ์การเงิน</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ชนิดแบบพิมพ์</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">ชนิดแบบพิมพ์</label>
                                    <select class="form-control select2 select2-danger section-select" style="margin-top: 8px;" id="type-ctn-fin"></select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">หมายเลขแบบพิมพ์</label>
                                    <input type="text" name="no-ctn-fin" id="no-ctn-fin" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-fin">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-fin">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="6" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="5" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ชนิดแบบพิมพ์</th>
                                        <th class="w-auto">วันที่รับ</th>
                                        <th class="w-auto">หน่วยนับ</th>
                                        <th class="w-auto">จำนวน</th>
                                        <th class="w-auto">รายละเอียด</th>
                                        <th class="w-auto">ชนิดแบบพิมพ์</th>
                                        <th class="w-auto">วันที่รับ</th>
                                        <th class="w-auto">หน่วยนับ</th>
                                        <th class="w-auto">จำนวน</th>
                                        <th class="w-auto">รายละเอียด</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="tabPanel card" id="tabPanel-fin">
                            <ul class="nav nav-tabs nav-pills detail-pills detailTab-fin">
                                <li class="active"><a data-toggle="tab" class="nav-link active" href="#iss-detailTab-fin">ข้อมูลการเบิกจ่ายพัสดุ</a></li>
                                <li><a data-toggle="tab" class="nav-link" href="#rtn-detailTab-fin">ข้อมูลการส่งคืนพัสดุ</a></li>
                                <!--   <li><a data-toggle="tab" class="nav-link" href="#expense-detailTab-survey_calculate">ค่าใช้จ่าย</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <div id="iss-detailTab-fin" class="tab-pane fade">
                                    <table class="table table-hover cell-border table-striped" style="width:100%;border:none;" id="iss-detailTab-fin-table">
                                        <thead>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th colspan="3">เปรียบเทียบข้อมูลการเบิกจ่ายพัสดุ</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th rowspan="2" style="text-align: center;vertical-align: middle;border: 1px solid black;border-width: 0px 1px 1px 1px;" class="w-auto">รายการข้อมูล</th>
                                                <th colspan="2" class="w-auto">ค่าข้อมูล</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                                <th class="w-auto" style="background-color: rgb(46, 132, 39);color:white;">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="rtn-detailTab-fin" class="tab-pane fade">
                                    <table class="table table-hover cell-border table-striped" style="width:100%;border:none;" id="rtn-detailTab-fin-table">
                                        <thead>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th colspan="3">เปรียบเทียบข้อมูลการส่งคืนพัสดุ</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th rowspan="2" style="text-align: center;vertical-align: middle;border: 1px solid black;border-width: 0px 1px 1px 1px;" class="w-auto">รายการข้อมูล</th>
                                                <th colspan="2" class="w-auto">ค่าข้อมูล</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                                <th class="w-auto" style="background-color: rgb(46, 132, 39);color:white;">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="overlay overlay-detail dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- แบบพิมพ์ทั่วไป -->
            <div class="tab-pane fade" id="tab-ctn-doc">
                <div class="row justify-content-around">
                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-11" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-11" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-11" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-doc-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-doc-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลข้อมูลแบบพิมพ์ทั่วไป</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ชนิดแบบพิมพ์</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">ชนิดแบบพิมพ์</label>
                                    <select class="form-control select2 select2-danger section-select" style="margin-top: 8px;" id="type-ctn-doc"></select>

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">หมายเลขแบบพิมพ์</label>
                                    <input type="text" name="no-ctn-doc" id="no-ctn-doc" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-doc">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-doc">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="6" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="5" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ชนิดแบบพิมพ์</th>
                                        <th class="w-auto">วันที่รับ</th>
                                        <th class="w-auto">หน่วยนับ</th>
                                        <th class="w-auto">จำนวน</th>
                                        <th class="w-auto">รายละเอียด</th>
                                        <th class="w-auto">ชนิดแบบพิมพ์</th>
                                        <th class="w-auto">วันที่รับ</th>
                                        <th class="w-auto">หน่วยนับ</th>
                                        <th class="w-auto">จำนวน</th>
                                        <th class="w-auto">รายละเอียด</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="tabPanel card" id="tabPanel-doc">
                            <ul class="nav nav-tabs nav-pills detail-pills detailTab-doc">
                                <li class="active"><a data-toggle="tab" class="nav-link active" href="#iss-detailTab-doc">ข้อมูลการเบิกจ่ายพัสดุ</a></li>
                                <li><a data-toggle="tab" class="nav-link" href="#rtn-detailTab-doc">ข้อมูลการส่งคืนพัสดุ</a></li>
                                <!--   <li><a data-toggle="tab" class="nav-link" href="#expense-detailTab-survey_calculate">ค่าใช้จ่าย</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <div id="iss-detailTab-doc" class="tab-pane fade">
                                    <table class="table table-hover cell-border table-striped" style="width:100%;border:none;" id="iss-detailTab-doc-table">
                                        <thead>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th colspan="3">เปรียบเทียบข้อมูลการเบิกจ่ายพัสดุ</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th rowspan="2" style="text-align: center;vertical-align: middle;border: 1px solid black;border-width: 0px 1px 1px 1px;" class="w-auto">รายการข้อมูล</th>
                                                <th colspan="2" class="w-auto">ค่าข้อมูล</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                                <th class="w-auto" style="background-color: rgb(46, 132, 39);color:white;">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="rtn-detailTab-doc" class="tab-pane fade">
                                    <table class="table table-hover cell-border table-striped" style="width:100%;border:none;" id="rtn-detailTab-doc-table">
                                        <thead>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th colspan="3">เปรียบเทียบข้อมูลการส่งคืนพัสดุ</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th rowspan="2" style="text-align: center;vertical-align: middle;border: 1px solid black;border-width: 0px 1px 1px 1px;" class="w-auto">รายการข้อมูล</th>
                                                <th colspan="2" class="w-auto">ค่าข้อมูล</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                                <th class="w-auto" style="background-color: rgb(46, 132, 39);color:white;">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="overlay overlay-detail dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- แบบพิมพ์แสดงสิทธิในที่ดิน -->
            <div class="tab-pane fade" id="tab-ctn-parcel">
                <div class="row justify-content-around">
                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-12" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-12" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-12" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-parcel-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-parcel-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลข้อมูลแบบพิมพ์แสดงสิทธิในที่ดิน</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ชนิดแบบพิมพ์</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">ชนิดแบบพิมพ์</label>
                                    <select class="form-control select2 select2-danger section-select" style="margin-top: 8px;" id="type-ctn-parcel"></select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">หมายเลขแบบพิมพ์</label>
                                    <input type="text" name="no-ctn-parcel" id="no-ctn-parcel" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-parcel">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-parcel">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="6" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="5" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ชนิดแบบพิมพ์</th>
                                        <th class="w-auto">วันที่รับ</th>
                                        <th class="w-auto">หน่วยนับ</th>
                                        <th class="w-auto">จำนวน</th>
                                        <th class="w-auto">รายละเอียด</th>
                                        <th class="w-auto">ชนิดแบบพิมพ์</th>
                                        <th class="w-auto">วันที่รับ</th>
                                        <th class="w-auto">หน่วยนับ</th>
                                        <th class="w-auto">จำนวน</th>
                                        <th class="w-auto">รายละเอียด</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="tabPanel card" id="tabPanel-parcel">
                            <ul class="nav nav-tabs nav-pills detail-pills detailTab-parcel">
                                <li class="active"><a data-toggle="tab" class="nav-link active" href="#iss-detailTab-parcel">ข้อมูลการเบิกจ่ายพัสดุ</a></li>
                                <li><a data-toggle="tab" class="nav-link" href="#rtn-detailTab-parcel">ข้อมูลการส่งคืนพัสดุ</a></li>
                                <!--   <li><a data-toggle="tab" class="nav-link" href="#expense-detailTab-survey_calculate">ค่าใช้จ่าย</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <div id="iss-detailTab-parcel" class="tab-pane fade">
                                    <table class="table table-hover cell-border table-striped" style="width:100%;border:none;" id="iss-detailTab-parcel-table">
                                        <thead>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th colspan="3">เปรียบเทียบข้อมูลการเบิกจ่ายพัสดุ</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th rowspan="2" style="text-align: center;vertical-align: middle;border: 1px solid black;border-width: 0px 1px 1px 1px;" class="w-auto">รายการข้อมูล</th>
                                                <th colspan="2" class="w-auto">ค่าข้อมูล</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                                <th class="w-auto" style="background-color: rgb(46, 132, 39);color:white;">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="rtn-detailTab-parcel" class="tab-pane fade">
                                    <table class="table table-hover cell-border table-striped" style="width:100%;border:none;" id="rtn-detailTab-parcel-table">
                                        <thead>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th colspan="3">เปรียบเทียบข้อมูลการส่งคืนพัสดุ</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th rowspan="2" style="text-align: center;vertical-align: middle;border: 1px solid black;border-width: 0px 1px 1px 1px;" class="w-auto">รายการข้อมูล</th>
                                                <th colspan="2" class="w-auto">ค่าข้อมูล</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                                <th class="w-auto" style="background-color: rgb(46, 132, 39);color:white;">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="overlay overlay-detail dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ทะเบียนคุมหลักเขต -->
            <div class="tab-pane fade" id="tab-ctn-district">
                <div class="row justify-content-around">
                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-14" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-14" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-14" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-district-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-district-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลข้อมูลทะเบียนคุมหลักเขต</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">รายการหลักเขต</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">รายการหลักเขต</label>
                                    <select class="form-control select2 select2-danger section-select" style="margin-top: 8px;" id="type-ctn-district"></select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">ปีงบประมาณ</label>
                                    <input type="number" name="year-ctn-district" id="year-ctn-district" class="form-control" maxlength="4">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-district">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-district">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="7" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="6" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">รายการหลักเขต</th>
                                        <th class="w-auto">ปีงบประมาณ</th>
                                        <th class="w-auto">วันที่รับ</th>
                                        <th class="w-auto">หน่วยนับ</th>
                                        <th class="w-auto">จำนวน</th>
                                        <th class="w-auto">รายละเอียด</th>
                                        <th class="w-auto">รายการหลักเขต</th>
                                        <th class="w-auto">ปีงบประมาณ</th>
                                        <th class="w-auto">วันที่รับ</th>
                                        <th class="w-auto">หน่วยนับ</th>
                                        <th class="w-auto">จำนวน</th>
                                        <th class="w-auto">รายละเอียด</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="tabPanel card" id="tabPanel-district">
                            <ul class="nav nav-tabs nav-pills detail-pills detailTab-district">
                                <li class="active"><a data-toggle="tab" class="nav-link active" href="#iss-detailTab-district">ข้อมูลการเบิกจ่ายพัสดุ</a></li>
                                <li><a data-toggle="tab" class="nav-link" href="#rtn-detailTab-district">ข้อมูลการส่งคืนพัสดุ</a></li>
                                <!--   <li><a data-toggle="tab" class="nav-link" href="#expense-detailTab-survey_calculate">ค่าใช้จ่าย</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <div id="iss-detailTab-district" class="tab-pane fade">
                                    <table class="table table-hover cell-border table-striped" style="width:100%;border:none;" id="iss-detailTab-district-table">
                                        <thead>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th colspan="3">เปรียบเทียบข้อมูลการเบิกจ่ายพัสดุ</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th rowspan="2" style="text-align: center;vertical-align: middle;border: 1px solid black;border-width: 0px 1px 1px 1px;" class="w-auto">รายการข้อมูล</th>
                                                <th colspan="2" class="w-auto">ค่าข้อมูล</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                                <th class="w-auto" style="background-color: rgb(46, 132, 39);color:white;">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="rtn-detailTab-district" class="tab-pane fade">
                                    <table class="table table-hover cell-border table-striped" style="width:100%;border:none;" id="rtn-detailTab-district-table">
                                        <thead>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th colspan="3">เปรียบเทียบข้อมูลการส่งคืนพัสดุ</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th rowspan="2" style="text-align: center;vertical-align: middle;border: 1px solid black;border-width: 0px 1px 1px 1px;" class="w-auto">รายการข้อมูล</th>
                                                <th colspan="2" class="w-auto">ค่าข้อมูล</th>
                                            </tr>
                                            <tr style="text-align: center;background-color:#e8e8e8;">
                                                <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                                <th class="w-auto" style="background-color: rgb(46, 132, 39);color:white;">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="overlay overlay-detail dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- บุคลากร -->
            <div class="tab-pane fade" id="tab-ctn-adm">
                <div class="row justify-content-around">
                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-15" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-15" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-15" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-adm-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-adm-count">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="4">สรุปยอดการถ่ายโอนข้อมูลข้อมูลบุคลากร</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">ประเภทบุคลากร</th>
                                        <th class="w-auto" style="background-color: rgb(18 160 210);color:white;">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th class="w-auto">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">เลขที่บัตรประชาชน</label>
                                    <input type="text" name="id-ctn-adm" id="id-ctn-adm" class="form-control" maxlength="13">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">ชื่อ</label>
                                    <input type="text" name="firstname-ctn-adm" id="firstname-ctn-adm" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">นามสกุล</label>
                                    <input type="text" name="lastname-ctn-adm" id="lastname-ctn-adm" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">ประเภทบุคลากร</label>
                                    <select class="form-control select2 select2-danger section-select" style="margin-top: 8px;" id="type-ctn-adm"></select>
                                    </select>

                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-adm">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-adm">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="9" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="8" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th style="vertical-align: middle;" class="w-auto">ลำดับ</th>
                                        <th style="vertical-align: middle;" class="w-auto">เลขที่บัตรประชาชน</th>
                                        <th style="vertical-align: middle;" class="w-auto">คำนำหน้าชื่อ</th>
                                        <th style="vertical-align: middle;" class="w-auto">ชื่อ-สกุล</th>
                                        <th style="vertical-align: middle;" class="w-auto">เลขที่<br>ตำแหน่ง</th>
                                        <th style="vertical-align: middle;" class="w-auto">ตำแหน่ง<br>ทางสายงาน</th>
                                        <th style="vertical-align: middle;" class="w-auto">ระดับ</th>
                                        <th class="w-auto">ฝ่าย/กลุ่ม</th>
                                        <th style="vertical-align: middle;" class="w-auto">ประเภทบุคลากร</th>
                                        <th style="vertical-align: middle;" class="w-auto">เลขที่บัตรประชาชน</th>
                                        <th style="vertical-align: middle;" class="w-auto">คำนำหน้าชื่อ</th>
                                        <th style="vertical-align: middle;" class="w-auto">ชื่อ-สกุล</th>
                                        <th style="vertical-align: middle;" class="w-auto">เลขที่<br>ตำแหน่ง</th>
                                        <th style="vertical-align: middle;" class="w-auto">ตำแหน่ง<br>ทางสายงาน</th>
                                        <th style="vertical-align: middle;" class="w-auto">ระดับ</th>
                                        <th style="vertical-align: middle;" class="w-auto">ฝ่าย/กลุ่ม</th>
                                        <th style="vertical-align: middle;" class="w-auto">ประเภทบุคลากร</th>
                                    </tr>
                                </thead>

                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อมูลการลา -->
            <div class="tab-pane fade" id="tab-ctn-absence">
                <div class="row justify-content-around">

                    <div class="col">
                    <div class="form-inline d-flex justify-content-end">
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-success" type="submit" id="export-success-ctn-16" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนสำเร็จ</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-warning" type="submit" id="export-diff-ctn-16" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ข้อมูลแตกต่างกัน</button>
                            </div>
                            <div class="col-auto form-group">
                                <button class="btn btn-outline-danger" type="submit" id="export-error-ctn-16" style="margin-top: 5px"><i class="fas fa-file-excel"></i> ถ่ายโอนไม่สำเร็จ</button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">เลขที่บัตรประชาชน</label>
                                    <input type="text" name="id-ctn-absence" id="id-ctn-absence" class="form-control" maxlength="13">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">ชื่อ</label>
                                    <input type="text" name="firstname-ctn-absence" id="firstname-ctn-absence" class="form-control">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">นามสกุล</label>
                                    <input type="text" name="lastname-ctn-absence" id="lastname-ctn-absence" class="form-control">
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <label for="">ปี</label>
                                    <input type="number" name="year-ctn-absence" id="year-ctn-absence" class="form-control" maxlength="4">
                                </div>
                            </div>
                            <div class="col-1">

                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-default searchBtn" type="submit" id="search-ctn-absence">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="tab-ctn-adm-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-absence-count-p1">
                                <thead style="background-color: rgb(18 160 210);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="17">สรุปยอดการถ่ายโอนข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th rowspan="2" style="vertical-align: text-top;">ลำดับ</th>
                                        <th rowspan="2" style="vertical-align: text-top;">เลขบัตร<br>ปชช.</th>
                                        <th rowspan="2" style="vertical-align: text-top;width:108px;">ชื่อ-สกุล</th>
                                        <th rowspan="2" style="vertical-align: text-top;">ปีงบ<br>ประมาณ</th>
                                        <th style="vertical-align: text-top;">ลาป่วย</th>
                                        <th style="vertical-align: text-top;">ลา<br>คลอดบุตร</th>
                                        <th style="vertical-align: text-top;">ลากิจ<br>ส่วนตัว</th>
                                        <th style="vertical-align: text-top;">ลา<br>พักผ่อน</th>
                                        <th style="vertical-align: text-top;">ลา<br>อุปสมบท</th>
                                        <th style="vertical-align: text-top;width: 66px;">ลา<br>พิธีฮัจย์</th>
                                        <th style="vertical-align: text-top;width: 113px;">ลาเข้า<br>ตรวจหรือเข้ารับการ<br>เตรียมพล</th>
                                        <th style="vertical-align: text-top;width: 46px;">ลาไปศึกษา<br>/ดูงาน</th>
                                        <th style="vertical-align: text-top;width: 90px;">ลาไป<br>ปฏิบัติงาน<br>องค์การระหว่าง ปท.</th>
                                        <th style="vertical-align: text-top;width: 68px;">ลาติดตามคู่สมรส</th>
                                        <th style="vertical-align: text-top;width: 78px;">ลาไป<br>ช่วยเหลือภริยาฯ</th>
                                        <th style="vertical-align: text-top;width: 55px;">ลาไปฟื้นฟูฯ</th>
                                        <th rowspan="2" style="vertical-align: text-top;width: 57px;">รายละเอียด</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th colspan="12">(ครั้ง)</th>

                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>

                        <div class="card" id="tab-ctn-adm-table">
                            <table class="table table-hover table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-absence-count-p2">
                                <thead style="background-color: rgb(46, 132, 39);color:white;">
                                    <tr style="text-align: center;">
                                        <th colspan="17">สรุปยอดการถ่ายโอนข้อมูลถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th rowspan="2" style="vertical-align: text-top;">ลำดับ</th>
                                        <th rowspan="2" style="vertical-align: text-top;">เลขบัตร<br>ปชช.</th>
                                        <th rowspan="2" style="vertical-align: text-top;width:108px;">ชื่อ-สกุล</th>
                                        <th rowspan="2" style="vertical-align: text-top;">ปีงบ<br>ประมาณ</th>
                                        <th style="vertical-align: text-top;">ลาป่วย</th>
                                        <th style="vertical-align: text-top;">ลา<br>คลอดบุตร</th>
                                        <th style="vertical-align: text-top;">ลากิจ<br>ส่วนตัว</th>
                                        <th style="vertical-align: text-top;">ลา<br>พักผ่อน</th>
                                        <th style="vertical-align: text-top;">ลา<br>อุปสมบท</th>
                                        <th style="vertical-align: text-top;width: 66px;">ลา<br>พิธีฮัจย์</th>
                                        <th style="vertical-align: text-top;width: 113px;">ลาเข้า<br>ตรวจหรือเข้ารับการ<br>เตรียมพล</th>
                                        <th style="vertical-align: text-top;width: 46px;">ลาไปศึกษา<br>/ดูงาน</th>
                                        <th style="vertical-align: text-top;width: 90px;">ลาไป<br>ปฏิบัติงาน<br>องค์การระหว่าง ปท.</th>
                                        <th style="vertical-align: text-top;width: 68px;">ลาติดตามคู่สมรส</th>
                                        <th style="vertical-align: text-top;width: 78px;">ลาไป<br>ช่วยเหลือภริยาฯ</th>
                                        <th style="vertical-align: text-top;width: 55px;">ลาไปฟื้นฟูฯ</th>
                                        <th rowspan="2" style="vertical-align: text-top;width: 57px;">รายละเอียด</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th colspan="12">(ครั้ง)</th>

                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-count dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm w-100 d-block d-sm-table" id="table-ctn-absence">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th colspan="9" class="th-p1">ข้อมูลรับมอบจากโครงการพัฒฯ 1</th>
                                        <th colspan="8" class="th-p2">ถ่ายโอนสำเร็จโครงการพัฒฯ 2</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th class="w-auto">ลำดับ</th>
                                        <th class="w-auto">เลขที่บัตรประชาชน</th>
                                        <th class="w-auto">คำนำหน้าชื่อ</th>
                                        <th class="w-auto">ชื่อ-สกุล</th>
                                        <th class="w-auto">ปีงบประมาณ</th>
                                        <th class="w-auto">ประเภทการลา</th>
                                        <th class="w-auto">ตั้งแต่วันที่</th>
                                        <th class="w-auto">ถึงวันที่</th>
                                        <th class="w-auto">จำนวนวันลา</th>
                                        <th class="w-auto">เลขที่บัตรประชาชน</th>
                                        <th class="w-auto">คำนำหน้าชื่อ</th>
                                        <th class="w-auto">ชื่อ-สกุล</th>
                                        <th class="w-auto">ปีงบประมาณ</th>
                                        <th class="w-auto">ประเภทการลา</th>
                                        <th class="w-auto">ตั้งแต่วันที่</th>
                                        <th class="w-auto">ถึงวันที่</th>
                                        <th class="w-auto">จำนวนวันลา</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="overlay overlay-main dark">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    <!-- page-content" -->
    </div>

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- <script src="plugins/vendor/jquery/jquery-3.2.1.min.js"></script> -->
    <!-- jQuery UI 1.11.4 -->
    <script src="./dist/js/adminlte.js"></script>
    <script src="./plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/bootstrap-datepicker-thai/js/bootstrap-datepicker.js"></script>
    <script src="./plugins/bootstrap-datepicker-thai/js/bootstrap-datepicker-thai.js"></script>
    <script src="./plugins/bootstrap-datepicker-thai/js/locales/bootstrap-datepicker.th.js"></script>

    <script src="./js/ctn.js"></script>
    <script src="./js/select.js"></script>
    <script src="./js/global.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.datepicker').datepicker();

            $(".form-row").keypress(function(event) {
                if (event.keyCode == 13) {
                    $("#search-" + type).click();
                }
            })
            $('.detail-pills a').on('click', function(e) {

                e.preventDefault()
                $('.tabPanel > .tab-content .tab-pane').css("display", "none")
                console.log(this);

                $($(this).attr("href")).show();


            })
            $('.process-pills a').on('click', function(e) {

                e.preventDefault()
                $('.tab6Panel > .tab-content .tab-pane').css("display", "none")
                console.log(this);

                $($(this).attr("href")).show();


            })
        });
    </script>
</body>

</html>