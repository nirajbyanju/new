@extends('frontend.layouts.layout') 
@section('title', 'Dashboard')
@section('content')
    @push('head')
    <link href="{{asset('opcn/css/test.css')}}" rel="stylesheet">
    @endpush
    @push('script')
    @endpush

    <div class="auto-container">
        <section>
            <div class="explore-title">
                <div class="explore-title-main">
                    <h2>Find Your Dream Job With<span> OPCN </span></h2>
                    <p>The Ultimate Destination For JObseekers & Employers</p>
                </div>
            </div>
        </section>


        <section>
            <div class="explore-search">
                <div class="explore-search-main">
                    <form action="{{ route('vacancyexplore') }}" method="GET">
                        <div class="explore-search-option col-sm-5">
                            <span><i class="far fa-search"></i> </span>
                            <input type="text" name="query" value="{{ request('query') }}" placeholder="Search by Jobs, title, Keyword, Companies">
                        </div>  
                        <div class="explore-search-select col-sm-4">
                            <span><i class="fas fa-th"></i> </span>                        
                            <select name="selection" id="selection">
                                <option value="">All Categories</option>
                                @foreach ($select as $category)
                                    <option value="{{ $category->categoryofvacancy}}" @if (request('selection') == $category->categoryofvacancy) selected @endif>
                                        {{ $category->categoryofvacancy}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="explore-search-button col-sm-3">
                            <button type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section>
            <div class="sub-menu-option">
                <div class="sub-menu-option-inner">
                    <a href="{{ route('vacancyexplore', ['type' => 'parttime']) }}">
                        <div class="sub-menu-option-categories">
                            <span><i class="fas fa-business-time"></i></span>
                            <h2>Part Time Jobs</h2>
                        </div>
                    </a>
                </div>

                <div class="sub-menu-option-inner">
                    <a href="{{ route('vacancyexplore', ['type' => 'government']) }}">
                        <div class="sub-menu-option-categories">
                            <span><i class="fas fa-chair-office"></i></span>
                            <h2>Government Jobs</h2>
                        </div>
                    </a>
                </div>

                <div class="sub-menu-option-inner">
                    <a href="{{ route('vacancyexplore', ['type' => 'fresher']) }}">
                        <div class="sub-menu-option-categories">
                            <span><i class="fas fa-user-graduate"></i></span>
                            <h2>Fresher World</h2>
                        </div>
                    </a>
                </div>

                <div class="sub-menu-option-inner">
                    <a href="{{ route('vacancyexplore', ['type' => 'bankjob']) }}">
                        <div class="sub-menu-option-categories">
                            <span><i class="far fa-university"></i></span>
                            <h2>Bank Jobs</h2>
                        </div>
                    </a>
                </div>

                <div class="sub-menu-option-inner">
                    <a href="{{ route('vacancyexplore', ['type' => 'itjobs']) }}">
                        <div class="sub-menu-option-categories">
                            <span><i class="fas fa-business-time"></i></span>
                            <h2>IT Jobs</h2>
                        </div>
                    </a>
                </div>

                <div class="sub-menu-option-inner">
                    <a href="{{ route('vacancyexplore', ['type' => 'accountingjob']) }}">
                        <div class="sub-menu-option-categories">
                            <span><i class="fas fa-money-check-alt"></i></span>
                            <h2>Accounting Jobs</h2>
                        </div>
                    </a>
                </div>

                
            </div>
        </section>
        <section class="showing-all-vacancy-space">
            <div class="showing-all-vacancy">
                @if ($posting->isEmpty())
                    <p>No results found.</p>
                @else
                @foreach ($posting as $posting)
                <div class="showing-all-vacancy-inner col-sm-5">
                    <div class="main-showing-vacancy">
                        <div class="main-showing-image">
                            <img src="{{asset('opcn/uploads/posting/Logo/' .$posting->uploadcompanylogo)}}" alt="">
                        </div>
                        <div class="main-showing-text">
                            <h2>{{$posting->nameofcompany}}</h2>
                            <h3>{{$posting->categoryofvacancy}}</h3>
                            <div class="showing-main-icon">
                                <div class="showing-main-icon-first">
                                    <div class="showing-main-icon-right">
                                        <div class="showing-main-icon-right-upper">
                                            <i class="fas fa-file-certificate"></i>
                                            <span>1 Year</span>
                                        </div>
                                        <div class="showing-main-icon-right-lower">
                                            <i class="far fa-money-bill-alt"></i>
                                            <span>1 Year</span>
                                        </div>
                                    </div>
                                    <div class="showing-main-icon-left">
                                        <div class="showing-main-icon-left-upper">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>Kathmandu</span>
                                        </div>
                                        <div class="showing-main-icon-left-lower">
                                            <i class="fas fa-stopwatch"></i>
                                            <span>1 Year</span>
                                        </div>
                                    </div>
                                 </div> 
                             </div>
                        </div>
                    </div>
                <div class="showing-type-vacancy">
                    <div class="showing-type-vacancy-type">
                        <span>{{$posting->jobstypes}}</span>
                    </div>
                    <div class="showing-type-vacancy_level">
                        <span>Entry Level</span>
                    </div>
                
                <div class="view-detail">
                    <a href="{{ url('vacancy-detail',$posting->id)}}">
                        <span> View Detail</span>
                    </a>
                </div> 
                </div>
                       
                </div>
            @endforeach
            @endif
            
                   
        </div>
            </div>
        </section>
    </div>


@endsection