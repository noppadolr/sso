@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
    <li class="breadcrumb-item active" aria-current="page">EB3</li>
  </ol>
</nav>
<section class="content">

  <div class="alert alert-info" >
    <span style="color: purple; font-size: 14pt;"><strong>EB 3 มีการปฏิบัติงาน/การบริการตามภารกิจด้วยความเป็นธรรมอย่างไร</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">


      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 3 (1) ขั้นตอนการปฏิบัติงานตามภารกิจหลักและระยะเวลาที่ใช้ในการดำเนินการ </h3>
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
               <tr>
                 <td>1</td>
                 <td>หนังสือสั่งการ/การสื่อสารให้ปฏิบัติตามแนวทาง และการขออนุญาตนำเอกสารเผยแพร่บนเว็บไซต์ของหน่วยงาน</td>
                 <td><a href="itafiles/EB3/EB31/311.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="success">
                 <td>2</td>
                 <td>แนวทาง/คู่มือการปฏิบัติงาน/คู่มือกำหนดมาตรฐานการปฏิบัติงาน</td>
                 <td> <a href="itafiles/EB3/EB31/312.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>ช่องทางที่นำไปเผยแพร่</td>
                 <td> <a href="itafiles/EB3/EB31/313.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
               </tr>
               <tr class="info">
                 <td>4</td>
                 <td>Print Screen แผนผังขั้นตอนการปฏิบัติงาน หรือคู่มือการปฏิบัติงานจากเว็บไซต์ของหน่วยงาน</td>
                 <td> <a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>

            </table>
        </div>  <!-- box body -->

      </div>
  </div>
</div>


<!----- ตารางของวงเล็บ สอง -->
<div class="row">

        <div class="col-md-12">


                <div class="box box-solid box-default">

                  <div class="box-header with-border">
                    <h3 class="box-title" >EB 3 (2) ระบบการป้องกันหรือตรวจสอบเพื่อป้องกันการละเว้นการปฏิบัติหน้าที่ตามภารกิจหลัก</h3>
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
                         <tr>
                           <td>1</td>
                           <td>หนังสือแจ้งผู้บริหารรับทราบ/พิจารณา/สั่งการ และการขออนุญาตนำเอกสารเผยแพร่บนเว็บไซต์ของหน่วยงาน</td>
                           <td><a href="itafiles/EB3/EB32/321.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
                         </tr>
                         <tr class="success">
                           <td>2</td>
                           <td>รายงานผลการปฏิบัติานตามแนวทางการปฏิบัติงาน หรือคู่มือกำหนดมาตรฐานการปฏิบัติงาน</td>
                           <td> <a href="itafiles/EB3/EB32/322.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
                         </tr>
                         <tr class="danger">
                           <td>3</td>
                           <td>ช่องทางที่นำไปเผยแพร่</td>
                           <td> <a href="itafiles/EB3/EB32/323.pdf" target="_blank"><span class="fa fa-external-link-square"></span> </a></td>
                         </tr>
                         <tr class="info">
                           <td>4</td>
                           <td>Print Screen ตามข้อ 1 และ ข้อ 2 จากเว็บไซต์ของหน่วยงาน</td>
                           <td> <a href="itafiles/EB3/EB32/324.pdf" target="_blank"><span class="glyphicon glyphicon-picture"></span> </a></td>
                         </tr>
 
                       </tbody>
                     </table>




                  </div>  <!-- box body -->

                </div>
            </div>

</div>
<!-- จบของตาราง วงเล็บ สอง-->






</section>



@endsection
