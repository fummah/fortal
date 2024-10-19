<x-app-layout>


            <link rel="stylesheet" href="{{asset('build/assets/css/main_v2-built.645e5822f3.v2.css')}}">
           
    <div class="py-12">
    <div class="container">
            <div class="px-0 px-xl-6">
                <div class="welcome py-3 transition-1 js-welcome-container" style="opacity: 1;">
                    <h4 class="mb-1 js-moment-greeting">
                        {{$greetings}}, {{$first_name}}
                    </h4>
                    <p class="text-grey-600 text-xs js-moment-time-now">{{$login_at}}</p>
                </div>

                

<div>
    <div class="mb-3 js-expander ">
        <div class="bg-grey-100 rounded-extra py-2 px-3 js-expander-header transition-1 expanded-header cursor-pointer">
            <div class="py-1">
                Welcome to your new dashboard. <a href="#" class="ml-1 expanded-hide transition-1 d-none d-sm-inline-block"><u>Show</u></a>
                <div class="float-right">
                    <span class="bark-svg-icon bsi-primary-grey-800 bsi-sm transition-1"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Icon/chevron_down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="chevron_down">
            <rect id="base" fill-rule="nonzero" x="0" y="0" width="24" height="24"></rect>
            <polygon class="primary-color" id="Path" fill="none" points="17 7.93933983 18.4142136 9.35355339 11.7071068 16.0606602 5 9.35355339 6.41421356 7.93933983 11.7071068 13.232233"></polygon>
        </g>
    </g>
</svg>
</span>
                </div>
            </div>
        </div>

        <div class="js-expander-content" style="display: none">
            <div class="py-4 px-3 bg-white">
                <div class="row bg-white">
                                            <div class="col-lg-7 col-xl-6 col-11 mb-5">
                            <div class="pl-3">
                                            <h2 class="mb-1">
                            Welcome to Fortai, {{$first_name}}
                    </h2>
        <p class="text-lg">
            We're excited to help you grow your business.
        </p>
    
                                </div>
                            <div class="pl-lg-5 pl-3 ml-5 ml-lg-4">
                                    <ol class="dashed-list">
        <li class="dashed-list-item">
            <p class="text-lg mb-3 text-dark-blue">Customers tell us what they need</p>
            <p class="text-grey-600">
                Customers answer specific questions about their requirements.
            </p>
        </li>
        <li class="dashed-list-item">
            <p class="text-lg mb-3 text-dark-blue">
                We send you matching leads
            </p>
            <p class="text-grey-600">
                You receive leads that match your preferences instantly by email and on the app.
            </p>
        </li>
        <li class="dashed-list-item">
            <p class="text-lg mb-3 text-dark-blue">
                You choose leads you like
            </p>
            <p class="text-grey-600">
                Get customer contact details right away.
            </p>
        </li>
        <li class="dashed-list-item">
            <p class="text-lg mb-3 text-dark-blue">
                You contact the customer
            </p>
            <p class="text-grey-600">
                Call or email the customer and sell your services.
            </p>
        </li>
        <li class="dashed-list-item">
            <p class="text-lg mb-3 text-dark-blue">
                You get hired
            </p>
            <p class="text-grey-600 mb-0">
                There's no commission and nothing more to pay.
            </p>
        </li>
    </ol>


    
        <p class="mb-4">
            To learn more, check out our 1 minute explainer video now
        </p>

        


                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-6 col-11">
                            <div class="seller-home-video-container mb-3 px-2">
    <div class="embed-responsive embed-responsive-16by9 rounded">
        <iframe src="https://player.vimeo.com/video/347711840" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
    </div>
</div>

                                <div class="border border-grey-50 rounded p-4 my-5 d-flex align-items-start flex-column">
        <h4 class="">How much does Fortai cost?</h4>
        <div class="d-flex justify-content-start align-items-start flex-column text-xs text-grey-600">
            <p class="mb-2">
                It's free to receive leads and you only pay to contact those you like. Leads are priced in credits, based on the value of the job.
            </p>
                                         <p class="mb-2">
                     You can buy credits in packs of about 5, 10 or 20 responses and bigger packs offer better value.
                </p>
                                            </div>
        <div class="js-live-current-container d-block">
            <p class="text-lg">
                Don't miss out, get started now:
            </p>
            <a class="btn btn-primary" href="/seller/dashboard/"> View <span class="js-live-current">398 live leads</span></a>
        </div>
        <div class="js-live-current-container-noleads d-none flex-column align-items-start text-xs text-secondary">
            <p class="mb-0">We don't have any leads in your area right now.</p>
            <p>
                You can change your lead settings to get more leads.
            </p>
            <a class="btn btn-primary mt-3" href="/profile">
                Change lead settings
            </a>
        </div>

    </div>
                            
<div class="d-flex justify-content-center align-items-start flex-column my-3">
    <div class="d-flex align-items-center mb-2">
        <span class="bark-svg-icon bsi-primary-dark-blue float-left bsi-lg pr-2 "><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
    <title>Help Bubble</title>
    <g id="Icon/help_bubble" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="help_bubble" transform="translate(3.000000, 2.000000)" class="primary-color">
            <path d="M16,0 L2,0 C0.89,0 0,0.9 0,2 L0,16 C0,17.1 0.89,18 2,18 L6,18 L9,21 L12,18 L16,18 C17.1,18 18,17.1 18,16 L18,2 C18,0.9 17.1,0 16,0 Z M10,16 L8,16 L8,14 L10,14 L10,16 Z M12.07,8.25 L11.17,9.17 C10.45,9.9 10,10.5 10,12 L8,12 L8,11.5 C8,10.4 8.45,9.4 9.17,8.67 L10.41,7.41 C10.78,7.05 11,6.55 11,6 C11,4.9 10.1,4 9,4 C7.9,4 7,4.9 7,6 L5,6 C5,3.79 6.79,2 9,2 C11.21,2 13,3.79 13,6 C13,6.88 12.64,7.68 12.07,8.25 Z" id="live-help"></path>
        </g>
    </g>
</svg>
</span>
        <h4 class="mb-0">Need Help?</h4>
    </div>
                        <p class="text-secondary text-sm">
                You can find lots of tips and tricks for getting the most out of Bark in our <a href="https://help.fortai.com" target="_blank">help centre</a>.
            </p>
            <p class="text-secondary text-sm">
                We also have an award-winning customer success team dedicated to helping you.
                As one of our Elite professionals, you can access your Elite Account Team on <a href="tel:+27612685933">612685933</a> (open 24 hours a day, 7 days a week) or email <a href="mailto:fortai.com">admin@fortai.com</a>.
            </p>
            </div>
                        </div>
                                    </div>
                <div class="d-flex justify-content-end w-100 align-items-center">
                    <a href="" class="secondary-hider text-primary px-1"><u> Hide </u>
                    </a>
                    <span class="bark-svg-icon bsi-primary-primary d-inline-flex ml-1 secondary-hider cursor-pointer"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
     <g id="Icon/chevron_up" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="chevron_up">
            <rect id="base" fill-rule="nonzero" x="0" y="0" width="24" height="24"></rect>
            <polygon class="primary-color" id="Path" fill="none" points="6.76776695 15.767767 5.35355339 14.3535534 12.0606602 7.64644661 18.767767 14.3535534 17.3535534 15.767767 12.0606602 10.4748737"></polygon>
        </g>
    </g>
</svg></span>
                </div>
            </div>
        </div>
    </div>
</div>
                                    <div class="alert alert-danger  text-xs d-flex justify-content-between align-items-center flex-wrap">
                        <p class="text-left mb-0 flex-grow-1">
                            You're not receiving our emails
                        </p>
                        <a class="flex-basis" href="/profile" target="_blank"><u>Update email settings</u></a>
                    </div>
                                <div class="row flex-row h-auto">
                                        <div class="col sellerdash-col h-auto d-flex flex-column justify-content-between">
                        <div class="rounded bg-white sd-shadow mt-3">
                            <div class="d-flex align-items-start justify-content-start flex-column px-3 py-4">
                                                            <div class="avatar-container elite-pro">
                                                                                                        <div class="d-inline-flex text-white justify-content-center align-items-center">
                                                                                            <img class="img-fluid default-avatar default-avatar-80 elite-pro-border loading" src="https://bark-user-data.s3.eu-west-1.amazonaws.com/avatar_v2/bmMOaP/logo/667b472a2a569.png" alt="Profile Image" data-was-processed="true">
                                                <div class="default-avatar default-avatar-80 text-xl bg-heliotrope text-white justify-content-center align-items-center elite-pro-border d-none">
                                                    R
                                                </div>
                                                <img class="elite-pro-icon elite-pro-icon-80 loading" src="https://d18jakcjgoan9.cloudfront.net/img/img/barkv2/material-icons/elite-pro.svg" alt="Rachfort Solutions" height="22" width="20" data-was-processed="true">
                                                                                    </div>
                                                                    </div>
                                <h4 class="mb-0 seller-company-name">Rachfort Solutions</h4>
                            </div>
                            <div class="px-3 pb-3">
                                <div class="border-top pt-3 js-profile-completeness">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <p class="text-xs mb-0">Your profile is 97% complete</p>
            <a href="/profile" class="text-grey-200 text-xs hover-dark noline">Edit</a>
        </div>
        <div class="mt-4">
            <div class="progress" style="height:8px">
                <div class="progress-bar" role="progressbar" style="width: 97%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
                                                                                                                                            <p class="text-secondary my-3 text-xs">
                                        Completing your profile is a great way to appeal to customers
                                        <span class="text-lg">&nbsp;·&nbsp;</span>
                                        <a class="text-dark-blue" href="/profile">
                                            <u>
                                                Edit profile
                                           </u>
                                        </a>
                                    </p>
                                                            </div>
                        </div>
                        <div class="sd-shadow rounded bg-white mt-3">
                                                                <div class="py-4">
                                        <div class="d-flex justify-content-between align-items-center flex-wrap border-bottom pb-3 px-3">
                                            <p class="text-xl mb-0">Your Account</p>
                                            <a href="/profile/" class="text-grey-200 text-xs noline hover-dark">Settings</a>
                                        </div>

                                        <div class="py-4 px-3">
                                            <div class="mb-1 d-flex justify-content-between align-items-center flex-wrap">
                                                                                                    <div class="d-flex justify-content-start align-items-center mt-2 mr-1">
                                                        <span class="bark-svg-icon bsi-primary-yellow bsi-md mr-2"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="20px" height="22px" viewBox="0 0 20 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
    <title>Icon/Elite Pro</title>
    <desc>Created with Sketch.</desc>
    <defs>
        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
            <stop stop-color="#FBC75D" offset="0%"></stop>
            <stop stop-color="#F8C048" offset="100%"></stop>
        </linearGradient>
        <path d="M9.53465887,14.7446443 L7.67897539,15.7202349 C7.1901308,15.9772357 6.58550365,15.7892891 6.32850284,15.3004446 C6.22616377,15.1057841 6.19084909,14.882816 6.22802594,14.6660584 L6.58242995,12.5997244 C6.63806788,12.2753304 6.5305194,11.9443302 6.29483331,11.714593 L4.79355384,10.2512072 C4.39807026,9.86570599 4.38997795,9.23259273 4.77547916,8.83710915 C4.92898777,8.67962551 5.13013018,8.57713834 5.34776721,8.54551383 L7.42248442,8.24403977 C7.74819458,8.19671131 8.02976017,7.99214194 8.17542218,7.69699846 L9.10326392,5.81698575 C9.34768622,5.32173209 9.94731205,5.11839309 10.4425657,5.36281539 C10.6397783,5.46014562 10.7994058,5.61977315 10.8967361,5.81698575 L11.8245778,7.69699846 C11.9702398,7.99214194 12.2518054,8.19671131 12.5775156,8.24403977 L14.6522328,8.54551383 C15.1987777,8.62493144 15.5774591,9.13237429 15.4980415,9.67891916 C15.466417,9.89655619 15.3639298,10.0976986 15.2064462,10.2512072 L13.7051667,11.714593 C13.4694806,11.9443302 13.3619321,12.2753304 13.4175701,12.5997244 L13.7719741,14.6660584 C13.8653351,15.2103948 13.4997472,15.7273507 12.9554108,15.8207118 C12.7386532,15.8578886 12.5156851,15.8225739 12.3210246,15.7202349 L10.4653411,14.7446443 C10.1740171,14.5914862 9.8259829,14.5914862 9.53465887,14.7446443 Z" id="path-2"></path>
        <filter x="-9.1%" y="-9.5%" width="118.2%" height="137.8%" filterUnits="objectBoundingBox" id="filter-3">
            <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.06 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
        </filter>
    </defs>
    <g id="Icon/Elite-Pro" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Star" fill-rule="nonzero">
            <path d="M11.4433757,0.383252481 L18.5566243,4.45293475 C19.4497883,4.96393806 20,5.90831112 20,6.93031773 L20,15.0696823 C20,16.0916889 19.4497883,17.0360619 18.5566243,17.5470652 L11.4433757,21.6167475 C10.5502117,22.1277508 9.4497883,22.1277508 8.55662433,21.6167475 L1.44337567,17.5470652 C0.550211698,17.0360619 5.76888806e-15,16.0916889 4.27325041e-15,15.0696823 L0,6.93031773 C-6.40987562e-16,5.90831112 0.550211698,4.96393806 1.44337567,4.45293475 L8.55662433,0.383252481 C9.4497883,-0.127750827 10.5502117,-0.127750827 11.4433757,0.383252481 Z" id="Polygon" fill="url(#linearGradient-1)"></path>
            <g>
                <use fill="black" fill-opacity="1" filter="url(#filter-3)" xlink:href="#path-2"></use>
                <use fill="#FFFFFF" xlink:href="#path-2"></use>
            </g>
        </g>
    </g>
</svg></span>
                                                        <p class="text-xs mb-0">Elite Pro</p>
                                                    </div>
                                                    <a class="text-xs mt-2" href="/profile"><u>Manage Elite Pro</u></a>
                                                                                            </div>
                                            <div class="mt-3">
                                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                    <div class="d-flex justify-content-start align-items-center mb-2 mr-1">
                                                        <span class="bark-svg-icon bsi-primary-grey-200 bsi-md mr-2"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="22px" height="22px" viewBox="0 0 22 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g>
            <circle class="primary-color" cx="11" cy="11" r="11"></circle>
            <path d="M12.9763193,6.21214457 L12.9763193,9.6935682 L13.0019226,9.6935682 C13.6996127,8.84738039 14.7109433,8.76824053 15.1269971,8.76824053 C17.1880633,8.76824053 18.455427,10.5336683 18.455427,12.2199563 C18.455427,13.9427703 17.1112534,15.6838474 15.0693896,15.6838474 C14.6085301,15.6838474 13.6164019,15.5925322 12.950716,14.7585197 L12.9251127,14.7585197 L12.9251127,15.5560061 L10.9344555,15.5560061 L10.9344555,6.21214457 L12.9763193,6.21214457 Z M12.9251127,12.2199563 C12.9251127,13.2305115 13.6996127,13.9184196 14.6533359,13.9184196 C15.6134599,13.9184196 16.3815591,13.2305115 16.3815591,12.2199563 C16.3815591,11.2154887 15.6070591,10.5275807 14.6469351,10.5275807 C13.6932119,10.5275807 12.9251127,11.2154887 12.9251127,12.2199563 Z" fill="#FFFFFF"></path>
            <path d="M3.16115514,14.1744231 L9.29226873,15.5376933 L9.29226873,13.792282 L3.40029033,13.5922519 L3.16115514,14.1744231 Z M8.28011385,10.507463 L3.72183503,12.5953216 L3.8173688,13.1937126 L8.59662757,12.2519825 L8.28011385,10.507463 Z M3.32323991,12.2202348 L9.28160526,7.99582586 L9.28160526,6 L3,11.6789183 L3.32323991,12.2202348 Z" fill="#FFFFFF" fill-rule="nonzero"></path>
        </g>
    </g>
</svg></span>
                                                        <p class="text-xs mb-0">{{$credits_balance}} Credits</p>
                                                    </div>
                                                    <a class="text-xs mb-2" href="/profile/"><u>Manage</u></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                            </div>
                    </div>

                                        <div class="col sellerdash-col h-auto d-flex flex-column justify-content-between ">
                        <div class="sd-shadow h-100 rounded bg-white py-4 mt-3">
                            <div class="content border-bottom pb-3">
                                <div class="d-flex justify-content-start align-items-center pl-4">
                                    <p class="mb-0 text-xl text-dark-blue">Lead settings</p>
                                </div>
                            </div>
                            <div class="content border-bottom mx-4 py-3">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <p class="mb-0 text-md">Services</p>
                                    <a href="/profile" class="text-grey-200 noline hover-dark text-xs">
                                        Edit
                                    </a>
                                </div>
                                                                    <p class="text-secondary text-xs">You'll receive leads in these categories</p>
                                    <div class="d-flex flex-wrap category-list">
                                        @foreach($latest_services_limited as $service)
                                        <div class="badge badge-pill border border-grey-100 text-grey-800 font-weight-normal text-xs p-2 mr-2 my-auto text-truncate ">{{$service}}</div>
                                        @endforeach

                                        @if($service_badge>0)
                                                                                                                            <div class="badge badge-pill border border-grey-100 text-grey-800 font-weight-normal text-xs p-2 mr-2 my-auto text-truncate mw-100">
                                               +{{$service_badge}}
                                            </div>
                                            @endif
                                                                                                                    </div>
                                                            </div>

                            <div class="content mx-4 py-3 border-bottom ">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <p class="mb-0 text-md">Locations</p>
                                    <a href="/profile" class="text-grey-200 noline hover-dark text-xs">Edit</a>
                                </div>

                                                                    <p class="text-secondary text-xs">You're receiving customers within</p>
                                    <div class="locations d-flex flex-column justify-content-around align-items-start">
                                                                            <div class="d-flex justify-content-start align-items-center my-1 mw-100">
                                            <span class="bark-svg-icon bsi-primary-grey-200 bsi-sm mr-2"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="14px" height="20px" viewBox="0 0 14 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Guide-" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Style-Guide" transform="translate(-844.000000, -10766.000000)">
            <g id="Icons/Illustrations" transform="translate(115.000000, 10318.000000)">
                <g id="Icons" transform="translate(22.000000, 242.000000)">
                    <g id="Icon/location-marker" transform="translate(702.000000, 204.000000)">
                        <g id="location-marker">
                            <rect id="base" fill-rule="nonzero" x="0" y="0" width="24" height="24"></rect>
                            <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" class="primary-color"></path>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg></span>
                                            <p class="text-sm text-grey-800 location mb-0 text-truncate text-capitalize">Fish Hoek</p>
                                        </div>
                                                                            <div class="d-flex justify-content-start align-items-center my-1 mw-100">
                                            <span class="bark-svg-icon bsi-primary-grey-200 bsi-sm mr-2"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="14px" height="20px" viewBox="0 0 14 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Guide-" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Style-Guide" transform="translate(-844.000000, -10766.000000)">
            <g id="Icons/Illustrations" transform="translate(115.000000, 10318.000000)">
                <g id="Icons" transform="translate(22.000000, 242.000000)">
                    <g id="Icon/location-marker" transform="translate(702.000000, 204.000000)">
                        <g id="location-marker">
                            <rect id="base" fill-rule="nonzero" x="0" y="0" width="24" height="24"></rect>
                            <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" class="primary-color"></path>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg></span>
                                            <p class="text-sm text-grey-800 location mb-0 text-truncate text-capitalize">Cape Town</p>
                                        </div>
                                                                                                        </div>
                                                            </div>
                                                        <div class="content px-4 pt-4">
                               <p class="text-dark-blue text-md mb-3 js-live-stats-pd">
                                    <span class="text-dark-blue text-strong">
                                        Estimated <strong><span class="text-dark-blue text-strong"><span class="js-live-prediction">39</span> leads per <span class="js-live-prediction-per">day</span></span></strong>
                                    </span>
                                </p>
                                <p class="text-secondary text-xs mb-1">Sending new leads to </p><div class="d-flex flex-wrap align-items-start justify-content-between flex-column"> <span class="text-dark-blue text-xs text-break">{{$email}}</span><a class="text-xs" href="/profile"><u>Change</u></a></div>
                            </div>
                                                    </div>
                    </div>

                    
                    <div class="col sellerdash-col h-auto d-flex flex-column justify-content-between ">
                        <div class="row h-100">
                            <div class="col sellerdash-col mt-3">
                                <div class="sd-shadow rounded bg-white py-4 h-100">
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
                                        <p class="pl-4 text-xl mb-0">Leads</p>
                                        <a href="/seller/dashboard/" class="pr-4 text-grey-200 hover-dark noline text-sm text-capitalize">View</a>
                                    </div>
                                    <div class="js-leads-stats px-4 pt-2">
        <div class="d-flex justify-content-center align-items-center flex-column">
            
            
                <a class="noline" href="/seller/dashboard">
                    <span class="bg-primary-light text-primary text-xl circle-stat my-2 lozenge">
                        {{$number_of_leads}}
                    </span>
                </a>
                <p class="mb-0 pb-3 w-100 text-center border-bottom">
                    <a class="text-dark-blue text-xs hover-light noline" href="/seller/dashboard/"> Leads</a>
                </p>
            
                <div class="d-flex justify-content-between align-items-center pt-3">
                    <div class="circle-stat circle-stat-md  lozenge  bg-primary-light text-primary">
                        
                        <a href="/seller/dashboard/?show-unread=1" class="hover-light noline">
                        {{$unread_leads}}
                        </a>
                    </div>
                    
                    <a href="/seller/dashboard/?show-unread=1" class="text-xs text-dark-blue hover-light noline ml-2">Unread leads</a>
                    
                </div>
            
        </div>
    </div>
                                </div>
                            </div>
                            <div class="col sellerdash-col mt-3">
                                <div class="sd-shadow rounded bg-white py-4 h-100">
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
                                        <p class="text-xl pl-4 mb-0">Responses</p>
                                        <a href="/seller/dashboard/" class="pr-4 text-grey-200 hover-dark noline text-sm text-capitalize">View</a>
                                    </div>
                                    <div class="js-response-stats px-4 pt-2">
        <div class="d-flex justify-content-center align-items-center flex-column">
        
        
            <a class="noline" href="/seller/dashboard/">
                <span class="bg-primary-light text-primary text-xl circle-stat my-2 ">
                    64
                </span>
            </a>
            <p class="mb-0 pb-3 w-100 text-center border-bottom">
                <a class="text-dark-blue text-xs hover-light noline" href="/seller/dashboard/"> Responses </a>
            </p>
        
                 <div class="d-flex justify-content-between align-items-center pt-3">
                    <div class="circle-stat circle-stat-md  bg-grey-50 text-secondary">
                        0
                    </div>
                    <span class="text-xs text-dark-blue ml-2">Unread messages and requests</span>
                </div>
             
        </div>

    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-row h-auto">
                    <div class="col sellerdash-col h-auto d-flex flex-column justify-content-between">
                        <div class="row h-100">
                                                        <div class="col-12 col-lg-4 sellerdash-col h-auto d-flex flex-column justify-content-between">
                                <div class="sd-shadow h-100 rounded bg-white py-4 mt-3">
                                    <div class="content border-bottom pb-3">
                                        <div class="d-flex justify-content-start align-items-center pl-4">
                                            <p class="mb-0 text-xl text-dark-blue">Help</p>
                                        </div>
                                    </div>
                                    <div class="content px-4 d-flex justify-content-start align-items-start flex-row mt-3">
                                        <span class="bark-svg-icon bsi-primary-primary bsi-md"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
    <title>Help Bubble</title>
    <g id="Icon/help_bubble" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="help_bubble" transform="translate(3.000000, 2.000000)" class="primary-color">
            <path d="M16,0 L2,0 C0.89,0 0,0.9 0,2 L0,16 C0,17.1 0.89,18 2,18 L6,18 L9,21 L12,18 L16,18 C17.1,18 18,17.1 18,16 L18,2 C18,0.9 17.1,0 16,0 Z M10,16 L8,16 L8,14 L10,14 L10,16 Z M12.07,8.25 L11.17,9.17 C10.45,9.9 10,10.5 10,12 L8,12 L8,11.5 C8,10.4 8.45,9.4 9.17,8.67 L10.41,7.41 C10.78,7.05 11,6.55 11,6 C11,4.9 10.1,4 9,4 C7.9,4 7,4.9 7,6 L5,6 C5,3.79 6.79,2 9,2 C11.21,2 13,3.79 13,6 C13,6.88 12.64,7.68 12.07,8.25 Z" id="live-help"></path>
        </g>
    </g>
</svg>
</span>
                                        <div class="text-dark-blue text-xs ml-2">
                                            <p class="text-left mb-3">
                                                Visit <a class="text-nowrap text-dark-blue hover-light" href="https://help.fortai.com"><u>help centre</u></a> for tips &amp; advice.
                                            </p>
                                            <p class="text-left mb-2">
                                                Email <a class="text-dark-blue text-nowrap noline" href="mailto:fortai.com">admin@fortai.com</a>
                                            </p>
                                            <p class="text-dark-blue mb-0">
                                                Call <a class="text-nowrap text-dark-blue" href="tel:+27612685933">612 685933</a>
                                            </p>
                                            <p class="text-xs text-grey-400   mb-0">
                                                open 24 hours a day, 7 days a week
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
