@extends('frontend.layouts.layout2') 
@section('title', 'OPSC')
@section('content')

    
    @push('head')
    <link href="{{asset('opcn/frontend/css/sublist-vacancy.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <style>
            .main-searching-div{
                background: #fff;
                padding: 13px;
                box-shadow: 0 1px 6px #00000008;
                position: sticky;
                top: 53px;
                z-index: 9999;
            }
            .inner-main-searching-div{
                width: auto;
                max-width: 1180px;
                margin: 0 auto;
            }
            .midinner-main-searching{
                justify-content: space-between;
                align-items: center;
                display: flex;
            }
            .managing-searching-div{
                display: flex;
                align-items: center;
                width: 100% !important;
            }
            .item{
                border-left: 3px solid #fff !important;
                transition: .4s !important;
            }
            .item:hover{
                border-left: 3px solid #3854A5 !important;
            }
            .slidemargin{
                margin-right: 10px; 
            }
        </style>
    @endpush
    @push('script')
   
    
        
    
    @endpush
    
 
    <section>
        <div class="auto-containers">
            <div class="main"  id="oppList">
                <div class="opp-list">
                    @foreach ($posting as $posting)
                    <div class="single_profile">
                        
                        <div class="opp_content">
                            <div class="opp-img">
                            @if(empty($posting->uploadlogo))
                                <img src="{{ asset('opcn/uploads/posting/Logo/' . $posting->uploadcompanylogo) }}" alt="Image">
                            @else
                                <img src="{{ asset('opcn/uploads/opportunity/logo/' . $posting->uploadlogo) }}" alt="Image">
                            @endif
                            
                            </div>
                            <div class="opps_content">
                                <h2><a href="#" class="recordLink" data-record-id="{{ $posting->id }}" @if(!empty($posting->type))data-posting-type="{{$posting->type}}"@endif>
                                        @if(empty($posting->tittleofopportunity))
                                            {{ $posting->nameofcompany }}
                                        @else
                                            {{$posting->tittleofopportunity}}
                                        @endif
                                    </a></h2>
                                <p>
                                    @if(empty($posting->sponsorby))
                                    {{ $posting->position}}
                                @else
                                    {{$posting->sponsorby}}
                                @endif
                                </p>
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
                                    @if(empty($post->uploadlogo))
                                        <img src="{{ asset('opcn/uploads/posting/Logo/' . $post->uploadcompanylogo) }}" alt="Image">
                                    @else
                                        <img src="{{ asset('opcn/uploads/opportunity/logo/' . $post->uploadlogo) }}" alt="Image">
                                    @endif
                                </div>
                                <div class="company-intro-contant">
                                    <h1><a href="{{ url('details-opporunity', ['type' => $post->type, 'id' => $post->id]) }}">{{$post->position}}</a>
                                        <span>
                                            <a class="company-intro-contant-a" >
                                                <i class="fas fa-building"></i>
                                                @if(empty($post->tittleofopportunity))
                                                    {{ $post->nameofcompany }}
                                                @else
                                                    {{$post->tittleofopportunity}}
                                                @endif
                                            </a>
                                        </span>
                                    
                                    <div class="company-location">
                                        <div class="company-loc">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="single-wrap">
                                                
                                                {{$post->location}}
                                            </div>
                                        </div>
                                    </div>
                                    </h1>
                                </div>
                            </div>
                            <div class="company-tag">
      
                                <div class="company-tags-ng">
                                    <?php
                                $tags = "{$post->tags}";

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
                                        <strong> {{$post->dateline}}</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="item-regicon">
                                <div class="item-icons">
                                    <i class="fas fa-eye"></i>
                                    <span class="item-details">
                                        Impressions
                                        <strong> {{$post->views}}</strong>
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
                                                        <strong> {{$post->educationrequirement}}</strong>
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
                                                        <strong> {{$post->experiencerequirment}}</strong>
                                                    </span>
                                                </div>
                                            </div>  
                                        </div>
                                        
                                        <div class="reg-box">
                                            <div class="iemas_oppss">
                                                <div class="item-icons">
                                                    <i class="far fa-clock"></i>
                                                    <span class="item-details">
                                                        @if(empty($post->numberofopportunity))
                                                            Jobs Type
                                                            <strong>{{ $post->Jobstypes}}</strong>   
                                                        @else
                                                            Sponsor By
                                                            <strong>
                                                                {{$post->sponsorby}}
                                                            </strong>
                                                        @endif 
                                                        
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="iemas_oppss">
                                                <div class="item-icons">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="item-details">
                                                        @if(empty($post->numberofopportunity))
                                                        Number of Vacancy
                                                        <strong>{{ $post->numberofvacancy}}</strong>   
                                                    @else
                                                        Number Of Opportunity
                                                        <strong>
                                                            {{$post->numberofopportunity}}
                                                        </strong>
                                                    @endif 
                                                       
                                                    </span>
                                                </div> 
                                            </div>                
                                </div>
                                <div class="reg-box">
                                    <div class="iemas_oppss">
                                        <div class="item-icons">
                                            <i class="far fa-clock"></i>
                                            <span class="item-details"id="post-title"> 
                                                    @if(empty($post->fundingtype))
                                                        Salary
                                                        <strong>{{ $post->salary}}</strong>   
                                                    @else
                                                        Funding Type
                                                        <strong>
                                                            {{$post->fundingtype}}
                                                        </strong>
                                                    @endif 
                                            </span>
                                        </div>
                                    </div>
                                    <div class="iemas_oppss">
                                        <div class="item-icons">
                                            <i class="fas fa-eye"></i>
                                            <span class="item-details">
                                                Location
                                                <strong>
                                                    @if(empty($post->location))
                                                        {{ $post->workingplace}}
                                                    @else
                                                        {{$post->location}}
                                                    @endif </strong>
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
        const response = await fetch(`/searchrecords/${recordId}/${recordType}`);
        const record = await response.json();
        const position = record.tittleofopportunity ? record.tittleofopportunity : record.position;
        const sponsorText = record.sponsorby ? record.sponsorby : record.nameofcompany;
        const location = record.location ? record.location : record.workingplace;
        const uploadlogo = record.uploadlogo ? record.uploadlogo : record.uploadcompanylogo;
        const logoSource = record.uploadlogo
            ? `opcn/uploads/opportunity/logo/${record.uploadlogo}`
            : `opcn/uploads/posting/Logo/${record.uploadcompanylogo}`;
            const urls = recordType
    ? `/details-opporunity/${recordType}/${recordId}`
    : `/vacancy-detail/${recordId}`;


    
    
        recordDetails.innerHTML = `
                    <div class="comapany-intro">
                                <div class="company-intros">
                                    <div class="company-intro-in">
                                        <div class="company-intro-img">
                                            <img src="{{ asset('${logoSource}') }}" alt="Image">  
                                        </div>
                                        <div class="company-intro-contant">
                                            <h1>
                                                <a href="${urls}">${record.position}</a>
                                            
                                            
                                            <span>
                                                <a class="company-intro-contant-a">
                                                    <i class="fas fa-building"></i>
                                                    ${position}
                                                </a>
                                            </span>
                                            
                                            <div class="company-location">
                                                <div class="company-loc">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <div class="single-wrap">
                                                        ${location }
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
                                                                ${record.location ? 'Sponsor By' : 'Jobs Type'}
                                                                <strong>${record.sponsorby ? record.sponsorby : record.jobstypes}</strong
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="iemas_opp">
                                                        <div class="item-icons">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="item-details">
                                                                
                                                                ${record.location ? 'Number Of Opportunity' : 'Number of Vacancy'}
                                                                <strong>${record.numberofopportunity ? record.numberofopportunity : record.numberofvacancy}</strong
                                                            </span>
                                                        </div> 
                                                    </div>                
                                        </div>
                                        <div class="reg-box">
                                            <div class="iemas_opp">
                                                <div class="item-icons">
                                                    <i class="far fa-clock"></i>
                                                    <span class="item-details" id="post-title">${record.fundingtype ? 'Funding Type' : 'Salary'}
                                                        <strong>${record.fundingtype ? record.fundingtype : record.salary}</strong></span>
                                                </div>
                                            </div>
                                            <div class="iemas_opp">
                                                <div class="item-icons">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="item-details">
                                                        ${record.location ? 'location' : 'working place'}
                                                        <strong>${record.location ? record.location : record.workingplace}</strong
                                                    </span>
                                                </div> 
                                            </div>
                `;
            });
        });
            </script>
            <script>
                searchInput.addEventListener('input', async () => {
                    const searchValue = searchInput.value.trim();
                    if (searchValue === '') {
                        window.location.href = '/search';
                        return; // exit the function
                    }
            
                    window.location.href = `/search?search=${searchValue}`;
                });
            </script>
            
            
@endsection