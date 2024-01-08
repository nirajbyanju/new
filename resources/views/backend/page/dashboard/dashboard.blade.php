@extends('backend.layouts.backendlayouts') 
@section('title', 'Dashboard')
@section('content')
@push('head')
   
@push('script')

@endpush
@push('maintitle')
<div class="page-header">
  <!-- PAGE-HEADER -->
  <div>
    <h1 class="page-title">{{Auth::user()->type}} Panel</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</div>
@endpush
<div style="height: 700px;">
    <p style="align-items: center;justify-content: center;display: flex;color: #3854A5;font-size: 29px;font-weight: 700;">Welcome To Opportunities Sharing Circle</p>
</div>

@endsection
