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
    <span style="color: purple; font-size: 14pt;"><strong>EB 7 มีช่องทางให้ประชาชนเข้าถึงข้อมูล</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">

<!-- *************************************************** -->
      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 7 (1)  มีหน่วยประชาสัมพันธ์ ณ ที่ทำการของหน่วยงาน </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>

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
                 <td>หลักฐานเกี่ยวกับหน่วยประชาสัมพันธ์</td>
                 <td><a href="itafiles/EB7/EB7_1/711.pdf" target="_blank""><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>2</td>
                 <td>คำสั่งมอบหมายงานให้ส่วนราชการหรือเจ้าหน้าที่ในงานด้านประชาสัมพันธ์ของหน่วยงาน</td>
                 <td> <a href="itafiles/EB7/EB7_1/712.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>มีจุดบริการให้ข้อมูลข่าวสารแก่ประชาชน</td>
                 <td> <a href="itafiles/EB7/EB7_1/713.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="success">
                 <td>4</td>
                 <td>มีหลักฐานการปรากฏงานด้านการประชาสัมพันธ์ภารกิจหลัก ในดครงการของหน่วยงน</td>
                 <td><a href="itafiles/EB7/EB7_1/714.pdf" target="black"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>5</td>
                 <td>ภาพถ่ายการให้บริการประชาสัมพันธ์บริการประชาชน </td>
                 <td> <a href="itafiles/EB7/EB7_1/715.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="success">
                 <td>6</td>
                 <td>เอกสาร/หลักฐานอื่นประกอบ</td>
                 <td><a href="{{route('nofile')}}" target="black"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>

            </table>
        </div>  <!-- box body -->
<!-- *************************************************** -->

<!-- *************************************************** -->
<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB 7 (2) ช่องทาง สื่อประชาสัมพันธ์ข้อมูลอำนาจหน้าที่ของหน่วยงาน</h3>
  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
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
         <td>Print Screen อำนาจหน้าที่ตามกฏหมาย บน เว็บไซต์ของหน่วยงาน</td>
         <td><a href="itafiles/7-2-1.png" target="black"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>เอกสาร/หลักฐานอื่นประกอบ</td>
         <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>

      </body>
  </table>
</div>  <!-- box body -->
<!-- *************************************************** -->

<!-- *************************************************** -->
<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB 7 (3) การแสดงข้อมูลการดำเนินงานตามบทบาทภารกิจที่เป็นปัจจุบันทางเว็บไซต์ของหน่วยงานหรือสื่ออื่นๆ</h3>
  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
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
         <td>Print Screen ข้อมูลการดำเนินงานของหน่วยงานตามบทบาทภารกิจของหน่วยงานผ่านเวปไซต์หรือสื่อต่างๆ ของหน่วยงาน</td>
         <td><a href="itafiles/7-2-1.png" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>มีการแสดงข้อมูลระบุวันที่ หรือที่แสดงให้เห็นว่าเป็นปัจจุบันและมีอยู่จริง</td>
         <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="success">
         <td>3</td>
         <td>เอกสารหลักฐานอื่น</td>
         <td><a href="itafiles/7-2-1.png" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
</tbody>
         </table>
</div>  <!-- box body -->
<!-- *************************************************** -->



      </div>
  </div>
</div>









</section>



@endsection
