<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UpdateEmployee</title>
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
<body  onload="time()" class="app sidebar-mini rtl">
<header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
                                    aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


        <!-- User Menu-->
        <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

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
        <li><a class="app-menu__item" href="{{ route ('Employees.index') }}"><i
                    class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
        </li>
        <li><a class="app-menu__item" href="{{ route ('Employees.index') }}"><i class='app-menu__icon bx bx-task'></i><span
                    class="app-menu__label">Quản lý đơn hàng</span></a></li>
        <li><a class="app-menu__item" href="{{ route ('Service.index') }}"><i class='app-menu__icon bx bx-run'></i><span
                    class="app-menu__label">Quản lý nội bộ
          </span></a></li>
        <li><a class="app-menu__item" href="table-data-money.html"><i class='app-menu__icon bx bx-dollar'></i><span
                    class="app-menu__label">Bảng kê lương</span></a></li>
        <li><a class="app-menu__item" href="quan-ly-bao-cao.html"><i
                    class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
        </li>
        <li><a class="app-menu__item" href="page-calendar.html"><i class='app-menu__icon bx bx-calendar-check'></i><span
                    class="app-menu__label">Lịch công tác </span></a></li>
        <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
</aside>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách khach hang</li>
            <li class="breadcrumb-item"><a href="#">chỉnh sửa khachs hang</a></li>
        </ul>
    </div>



    <div class="modal-content">

        <div class="modal-body">
            <div class="row">
                <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Chỉnh sửa thông tin nhân viên cơ bản</h5>
              </span>
                </div>
            </div>
            <form method="post"  action="" >
                @method('PUT')
                @csrf
                @foreach($Service as $Services)
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label">Tên Dịch Vụ </label>
                            <input class="form-control" type="text" name="name" value="{{$Services->name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Tên Dịch Vụ </label>
                            <input class="form-control" type="text" name="price" value="{{$Services->price}}">
                        </div>


                        <button class="btn btn-save" >Update</button>
                        <a class="btn btn-cancel" data-dismiss="modal" href="{{ route ('Service.index') }}">Hủy bỏ</a>
                @endforeach
            </form>
        </div>
        <div class="modal-footer">
        </div>
    </div>

</main>
</body>
</html>
