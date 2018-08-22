@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
    <li class="breadcrumb-item active" aria-current="page">EB2</li>
  </ol>
</nav>
<section class="content">

  <div class="alert alert-info" >
    <span style="color: purple; font-size: 14pt;"><strong>EB 2 หน่วยงานมีการปฏิบัติงานตามคู่มือหรือมาตรฐานการปฏิบัติงานตามภารกิจหลัก</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">


      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 2 (1) มีคู่มือหรือมาตรฐานการปฏิบัติงานตามภารกิจหลัก </h3>
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
                 <td>คำสั่งคณะทำงานคู่มือการปฏิบัติงาน/คู่มือกำหนดมาตรฐานการปฏิบัติงาน</td>
                 <td><a href="itafiles/EB2/EB21/EB2_1_1.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="success">
                 <td>2</td>
                 <td>มีการประชุมคณะทำงาน</td>
                 <td> <a href="itafiles/EB2/EB21/EB2_1_2.pdf" target="_blank"><span class="glyphicon glyphicon-picture"></span> </a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>รายงานการประชุมคณะทำงาน</td>
                 <td> <a href="itafiles/EB2/EB21/EB2_1_3.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
               </tr>
               <tr class="info">
                 <td>4</td>
                 <td>หนังสือสั่งการ/การสื่อสารการปฏิบัติให้ปฏิบัติตามแนวทาง/การขออนุญาตนำเอกสารเผยแพร่ทางเว็บไซต์ของหน่วยงาน</td>
                 <td> <a href="itafiles/EB2/EB21/EB2_1_4.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
               </tr>
               <tr class="warning">
                 <td>5</td>
                 <td>แนวทาง/คู่มือการปฏิบัติาน/คู่มือกำหนดมาตรฐานการปฏิบัติงานที่ทำขึ้นมาให้เจ้าหน้าที่ในหน่วยงานยึดถือเป็นแนวทางปฏิบัติในมาตรฐานเดียวกัน</td>
                 <td> <a href="itafiles/EB2/EB21/EB2_1_5.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
               </tr>
               <tr class="">
                 <td>6</td>
                 <td>ช่องทางที่นำไปเผยแพร่</td>
               <td> <a href="{{ route('eb2')}}" target="_blank"><span class="fa fa-external-link-square"></span> </a></td>
               </tr>
             </tbody>
           <tr class="success">
                <td>7</td>
                <td>ผังขั้นตอนการปฏิบัติงานหรือคู่มือปฏิบัติงาน</td>
                <td> <a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-picture"></span></a></td>
              </tr>
              <tr class="success">
                <td>8</td>
                <td>มีเอกสารหลักฐานอื่น</td>
                <td><a href="itafiles/EB2/EB21/EB2_1_8.pdf"target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
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
                    <h3 class="box-title" >EB 2 (2) รายงานผลการปฏิบัติงานตามคู่มือหรือมาตรฐานการปฏิบัติงานตามภารกิจหลัก</h3>
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
                           <td><a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
                         </tr>
                         <tr class="success">
                           <td>2</td>
                           <td>รายงานผลการปฏิบัติานตามแนวทางการปฏิบัติงาน หรือคู่มือกำหนดมาตรฐานการปฏิบัติงาน</td>
                           <td> <a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
                         </tr>
                         <tr class="danger">
                           <td>3</td>
                           <td>ช่องทางที่นำไปเผยแพร่</td>
                           <td> ></span></td>
                         </tr>
                         <tr class="info">
                           <td>4</td>
                           <td>Print Screen ตามข้อ 1 และ ข้อ 2 จากเว็บไซต์ของหน่วยงาน</td>
                           <td> <a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-picture"></span> </a></td>
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
