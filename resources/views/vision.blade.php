@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active" aria-current="page">วิสัยทัศน์/พันธกิจ</li>
  </ol>
</nav>
<section class="content">
  <div class="alert alert-info text-center" >
    <span style="color: purple; font-size: 16pt;"><strong>วิสัยทัศน์</strong></span>
  </div>

<div class="well well-sm text-center">
      <span style="color: red; font-size: 15pt;"><strong>องค์กรด้านสาธารณสุขที่มีมาตรฐานของจังหวัดแม่ฮ่องสอน ภายในปี 2564</strong></span>

</div>

<div class="alert alert-info text-center" >
  <span style="color: purple; font-size: 16pt;"><strong>พันธกิจ</strong></span>
</div>

<div class="well well-sm text-center">
      <span style="color: red; font-size: 15pt;"><strong>การมีส่วนร่วมของคณะกรรมการพัฒนาคุณภาพชีวิตอำเภอสบเมย</strong></span>
      <br>
      <span style="color: red; font-size: 15pt;"><strong>สำนักงานสาธารณสุขอำเภอสบเมยมีมาตรฐาน</strong></span>
      <br>
      <span style="color: red; font-size: 15pt;"><strong>เครือข่าย รพ.สต.มีมาตรฐาน</strong></span>

</div>
</section>



@endsection
