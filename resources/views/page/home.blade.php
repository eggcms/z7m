@extends('layouts.main')

@section('content')

<div id="title">
    <div class="container py-2 bg-con">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <div class="row">
                        <div class="col-8"><h3>ดูบอลออนไลน์</h3></div>
                        <div class="col-4">
                            <a href="#"><p>ดูทั้งหมด</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="live">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-9 pr-md-0">
                        <img class="img-fluid" src="/images/channal.png" alt="">
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="img mt-lg-0 mt-2 mb-2 ">
                            <a href="#"><img src="/images/promotion-1.jpg" alt="" style="width:100%; height:auto;"></a>
                        </div>
                        <div class="rounded" style="border:solid 2px #ee8f21; padding:5px 5px 0px 5px; background: linear-gradient(135deg, rgba(76,76,76,1) 0%, rgba(51,51,51,1) 12%, rgba(51,51,51,1) 25%, rgba(51,51,51,1) 39%, rgba(44,44,44,1) 50%, rgba(0,0,0,1) 51%, rgba(17,17,17,1) 60%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);">
                            <div class="panel panel-info register" >
                                <div class="panel-heading">
                                    <img style="width:80%;" src="/images/logo-mm88zean.png" class="rounded mx-auto d-block" alt="...">
                                    <h5 class="text-center" style="color:#fff; font-size:16px; margin:10px; 0px">สมัครสมาชิกผ่านหน้าเว็บ</h5>
                                </div>
                                <div class="panel-body" >
                                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                        <form name="line-notify" class="form-horizontal" role="form" action="{{url('/api/line')}}" method="post">
                                        <div class="input-group" style="margin-bottom: 5px">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <span class="fa fa-user text-primary"></span>
                                                </span>
                                            </div>
                                            <input name="fullname" id="fullname" type="text" class="form-control" value="" placeholder="ชื่อ - นามสกุล" required>
                                        </div>
                                        <div class="input-group" style="margin-bottom: 5px">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <span style="padding:0px 2px;" class="fas fa-mobile"></span>
                                                </span>
                                            </div>
                                            <input name="phone" id="phone" type="text" class="form-control" maxlength="10" placeholder="เบอร์โทรศัพท์" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                        </div>
                                        <div class="input-group" style="margin-bottom: 5px">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <span class="fab fa-line text-success"></span>
                                                </span>
                                            </div>
                                            <input name="lineid" id="lineid" type="text" class="form-control" placeholder="lineID" required>
                                        </div>
                                        <div class="form-group mb-1">
                                            <div class="col-sm-12 col-md-12 col-xs-12 p-0">
                                                <button class="btn text-white" style="font-size:17px; background-color:#00c200; width:100%;" name="submit" type="submit">ยืนยันข้อมูลการสมัคร</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="youtube">
    <div class="container bg-con py-lg-3 ">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-12 col-lg-6 py-2 py-lg-0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="1903" height="768" src="https://www.youtube.com/embed/Pu3pyYwCjvs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 py-2 py-lg-0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="1903" height="768" src="https://www.youtube.com/embed/Pu3pyYwCjvs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="benner-1">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12 py-2">
                <img src="/images/bn-1.gif" alt="">
            </div>
        </div>
    </div>
</div>

<div id="news">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12 mt-2">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div id="title">
                            <div class="row">
                                <div class="col-12 my-2">
                                    <div class="title">
                                        <div class="row">
                                            <div class="col-8"><h3>ข่าวฟุตบอลวันนี้</h3></div>
                                            <div class="col-4">
                                                <a href="#"><p>ดูทั้งหมด</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="slid-news">
                                        <a href="#">
                                            <img src="/images/news1.jpg" class="d-block w-100" alt="...">
                                            <div class="content">
                                                <p>ชีวาสสปอร์ ได้กลับมาเล่นในบ้าน แต่ผลงานช่วงหลังของพวกเขาย่ำแย่หนักฟอร์มไม่ดีนักขณะที่ทีมเยือน อันตัลยาสปอร์ ก็เป็นทีมที่เล่นได้อย่างแข็งแกร่งเกมรับเหนียวแน่น 5 นัดหลังสุดเสียไปแค่ 4 ลูก โดยรวมขอแนะนำรอง ทีมเยือนดีกว่า</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="slid-news">
                                        <a href="#">
                                            <img class="rounded" src="/images/news1.jpg" class="d-block w-100" alt="...">
                                            <div class="content">
                                                <p>ชีวาสสปอร์ ได้กลับมาเล่นในบ้าน แต่ผลงานช่วงหลังของพวกเขาย่ำแย่หนักฟอร์มไม่ดีนักขณะที่ทีมเยือน อันตัลยาสปอร์ ก็เป็นทีมที่เล่นได้อย่างแข็งแกร่งเกมรับเหนียวแน่น 5 นัดหลังสุดเสียไปแค่ 4 ลูก โดยรวมขอแนะนำรอง ทีมเยือนดีกว่า</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="slid-news">
                                        <a href="#">
                                            <img class="rounded" src="/images/news2.jpg" class="d-block w-100" alt="...">
                                            <div class="content">
                                                <p>ชีวาสสปอร์ ได้กลับมาเล่นในบ้าน แต่ผลงานช่วงหลังของพวกเขาย่ำแย่หนักฟอร์มไม่ดีนักขณะที่ทีมเยือน อันตัลยาสปอร์ ก็เป็นทีมที่เล่นได้อย่างแข็งแกร่งเกมรับเหนียวแน่น 5 นัดหลังสุดเสียไปแค่ 4 ลูก โดยรวมขอแนะนำรอง ทีมเยือนดีกว่า</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="slid-news">
                                        <a href="#">
                                            <img class="rounded" src="/images/news3.jpg" class="d-block w-100" alt="...">
                                            <div class="content">
                                                <p>ชีวาสสปอร์ ได้กลับมาเล่นในบ้าน แต่ผลงานช่วงหลังของพวกเขาย่ำแย่หนักฟอร์มไม่ดีนักขณะที่ทีมเยือน อันตัลยาสปอร์ ก็เป็นทีมที่เล่นได้อย่างแข็งแกร่งเกมรับเหนียวแน่น 5 นัดหลังสุดเสียไปแค่ 4 ลูก โดยรวมขอแนะนำรอง ทีมเยือนดีกว่า</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div id="title">
                            <div class="row">
                                <div class="col-12 my-2">
                                    <div class="title">
                                        <div class="row">
                                            <div class="col-8"><h3>วิเคราะห์บอลวันนี้</h3></div>
                                            <div class="col-4">
                                                <a href="#"><p class="">ดูทั้งหมด</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row vicrow">
                            <div class="col-sm-6 col-md-4 mb-4">
                                <a href="#">
                                    <img class="rounded" src="/images/news3.jpg" alt="">
                                    <p>วิเคราะห์บอล กัลโซ่เซเรีย อิตาลี่ วันที่ 20.กพ.2563 ระหว่าง ยูเวนตูส vs โรม่า</p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 mb-4">
                                <a href="#">
                                    <img class="rounded" src="/images/news3.jpg" alt="">
                                    <p>วิเคราะห์บอล กัลโซ่เซเรีย อิตาลี่ วันที่ 20.กพ.2563 ระหว่าง ยูเวนตูส vs โรม่า</p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 mb-4">
                                <a href="#">
                                    <img class="rounded" src="/images/news3.jpg" alt="">
                                    <p>วิเคราะห์บอล กัลโซ่เซเรีย อิตาลี่ วันที่ 20.กพ.2563 ระหว่าง ยูเวนตูส vs โรม่า</p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a href="#">
                                    <img class="rounded" src="/images/news3.jpg" alt="">
                                    <p>วิเคราะห์บอล กัลโซ่เซเรีย อิตาลี่ วันที่ 20.กพ.2563 ระหว่าง ยูเวนตูส vs โรม่า</p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a href="#">
                                    <img class="rounded" src="/images/news3.jpg" alt="">
                                    <p>วิเคราะห์บอล กัลโซ่เซเรีย อิตาลี่ วันที่ 20.กพ.2563 ระหว่าง ยูเวนตูส vs โรม่า</p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a href="#">
                                    <img class="rounded" src="/images/news3.jpg" alt="">
                                    <p>วิเคราะห์บอล กัลโซ่เซเรีย อิตาลี่ วันที่ 20.กพ.2563 ระหว่าง ยูเวนตูส vs โรม่า</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="title">
    <div class="container pt-4 bg-con">
        <div class="row">
            <div class="col-12">
                <div class="title-tded">
                    <h3>ทีเด็ดสเต็ป วันที่ 20 ก.พ 2563</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="zean">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-3 mt-3">
                        <div class="img-tded">
                            <a href="#">
                                <img src="/images/balltor12.gif" alt="">
                            </a>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="bg-grey py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-3">
                        <div class="img-tded">
                            <a href="#">
                                <img src="/images/balltor12.gif" alt="">
                            </a>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="bg-grey py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-3">
                        <div class="img-tded">
                            <a href="#">
                                <img src="/images/balltor12.gif" alt="">
                            </a>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="bg-grey py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-3">
                        <div class="img-tded">
                            <a href="#">
                                <img src="/images/balltor12.gif" alt="">
                            </a>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="bg-grey py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-3">
                        <div class="img-tded">
                            <a href="#">
                                <img src="/images/balltor12.gif" alt="">
                            </a>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="bg-grey py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-3">
                        <div class="img-tded">
                            <a href="#">
                                <img src="/images/balltor12.gif" alt="">
                            </a>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="bg-grey py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-3">
                        <div class="img-tded">
                            <a href="#">
                                <img src="/images/balltor12.gif" alt="">
                            </a>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="bg-grey py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-3">
                        <div class="img-tded">
                            <a href="#">
                                <img src="/images/balltor12.gif" alt="">
                            </a>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="bg-grey py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                        <div class="tded-step py-2">
                            <p>แมนฯ ยูไนเต็ด ต่อ 0.0.5<img src="/images/ball.gif" alt=""></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12 my-3">
                <h3>ทีเด็ดบอล ทีเด็ดสเต็ป วิเคราะห์บอล</h3>
                <p>แจกทีเด็ดบอลแม่นๆ ทีเด็ดบอลวันนี้ ทีเด็ดฟุตบอลVIPสุดแม่นๆ ราคาบอล ผลบอลสด ผลฟุตบอลทุกลีก แหล่งรวมทรรศนะเซียนฟุตบอล ทีเด็ดล้มโต๊ะ บ้านผลบอล ผลบอล ผลบอลวันนี้ ทีเด็ด ทีเด็ดวันนี้ บอลสกอร์สูง ทีเด็ดบอลโอเวอร์ สกอร์ต่อรองสูงต่ำ ผลบอลออนไลน์ ผลบอลสดๆ ทรรศนะบอล ทีเด็ดฟุตบอล แม่นยำ ทรรศนะบอลวันนี้ รวมทรรศนะบอลวันนี้ ผลบอลสดๆ และทรรศนะฟรีๆ</p>
            </div>
        </div>
    </div>
</div>

<div class="title">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12">
                <div class="title-tded">
                    <h3>ทรรศะบอล วันที่ 20 ก.พ 2563</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="api-tded">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12">
                <div class="api py-3">
                    <img style="width:100%; height:auto; " src="/images/api1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
