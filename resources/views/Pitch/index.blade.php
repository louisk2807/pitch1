<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sân</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="{{asset('text/css')}}"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
</head>
<body onload="time()" class="app sidebar-mini rtl">
<header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
                                    aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


        <!-- User Menu-->
        <li><a class="app-nav__item" href="{{ route('Customer.logout') }}"><i class='bx bx-log-out bx-rotate-180'></i> </a>

        </li>
    </ul>
</header>
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('images/Anhthe.jpg')}}" width="100px"
                                        alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><b> Tũn </b></p>
            <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
        </div>
    </div>
    <hr>
    <ul class="app-menu">
        <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
                <span class="app-menu__label">POS Bán Hàng</span></a></li>
        <li><a class="app-menu__item active" href="index.html"><i class='app-menu__icon bx bx-tachometer'></i><span
                    class="app-menu__label">Bảng điều khiển</span></a></li>
        <li><a class="app-menu__item " href="{{ route ('Employees.index') }}"><i class='app-menu__icon bx bx-id-card'></i> <span
                    class="app-menu__label">Quản lý nhân viên</span></a></li>
        <li><a class="app-menu__item" href="{{ route ('Customer.index') }}"><i class='app-menu__icon bx bx-user-voice'></i><span
                    class="app-menu__label">Quản lý khách hàng</span></a></li>
        <li><a class="app-menu__item" href="{{ route ('BookingSchedule.index') }}"><i
                    class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Thanh Toán </span></a>
        </li>
        <li><a class="app-menu__item" href="{{ route ('BookingDetail.index') }}"><i class='app-menu__icon bx bx-task'></i><span
                    class="app-menu__label">Hóa Đơn Chi Tiết </span></a></li>
        <li><a class="app-menu__item" href="{{ route ('Service.index') }}"><i class='app-menu__icon bx bx-run'></i><span
                    class="app-menu__label">Dịch vụ
          </span></a></li>
        <li><a class="app-menu__item" href="{{ route ('Pitch.index') }}"><i class='app-menu__icon bx bx-dollar'></i><span
                    class="app-menu__label"> Số Sân</span></a></li>
        <li><a class="app-menu__item" href="quan-ly-bao-cao.html"><i
                    class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
        </li>
        <li><a class="app-menu__item" href="page-calendar.html"><i class='app-menu__icon bx bx-calendar-check'></i><span
                    class="app-menu__label">Lịch công tác </span></a></li>
        <li><a class="app-menu__item" href="{{ route ('PitchType.index') }}"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            Loại Sân</span></a></li>
    </ul>
</aside>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách nhân viên</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="{{ route ('Pitch.store') }}" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo sân mới</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                                    class="fas fa-file-upload"></i> Tải từ file</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                                    class="fas fa-print"></i> In dữ liệu</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                                    class="fas fa-copy"></i> Sao chép</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                                    class="fas fa-file-pdf"></i> Xuất PDF</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>

                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
                           id="sampleTable">





                        <thead>
    <tr>
        <th width="5"><input type="checkbox" id="all"></th>
        <td>ID</td>
        <td>Name</td>
        <td>freeTime</td>
        <td>PitchType</td>
        <td>Fun</td>

                      </tr>
                        </thead>

                        <tbody>
                        @foreach( $Pitch as $Pitchs)

                            <tr>

                                <td width="1"><input type="checkbox"></td>
                                <td>
                                    {{$Pitchs->id}}
                                </td>

                                <td>
                                    {{$Pitchs->name}}

                                </td>



                                <td>
                                    {{$Pitchs->freeTime}}
                                </td>

                                <td>
                                    {{$Pitchs->pitch_type}}
                                </td>

                                <td width="80">

                                    <a href="{{ route('Pitch.edit', $Pitchs->id) }}" class="btn btn-primary btn-sm edit"><i class="fas fa-edit" ></i></a>

                                    <form method="post" action="{{route('Pitch.destroy', $Pitchs->id )}}">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-primary btn-sm trash" title="Xóa" onclick=functiondeleteRow()><i
                                                class="fas fa-trash-alt"></i>
                                        </button>

                                    </form>

                                </td>
                            </tr>







                        @endforeach
                        </tbody>

</table>
                </div>

            </div>
        </div>
    </div>
















</main>
 <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
 <script src="{{asset('js/popper.min.js')}}"></script>
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{asset('src/jquery.table2excel.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<script>
    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function () {
        jQuery(".trash").click(function () {
            swal({
                title: "Cảnh báo",

                text: "Bạn có chắc chắn là muốn xóa nhân viên này?",
                buttons: ["Hủy bỏ", "Đồng ý"],
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Đã xóa thành công.!", {

                        });
                    }
                });
        });
    });
    oTable = $('#sampleTable').dataTable();
    $('#all').click(function (e) {
        $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
        e.stopImmediatePropagation();
    });


    //Thời Gian
    function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " giờ " + m + " phút " + s + " giây";
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<span class="date"> ' + today + ' - ' + nowTime +
            '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    }
    //In dữ liệu
    var myApp = new function () {
        this.printTable = function () {
            var tab = document.getElementById('sampleTable');
            var win = window.open('', '', 'height=700,width=700');
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }


    //Modal
    $("#show-emp").on("click", function () {
        $("#ModalUP").modal({ backdrop: false, keyboard: false })
    });
</script>
</body>
</html>
