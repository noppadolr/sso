@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
    <li class="breadcrumb-item active" aria-current="page">EB4</li>
  </ol>
</nav>
<section class="content">

  <div class="alert alert-info" >
    <span style="color: purple; font-size: 14pt;"><strong>EB 4 มีการดำเนินการเกี่ยวกับการจัดซื้อจัดจ้างด้วยความโปร่งใส</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">


      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 4 (1)  มีการประกาศเผยแพร่แผนปฏิบัติการจัดซื้อจัดจ้างประจำปี </h3>
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
                 <td>หนังสือขออนุมัติแผนปฏิบัติการจัดซื้อจัดจ้าง ประจำปีงบประมาณ และการขออนุญาตนำเอกสารเผยแพร่ทางเว็บไซต์ของหน่วยงาน</td>
                 <td><a href="itafiles/EB4/EB4_1/EB4_1_1.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="">
                 <td>2</td>
                 <td>มีแผนปฏิบัติการจัดซื้อจัดจ้างประจำปีงบประมาณ (งบลงทุน)</td>
                 <td> <a href="itafiles/EB4/EB4_1/EB4_1_2.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>มีหนังสือแจ้งจัดสรรงบประมาณประจำปีงบประมาณ่</td>
                 <td> <a href="itafiles/EB4/EB4_1/EB4_1_3.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="info">
                 <td>4</td>
                 <td>หลักฐานช่องทางที่นำไปเผยแพร่</td>
                 <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
              <tr class="danger">
                <td>5</td>
                <td>Print Screen จากเว็บไซต์ของหน่วยงาน</td>
                <td> <a href="{{route('nofile')}}" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
              </tr>

              <tr >
                <td>6</td>
                <td>คำสั่งมอบหมายการปิดประกาศหรือปลดประกาศ </td>
                <td> <a href="itafiles/EB4/EB4_1/EB4_1_6.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
              </tr>
              <tr class="success">
                <td>7</td>
                <td>มีรายงานผลการจัดซื้อจัดจ้างประจำเดือนตามแบบ สขร 1</td>
                <td> <a href="itafiles/EB4/EB4_1/EB4_1_7.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
              </tr>
              <tr class="danger">
                <td>8</td>
                <td>หนังสือขออนุญาตผู้บริหารของหน่วยงาน เพื่อนำแบบ สขร 1 ขึ้นเวบไซต์หน่วยงาน</td>
                <td> <a href="{{route('nofile')}}"target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
              </tr>
              <tr class="info">
                <td>9</td>
                <td>เอกสารหลักฐานอื่นประกอบ</td>
                <td> <a href="itafiles/EB4/EB4_1/EB4_1_9.pdf"target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
              </tr>

                 <tr class="info">
                 <td>10</td>
                 <td>หนังสือแจ้งเหตุผลของการไม่ได้รับจัดสรรงบประมาณในลักษณะงบลงทุน</td>
                 <td> <a href="itafiles/EB4/EB4_1/EB4_1_10.pdf"target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>

            </table>
        </div>  <!-- box body -->

      </div>
  </div>
</div>


<!-- ตารางของวงเล็บ สอง -->
<div class="row">

        <div class="col-md-12">


                <div class="box box-solid box-default">

                  <div class="box-header with-border">
                    <h3 class="box-title" >EB 4 (2) การเผยแพร่ข้อมูลอย่างเป็นระบบ เกี่ยวกับการจัดซื้อจัดจ้าง</h3>
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
                           <td>หนังสือขออนุมัติแผนปฏิบัติการจัดซื้อจัดจ้าง ประจำปีงบประมาณ</td>
                           <td><a href="itafiles/EB4/EB4_2/EB4_2_1.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
                         </tr>
                         <tr class="">
                           <td>2</td>
                           <td>แผนปฏิบัติการจัดซื้อจัดจ้างประจำปีงบประมาณ</td>
                           <td> <a href="itafiles/EB4/EB4_2/EB4_2_2.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
                         </tr>
                         <tr class="danger">
                           <td>3</td>
                           <td>หนังสือแจ้งจัดสรรงบประมาณประจำปีงบประมาณ</td>
                           <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
                         </tr>
                         <tr class="info">
                           <td>4</td>
                           <td>หลักฐานช่องทางที่นำไปเผยแพร่</td>
                           <td> <a href="itafiles/EB4/EB4_4/EB4_2_1.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
                         </tr>
                         <tr class="active">
                           <td>5</td>
                           <td>Print Screen จากเว็บไซต์ของหน่วยงาน</td>
                           <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
                         </tr>
                         <tr class="danger">
                           <td>6</td>
                           <td>คำสั่งมอบหมายการปิดประกาศ หรือปลดประกาศ</td>
                           <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
                         </tr>
                         <tr class="info">
                           <td>7</td>
                           <td>รายงานผลการจัดซื้อจัดจ้างประจำเดือน ตามแบ สขร 1</td>
                           <td> <a href="itafiles/EB4/EB4_2/EB4_2_7.pdf" target="blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
                         </tr>
                         <tr class="active">
                           <td>8</td>
                           <td>หนังสือขออนุญาตผู้บริหารของหน่วยงานนำแบบสรุปผลการจัดซื้อจัดจ้างในรอบเดือน (สขร 1) ขึ้นเวบไซต์ของหน่วยงาน</td>
                           <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"></span></a></td>
                         </tr>
                       </tbody>
                     </table>




                  </div>  <!-- box body -->

                </div>
            </div>

</div>
<!-- จบของตาราง วงเล็บ สอง-->


<!-- ตารางของวงเล็บ สาม -->
<div class="row">

  <div class="col-md-12">


          <div class="box box-solid box-default">

            <div class="box-header with-border">
              <h3 class="box-title" >EB 4 (3) มีแนวทางตรวจสอบเพื่อป้องกันผลประโยขน์ทับซ้อน</h3>
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
                   <tr class="info">
                     <td>1</td>
                     <td>หนังสือแจ้งเวียนแนวทางการป้องกันผลประโยชน์ทับซ้อน</td>
                     <td><a href="#" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
                   </tr>

                   <tr class="success">
                    <td>2</td>
                    <td>หนังสือขออนุญาตเผยแพร่บนเวปไซต์ของหน่วยงาน</td>
                    <td><a href="#" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
                  </tr>

                  <tr class="danger">
                    <td>3</td>
                    <td>แนวทางการตรวจสอบเพื่อป้องกันผลประโยชน์ทับซ้อน</td>
                    <td><a href="#" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
                  </tr>

                  <tr class=warning>
                    <td>4</td>
                    <td>ช่องทางที่นำไปเผยแพร่</td>
                    <td><a href="#" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
                  </tr>

                  <tr class="info">
                    <td>5</td>
                    <td>Print Screen จากเวปไซต์ของหน่วยงาน</td>
                    <td><a href="#" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
                  </tr>
                  <tr class="success">
                    <td>6</td>
                    <td>หลักฐานการบังคับใช้ตามแนวทาง</td>
                    <td><a href="#" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
                  </tr>
                  <tr class="success">
                    <td>7</td>
                    <td>หลักฐานเอกสารอื่นๆ</td>
                    <td><a href="#" target="blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
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
