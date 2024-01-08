@extends('frontend.layouts.layout') 
@section('title', 'Pratice')
@section('content')
    @push('head')
    <link href="{{asset('opcn/frontend/css/opportunity-view.css')}}" rel="stylesheet">

    @endpush
    @push('script')
    @endpush
        <img src="{{asset('opcn/images/404.png')}}" alt="eror-404">
    @endsection