@extends('welcome')
@include('header')
@include('sidebar')


@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
  <li class="breadcrumb-item"><a href="{{route('ita')}}">ITA/ธรรมมาภิบาล</a></li>
    <li class="breadcrumb-item active" aria-current="page">ไม่มีไฟล์ Upload</li>
  </ol>
</nav>


ยังไม่มีไฟล์อับโหลด

@endsection