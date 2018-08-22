@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active" aria-current="page">ทำเนียบบุคลากร</li>
  </ol>
</nav>
<table class="table table-striped">
    <caption style="color: purple; font-size: 14pt;"> <strong>ทำเนียบบุคลากรที่ปฏิบัติงานจริง</strong> </caption>
    <thead>
<tr>
    <th>ลำดับ</th>
    <th>ชื่อ - สกุล</th>
    <th>ตำแหน่งทางวิชาการ</th>
    <th>ตำแหน่งทางบริหาร</th>
</tr>
</thead>
<tbody>
  <tr>
    <td>1</td>
    <td>นายทองคำ  แปงมูล</td>
    <td>เจ้าพนักงานสาธารณสุขอาวุโส</td>
    <td>สาธารณสุขอำเภอ</td>
  </tr>

  <tr>
    <td>2</td>
    <td>นายกฤต วงศ์น้อย</td>
    <td>นักวิชการสาธารณสุขชำนาญการ</td>
    <td>ผู้ช่วยสาธารณสุขอำเภอ</td>
  </tr>

  <tr>
    <td>3</td>
    <td>ว่าที่ร้อยตรีอัสชล บุญมาดำ</td>
    <td>นักวิชการสาธารณสุขชำนาญการ</td>
    <td>ผู้ช่วยสาธารณสุขอำเภอ</td>
  </tr>
  <tr>
    <td>4</td>
    <td>นายนพดล ริยะสาร</td>
    <td>นักวิชการสาธารณสุขชำนาญการ</td>
    <td></td>
  </tr>
  <tr>
    <td>5</td>
    <td>นายชัยพร สงวนจิตร์</td>
    <td>เจ้าพนักงานสาธารณสุขชำนาญงาน</td>
    <td></td>
  </tr>
  <tr>
    <td>6</td>
    <td>นางสาวณภัทร  กาญจนะอังกูร</td>
    <td>นักวิชาการสาธารณสุข</td>
    <td></td>
  </tr>
  <tr>
    <td>7</td>
    <td>นายณัฐพล  ไพรพฤกษ์</td>
    <td>นักวิชาการสาธารณสุข</td>
    <td></td>
  </tr>

  <tr>
    <td>8</td>
    <td>นางสาวอาริสา  คาดคำฟู</td>
    <td>เจ้าพนักงานการเงินและการบัญชี</td>
    <td></td>
  </tr>

  <tr>
    <td>8</td>
    <td>นายสถาพร ศิริพงษ์</td>
    <td>พนักงานขับรถ</td>
    <td></td>
  </tr>

  <tr>
    <td>9</td>
    <td>นางมะลิวัลย์  บัวโอฬาร</td>
    <td>พนักงานทั่วไป</td>
    <td></td>
  </tr>


</tbody>
</table>



@endsection
