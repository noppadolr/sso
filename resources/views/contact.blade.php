@extends('welcome')
@include('header')
@include('sidebar')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active" aria-current="page">ติดต่อสำนักงาน</li>
  </ol>
</nav>

<div class="well well-sm">
  <span style="color: purple; font-size: 14pt;"><strong>ติดต่อสำนักงานสาธารณสุขอำเภอสบเมย</strong></span>
</div>

<div class="well well-sm">
  <span style="color: blue; font-size: 12pt;"><strong>1. ทางโทรศัพท์ หมายเลข 0 5361 8074
ิ <br>
2. ทางโทรสาร หมายเลข 0 5361 8089
ิ <br>
3. ทาง Email sobdhealth@gmail.com
 <br>
 4. <a href="https://www.facebook.com/%E0%B8%AA%E0%B8%B3%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%AA%E0%B8%B2%E0%B8%98%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B8%AA%E0%B8%9A%E0%B9%80%E0%B8%A1%E0%B8%A2-%E0%B8%AA%E0%B8%AA%E0%B8%AD-%E0%B8%AA%E0%B8%9A%E0%B9%80%E0%B8%A1%E0%B8%A2-2089694027916988/" target="_blank"><i class="fa fa-facebook-square"></i> Facebook

    </a>


  </strong></span>
</div>

<div class="well">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3795.3270666272683!2d97.92795191444851!3d17.963514087735764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30db573b8c14be39%3A0x87ac990a185aa925!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4Liq4Liy4LiY4Liy4Lij4LiT4Liq4Li44LiC4Lit4Liz4LmA4Lig4Lit4Liq4Lia4LmA4Lih4Lii!5e0!3m2!1sth!2sth!4v1529203581013" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
<!--
<p style="text-align: center;"><iframe src="http://edoc.mhso.moph.go.th/e_documents/report.php" width="1500" height="600" frameborder="0" scrolling="no" allowfullscreen"></iframe></p>
-->
@endsection
