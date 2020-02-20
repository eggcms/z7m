@extends('layouts.main')

@section('content')

<div id="title">
    <div class="container py-2 bg-con">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <h3>วิเคราะห์บอลวันนี้</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12 mb-2">
                <div class="page-1">
                    <i class="fas fa-home" aria-hidden="true"></i> <a href="#">หน้าแรก</a>
                    <i class="fas fa-angle-right" aria-hidden="true"></i> <span>วิเคราะห์บอลวันนี้</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="all-vicrow">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="content-vc">
                            <img src="/images/news4.jpg" alt="">
                            <p>"เรือใบสีฟ้า" ถูกจับได้ว่าทำผิดกฎทางการเงิน "ไฟแนนเชียล แฟร์ เพลย์" ช่วงระหว่างปี 2012-2016 โดยพวกเขาปลอมแปลงรายรับในบัญชีที่ส่งให้ ยูฟ่า ตรวจสอบในช่วง 4 ปีที่ผ่านมา อย่างไรก็ตามพวกเขาสามารถยื่นอุทธรณ์ต่อศาลอนุญาโตตุลาการกีฬา (ซีเอเอส) ได้</p>
                            <img src="/images/news3.jpg" alt="">
                            <p>แต่ล่าสุดในส่วนของฝ่ายจัดการแข่งขันพรีเมียร์ลีก นั้นมีข่าวมาว่าเตรียมที่จะออกบทลงโทษทาง แมนฯ ซิตี้ เหมือนกัน โดยเชื่อว่าอาจมีการหักแต้ม แต่ยังไม่มีความชัดเจนว่าจะหักในฤดูกาลไหนบ้างในช่วงระหว่างปี 2012-2016 ประเด็นการหักแต้มที่ทำให้หลายฝ่ายสนใจก็คือในฤดูกาล 2013-14 นั้น แมนฯ ซิตี้ ภายใต้การคุมทีมของ มานูเอล เปเยกรินี่ สามารถก้าวถึงตำแหน่งแชมป์ลีก โดยมีแต้มเหนือ ลิเวอร์พูล เพียงแค่ 2 คะแนนเท่านั้น ซึ่งหากมีการตัดเกิน 3 คะแนนจริง จะทำให้ "หงส์แดง" กลายเป็นแชมป์ทันที</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div id="sidebar-scroll">
                            <div class="rounded mt-2">
                                <div class="panel panel-info register" >
                                    <div class="panel-heading">
                                        <img src="/images/logo-mm88zean.png" alt="" width="100%">
                                        <h4 class="text-center" style="color:#fff;">สมัครสมาชิกผ่านหน้าเว็บ</h4>
                                    </div>
                                    <div class="panel-body" >
                                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                            <form name="line-notify" class="form-horizontal" role="form" action="{{url('/api/line')}}" method="post">
                                            <div class="input-group" style="margin-bottom: 10px">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                    <span class="fa fa-user text-primary"></span>
                                                    </span>
                                                </div>
                                                <input name="fullname" id="fullname" type="text" class="form-control" value="" placeholder="ชื่อ - นามสกุล" required>
                                            </div>
                                            <div class="input-group" style="margin-bottom: 10px">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="fas fa-mobile"></span>
                                                    </span>
                                                </div>
                                                <input name="phone" id="phone" type="text" class="form-control" maxlength="10" placeholder="เบอร์โทรศัพท์" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                            </div>
                                            <div class="input-group" style="margin-bottom: 10px">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="fab fa-line text-success"></span>
                                                    </span>
                                                </div>
                                                <input name="lineid" id="lineid" type="text" class="form-control" placeholder="lineID" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12 col-md-12 col-xs-12 p-0">
                                                    <button class="btn text-white" style="font-size:17px; background-color:#00c200; width:100%;" name="submit" type="submit">ยืนยันข้อมูลการสมัคร</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar">
                                <img src="/images/P-ชวนเพื่อน.png" alt="">
                                <div id="title">
                                    <div class="container py-2 bg-con">
                                        <div class="row">
                                            <div class="col-12 px-0">
                                                <div class="title">
                                                    <h3>เรื่องน่าสนใจ</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-news3">
                                    <a href="#"><p><i class="fas fa-angle-double-right"></i> "เรือใบสีฟ้า" ถูกจับได้ว่าทำผิดกฎทางการเงิน"เรือใบสีฟ้า" ถูกจับได้ว่าทำผิดกฎทางการเงิน"เรือใบสีฟ้า" ถูกจับได้ว่าทำผิดกฎทางการเงิน</p></a>
                                    <a href="#"><p><i class="fas fa-angle-double-right"></i> "เรือใบสีฟ้า" ถูกจับได้ว่าทำผิดกฎทางการเงิน</p></a>
                                    <a href="#"><p><i class="fas fa-angle-double-right"></i> "เรือใบสีฟ้า" ถูกจับได้ว่าทำผิดกฎทางการเงิน</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
