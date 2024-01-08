@extends('frontend.layouts.layout') 
@section('title', 'Vacancy-view')
@section('content')
    @push('head')
        <link href="{{asset('opcn/frontend/css/sublist-vacancy.css')}}" rel="stylesheet">
    @endpush
    @push('script')
    @endpush
    @if(count($postingvacancy) > 0)
    <section>
        <div class="auto-containers">
            <div class="main">
                <div class="opp-list">
                    @foreach ($postingvacancy as $posting)
                    <div class="single_profile">
                        
                        <div class="opp_content">
                            <div class="opp-img">
                                <img src="{{asset('opcn/uploads/posting/Logo/' .$posting->uploadcompanylogo)}}" alt="">
                            </div>
                            <div class="opps_content">
                                <h2><a href="#" class="recordLink" data-record-id="{{ $posting->id }}" data-posting-type="{{ $posting->type }}">{{$posting->nameofcompany}}</a></h2>
                                <p>{{$posting->position}}</p>
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
                                    <img src="{{asset('opcn/uploads/posting/Logo/' .$posting->uploadcompanylogo)}}" alt="">
                                </div>
                                <div class="company-intro-contant">
                                    <h1><a href="{{ url('vacancy-detail',$posting->id)}}">{{$posting->position}}</a>
                                        <span>
                                            <a class="company-intro-contant-a" >
                                                <i class="fas fa-building"></i>
                                                {{$posting->nameofcompany}}
                                        </span>
                                    
                                    <div class="company-location">
                                        <div class="company-loc">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="single-wrap">
                                                {{$posting->workingplace}}
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
                                        <strong> 28 days left</strong>
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
                                                        Education Requirement
                                                        <strong> {{$posting->educationrequirement}}</strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="iemas_oppss">
                                                <div class="item-icons">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="item-details">
                                                        Number Of Opportunity
                                                        <strong> {{$posting->numberofvacancy}}</strong>
                                                    </span>
                                                </div> 
                                            </div>                
                                </div>
                                <div class="reg-box">
                                    <div class="iemas_oppss">
                                        <div class="item-icons">
                                            <i class="far fa-clock"></i>
                                            <span class="item-details"id="post-title">
                                                Jobs Types
                                                <strong> {{$posting->jobslevel}}</strong>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="iemas_oppss">
                                        <div class="item-icons">
                                            <i class="fas fa-eye"></i>
                                            <span class="item-details">
                                                Location
                                                <strong> {{$posting->workingplace}}</strong>
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
        const response = await fetch(`/vacancyrecords/${recordId}`);
        const record = await response.json();
        recordDetails.innerHTML = `
                    <div class="comapany-intro">
                                <div class="company-intros">
                                    <div class="company-intro-in">
                                        <div class="company-intro-img">
                                            <img src="{{asset('opcn/uploads/posting/Logo/${record.uploadcompanylogo}')}}" alt="Image">
                                        </div>
                                        <div class="company-intro-contant">
                                            <h1><a href="{{ url('vacancy-detail',$posting->id)}}">${record.position}</a>
                                                <span>
                                                    <a class="company-intro-contant-a" >
                                                        <i class="fas fa-building"></i>
                                                        ${record.nameofcompany}
                                                </span>
                                            
                                            <div class="company-location">
                                                <div class="company-loc">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <div class="single-wrap">
                                                        ${record.workingplace}
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
                                                                Education Requirement
                                                                <strong> ${record.educationrequirement}</strong>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="iemas_opp">
                                                        <div class="item-icons">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="item-details">
                                                                Number Of Opportunity
                                                                <strong> ${record.numberofvacancy}</strong>
                                                            </span>
                                                        </div> 
                                                    </div>                
                                        </div>
                                        <div class="reg-box">
                                            <div class="iemas_opp">
                                                <div class="item-icons">
                                                    <i class="far fa-clock"></i>
                                                    <span class="item-details"id="post-title">
                                                        Jobs Types
                                                        <strong> ${record.jobslevel}</strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="iemas_opp">
                                                <div class="item-icons">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="item-details">
                                                        Location
                                                        <strong> ${record.workingplace}</strong>
                                                    </span>
                                                </div> 
                                            </div>
                `;
            });
        });
            </script>
    </section>

    @else
    <p>Posting is empty or not set.</p>
@endif

@endsection
