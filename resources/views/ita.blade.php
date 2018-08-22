@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active" aria-current="page">ITA/ธรรมมาภิบาล</li>
  </ol>
</nav>


<section class="content">
<div class="row">
  <div class="col-md-12">
      <div class="box box-solid box-default">

        <div class="box-header with-border">
          <h3 class="box-title" style="color: #0000ff;">การประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ (Integrity & Transparency Assessment)</h3>

        </div>

        <div class="box-body" >

          <table class="table">
              <tbody >


              <tr class="success">
                   <td > <a href="{{route('eb1')}}" style="color: purple;"> EB 1 ผู้มีส่วนได้ส่วนเสียมีโอกาสเข้ามามีส่วนร่วมในการดำเนินการตามภาระกิจหลักของหน่วยงาน </a> </td>
              </tr>

               <tr class="default">
                <td> <a href="{{route('eb2')}}" style="color: purple;"> EB 2 มีการปฏิบัติงานตามคู่มือหรือมาตรฐานการปฏิบัติงานตามภารกิจหลัก</a> </td>
               </tr>

               <tr class="danger">
                <td> <a href="{{route('eb3')}}" style="color: purple;"> EB 3 หน่วยงานมีการปฏิบัติงาน/การบริการตามภารกิจหลักด้วยความเป็นธรรม</a> </td>
               </tr>

               <tr class="info">
                <td> <a href="{{route('eb4')}}" style="color: purple;"> EB 4 ดำเนินการเกี่ยวกับการจัดซื้อจัดจ้างด้วยความโปร่งใส</a> </td>
               </tr>

               <tr class="warning">
                <td> <a href="{{route('eb5')}}" style="color: purple;"> EB 5 มีการดำเนินงานเกี่ยวกับการเปิดเผยข้อมูลการจัดซื้อจัดจ้างให้สาธารณชน</a> </td>
               </tr>

               <tr class="success">
                  <td> <a href="{{route('eb6')}}" style="color: purple;"> EB 6 มีการวิเคราะห์ผลการจัดซื้อจัดจ้าง</a> </td>
                </tr>

              <tr class="default">
               <td> <a href="{{route('eb7')}}" style="color: purple;"> EB 7 มีช่องทางให้ประชาชนเข้าถึงข้อมูลของหน่วยงาน</a> </td>
              </tr>

              <tr class="danger">
               <td> <a href="{{route('eb8')}}" style="color: purple;"> EB 8 หน่วยงานมีการดำเนินการเกี่ยวกับเรื่องร้องเรียนการปฏิบัติการ/การให้บริการ</a> </td>
              </tr>

              <tr class="info">
               <td> <a href="{{route('eb9')}}" style="color: purple;"> EB 9 มีการดำเนินงานเพื่อป้องกันผลประโยชน์ทับซ้อน</a> </td>
              </tr>

              <tr class="default">
               <td> <a href="{{route('eb10')}}" style="color: purple;"> EB 10 มีการดำเนินการดป้องกันและปราบปรามการทุจริตในหน่วยงน </a> </td>
              </tr>

              <tr class="success">
                  <td> <a href="{{route('eb11')}}" style="color: purple;"> EB 11 มีการรวมกลุ่มเพื่อตรวจสอบการบริหารงานในหน่วยงาน</a> </td>
                </tr>



             </tbody>
           </table>




<div class="row">

</div>



</section>



@endsection
