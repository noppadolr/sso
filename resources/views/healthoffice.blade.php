@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active" aria-current="page">ทำเนียบสถานบริการ</li>
  </ol>
</nav>
<table class="table table-striped">
    <caption style="color: purple; font-size: 14pt;"> <strong>ทำเนียบสถานบริการสาธารณสุขในพื้นที่อำเภอสบเมย</strong> </caption>
    <thead>
<tr>
    <th>ลำดับ</th>
    <th>สถานบริการ</th>
    <th>ผู้บริหาร</th>
    <th>หมายเลขโทรศัพท์</th>
</tr>
</thead>
<tbody>
  <tr>
    <td>1</td>
    <td>โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านกองก๋อย</td>
    <td>นายภูวดล  พัสกาลปักษ์</td>
    <td>063 - 671-0791</td>
  </tr>

  <tr>
    <td>2</td>
    <td>โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านกองแปเหนือ</td>
    <td>นายเจริญพร  ปินทยา</td>
    <td>063 - 790-7885</td>
  </tr>

  <tr>
    <td>3</td>
    <td>โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านแม่สามแลบ </td>
    <td>นายอรรควัชร์  รัตนวงค์</td>
    <td>092 - 180-7531</td>
  </tr>
  <tr>
    <td>4</td>
    <td>โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านสบเมย </td>
    <td>นายวีระเดช  กุหลาบพนา</td>
    <td>053 - 071-582</td>
  </tr>
  <tr>
    <td>5</td>
    <td>โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านผาผ่า</td>
    <td>นายกำธร อภิวงค์</td>
    <td>053 - 687-156</td>
  </tr>
  <tr>
    <td>6</td>
    <td>โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านห้วยม่วง</td>
    <td>นางณิชานันท์  บุญมาดำ</td>
    <td>095 - 971-0108</td>
  </tr>
  <tr>
    <td>7</td>
    <td>โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านเลโค๊ะ</td>
    <td>นายไสว จีนาคำ</td>
    <td>053 - 071-585</td>
  </tr>

  <tr>
    <td>8</td>
    <td>โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านอุมโล๊ะ</td>
    <td>นายทนง  งอกงาม</td>
    <td>094 - 637-7775</td>
  </tr>

  <tr>
      <td>9</td>
      <td>โรงพยาบาลสบเมย (รพช.)</td>
      <td>นายจักรี  คมสาคร</td>
      <td>053 - 618-080</td>
    </tr>

    <tr>
        <td>10</td>
        <td>สำนักงานสาธารณสุขอำเภอสบเมย</td>
        <td>นายทองคำ  แปงมูล</td>
        <td>053 - 618-074</td>
      </tr>
 


</tbody>
</table>



@endsection
