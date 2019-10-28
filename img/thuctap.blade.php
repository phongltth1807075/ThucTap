<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="icon" href="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" sizes="16x16 32x32">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
          integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <title>My-PT Online</title>
    <style>
        .bannerthuctap {
            width: 100%;
            height: auto;
        }
        .text-in-text{
            padding-right: 80px;
        }
        .item-icon-footer{
            padding-left: 20px;
        }

        .class-image-sead {
            padding-left: 50px;
        }
        .btn-order{
            /*style="font-size: 25px;color: white"*/
            font-size: 25px;
            color: white;
        }

        .bg1 {
            width: 130px;
            height: 40px;
            padding-top: 10px;
        }

        .text-sead-2 {
            /*style="padding-top: 80px;font-size: 20px"*/
            padding-top: 80px;
            font-size: 20px;
        }

        .bg2 {
            width: 100px;
            padding-top: 10px;
        }

        .logo-footer {
            width: 250px;
            height: auto;
            padding-top: 30px;
            padding-left: 60px;
        }

        .text-center-doctor-2 {
            /*style="background-color: red;color: white;font-size: 20px"*/
            background-color: red;
            color: white;
            font-size: 20px;
        }
        .text-white-order{
            padding-top: 10px;
            font-size: 20px;
            color: white;
        }

        #menu .ul {
            background: red;
            list-style-type: none;
            text-align: center;
            height: 80px;
            width: 100%;
        }

        .text-thuoc {
            /*style="font-size: 20px;padding-top: 50px;text-align: justify"*/
            font-size: 20px;
            padding-top: 50px;
            text-align: justify;
        }

        #menu span {
            color: #f1f1f1;
            display: inline-block;
            margin-right: 80px;
            margin-top: 28px;
            margin-bottom: 28px;
            margin-left: 80px;
        }

        #menu a {
            text-decoration: none;
            color: #fff;
            display: block;
            font-family: 'Averta Regular', Helvetica, Arial, Lucida, sans-serif;
            font-size: 20px;
        }

        .content-text1 {
            font-size: 55px;
            color: red;
        }

        .content-text2 {
            font-size: 30px;
            color: red;
        }

        .content-text3 {
            padding-top: 10px;
            padding-bottom: 15px;
            font-size: 20px;
        }

        .caption3 {
            padding-top: 5px;
            color: white;
            width: 100%;
            height: auto;
        }

        .img- {
            /*style="width: 350px;height:550px;padding-left:10px"*/
            width: 300px;
            height: 500px;
            padding-left: 60px;
        }

        .image-3photo {
            padding-bottom: 10px;
        }

        .content-register-phone {
            background-color: #ffb101;
        }

        .warning-1 {
            width: 100%;
            height: auto;
        }

        .text-content-register-phone {
            font-size: 25px;
            text-align: justify;
        }

        .text-center-doctor {
            padding-top: 50px;
            font-size: 30px;
        }

        .text-center-doctor-3 {
            font-size: 20px;
        }

        .no {
            font-size: 80px;
        }

        .text-thuoc2 {
            font-size: 15px;
        }

        .icon-footer {
            /*style="padding-top: 15px;padding-right: 30px"*/
            padding-top: 15px;
            padding-right: 30px;
        }


        @media screen and (max-width: 768px) {
            #menu span {
                margin: 4px;
            }


            .content-text1 {
                font-size: 25px;
            }

            .content-text2 {
                font-size: 15px;
            }

            .text-sead {
                font-size: 15px;
            }

            .text-content-register-phone {
                font-size: 12px;
            }
            .btn-order{
                font-size: 20px;
            }

            #menu a {
                font-size: 10px;
            }

            #icon i {
                font-size: 20px;
            }

            #menu .ul {
                height: 40px;
                padding-top: 5px;
            }

            .image-3photo {
                margin: 5px;
                padding-right: 5px;
                padding-left: 5px;
            }

            .text-thuoc2 {
                font-size: 8px;
            }

            .gt-blog-2 {
                margin: 0;
            }

            .none {
                display: none;
            }

            .bg1 {
                font-size: 10px;
                width: 88px;
                height: auto;
                padding-top: 0;
            }

            .bg2 {
                font-size: 10px;
                height: auto;
                padding-top: 0;
                width: 71px;
            }

            .ha {
                margin-left: 50%;
            }

            .image-3photo img {
                width: 100%;
                height: auto;
                margin: 0;
            }

            .gt-blog-2 {
                width: 33%;
            }

            .col-4 {
                padding-left: 5px !important;
                padding-right: 5px !important;

            }

            .content-text3 {
                font-size: 8px;
            }

            .img- {
                width: 100px;
                height: 250px;
                padding-top: 30px;
                padding-left: 30px;
            }

            .image-sead {
                width: 100%;
                height: 150px;
            }

            .image-advice {
                width: 100%;
                height: auto;
                padding-top: 40px;
                padding-left: 10px;
            }

            .text-center-doctor {
                font-size: 12px;
                padding-top: 0;
            }

            .text-sead-2 {
                padding: 0;
                font-size: 15px;
                padding-top: 5px;
                padding-left: 5px;
            }

            .text-center-doctor-2 {
                font-size: 10px;
            }

            .text-center-doctor-3 {
                font-size: 10px;
            }

            .text-thuoc {
                font-size: 10px;
                padding: 0;
                padding-top: 10px;
                padding-left: 15px;
            }

            .no {
                font-size: 20px;
            }

            .form {
                width: 100%;
            }

            .h2-contact {
                font-size: 20px;
            }
            .h2-title{
                font-size: 20px;
            }

            .class-image-sead {
                padding: 0;
                padding-left: 20px;
            }

            .logo-footer {
                width: 100%;
                height: auto;
                padding: 0;
                padding-top: 20px;
                padding-left: 20px;
            }
            .text-white-order{
                font-size: 15px;
            }

            .contact-footer {
                width: 100%;
                font-size: 10px;
            }

            .icon-footer {
                width: 100%;
                padding: 0;
            }

            .icon-footer {
                padding: 0;
                padding-top: 20px;
            }
            .item-icon-footer{
                padding: 5px;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <img src="{{url('/img/anh1.jpg')}}" class="img-fluid bannerthuctap" alt="Responsive image">
</div>
<div class="nav" id="menu">
    <div class="ul">
        <span><a href="#">Vấn Đề Của Bạn</a></span>
        <span><a href="#">Cảnh Báo</a></span>
        <span><a href="#">Đánh Giá Sản Phẩm</a></span>
        <span><a href="#">Lời Khuyên</a></span>
        <span><a href="#">Liên hệ</a></span>
    </div>
</div>
<div class="container">
    <div class="content-thuctap">
        <p class="text-center"><b class="content-text1">Bạn Cảm Thấy Mất Tự Tin</b></p>
        <p class="text-center"><b class="content-text2">Trong Đời Sống Vợ Chồng</b></p>
    </div>
    <div class="image-3photo">
        <div class="row ">
            <div class="col-4 gt-blog-2">
                <img src="{{url('/img/Untitled-1f.png')}}" alt="...">
            </div>
            <div class="col-4 gt-blog-2">
                <img src="{{url('/img/Untitled-1e.png')}}" alt="...">
            </div>
            <div class="col-4 gt-blog-2">
                <img src="{{url('/img/Untitled-1d.png')}}" alt="...">
            </div>
        </div>
    </div>
    <div class="caption3" style="background-color: red">
        <p class="text-center content-text3">
            "Bản lĩnh nam giới" trong đời sống vợ chồng suy giảm,cánh mày râu đôi mặt với tình trạng thiếu tự tin,sức
            khoẻ
            suy giảm,cuộc sống vợ trồng đang trên bờ vực tan vỡ.
        </p>
    </div>
</div>
<div class="warning">
    <img src="{{url('/img/Untitled-1c.png')}}" class="img-fluid warning-1" alt="Responsive image">
</div>
<div class="content-register-phone">
    <div class="container">
        <p class="text-content-register-phone">
            <b>
                Các loại thuốc tây chữa trị rối loạn sinh lý nam giới thường là nhóm thuốc gây tê tại chỗ dùng để
                xịt
                vào quy đầu dương vật,nhóm thuốc làm chận xuất tinh,nhóm thuốc ức chế tái hâp thu có tác dụng kéo
                dài
                thời gian "ra trận".
            </b>
        </p>
        <div class="row">
            {{--            <div class=" order-and-phone-yellow">--}}
            {{--                <div class="row">--}}
            {{--                    <div class="">--}}
            {{--                        <button type="button" class="btn btn-o">DAT MUA NGAY</button>--}}
            {{--                    </div>--}}
            {{--                    <span class="cart-action bg-dark text-center boder font-weight-bold " style="padding-right: 3px">--}}
            {{--                        <b style="color: white ;line-height: 2.4em">1900 636 753</b>--}}
            {{--                    </span>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="col-7 none"></div>
            <div class="col-lg-4 ha">
                <div class="row">
                    <div class=" bg1  cart-action text-center font-weight-bold" style="background: white;">
                        <a style="text-decoration: none; color: #ffb41e" href="">ĐẶT MUA NGAY</a>
                    </div>
                    <div class=" bg2 bg-dark cart-action text-center font-weight-bold">
                        <a style="text-decoration: none; color: white" href="">1900 636 753</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-last">
    <img src="{{url('/img/Untitled-1b.png')}}" class="img-fluid warning-1" alt="Responsive image">
</div>
<div class="container">
    <div class="row note-introduce-1">
        <div class="col-12">
            <h2 style="color: red" class="h2-title">
                LẤY LẠI "BẢN LĨNH NAM GIỚI" VỚI <br> NAM DƯƠNG THẤT BẢO ĐƠN
            </h2>
            <div class="col-md-12" style="padding-left: 0px">
                <h3 class="col-md-10 text-left" style="border-bottom: 6px solid red"></h3>
            </div>
            <p style="color: red;font-size: 20px;text-align: justify-all"><b>Lấy lại "bản lĩnh nam giới với Nam Dương
                    Thất Bảo Sơn</b></p>
            <p style="text-align: justify">Bằng những kiến thức đông ý lâu năm,chúng tôi đã dày công nghiên cứu ra sản
                phẩm <span
                        style="color: red">"Nam Dương Thất Bảo Sơn"</span> -giải pháp hỗ trợ điều trị chức năng sinh
                lí nam giới,có tác dung lâu dài trong việc điều trị rối loạn cương dương,xuất tinh sớm...Mang lại
                sức khoẻ phong độ tức thời cho phái mạnh</p>
            <p style="text-align: justify">Bào chế các thảo dược quý hiếm từ vùng Tây bắc Việt Nam,kết hợp với công nghệ
                hiện đại <span
                        style="color: red">"Nam Dương Thất Bảo Sơn"</span> đã cho thấy hiệu quả vượt trong việc đẩy
                lùi các triệu chứng yếu sinh lí với vằ tăng cường sinh lí nam giới</p>
            <p style="text-align: justify">Sản phẩm đã được Cục An Toàn Thực Phẩm cấp giấy phép số 7495/2018/.Sản phẩm
                nhận được nhiều đánh giá
                tích cực từ giới chuyên môn cũng như người bệnh về công dụng chữa bệnh yếu sinh lí ở nam giới.</p>
        </div>
    </div>
    <div class="row">
        <div style="background-color: #eee" class="note-introduce-2 col-12">
            <p class="" style="padding-top: 10px">
            <p>
                <b style="color: red">Thành phần từ dược liệu - Tác dụng điều trị lâu dài</b>
            </p>
            <p style="text-align: justify">
                Nhục Thung Dung được chứng minh tác dụng tráng dương,bổ thận,cải thiện tình trạng yếu sinh lý.Dâm
                Dương Hoắc sử dụng trong y học cổ truyền có tác dụng bổ thận tráng dương cho nam giới.
            </p>
            <b style="color: red">Câu Kỳ Tử,Ba Kích,Mẫu Lệ,Cam Thảo,Sinh Khương</b> đều có tác dụng bổ ,thận hành khí
            tốt,tăng cường
            sinh lực nam giới.
            </p>
        </div>
    </div>
    <div class="row" style="padding-top: 10px">
        <div class="col-12">
            <p style="text-align: justify">Bào chế từ các thành phần thảo dược quý hiếm,đảm bảo an toàn,<b>không gây tác
                    dung phụ,không gây biến</b> .Sử dụng sản phẩm trong thời gian dài không chỉ giải quyết vấn đề suy
                giảm chức năng sinh lý nam giới. Các thành phần dược liếu quý còn giúp nâng cao sức khoẻ toàn diện cho
                người bệnh.</p>
            <div style="" class="order-and-phone1">
                <button class="btn" style="background-color: red">
                    <b class="btn-order">
                        ĐẶT MUA NGAY
                    </b>
                </button>
            </div>
            <span class="col-md-2">
                <b style="color: red;font-size: 25px;background-color: white">
                    1900 636 753
                </b>
            </span>
        </div>
    </div>
</div>
<div class="row doctor" style="background-color: #f5ebe0">
    <div class="col-5">
        <img src="{{url('/img/Untitled-1a.png')}}" class="image-advice" alt="...">
    </div>
    <div class="col-7 doctor-content">
        <div class="container-fluid">
            <h1 class="text-center-doctor" style="color: red">LỜI KHUYÊN TỪ CHUYÊN GIA</h1>
            <p class="text-center-doctor-2 text-center" style="text-align: justify">
                Hàng nghìn quý ông đã tăng khả năng chinh chiến,cơ thể khỏ mạnh sung mãn và giữ được hạnh phúc gia đình
                nhờ Nam Dương Thất Bảo Đơn.
            </p>
            <p style="color: red" class="text-center-doctor-3">
                Còn bạn? Nếu còn băn khoăn,hãy gọi ngay cho chúng tôi để được giải đạp.Mọi thông tin chings tôi cam kết
                bảo mật hoàn toàn.
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-7 text-thuoc">
            <p>Để có kết quả điều trị tốt nhất, cần kiên trì sử dụng sản phẩm,kết hợp với lối sống khoa học với chế độ
                ăn
                uống và thể thao 1 cách hợp lý.Hạn chế sử dụng các chất kích thích như rựou, bia, thuốc lá...</p>
            <p>Cần có người đồng hành để giữ tinh thần lạc quan,vui vẻ,tiếp thêm sức mạnh tinh thần</p>
            <p>Sử dụng thuốc điều trị cũng như các sản phẩm hỗ trợ theo chỉ định của bác sĩ</p>
            <h1 class="no" style="color: red">
                <b>KHÔNG</b>
            </h1>
            <b>
                <p class="text-thuoc2" style="color: #6e707e">TỰ Ý MUA THUỐC MÀ KHÔNG THEO CHỈ ĐỊNH CỦA BÁC SĨ </p>
            </b>
            <b>
                <p class="text-thuoc2" style="color: #4e555b">SỬ DỤNG CÁC LOẠI THUỐC KHÔNG RÕ NGUỒN GỐC ĐỂ LẤY LẠI PHONG
                    ĐỘ
                    TẠM
                    THỜI.</p>
            </b>
        </div>
        <div class="col-5">
            <img src="{{url('/img/1.png')}}" class="img-" alt="">
        </div>
    </div>
</div>
<div class="row register" style="background-color: #94110d">
    <div class="col-3">
    </div>
    <div class="col-6 form">
        <div class="text-white-order font-weight-bold mb-4">* Đặt mua sản phẩm</div>
        <form action="register/send" method="post" name="register-form" id="register-form">
            <div class="form-group mt-4">
                <input class="form-control" type="text" name="name" placeholder="Họ và tên">
            </div>
            <div class="form-group mt-4">
                <input class="form-control" type="text" name="phone" placeholder="Số điện thoại">
            </div>
            <div class="form-group mt-4">
                <input class="form-control" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-group mt-4">
                            <textarea class="form-control" name="address" cols="30" rows="5"
                                      placeholder="Địa chỉ"></textarea>
            </div>
            <div class="form-group btn-register-now">
                <button type="submit" class="btn btn-light" id="btn-submit"
                        name="btn-submit" style="background-color: yellow"
                        value="Submit"><b>
                        ĐĂNG KÝ NGAY
                    </b>
                </button>
            </div>
            <div class="text-white font-weight-bold mt-4">* Chúng tôi sẽ liên hệ với bạn trong vòng 24h
            </div>
            <div class="text-white font-weight-bold mb-4">* Vui lòng đọc kỹ điều kiện sử dụng</div>
        </form>
    </div>
    <div class="col-3"></div>
</div>
<div style="padding-bottom: 15px">
    <h1>
        <p class="text-center text-sead" style="color: #94110d"><b>ƯU ĐÃI ĐẶT SẢN PHẨM NGAY HÔM NAY</b></p>
    </h1>
    <div class="row">
        <div class="col-6 class-image-sead">
            <img src="{{url('/img/Untitled-1.png')}}" class="image-sead" alt="...">
        </div>
        <div class="col-6 text-sead-2">
            <p>Bác sĩ tư vấn trực tiếp theo tình hình và vấn đề của bạn theo tình hình trị liệu</p>
            <p>Sản phẩm chính hãng, uy tín ,nguồn gốc rõ ràng giá cả tốt nhất.</p>
        </div>
    </div>
</div>
<div class="row footer-test" style="background-color: #848484">
    <div class="col-4">
        <img src="{{url('/img/1e477443b38555db0c94.jpg')}}" class="logo-footer">
    </div>
    <div class="col-5 contact-footer">
        <p>
        <h2 class="h2-contact" style="text-align: justify">Liên Hệ</h2>
        <span class="text-in-text">Trụ sở chính:Số 31 ngõ số 1 Nguỵ Như Kom Tum,phường Nhân Chính,quân Thanh Xuân,Hà Nội</span> <br>- Điện Thoại:
        1900636753
        <br>- Email: starspham@gmail.com <br>- Website: starspham.com.vn
        </p>
    </div>
    <div class="col-3 icon-footer">
        <a class="item-icon-footer" href="https://www.facebook.com/nam.n.noi.3"id="icon">
            <i class="fab fa-youtube fa-3x" style="color: black"></i>
        </a>
        <a class="item-icon-footer" href="https://twitter.com/" id="icon">
            <i class="fas fa-envelope fa-3x" style="color: black"></i>
        </a>
        <a class="item-icon-footer" href="https://www.instagram.com/__phnam__/" id="icon">
            <i class="fab fa-facebook fa-3x" style="color: black"></i>
        </a>
    </div>
</div>
</body>
</html>
