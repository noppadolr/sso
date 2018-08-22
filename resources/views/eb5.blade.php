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
    <span style="color: purple; font-size: 14pt;"><strong>EB 5 มีการดำเนินงานเกี่ยวกับการเปิดเผยข้อมูลการจัดซื้อจัดจ้างให้สาธารณชน</strong></span>
  </div>

<div class="row">
  <div class="col-md-12">


      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" >EB 5 (1)  มีการเปิดเผยข้อมูลการจัดซื้อจัดจ้าง </h3>
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
                 <td>เอกสารการเปิดเผยข้อมูลการดำเนินงานจัดซื้อจัดจ้างโครงการต่างๆ ในแต่ละขั้นตอน/กระบวนการ</td>
                 <td><a href="itafiles/EB5/EB5_1/511.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span></a> </td>
               </tr>
               <tr class="">
                 <td>2</td>
                 <td>หลักฐานจากระบบจัดซื้อจัดจ้างภาครัฐ (e-GP)</td>
                 <td> <a href="itafiles/EB5/EB5_1/512.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
               </tr>
               <tr class="danger">
                 <td>3</td>
                 <td>เอกสาร/หลักฐานอื่น ประกอบ</td>
                 <td> <a href="itafiles/EB5/EB5_1/513.pdf" target="_blank"><span class="glyphicon glyphicon-cloud-download"</span> </a></td>
               </tr>

            </table>
        </div>  <!-- box body -->

      </div>
  </div>
</div>









</section>



@endsection
