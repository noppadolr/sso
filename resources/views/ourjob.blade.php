@extends('welcome')
@include('header')
@include('sidebar')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active" aria-current="page">ภาระกิจ/หน้าที่</li>
  </ol>
</nav>
<div class="alert alert-success" >
  <span style="color: purple; font-size: 14pt;"><strong>ภาระกิจ/หน้าที่ </strong></span>
</div>
<div class="well" style="font-size: 14pt; ">บทบาทภาระกิจและหน้าที่ของสำนักงานสาธารณสุขอำเภอสบเมย ตามกฏกระทรวงเรื่องการแบ่งส่วน
ราชการสำนักงานปลัดกระทรวงสาธารณสุข พ.ศ.2560 ซึ่งประกาศในราชกิจจานุเบกษา เล่ม 134 ตอนที่ 64 ก วันที่ 14 มิถุนายน 2561 ได้กำหนดบาทบาทหน้าที่ของสำนักงานสาธารณสุขอำเภอไว้ดังนี้</div>
<div class="well" style="font-size: 12pt; ">
<p >

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
1.จัดทำแผนยุทธศาสตร์ด้านสุขภาพในเขตพื้นที่อำเภอสบเมย
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.ดำเนินการและให้บริการด้านการแพทย์และสาธารณสุขในเขตพื้นที่อำเภอสบเมย
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.กำกับ ดูแล ประเมินผล และสนับสนุนการปฏิบัติงานของหน่วยงานสาธารณสุขในเขตพื้นที่อำเภอสบเมย เพื่อให้การปฏิบัติงานเป็นไปตามกฏหมาย
<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีการบริการสุขภาพที่มีคุณภาพและมีการคุ้มครองผู้บริโภคด้านสุขภาพ
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.ส่งเสริม สนับสนุน และประสานงานเกี่ยวกับงานสาธารณสุขในเขตพื้นที่อำเภอสบเมยให้เป็นไปตามนโยบายของกระทรวง
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
5.พัฒนาระบบสารสนเทศ งานสุขศึกษา และการสื่อสารสาธารณะด้านสุขภาพในเขตพื้นที่อำเภอสบเมย
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.ปฏิบัติงานร่วมกับหรือสนับสนุนการปฏิบัติงานของหน่วยงานอื่นที่เกี่ยข้องหรือที่ได้รับมอบหมาย
</p>
</div>


@endsection
