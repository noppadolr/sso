@extends('welcome')
@include('header')
@include('sidebar')


@section('content')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active" aria-current="page">ยุทธศาตร์/แผนงาน/โครงการ</li>
  </ol>
</nav>

<table class="table table-striped">
    <caption style="color: purple; font-size: 16pt;" class="text-center"> <strong>แผนงานโครงการ</strong> </caption>
    <br>
    <br>
    <thead>
<tr>
    <th>ลำดับ</th>
    <td>โครงการ</td>
    <th>งบตามแผน</th>
    <th>งบโครงการ</th>
    <th>ผู้รับผิดชอบ</th>

</tr>
</thead>
<tbody>

  <tr>
    <td>1</td>
    <td>โครงการส่งเสริมสุขภาพกลุ่มสตรีและเด็กปฐมวัย</td>
    <td>180,720</td>
    <td>151,460</td>
    <td>น.ส.ชญานิฐษ์  ถิ่นวนา</td>
  </tr>

    <tr>
    <td>2</td>
    <td>โครงการส่งเสริมพัฒนาสุขภาพเด็ยวัยเรียนสูงสมส่วน สมองดีแข็งแร็ง ไอคิว อีคิวดี สู่การพัฒนาโรงเรียนส่งเสริมสุขภาพ</td>
    <td>134,740</td>
    <td>154,840</td>
    <td>น.ส.ณภัทร กาญจนะอังกูร</td>
  </tr>


    <tr>
    <td>3</td>
    <td>โครงการส่งเสริมป้องกันปัญหาสุขภาพในวัยรุ่นอำเภอสบเมย</td>
    <td>59,600</td>
    <td>59,900</td>
    <td>นางจรัสศรี  วิศวะกลการ</td>
  </tr>


    <tr>
    <td>4</td>
    <td>โครงการการค้นหาผู้ป่วยวัณโรครายใหม่ในเครือข่ายบริการสุขภาพสบเมย</td>
    <td>25,300</td>
    <td>25,300</td>
    <td>นางวัชราภรณ์  วิชินา</td>
  </tr>



    <tr>
    <td>5</td>
    <td>โครงการคัดกรองและควบคุมโรคไม่ติดต่อเรื้อรังอำเภอสบเมย</td>
    <td>348,480</td>
    <td>398,080</td>
    <td>นายจงศักดิ์  อินตา</td>
  </tr>





</tbody>
</table>



@endsection
