@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
  <li class="breadcrumb-item active" aria-current="page">EB1</li>
  </ol>
</nav>
<section class="content">

  <div class="alert alert-info" >
    <span style="color: purple; font-size: 14pt;"><strong>EB1 ผู้มีส่วนใด้ส่วนเสียมีส่วนร่วมในการดำเนินงานตามภารกิจหลักของหน่วยงาน</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">


      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 1 (1) ผู้มีส่วนได้ส่วนเสียเข้ามามีส่วนร่วมในการ <span style="color: #0000ff;">แสดงความคิดเห็น</span> เกี่ยวกับแผนงานโครงการ ตามภารกิจหลักของหน่วยงาน</h3>
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
                 <td>บันทึกข้อความขออนุมัติดำเนินโครงการ</td>
                 <td><a href="itafiles/EB1/EB1_1_1.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a> </td>
               </tr>
               <tr class="success">
                 <td>2</td>
                 <td>โครงการ/กิจกรรมที่สอดคล้องกับภารกิจหลัก</td>
                 <td> <a href="itafiles/EB1/EB1_1_2.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>การแสดงภารกิจหลักที่เลือก</td>
                 <td> <a href="itafiles/EB1/EB1_1_3.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="warning">
                 <td>4</td>
                 <td>รายงานการประชุม/โครงการ กิจกรรมที่แสดงชื่อผู้มีส่วนได้ส่วนเสีย มาร่วมแสดงความคิดเห็น</td>
                 <td> <a href="itafiles/EB1/EB1_1_4.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span> </a></td>
               </tr>
               <tr class="info">
                 <td>5</td>
                 <td>ภาพถ่ายกิจกรรมประกอบ</td>
                 <td> <a href="itafiles/EB1/EB1_1_5.pdf" target="_blank"><span class="glyphicon glyphicon-picture"></span></a></td>
               </tr>
               {{-- 
               <tr class="active">
                 <td>6</td>
                 <td>เอกสารหลักฐานอื่นประกอบ</td>
                 <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
               </tr>
               --}}
             </tbody>
           </table>

            <br> <br>
  

        </div>  <!-- box body -->

      </div>
  </div>
</div>


<!----- ตารางของวงเล็บ สอง -->
<div class="row">

        <div class="col-md-12">


                <div class="box box-solid box-default">
          
                  <div class="box-header with-border">
                    <h3 class="box-title" >EB 1 (2) ผู้มีส่วนได้ส่วนเสียเข้ามามีส่วนร่วมในการ <span style="color: #0000ff;">จัดทำแผนงาน/โครงการ</span>ตามภารกิจหลักของหน่วยงาน</h3>
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
                           <td>บันทึกข้อความขออนุมัติดำเนินโครงการ</td>
                           <td><a href="itafiles/EB1/EB12/EB1_2_1.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span></a> </td>
                         </tr>
                         <tr class="success">
                           <td>2</td>
                           <td>โครงการ/กิจกรรมที่สอดคล้องกับภารกิจหลัก</td>
                           <td> <a href="itafiles/EB1/EB12/EB1_2_2.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
                         </tr>
                         <tr class="danger">
                           <td>3</td>
                           <td>รายงานการประชุม</td>
                           <td> <a href="itafiles/EB1/EB12/EB1_2_3.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
                         </tr>
                         <tr class="info">
                           <td>4</td>
                           <td>แผนงาน/โครงการตามภารกิจหลักที่เลือก</td>
                           <td> <a href="itafiles/EB1/EB12/EB1_2_4.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
                         </tr>
                         <tr class="warning">
                           <td>5</td>
                           <td>ภาพถ่ายกิจกรรมประกอบ</td>
                           <td> <a href="itafiles/EB1/EB12/EB1_2_5.pdf" target="_blank"><span class="glyphicon glyphicon-picture"></span></a></td>
                         </tr>
{{-- 
                         <tr class="active">
                           <td>6</td>
                           <td>เอกสารหลักฐานอื่นประกอบ</td>
                           <td> <a href="{{route('nofile')}}"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
                         </tr>
--}}

                       </tbody>
                     </table>
          
                      <br> <br>
            
          
                  </div>  <!-- box body -->
          
                </div>
            </div>

</div>
<!-- จบของตาราง วงเล็บ สอง-->

<!-- วงเล็บ สาม -->

<div class="row">
        <div class="col-md-12">
      
      
            <div class="box box-solid box-default">
      
              <div class="box-header with-border">
                <h3 class="box-title" >EB 1 (3) ผู้มีส่วนได้ส่วนเสียเข้ามามีส่วนร่วมในการ <span style="color: #0000ff;">ดำเนินการโครงการ</span>  ตามภารกิจหลักของหน่วยงาน</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
                  <br>
              <div class="box-body ">
            
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
                       <td>บันทึกข้อความขออนุมัติดำเนินโครงการ</td>
                       <td><a href="itafiles/EB1/EB13/EB1_3_1.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span></a> </td>
                     </tr>
                     <tr class="success">
                       <td>2</td>
                       <td>โครงการ/กิจกรรมที่สอดคล้องกับภารกิจหลัก</td>
                       <td> <a href="itafiles/EB1/EB13/EB1_3_2.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
                     </tr>
                     <tr class="danger">
                       <td>3</td>
                       <td>การแสดงภารกิจหลักที่เลือก</td>
                       <td> <a href="itafiles/EB1/EB13/EB1_3_3.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
                     </tr>
                     <tr class="info">
                       <td>4</td>
                       <td>รายงานการประชุม/โครงการ กิจกรรมที่แสดงชื่อผู้มีส่วนได้ส่วนเสีย มาร่วมแสดงความคิดเห็น</td>
                       <td> <a href="itafiles/EB1/EB13/EB1_3_4.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
                     </tr>
                     <tr class="warning">
                       <td>5</td>
                       <td>ภาพถ่ายกิจกรรมประกอบ</td>
                       <td> <a href="itafiles/EB1/EB13/EB1_3_5.pdf" target="_blank"><span class="glyphicon glyphicon-picture"></span></a></td>
                     </tr>
                     <tr class="active">

                   </tbody>
                 </table>
      
                  <br> <br>
        
      
              </div>  <!-- box body -->
      
            </div>
        </div>
</div>
<!-- จบวงเล็บสาม -->




</section>



@endsection
