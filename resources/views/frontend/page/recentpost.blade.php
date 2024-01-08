@extends('layout')
@section('title', 'OPSC')
@section('keywords') login ,signup @endsection
@section('description') This is page  Home of OPCN @endsection
@section('content')

<section class="feature-style-two">
  <div class="auto-container">
      <div class="sec-title centred">
          <h2>Recent Opportunities</h2>
      </div>
          <div class="tabs-content">
              <div class="tab active-tab" id="tab-1">
                  <div class="row clearfix">
                      
                      @foreach ($postingvacancy as $posting)
                      
                      <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                          <div class="feature-block-one wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                              <div class="inner-box">
                                 
                                  <div class="lower-content">
                                      <div class="author-box">
                                          <div class="inner">
                                              <img src="{{asset('opcn/uploads/posting/Logo/' .$posting->uploadcompanylogo)}}" alt="">
                                              <h6>{{$posting->nameofcompany}}</h6></h6>
                                              
                                          </div>
                                         
                                      </div>
                                      <div class="category"><i class="fas fa-tags"></i><p>{{$posting->categoryofvacancy}}</p></div>
                                      <h3><a  href="{{ url('detail',$posting->id)}}">{{$posting->position}}</a></h3>
                                      <ul class="info clearfix">
                                          <i class="far fa-clock"></i>
                                              {{Carbon\Carbon::parse($posting->publishdate)->diffForHumans()}}
                                             <i class="remaining"><i class="far fa-clock">  &nbsp</i>{{Carbon\Carbon::now()->diffInDays($posting->dateline)}} Remaining</i>
                                          
                                            
                                          </li>
                                          <li><i class="fas fa-map-marker-alt"></i>{{$posting->workingplace}}</li>
                                      </ul> 
                                      <div class="lower-box">
                                          <h5><span>Deadline:</span>{{Carbon\Carbon::parse($posting->dateline)->format('j M Y')}}</h5>
                                          <h5 id="inerjobtype">{{$posting->jobstypes}}</h5>
                                      </div>
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      
                      @endforeach
                  </div>
                 <div class="row">
                  {{$postingvacancy->links()}}
                 </div>
                                       
</section>
<!-- feature-style-two end -->
@endsection