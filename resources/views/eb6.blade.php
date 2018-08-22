@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
    <li class="breadcrumb-item active" aria-current="page">EB5</li>
  </ol>
</nav>
<section class="content">

  <div class="alert alert-info" >
    <span style="color: purple; font-size: 14pt;"><strong>EB 6 มีการวิเคราะห์ผลการจัดซื้อจัดจ้าง</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">

<!--  ***************************************************************************** -->
      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 6 (1)  มีการวเคราะห์การจัดซืือจัดจ้าง </h3>
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
                 <td>มีหนังสือรายงานผู้บังคับบัญชาหรือพิจารณา หรือสั่งการ และการขออนุญาตนำไปเผยแพร่ผ่านเว็บไซต์</td>
                 <td><a href="itafiles/EB6/EB6_1/611.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>2</td>
                 <td>ผลการวิเคราะห์การจัดซื้อจัดจ้าง</td>
                 <td> <a href="itafiles/EB6/EB6_1/612.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>หลักฐานช่องทางที่่นำไปเผยแพร่</td>
                 <td> <a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="success">
                 <td>4</td>
                 <td>มี Print Screen จาก Web Site หน่วยงาน</td>
                 <td><a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>5</td>
                 <td>เอกสารหลักฐานอื่นๆ</td>
                 <td> <a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>

            </table>
        </div>  <!-- box body -->
<!--  ***************************************************************************** -->

<!--  ***************************************************************************** -->
      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 6 (2)  มีการนำผลการวิเคราะห์การจัดซ์้อจัดจ้าง มาใช้ปรับปรุงวิะีการจัดซื้อจัดจ้าง </h3>
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
                 <td>การนำผลการวิเคราะห์การจัดซื้อจัดจ้างมาปรับปรุง</td>
                 <td><a href="itafiles/EB6/EB6_2/EB6_2_1.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>2</td>
                 <td>ผลการวิเคราะห์การจัดซื้อจัดจ้าง</td>
                 <td> <a href="itafiles/EB6/EB6_1/EB6_1_2.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>เอกสารอื่นๆ</td>
                 <td> <a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               

            </table>
        </div>  <!-- box body -->
<!--  ***************************************************************************** -->

      </div>
  </div>
</div>









</section>



@endsection
