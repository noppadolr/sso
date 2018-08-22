@extends('welcome')
@include('header')
@include('sidebar')


@section('content')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
    <li class="breadcrumb-item active" aria-current="page">EB11</li>
  </ol>
</nav>


<section class="content">

  <div class="alert alert-info" >
    <span style="color: purple; font-size: 14pt;"><strong>EB 11 เจ้าหน้าที่ในหน่วยงานมีการรวมกลุ่มเพื่อตรวจสอบการบริหารงานในหน่วยงาน</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">


      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 11 (1) มีการรวมกลุ่มของเจ้าหน้าที่ในหน่วยงานเพื่อการบริหารงานที่โปร่งใส</h3>
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
                 <td>มีการรวมกลุ่มของเจ้าหน้าที่หน่วยงานที่เป็นทางการเพื่อดำเนินกิจกรรมการป้องกันการทุจริตของหน่วยงาน</td>
                 <td><a href="itafiles/EB11/EB11_1/EB11_1_1.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>2</td>
                 <td>เอกสารหลักฐานอื่นประกอบ</td>
                 <td> <a href="itafiles/EB11/EB11_1/EB11_1_2.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
                          </table>
        </div>  <!-- box body -->


<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB11 (2)ถ้ามีการรวมกลุ่ม มีกิจกรรมที่แสดงถึงความพยายามที่จะปรับปรุงการบริหารงานของหน่วยงานให้มีความโปร่งใสยิ่งขึ้น</h3>
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
         <td>มีหลักฐานแสดงถึงความพยายามที่จะปรับปรุงการบริหารงานของหน่วยงานให้มีความโปร่งใสยิ่งขึ้น</td>
         <td><a href="itafiles/EB11/EB11_2/EB11_2_1.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>มีหลักฐานสะท้อนความริเริ่มของกลุ่มเพื่อเสริมสร้างคุณธรรม ความซื่อสัตย์สุจริต และพัฒนาความโปร่งใส</td>
         <td> <a href="itafiles/EB11/EB11_2/EB11_2_2.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="danger">
         <td>3</td>
         <td>มีหนังสือเสนอผู้บริหารเพื่อทราบและสั่งการและการขออนุญาตเผยแพร่ผ่านเว็บไซต์ </td>
         <td> <a href="itafiles/EB11/EB11_2/EB11_2_3.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="success">
         <td>4</td>
         <td>มีการแสดงหลักฐานช่องทางที่นำไปเผยแพร่</td>
         <td><a href="itafiles/EB11/EB11_2/1124.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>5</td>
         <td>มี Print Screen จาก Web site หน่วยงาน</td>
         <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="danger">
         <td>6</td>
         <td>มีเอกสารหลักฐานอื่น</td>
         <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>

    </table>
</div>  <!-- box body -->




    </table>
</div>  <!-- box body -->
      </div>
  </div>
</div>
      </div>
  </div>
</div>






</section>



@endsection
