@extends('frontend.layouts.layout') 
@section('title', 'Opportunity-view')
@section('content')
    @push('head')
        <link href="{{asset('opcn/frontend/css/sublist-vacancy.css')}}" rel="stylesheet">
    @endpush
    @push('script')
    @endpush
    @if(count($posting) > 0)
    <section>
        <div class="auto-containers">
            <div class="main">
                <div class="opp-list">
                    @foreach ($posting as $posting)
                    <div class="single_profile">
                        
                        <div class="opp_content">
                            <div class="opp-img">
                                <img src="{{asset('opcn/uploads/opportunity/logo/' .$posting->uploadlogo)}}" alt="">
                            </div>
                            <div class="opps_content">
                                <h2><a href="#" class="recordLink" data-record-id="{{ $posting->id }}" data-posting-type="{{ $posting->type }}">{{$posting->tittleofopportunity}}</a></h2>
                                <p>{{$posting->sponsorby}}</p>
                            </div>
                            </div> 
                        
                        <div class="details-opp">

                        </div>
                        <div class="opp-info">
                            <div class="opp-view">
                                <i class="fas fa-eye"></i>   {{$posting->views}} Impressions
                            </div>
                            <div class="opp-time">
                                <i class="fal fa-clock"></i>  @if(Carbon\Carbon::now()->lt($posting->dateline))
                                {{ Carbon\Carbon::now()->diffInDays($posting->dateline) }} days left
                                @else
                                Due date Over
                                @endif
                            </div>
                        </div>

                    </div>
                    @endforeach 
                </div>
                <div class="detail-list" id="recordDetails">
                    <div class="comapany-intro">
                        <div class="company-intros">
                            <div class="company-intro-in">
                                <div class="company-intro-img">
                                    @if(isset($posting->uploadlogo))
                                    <img src="{{asset('opcn/uploads/opportunity/logo/' .$posting->uploadlogo)}}" alt="">
                                    @endif
                                </div>
                                <div class="company-intro-contant">
                                    <h1><a href="{{ url('details-opporunity', ['type' => $posting->type, 'id' => $posting->id]) }}">{{$posting->tittleofopportunity}}</a>
                                        <span>
                                            <a class="company-intro-contant-a" >
                                                <i class="fas fa-building"></i>
                                                {{$posting->sponsorby}}
                                        </span>
                                    
                                    <div class="company-location">
                                        <div class="company-loc">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="single-wrap">
                                                {{$posting->location}}
                                            </div>
                                        </div>
                                    </div>
                                    </h1>
                                </div>
                            </div>
                            <div class="company-tag">
                                <div class="company-tags-ng">
                                    <?php
                                $tags = "{$posting->tags}";

                                 // Split the paragraph into lines
                                 $lines = explode(",", $tags);

                                 // Create the HTML ul element
                                 $tagss = '';
                                 foreach ($lines as $line) {
                                     $tagss .= '<a>' . $line . '</a>';                                 }
                                 $tagss .= '';

                                 // Close the database connection
                                 
                                 ?>
                                     <?php echo $tagss; ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="reg-boxs">
                        <div class="reg-box">
                            <div class="item-regicon">
                                <div class="item-icons">
                                    <i class="far fa-clock"></i>
                                    <span class="item-details">
                                        Application Deadline
                                        <strong> {{$posting->dateline}}</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="item-regicon">
                                <div class="item-icons">
                                    <i class="fas fa-eye"></i>
                                    <span class="item-details">
                                        Impressions
                                        <strong> {{$posting->views}}</strong>
                                    </span>
                                </div> 
                            </div>
                        </div> <!-- add this closing tag -->
                        <div class="reg-descriptions">
                            <div class="reg-description">
                                <h2>About the Opportunity</h2>
                                <div class="descripton-box">
                                    
                                        <div class="reg-box">
                                            <div class="iemas_opp">
                                                <div class="item-icons">
                                                    <i class="far fa-clock"></i>
                                                    <span class="item-details">
                                                        Education Qualification
                                                        <strong> {{$posting->educationrequirement}}</strong>
                                                    </span>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="reg-box">
                                            <div class="iemas_opp">
                                                <div class="item-icons">
                                                    <i class="far fa-clock"></i>
                                                    <span class="item-details">
                                                        Experience Requirment
                                                        <strong> {{$posting->experiencerequirment}}</strong>
                                                    </span>
                                                </div>
                                            </div>  
                                        </div>
                                        
                                        <div class="reg-box">
                                            <div class="iemas_oppss">
                                                <div class="item-icons">
                                                    <i class="far fa-clock"></i>
                                                    <span class="item-details">
                                                        Sponsor By
                                                        <strong> {{$posting->sponsorby}}</strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="iemas_oppss">
                                                <div class="item-icons">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="item-details">
                                                        Number Of Opportunity
                                                        <strong> {{$posting->numberofopportunity}}</strong>
                                                    </span>
                                                </div> 
                                            </div>                
                                </div>
                                <div class="reg-box">
                                    <div class="iemas_oppss">
                                        <div class="item-icons">
                                            <i class="far fa-clock"></i>
                                            <span class="item-details"id="post-title">
                                                Funding Type
                                                <strong> {{$posting->fundingtype}}</strong>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="iemas_oppss">
                                        <div class="item-icons">
                                            <i class="fas fa-eye"></i>
                                            <span class="item-details">
                                                Location
                                                <strong> {{$posting->location}}</strong>
                                            </span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  

                </div>  
            </div>
        </div>
        <div>
            <script>
                const recordLinks = document.querySelectorAll('.recordLink');
const recordDetails = document.querySelector('#recordDetails');

recordLinks.forEach(link => {
    link.addEventListener('click', async (event) => {
        event.preventDefault();
        const recordId = link.dataset.recordId;
        const recordType = link.dataset.postingType;
        const response = await fetch(`/records/${recordId}/${recordType}`);
        const record = await response.json();
        recordDetails.innerHTML = `
                    <div class="comapany-intro">
                                <div class="company-intros">
                                    <div class="company-intro-in">
                                        <div class="company-intro-img">
                                            <img src="{{ asset('opcn/uploads/opportunity/logo/${record.uploadlogo}') }}" alt="Image">



                                        </div>
                                        <div class="company-intro-contant">
                                            <h1><a  href="/details-opporunity/${recordType}/${recordId}">${record.tittleofopportunity}</a>
                                                <span>
                                                    <a class="company-intro-contant-a" >
                                                        <i class="fas fa-building"></i>
                                                        ${record.sponsorby}
                                                    </a>
                                                </span>
                                                
                                                <div class="company-location">
                                                    <div class="company-loc">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <div class="single-wrap">
                                                            ${record.location}
                                                        </div>
                                                    </div>
                                                </div>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="company-tag">
                                        <div class="company-tags-ng">
                                            ${record.tags.split(',').map(tag => `<a>${tag}</a>`).join('')}  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reg-boxs">
                                <div class="reg-box">
                                    <div class="item-regicon">
                                        <div class="item-icons">
                                            <i class="far fa-clock"></i>
                                            <span class="item-details">
                                                Application Deadline
                                                <strong> ${record.dateline} days left</strong>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="item-regicon">
                                        <div class="item-icons">
                                            <i class="fas fa-eye"></i>
                                            <span class="item-details">
                                                Impressions
                                                <strong> ${record.views}</strong>
                                            </span>
                                        </div> 
                                    </div>
                                </div> <!-- add this closing tag -->
                                <div class="reg-descriptions">
                                    <div class="reg-description">
                                        <h2>About the Opportunity</h2>
                                        <div class="descripton-box">
                                            
                                                <div class="reg-box">
                                                    <div class="iemas_opp">
                                                        <div class="item-icons">
                                                            <i class="far fa-clock"></i>
                                                            <span class="item-details">
                                                                Education Qualification
                                                                <strong> ${record.educationrequirement}</strong>
                                                            </span>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="reg-box">
                                                    <div class="iemas_opp">
                                                        <div class="item-icons">
                                                            <i class="far fa-clock"></i>
                                                            <span class="item-details">
                                                                Experience Requirment
                                                                <strong> ${record.experiencerequirment}</strong>
                                                            </span>
                                                        </div>
                                                    </div>  
                                                </div>
                                                
                                                <div class="reg-box">
                                                    <div class="iemas_opp">
                                                        <div class="item-icons">
                                                            <i class="far fa-clock"></i>
                                                            <span class="item-details">
                                                                Sponsor By
                                                                <strong> ${record.sponsorby}</strong>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="iemas_opp">
                                                        <div class="item-icons">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="item-details">
                                                                Number Of Opportunity
                                                                <strong> ${record.numberofopportunity}</strong>
                                                            </span>
                                                        </div> 
                                                    </div>                
                                        </div>
                                        <div class="reg-box">
                                            <div class="iemas_opp">
                                                <div class="item-icons">
                                                    <i class="far fa-clock"></i>
                                                    <span class="item-details"id="post-title">
                                                        Funding Type
                                                        <strong> ${record.fundingtype}</strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="iemas_opp">
                                                <div class="item-icons">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="item-details">
                                                        Location
                                                        <strong> ${record.location}</strong>
                                                    </span>
                                                </div> 
                                            </div>
                `;
            });
        });
            </script>
    </section>











{{-- <section class="feature-style-two" id="feature">
    <div class="auto-container">
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                    <div class="row clearfix">
                        @foreach ($postingvacancy as $posting)
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{asset('opcn/uploads/opportunity/' .$posting->uploadcover)}}" alt=""></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="category"><i class="fas fa-globe-americas"></i><p>{{$posting->opento}}</p></div>
                                        <h3><a href="{{ url('details-opporunity', ['type' => $posting->type, 'id' => $posting->id]) }}">{{$posting->tittleofopportunity}}</a></h3>
                                        
                                        <ul class="info clearfix">
                                            <li><i class="fas fa-money-bill-wave"></i>{{$posting->fundingtype}}</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Sponsor By:&nbsp&nbsp{{$posting->sponsorby}}</li>
                                        </ul>
                                        <div class="lower-box">
                                            <h5><span>Deadline:</span>{{$posting->dateline}}</h5>
                                            <ul class="react-box">
                                                <li><a href="#"><i class="icon-21"></i></a></li>
                                                <li><a href="#"><i class="icon-22"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@else
    <p>Posting is empty or not set.</p>
@endif
@endsection
