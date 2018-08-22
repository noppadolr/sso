@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
    <li class="breadcrumb-item active" aria-current="page">EB10</li>
  </ol>
</nav>
<section class="content">

  <div class="alert alert-info" >
    <span style="color: purple; font-size: 14pt;"><strong>EB 10 มีการดำเนินการป้องกันและปราบปรามการทุจริตในหน่วยงาน</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">


      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 10 (1) การวิเคราะห์ผลการดำเนินการตามแผนปฏิบัติการป้องกันและปราบปรามการทุจริตของหน่วยงาน</h3>
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
                 <td>รายงานผลการวิเคราะห์แผนปฏิบัติการป้องกันและปราบปรมการทุจริตในหน่วยงาน</td>
                 <td><a href="itafiles/EB10/EB10_1/EB10_1_1.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>2</td>
                 <td>หนังสือเสนอผู้บริหารเพื่อทราบ/สั่งการ และการขออนุญาตเผยแพร่บนเว็บไซต์</td>
                 <td> <a href="itafiles/EB10/EB10_1/EB10_1_2.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>หลักฐานช่องทางที่่นำไปเผยแพร่ </td>
                 <td> <a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="success">
                 <td>4</td>
                 <td>มี Print Screen จาก Web site ของหน่วยงาน</td>
                 <td><a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>

               <tr class="success">
                 <td>5</td>
                 <td>มีเอกสารหลักฐานอื่น</td>
                 <td><a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>

            </table>
        </div>  <!-- box body -->


<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB10 (2) ผลการดำเนินงานตามแผนปฏิบัติการป้องกันและปราบปรามการทุจริตของหน่วยงาน</h3>
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
         <td>แผนปฏิบัติการป้องกันและปราบปรามการทุจริตของหน่วยงาน</td>
         <td><a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>หนังสือเสนอผู้บริหารเพื่อทราบ/สั่งการ ขออนุญาตเผยแพร่บนเว็บไซต์ของหน่วยงาน</td>
         <td> <a href="itafiles/EB10/EB10_2/EB10_2_2.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="danger">
         <td>3</td>
         <td>เอกสารแสดงหลักฐานช่องทางที่นำไปเผยแพร่ </td>
         <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="success">
         <td>4</td>
         <td>มี Print Screen จาก Web site หน่วยงาน </td>
         <td><a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>5</td>
         <td>หลักฐานการประกาศเจตจำนงสุจริตในเรื่องการต่อต้านการทุจริตของผู้บริหารหน่วยงาน</td>
         <td> <a href="itafiles/EB10/EB10_2/EB10_2_5.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="danger">
         <td>6</td>
         <td>โครงการ/กิจกรรมที่หน่วยงานได้ดำเนินงานด้านการป้องกันและปราบปรามการทุจริต</td>
         <td> <a href="itafiles/EB10/EB10_2/EB10_2_6.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>

              <tr class="success">
         <td>7</td>
         <td>เอกสารหลักฐานอื่นประกอบ</td>
         <td><a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>

    </table>
</div>  <!-- box body -->




</section>



@endsection
