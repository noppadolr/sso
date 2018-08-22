@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
    <li class="breadcrumb-item active" aria-current="page">EB9</li>
  </ol>
</nav>
<section class="content">

  <div class="alert alert-info" >
    <span style="color: purple; font-size: 14pt;"><strong>EB 9 มีการดำเนินการเพื่อป้องกันผลประโยชน์ทับซ้อนในหน่วยงาน</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">


      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 9 (1) มีการวิเคราะห์ความเสี่ยงเกี่ยวกับการปฏิบัติงานที่อาจเกิดผลประโยชน์ทับซ้อน</h3>
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
                 <td>หนังสือแสดงหลักฐานการจัดประชุมเพื่อวิเคราะห์ความเสี่ยง</td>
                 <td><a href="itafiles/EB9/EB9_1/911.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>2</td>
                 <td>รายงานการประชุม</td>
                 <td> <a href="itafiles/EB9/EB9_1/912.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>รายงานการวิเคราะห์ความเสียงเกี่ยวกับการปฏิบัติงานที่อาจะเกิดผลประโยชน์ทับซ้อน </td>
                 <td> <a href="itafiles/EB9/EB9_1/913.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
               </tr>
               <tr class="success">
                 <td>4</td>
                 <td>หนังสือเสนอผู้บริหารเพื่อทราบ/สั่งการและปรากฏการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน</td>
                 <td><a href="itafiles/EB9/EB9_1/914.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="success">
                 <td>5</td>
                 <td>หลักฐานช่องทางที่่นำไปเผยแพร่</td>
                 <td><a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span>></a> </td>
               </tr>
               <tr class="">
                 <td>6</td>
                 <td>มี Print Screen จาก Web site ของหน่วยงาน<</td>
                 <td> <a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
               </tr>


               <tr class="success">
                 <td>7</td>
                 <td>มีเอกสารหลักฐานอื่น</td>
                 <td><a href="{{route('nofile')}}" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span>></a> </td>
               </tr>

            </table>
        </div>  <!-- box body -->


<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB9 (2)  มีการจัดทำคู่มือเกี่ยวกับการปฏิบัติงานเพื่อป้องกันผลประโยชน์ทับซ้อน</h3>
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
         <td>เอกสารเริ่มต้นที่ที่แสดงถึงการจัดทำคู่มือผลประโยชน์ทับซ้อน</td>
         <td><a href="itafiles/EB9/EB9_2/EB9_2_1.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>มีคู่มือผลประโชน์ทับซ้อนของหน่วยงาน</td>
         <td> <a href="itafiles/EB9/EB9_2/EB9_2_2.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="danger">
         <td>3</td>
         <td>มีหนังสือเสนอผู้บริหารเพื่อสั่งการให้สื่อสารและปรากฏการขออนุญาตเผยแพร่บนเว็บไซต์ของหน่วยงาน </td>
         <td> <a href="itafiles/EB9/EB9_2/EB9_2_3.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="success">
         <td>4</td>
         <td>มีการแสดงหลักฐานช่องทางที่นำไปเผยแพร่</td>
         <td><a href="{{route('nofile')}}" target="black"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>5</td>
         <td>มี Print Screen จาก Web site หน่วยงาน</td>
         <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="danger">
         <td>6</td>
         <td>มีเอกสารหลักฐานอื่น</td>
         <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>

    </table>
</div>  <!-- box body -->



<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB 9 (3) มีการประชุมหรือสัมนาหรือแลกเปลี่ยนความรู้ภายในหน่วยงาน เรื่องการป้องกันผลประโยชน์ทับซ้อน</h3>
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
         <td>หลักฐานการจัดประชุม</td>
         <td><a href="itafiles/EB9/EB9_3/EB9_3_1.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>มีรายชื่อผู้เข้าร่วมประชุม/สัมนา</td>
         <td> <a href="itafiles/EB9/EB9_3/EB9_3_2.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="danger">
         <td>3</td>
         <td>มีภาพถ่ายประกอบ </td>
         <td> <a href="itafiles/EB9/EB9_3/EB9_3_3.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>

       <tr class="success">
         <td>4</td>
         <td>มีหนังสือเสนอผู้บริหารเพื่อทราบรายงานสรุปผลการจัดโครงการอบรม/สัมนาและการขออนุญาตเผยแพร่บนเว็บไซต์ของหน่วยงาน</td>
         <td><a href="itafiles/EB9/EB9_3/EB9_3_4.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>5</td>
         <td>มีการแสดงหลักฐานช่องทางที่นำไปเผยแพร่/สัมนา</td>
         <td> <a href="itafiles/EB8_1_2.pdf"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="danger">
         <td>6</td>
         <td>Print Screen จาก Web site ของหน่วยงาน </td>
         <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="success">
         <td>7</td>
         <td>เอกสารหลักฐานอื่น</td>
         <td><a href="{{route('nofile')}}" target="black"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>

    </table>
</div>  <!-- box body -->
      </div>
  </div>
</div>





<div class="box box-solid box-default">

<div class="box-header with-border">
  <h3 class="box-title" >EB 9 (4) มีการปรับปรุงขั้นตอน/แนวทางการปฏิบัติงานหรือระเบียบเพื่อป้องกันผลประโยชน์ทับซ้อน</h3>
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
         <td>หลักฐานการปรับปรุงขั้นตอน/แนวทางการปฏิบัติงานหรือระเบียบเพื่อป้องกันผลประโยชน์ทับซ้อน</td>
         <td><a href="itafiles/EB9/EB9_4/EB9_4_1.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>2</td>
         <td>มีรายงานผลการปรับปรุงขั้นตอนการปฏิบัติงาน แนวทาง หรือระเบียบประกาศ เพื่อป้องกันผลประโยชน์ทับซ้อน</td>
         <td> <a href="itafiles/EB9/EB9_4/EB9_4_2.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="danger">
         <td>3</td>
         <td>มีหนังสือเสนอผู้บริหารเพื่อทราบ/สั่งการ/แจ้งเวียน และการขออนุญาตเผยแพร่บนเว็บไซต์ </td>
         <td> <a href="itafiles/EB9/EB9_4/EB9_4_3.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
       </tr>
       <tr class="success">
         <td>4</td>
         <td>มีการแสดงหลักฐานช่องทางที่นำไปเผยแพร่</td>
         <td><a href="{{route('nofile')}}" target="black"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>5</td>
         <td>Print Screen จาก เว็บไซต์ของหน่วยงานลต่อผู้บริหาร</td>
         <td> <a href="itafiles/EB8_1_2.pdf"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>
       <tr class="success">
         <td>6</td>
         <td>หลักฐานอื่นประกอบ</td>
         <td><a href="{{route('nofile')}}" target="black"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>



       <tr class="success">
         <td>7</td>
         <td>มี Print Screen จากเว็บไซต์หน่วยงาน</td>
         <td><a href="{{route('nofile')}}" target="black"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
       </tr>
       <tr class="">
         <td>8</td>
         <td>มีหลักฐานเอกสารอื่นประกอบ</td>
         <td> <a href="itafiles/EB8_1_2.pdf"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
       </tr>

    </table>
</div>  <!-- box body -->
      </div>
  </div>
</div>






</section>



@endsection
