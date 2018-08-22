@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
    <li class="breadcrumb-item active" aria-current="page">EB8</li>
  </ol>
</nav>
<section class="content">

  <div class="alert alert-info" >
    <span style="color: purple; font-size: 14pt;"><strong>EB 8 มีการดำเนินการเกี่ยวกับเรื่องร้องเรียน</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">


      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 8 (1)  มีการกำหนดช่องทางร้องเรียนและขั้นตอนกระบวนการจัดการเรื่องร้องเรียน </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
      <br>
 
        <div class="box-body">

          <table class="table">
             <thead>
               <tr>
                 <th>ข้อที่</th>
                 <th>ประเด็น</th>
                 <th>เอกสาร</th>
               </tr>
             </thead>

             <tbody>
               <tr class="success">
                 <td>1</td>
                 <td>มีหลักฐานช่องทางผ่านหมายเลขโทรศัพท์/ผ่านระบบอินเทอร์เน็ต/ผ่านระบบไปรษณีย์/ระบบอื่นๆ</td>
                 <td><a href="itafiles/EB8/EB8_1/811.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>2</td>
                 <td>มีหนังสือขออนุญาตนำคู่มือฯ ขึ้นเผยแพร่บนเวบไซต์ของหน่วยงาน</td>
                 <td> <a href="itafiles/EB8/EB8_1/812.pdf"  target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>มีผังขั้นตอนการร้องเรียนของผู้ใช้บริการของหน่วยงาน </td>
                 <td> <a href="itafiles/EB8/EB8_1/813.pdf" target="blank" ><span class="glyphicon glyphicon-cloud-download"></span></a></td>
               </tr>
               <tr class="success">
                 <td>4</td>
                 <td>มีภาพถ่ายกรณีเป็น chart ที่ติดบริเวณหน่วยงาน</td>
                 <td><a href="itafiles/EB8/EB8_1/814.pdf" target="blank"></span>><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>5</td>
                 <td>มีการแสดงหลักฐานช่องทางที่นำไปเผยแพร่</td>
                 <td> <a href="{{route('nofile')}}"target="blank" ><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="danger">
                 <td>6</td>
                 <td>มี Print Screen จาก Web site ของหน่วยงาน</td>
                 <td> <a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="success">
                 <td>7</td>
                 <td>มีเอกสารหลักฐานอื่น</td>
                 <td><a href="{{route('nofile')}}" target="blank" ></span>"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>

            </table>
        </div>  <!-- box body -->


<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB 8 (2)  มีการกำหนดหน่วยงานหรือเจ้าหน้าที่ผู้รับผิดชอบ</h3>
  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
<br>

<div class="box-body">

  <table class="table">
     <thead>
       <tr>
         <th>ข้อที่</th>
         <th>ประเด็น</th>
         <th>เอกสาร</th>
       </tr>
     </thead>

     <tbody>
       <tr class="success">
         <td>1</td>
         <td>มีโครงสร้างการแบ่งส่วนราชการ</td>
         <td><a href="itafiles/EB8/EB8_2/821.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>มีคำสั่งมอบหมายให้ส่วนราชการหรือเจ้าหน้าที่ที่มีหน้าที่จัดการเรื่องร้องเรียนการปฏิบัติงานหรือให้บริการของเจ้าหน้าที่</td>
         <td> <a href="itafiles/EB8/EB8_2/822.pdf"  target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="danger">
         <td>3</td>
         <td>มีการบรรจุรายชื่อหน่วยงานหรือผู้รับผิดชอบเรื่องร้องเรียนทั่วไปอยู่ในคู่มือการปฏิบัติงาน </td>
         <td> <a href="itafiles/EB8/EB8_2/823.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="success">
         <td>4</td>
         <td>หนังสือขออนุญาตนำคำสั่ง หรือคู่มือ ขึ้นเผยแพร่บนเวบไซต์ของหน่วยงาน</td>
         <td><a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>5</td>
         <td>มีการแสดงหลักฐานช่องทางที่นำไปเผยแพร่</td>
         <td> <a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="danger">
         <td>6</td>
         <td>มี Print Screen จาก Web site ของหน่วยงาน</td>
         <td> <a href="{{route('nofile')}}"target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="success">
         <td>7</td>
         <td>มีเอกสารหลักฐานอื่น</td>
         <td><a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>

    </table>
</div>  <!-- box body -->



<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB 8 (3) มีการตอบสนองหรือรายงานผลการดำเนินการเกี่ยวกับเรื่องร้องเรียน</h3>
  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
<br>

<div class="box-body">

  <table class="table">
     <thead>
       <tr>
         <th>ข้อที่</th>
         <th>ประเด็น</th>
         <th>เอกสาร</th>
       </tr>
     </thead>

     <tbody>
       <tr class="success">
         <td>1</td>
         <td>หนังสือราชการที่ได้รายงานผลการดำเนินงานเกี่ยวกับเรื่องร้องเรียนให้ผู้ร้องเรียนทราบ</td>
         <td><a href="itafiles/EB8/EB8_3/831.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>มีระบบการตอบสนอง</td>
         <td> <a href="itafiles/EB8/EB8_3/832.pdf"  target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="danger">
         <td>3</td>
         <td>เอกสารหลักฐานอื่นประกอบ </td>
         <td> <a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       

    </table>
</div>  <!-- box body -->
      </div>
  </div>
</div>





<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB 8 (4) สรุปผลการดำเนินการเรืองร้องเรียนพร้อมระบบุปัญหาและอุปสรรคและแนวทางแก้ไขแลเผยแพร่ให้สาธารณชนได้รับทราบ</h3>
  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
<br>

<div class="box-body">

  <table class="table">
     <thead>
       <tr>
         <th>ข้อที่</th>
         <th>ประเด็น</th>
         <th>เอกสาร</th>
       </tr>
     </thead>

     <tbody>
       <tr class="success">
         <td>1</td>
         <td>สรุปผลการดำเนินการ</td>
         <td><a href="itafiles/EB8/EB8_4/841.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>หนังสือเสนอผู้บริหารเพื่อทราบ/สั่งการและปรากฏการขออนุญาตเผยแพร่บนเว็บไซต์</td>
         <td> <a href="itafiles/EB8/EB8_4/EB8_4_2.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="danger">
         <td>3</td>
         <td>มีการแสดงช่องทางที่นำไปเผยแพร่ </td>
         <td> <a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="success">
         <td>4</td>
         <td>Print Screen จาก เว็บไซต์ของหน่วยงาน</td>
         <td><a href="{{route('nofile')}}"target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>5</td>
         <td>มีรายงานสรุปผลต่อผู้บริหาร</td>
         <td> <a href="itafiles/EB8_1_2.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="success">
         <td>6</td>
         <td>หลักฐานช่องทางที่นำไปเผลแพร่</td>
         <td><a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
   


       <tr class="success">
         <td>7</td>
         <td>มี Print Screen จากเว็บไซต์หน่วยงาน</td>
         <td><a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>8</td>
         <td>มีหลักฐานเอกสารอื่นประกอบ</td>
         <td> <a href="itafiles/EB8_1_2.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>

    </table>
</div>  <!-- box body -->
      </div>
  </div>
</div>






</section>



@endsection
