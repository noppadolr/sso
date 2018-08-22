@extends('welcome')
@include('header')
@include('sidebar')


@section('content')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active" aria-current="page">ทำเนียบผู้บริหาร</li>
  </ol>
</nav>

<table class="table table-striped">
    <caption style="color: purple; font-size: 16pt;" class="text-center"> <strong>ทำเนียบผู้บริหาร</strong> </caption>
    <br>
    <br>
    <thead>
<tr>
    <th>ลำดับ</th>
    <th>ชื่อ - สกุล</th>
    <th>ระยะเวลาในการดำรงตำแหน่ง</th>

</tr>
</thead>
<tbody>

  <tr>
    <td>1</td>
    <td>นายมานพ  รักเรียน</td>
    <td>27 เมษายน 2527 - 10 ธันวาคม 2532</td>
  </tr>

  <tr>
    <td>2</td>
    <td>นายปิยะ สุวรรณบุษย์</td>
    <td>11 ธันวาคม 2532 - 20 กุมภาพันธ์ 2536</td>
  </tr>

  <tr>
    <td>3</td>
    <td>นายสมจิตต์ วิชา</td>
    <td>22 กุมภาพันธ์ 2536 - 30 เมษายน 2538</td>
  </tr>

  <tr>
    <td>4</td>
    <td>นายสุรพงษ์  อุลลา</td>
    <td>1 พฤษภาคม 2538 - 31 พฤษภาคม 2543</td>
  </tr>

  <tr>
    <td>5</td>
    <td>นางอรอนงค์  คำไทย</td>
    <td>1 มิถุนายน 2543 - 30 กันยายน 2545</td>
  </tr>

  <tr>
    <td>ุ6</td>
    <td>นายนิพนธ์  ปิ่นธิดา</td>
    <td>1 ตุลาคม 2545 - 13 ตุลาคม 2548</td>
  </tr>
  <tr>
    <td>7</td>
    <td>นายสรุพล วนาภรณ์</td>
    <td>14 ตุลาคม 2548 - 28 กันยายน 2551</td>
  </tr>
  <tr>
    <td>8</td>
    <td>นายทองคำ  แปงมูล</td>
    <td>29 กันยายน 2551 - 4 ตุลาคม 2553</td>
  </tr>
  <tr>
    <td>9</td>
    <td>นายดำรงค์ นันยบุตร</td>
    <td>15 ตุลาคม 2552 - 10 ตุลาคม 2554</td>
  </tr>
  <tr>
    <td>10</td>
    <td>นางสาวพิมล  เกิดมงคล</td>
    <td>11 ตุลาคม 2554 - 30 กันยายน 2555</td>
  </tr>
  <tr>
    <td>11</td>
    <td>นายทองคำ แปงมูล</td>
    <td>1 ตุลาคม 2555 - 13 มิถุนายน 2556</td>
  </tr>
  <tr>
    <td>12</td>
    <td>นายอรรถสิทธิ์  แสงจันทร์</td>
    <td>14 มิถุนายน 2556 - 8 พฤศจิกายน 2556</td>
  </tr>
  <tr>
    <td>13</td>
    <td>นายทองคำ แปงมูล</td>
    <td>9 พฤศจิกายน 2556 - ปัจจุบัน</td>
  </tr>















</tbody>
</table>



@endsection
