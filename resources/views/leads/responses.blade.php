<x-app-layout>

    <div class="sticky-top enquiriesbanner">
        <div class="flex-fill d-flex">
            <div id="__rctSellerEnquiriesBanner" class="w-100"></div>
        </div>
    </div>

    <form>
                                            @csrf
                    </form>
                                            
    <div class="notification-template" style="display: none">
        <a class="notification-link" href="https://www.fortai.com/sellers/dashboard/">
            <div class="d-flex flex-row">
                <div class="d-flex flex-column ">
                    <img class="mr-2 mt-1 notification-icon" src="https://www.fortai.com/sellers/dashboard/" width="16"
                        height="16">
                </div>
                <div class="d-flex flex-column flex-grow-1 overflow-hidden">
                    <div class="d-flex flex-row flex-grow-1">
                        <strong>
                            <p class="title strong text-dark-blue"></p>
                        </strong>
                        <p class="justify-self-end date ml-auto"></p>
                    </div>
                    <p class="message pr-3 text-dark-blue text-truncate d-inline-block"></p>
                </div>
            </div>
        </a>
    </div>
    <div class="v2-loading-overlay">
        <div class="loading-box fade show mx-auto">
            <div class="d-flex flex-column py-4 align-items-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <h4 class="loading-text pt-2">
                    Please wait ...
                </h4>
            </div>
        </div>
    </div>

    <div id="__rctSellerEnquiries"></div>


    <div class="seller-dash-v2 leads desktop">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="no-results-template pt-6 pt-lg-9 align-items-center px-4 d-none text-center mx-auto">
                    <img class="img-fluid" width="156" height="111"
                        src="./fortai.com - Leads_files/noresults-illustration.png!d=PVEswj"
                        srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/seller-dashboard/noresults-illustration.png!d=PVEswj 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/seller-dashboard/noresults-illustration.png!d=KAYSPp 2x">
                    <h4 class="no-results-title"></h4>
                    <p class="text-light-grey no-results-text"></p>
                    <a href="https://www.fortai.com/sellers/dashboard/" class="pt-top no-results-link mt-3"></a>
                </div>

                <div class="col fixed-height-column flex-grow-1 no-results desktop-no-results d-none"
                    style="max-height: 870px; display: none;"></div>

                <div class="col-12 col-md leads-and-responses ">



                    <div class="row no-gutters">
                        <!-- Leads list  -->
                        <div class="dashboard-projects col-12 col-md-5 col-lg-4 col-xl projects-column fixed-height-column overflow-auto scroll-touch leads-list-container border-right bg-grey-50"
                            id="dashboard-projects" style="max-height: 870px;">
                            <input type="hidden" id="js-show-new-header" name="js-show-new-header" value="0">





                            <div class="sticky-top">
                            <div id="leads-filter-header">
            <div data-testid="leads-filter-header">
                <div class="tw-p-4 tw-flex tw-bg-dark-blue-500 tw-w-full tw-justify-between">
                    <div class="tw-text-white">
                        <div class="tw-flex tw-flex-wrap">
                            <div class="tw-text-sm tw-font-gordita-regular tw-flex tw-mt-2">
                                <a href="/profile"
                                    class="Button_base__5Wcwx Button_sm__RWLp1 Button_smWithIcon__y3vYd Button_minWidth__WGVzH Button_textWhite__9w5Wn Button_bgDarkBlue__9V6YV !tw-no-underline tw-drop-shadow-[unset] !tw-px-2 !tw-min-h-[unset] tw-text-sm !tw-text-white"
                                    data-cy="dashboard-filters-edit"
                                    data-cham="dashboard-filters-edit">
                                    <span class="tw-flex tw-justify-center">
                                        <span
                                            class="button-main tw-flex tw-items-center tw-flex-row-reverse">
                                            <span class="icon tw-text-current tw-inline-flex">
                                                <i class="fa-solid fa-bars-progress"></i>
                                                <span
                                                    class="tw-icon-spacer tw-block tw-w-[8px]"></span>
                                                <span
                                                    class="child-container Button_childContainer__YG7FP">
                                                    <span class="!tw-text-sm">
                                                     Pending
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                </a>
                            </div>
                            <div class="tw-flex tw-items-center tw-px-2 tw-mt-2">
                                <span
                                    class="tw-inline-flex tw-rounded-full tw-w-1 tw-h-1 tw-bg-gray-600"></span>
                            </div>
                            <div class="tw-text-sm tw-font-gordita-regular tw-flex tw-mt-2">
                                <a href="/profile"
                                    class="Button_base__5Wcwx Button_sm__RWLp1 Button_smWithIcon__y3vYd Button_minWidth__WGVzH Button_textWhite__9w5Wn Button_bgDarkBlue__9V6YV !tw-no-underline tw-drop-shadow-[unset] !tw-px-2 !tw-min-h-[unset] tw-text-sm !tw-text-white"
                                    data-cy="dashboard-filters-edit"
                                    data-cham="dashboard-filters-edit">
                                    <span class="tw-flex tw-justify-center">
                                        <span
                                            class="button-main tw-flex tw-items-center tw-flex-row-reverse">
                                            <span class="icon tw-text-current tw-inline-flex">
                                                <i class="fa-solid fa-address-book"></i>
                                                <span
                                                    class="tw-icon-spacer tw-block tw-w-[8px]"></span>
                                                <span
                                                    class="child-container Button_childContainer__YG7FP">
                                                    <span class="!tw-text-sm">
                                                        Hired
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tw-flex tw-items-end tw-pl-1 tw-flex-row">
                        <a href="/profile"
                            class="Button_base__5Wcwx Button_sm__RWLp1 Button_smWithIcon__y3vYd Button_minWidth__WGVzH Button_textWhite__9w5Wn Button_bgDarkBlue__9V6YV !tw-no-underline tw-drop-shadow-[unset] !tw-px-2 !tw-min-h-[unset] tw-text-sm !tw-text-white"
                            data-cy="dashboard-filters-edit" data-cham="dashboard-filters-edit">
                            <span class="tw-flex tw-justify-center">
                                <span
                                    class="button-main tw-flex tw-items-center tw-flex-row-reverse">
                                    <span class="icon tw-text-current tw-inline-flex">
                                        <i class="fa-solid fa-list-check"></i>
                                        <span class="tw-icon-spacer tw-block tw-w-[8px]"></span>
                                        <span
                                            class="child-container Button_childContainer__YG7FP">
                                            <span class="!tw-text-sm">
                                                View All
                                            </span>
                                        </span>
                                    </span>
                                </span>
                        </a>
                    </div>
                </div>
           
    
    

                                        </div>
                                        <div class="tw-py-2 tw-px-4 tw-bg-gray-300 tw-flex tw-justify-between">
                                            <div
                                                class="tw-flex tw-items-center tw-text-sm tw-font-gordita-regular tw-justify-between tw-w-full tw-pr-3">
                                               <span class="contacted_lead">pending responses</span>                                             
                                            
                                            <div>
                                            <span class="tw-text-gray-600">Updated <span class="time"> 1m ago </span> Refresh</span>
                                             </div>
                                             </div>
                                            <div class="tw-pl-3 tw-border-l tw-border-gray-400"><button
                                                    class="Button_base__5Wcwx Button_lg__UQt1r Button_minWidth__WGVzH Button_noOutline__CXC05 Button_textBlue__z9-S- Button_bgTransparent__cMajf !tw-p-0 !tw-min-h-[unset]"
                                                    data-cy="dashboard-filters-open"><span
                                                        class="tw-flex tw-justify-center"><span
                                                            class="button-main tw-flex tw-items-center "><span
                                                                class="icon tw-text-current tw-inline-flex"><svg
                                                                    class="MuiSvgIcon-root" focusable="false"
                                                                    viewBox="0 0 24 24" aria-hidden="true">
                                                                    <path
                                                                        d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z">
                                                                    </path>
                                                                </svg></span><span
                                                                class="tw-icon-spacer tw-block tw-w-[8px]"></span><span
                                                                class="child-container Button_childContainer__YG7FP">Filter</span></span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="__rctLeadsQuickFilters">
                                   
                            </div>
                            
                            
                            <div id="__rctLeadsList">
                                <div class="infinite-scroll-component__outerdiv">
                                    <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                                        
                                           
                                        <div class="tw-bg-gray-200 tw-overflow-y tw-h-full tw-gap-3 tw-flex tw-flex-col tw-py-3"
                                            data-cy="leads-list" id="myleads">
                                         </div>
                                            <div class="tw-w-full tw-flex tw-justify-center tw-items-center tw-py-4 loader" style="display:none">
                                            <div role="status" class="tw-flex" data-cy="loading-spinner"
                                                style="width: 22px; height: 22px;">
                                                <svg class="LoadingSpinner_root__iaeTy  tw-text-blue-500 undefined"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <title>Loading</title>
                                                    <circle class="LoadingSpinner_svgcircle__EIpp0" cx="12" cy="12"
                                                        r="10">
                                                    </circle>
                                                    <path class="LoadingSpinner_svgpath__5oUPF tw-opacity-75"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                                <span
                                                    style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center load-more p-3" style="display: none;">
                                <button class="button button-white btn btn-link">
                                    Load more
                                </button>
                            </div>
                            <div class="align-center loading-more-records justify-content-center pt-8"
                                style="display: none;">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">
                                        Loading...
                                    </span>
                                </div>
                            </div>
                        </div>



                        <!-- Right panel  -->



                        <div class="col-12 col-md-7 col-lg right-panel fixed-height-column overflow-auto scroll-touch h-100 d-block js-dashboard-right-container"
                        style="max-height: 870px;"><br>
                        
                        <div class="right-panel-wrapper ml-lg-4" >
                        <div class="project-details-project-container " style="display: block; opacity: 1;">
<div class="w-100 project-details-grid-container">
<div class="tw-w-full tw-flex tw-justify-center tw-items-center tw-py-4 loader" style="display:none">
                                        <div role="status" class="tw-flex" data-cy="loading-spinner"
                                            style="width: 22px; height: 22px;">
                                            <svg class="LoadingSpinner_root__iaeTy  tw-text-blue-500 undefined"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <title>Loading</title>
                                                <circle class="LoadingSpinner_svgcircle__EIpp0" cx="12" cy="12"
                                                    r="10">
                                                </circle>
                                                <path class="LoadingSpinner_svgpath__5oUPF tw-opacity-75"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                </path>
                                            </svg>
                                            <span
                                                style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;">Loading...</span>
                                        </div>
                                    </div>
    <div class="d-flex flex-column project-details-col-project-top" id="show_details">
    <div class="d-flex flex-column project-details-col-project-top">
        
        
       
                                
                            <div class="loading-project-interaction justify-content-center pt-5">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                </div>
                                
               
            </div>
        </div>

        </div>
 </div>











                    </div>

                                                    
<x-coin-svg size="20px" />


</x-app-layout>

<script src="{{asset('build/assets/js/response.js')}}"></script>
