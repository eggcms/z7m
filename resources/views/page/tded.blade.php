@extends('layouts.main')

@section('content')

<div id="title">
    <div class="container py-2 bg-con">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <h3>ทีเด็ดบอลเดี่ยว</h3>
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
                    <i class="fas fa-angle-right" aria-hidden="true"></i> <span>ทีเด็ดบอลเดี่ยว</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="youtube">
    <div class="container bg-con pt-2 pb-3">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-12 col-lg-6 mb-2 ">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="1903" height="768" src="https://www.youtube.com/embed/Pu3pyYwCjvs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="1903" height="768" src="https://www.youtube.com/embed/Pu3pyYwCjvs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
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
                    <img style="width:100%; height:auto;" src="/images/api1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="benner-1">
    <div class="container bg-con">
        <div class="row">
            <div class="col-12 pb-2">
                <img src="/images/bn-1.gif" alt="">
            </div>
        </div>
    </div>
</div>

@endsection
