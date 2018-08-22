@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active" aria-current="page">ดาวน์โหลด</li>
  </ol>
</nav>
<section class="content">
<div class="well well-sm">
  <span style="color: purple; font-size: 14pt;"><strong>ดาวน์โหลด</strong></span>
</div>
<div class="row">
  <div class="col-md-12">
      <div class="box box-solid box-info">

        <div class="box-header with-border">
          <h3 class="box-title">กฏหมาย/ระเบียบ/คำสั่ง</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">

        </div>

      </div>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
      <div class="box box-solid box-success">

        <div class="box-header with-border">
          <h3 class="box-title">แบบฟอร์ม</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">
            <a href="filedownload/ค่ารักษาพยาบาล.doc">แบบฟอร์มเบิกค่ารักษาพยาบาล</a>
            <br>
            <a href="filedownload/ค่าศึกษาเล่าเรียนบุตร.doc">แบบฟอร์มเบิกค่าเล่าเรียนบุตร</a>
            <br>
            <a href="filedownload/crut-ext.docx">แบบฟอร์มหนังสือภายนอก</a>
            <br>
            <a href="filedownload/crut-in.docx">แบบฟอร์มหนังสือภายใน</a>

        </div>

      </div>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
      <div class="box box-solid box-danger">

        <div class="box-header with-border">
          <h3 class="box-title">โปรแกรม</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">

        </div>

      </div>
  </div>
</div>

</section>
@endsection
