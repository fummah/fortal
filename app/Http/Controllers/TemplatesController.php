<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class TemplatesController extends Controller
{
  public function showSubscription($first_name,$lead_credits,$credits_balance)
  {
    $details = "<p class='text-grey-600 w-100 mt-1 modal-subtitle subtitle-lg'>You need <span class='response-modal-current-required'>$lead_credits credits</span> <span class='response-modal-credits-text navy-blue'></span> to contact <span class='response-modal-name'>$first_name</span>. You currently have <span class='response-modal-credit-balance-text'>$credits_balance credits</span>.</p>
        <div class='modal-body'>
                <div class='modal-alerts px-2'></div>
                <div class='container'>
    <div id='credit-pack-row-332821855' class='credit-pack-row row js-credit-pack-row rounded credit-pack-option-container  mb-4  p-2 p-md-4 border position-relative ' data-plan-id='332821855' data-discount='0' data-discountprice='202.50' data-ncredits='15' data-sales-team-quote-id='0' data-price-per-credit='13.50' data-cy='credit-pack-top-up-row'>
                <div class='col-12 mt-3 mt-md-0 px-1 px-md-3'>
            <div class='row'>
                                    <div class='col-12 px-md-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <p class='pr-3 text-dark-blue'>
                                About 5 responses
                            </p>

                            <p class='m-0'>
                                R202.50 <small class='js-vat-toggle'>(ex VAT)</small>
                            </p>
                        </div>
                    </div>
                    <div class='col-12 px-md-2 pt-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <div class=''>
                             <i class='bi bi-coin'></i>
                               
                                <span class='align-middle'>
                                    15 credits
                                </span>
                            </div>
                            <p class='text-dark-blue text-sm text-grey-400'>
                                <span>R</span>13.50/credit
                            </p>
                        </div>
                    </div>
                            </div>
        </div>
    </div>
    <div id='credit-pack-row-332821856' class='credit-pack-row row js-credit-pack-row rounded credit-pack-option-container  mb-4  p-2 p-md-4 border position-relative ' data-plan-id='332821856' data-discount='5' data-discountprice='384.75' data-ncredits='30' data-sales-team-quote-id='0' data-price-per-credit='12.83' data-cy='credit-pack-top-up-row'>
                    <div class='credits-pill text-xs position-absolute'>
                <span class='xl-rounded-left xl-rounded-right px-2 py-1 text-primary pill-light-blue'>
                    5% OFF
                </span>
                            </div>
                <div class='col-12 mt-3 mt-md-0 px-1 px-md-3'>
            <div class='row'>
                                    <div class='col-12 px-md-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <p class='pr-3 text-dark-blue'>
                                About 10 responses
                            </p>

                            <p class='m-0'>
                                R384.75 <small class='js-vat-toggle'>(ex VAT)</small>
                            </p>
                        </div>
                    </div>
                    <div class='col-12 px-md-2 pt-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <div class=''>
                             <i class='bi bi-coin'></i>
                               
                                <span class='align-middle'>
                                    30 credits
                                </span>
                            </div>
                            <p class='text-dark-blue text-sm text-grey-400'>
                                <span>R</span>12.83/credit
                            </p>
                        </div>
                    </div>
                            </div>
        </div>
    </div>
    <div id='credit-pack-row-332821857' class='credit-pack-row row js-credit-pack-row rounded credit-pack-option-container  selected-pack  p-2 p-md-4 border position-relative ' data-plan-id='332821857' data-discount='15' data-discountprice='688.50' data-ncredits='60' data-sales-team-quote-id='0' data-price-per-credit='11.48' data-cy='credit-pack-top-up-row'>
                    <div class='credits-pill text-xs position-absolute'>
                <span class='xl-rounded-left  px-2 py-1 text-primary pill-light-blue'>
                    15% OFF
                </span>
                                    <span class='xl-rounded-right px-2 py-1 bg-primary text-white'>
                        BEST VALUE
                    </span>
                            </div>
                <div class='col-12 mt-3 mt-md-0 px-1 px-md-3'>
            <div class='row'>
                                    <div class='col-12 px-md-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <p class='pr-3 text-dark-blue'>
                                About 20 responses
                            </p>

                            <p class='m-0'>
                                R688.50 <small class='js-vat-toggle'>(ex VAT)</small>
                            </p>
                        </div>
                    </div>
                    <div class='col-12 px-md-2 pt-2'>
                        <div class='d-flex flex-row justify-content-between'>
                            <div class=''>
                             <i class='bi bi-coin'></i>
                                <span class='align-middle'>
                                    60 credits
                                </span>
                            </div>
                            <p class='text-dark-blue text-sm text-grey-400'>
                                <span>R</span>11.48/credit
                            </p>
                        </div>
                    </div>
                            </div>
        </div>
    </div>
                <div class='row card-details-row js-card-details-row mt-4'>
        <div class='p-4 p-md-3 d-block d-md-flex rounded justify-content-between bg-grey-25'>
            <div class='card-brand-image-container flex-grow-0 flex-shrink-0 pr-2 response-modal-card-brand'><img src='https://d1w7gvu0kpf6fl.cloudfront.net/img/billing/card-logos/mastercard-logo.png' style='height: 22px; width: 65px;'></div>
            <div class='flex-grow-1 flex-shrink-1 px-0 px-md-2 my-3 my-md-0 flex-grow-0 flex-shrink-0'>
                We'll charge the card ending <span class='js-card-last-four strong response-modal-card-number-suffix'>9621</span> that we have on file
            </div>
            <div class='flex-grow-0 flex-shrink-0 text-left text-md-right change-card-container'>
                <span class='pseudo-link cursor-pointer change-card-link js-change-card'><small><a href='/settings/billing/saved_card/'>
                            Change
                        </a></small></span>
            </div>
        </div>
    </div>
    
    
</div>
 <div class='modal-footer justify-content-between'><button class='btn btn-success credit-upsell-topup-submit mx-auto'><span class='submit-text' data-cy='credit-upsell-topup-cta'>Top up and contact <span class='response-modal-name'>$first_name</span></span><span class='loading-text'><span class='spinner spinner-border d-none'></span></span></button></div>
            </div>";
            return $details;
        }   

    
  
  public function showResponseDetails( $lead_id,$lead,$first_letter,$first_name,$last_name,$contacted,$remender,$lead_user_id,$frequent,$urgent,$is_phone_verified,$time,$service_name,$location,$description,$hiring_decision,$credits,$email,$contact_number,$lead_status){
   
   
    $details = " <div class='col-12 col-md-7 col-lg right-panel fixed-height-column scroll-touch h-100 d-block'
                id='main-project-container' style='max-height: 870px;'>
                <div class='right-panel-wrapper ml-lg-4'>
                    <div class='no-results tablet-no-results d-none d-md-block d-lg-none'>
                    </div>";

$details .= "  <div id='full-project-container' class=''>
                <div class='responses-project-details h-100' id='dashboard-project-details'
                    data-project-id='43211537'>";

$details .= "<div class='d-flex flex-row justify-content-between justify-content-md-end flex-wrap text-xs align-items-center pt-4 px-md-5'>
                <a class='text-dark-blue d-flex d-md-none align-items-center back-to-list pl-4' href='#'>";

$details .= " <span class='fortai-svg-icon bsi-primary-dark-blue bsi-xs'>
                <!--?xml version='1.0' encoding='UTF-8'?-->
                <svg width='15px' height='14px' viewBox='0 0 15 14' version='1.1'
                    xmlns='http://www.w3.org/2000/svg'
                    xmlns:xlink='http://www.w3.org/1999/xlink'>
                    <g id='Guide-' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                        <g id='Style-Guide' transform='translate(-143.000000, -10877.000000)'>
                            <g id='Icons/Illustrations' transform='translate(115.000000, 10318.000000)'>
                                <g id='Icons' transform='translate(22.000000, 242.000000)'>
                                    <g id='Icon/long_arrow_back' transform='translate(2.000000, 312.000000)'>
                                        <g id='arrow_back'>
                                            <rect id='base' fill-rule='nonzero' x='0' y='0' width='24' height='24'>
                                            </rect>
                                            <path d='M8.41421356,11 L19,11 L19,13 L8.41421356,13 L12.7071068,17.2928932
                                                L11.2928932,18.7071068 L4.58578644,12 L11.2928932,5.29289322 L12.7071068,6.70710678
                                                L8.41421356,11 Z' id='back' class='primary-color'>
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </span>
            <span class='pl-2'>
                Back to list
            </span>
        </a>";

        $details .= "<div class='response-status-select-bar  '>"; 

        $details .= "<span class='last-activity-container'>
                        <span class='js-last-activity'>Last activity $time ago</span>
                        <span class='last-activity-copy'>Current status:</span>
                    </span>"; 
        
        $details .= "<div class='status-container'>
                        <span class='status-copy'>Current status:</span>
                        <div class='status-wrapper'>";
        
        $details .= "<select class='select-selected' id='status-select'>
                        <option value='$lead_status'>$lead_status</option>
                        <option value='Pending'>Pending</option>
                        <option value='Hired'>Hired</option>
                        <option value='Archived'>Archived</option>
                        <option value='Lost'>Lost</option>
                        <option value='Cancelled'>Cancelled</option>
                    </select>";   
        
        $details .= "<span class='status-icon' id='status-icon'>
                        <span class='fortai-svg-icon pending'>
                            <svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <circle cx='7' cy='7' r='7' fill='#6C7191'></circle>
                            </svg>
                        </span>
                    </span>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>";
        
        $details .= "<div class='project-details-project-container'>
                        <div class='project-top'>
                            <div class='d-flex flew-row flex-wrap justify-content-between align-items-center pb-2'>
                                <div class='project-name-location pr-3 pt-2'>
                                    <h4 class='mb-0'>
                                        <span class='buyer_name'>$first_name</span>
                                    </h4>
                                </div>
                                <div class='responded-ago text-xs-14 text-light-grey pt-2'>
                                    Responded $time ago
                                </div>
                            </div>
                            <div class='project-title strong mb-0 lh-md text-xs-16'>
                                $service_name
                                <span class='project-name-location d-inline text-regular text-xs-16'>
                                    <span class='text-light-grey mx-1'>|</span>
                                    <span class='location'>$location</span>
                                </span>
                            </div>
                        </div>";
                        $details .= "<div class='text-xs-14 my-3'>
                        <div class='d-flex align-items-center mr-4 mb-3'>
                            <span class='fortai-svg-icon bsi-primary-primary mr-3 bsi-primary-dark-blue'>
                                <!--?xml version='1.0' encoding='UTF-8'?-->
                                <svg width='24px' height='24px' viewBox='0 0 24 24' version='1.1'
                                    xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                    <!-- Generator: Sketch 62 (91390) - https://sketch.com -->
                                    <title>telephone</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id='telephone' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                        <g id='Icon/telephone'>
                                            <g id='telephone'>
                                                <polygon id='Path' points='0 0 24 0 24 24 0 24'></polygon>
                                                <path d='M20.01,15.38 C18.78,15.38 17.59,15.18 16.48,14.82 C16.13,14.7 15.74,14.79 15.47,15.06 L13.9,17.03 C11.07,15.68 8.42,13.13 7.01,10.2 L8.96,8.54 C9.23,8.26 9.31,7.87 9.2,7.52 C8.83,6.41 8.64,5.22 8.64,3.99 C8.64,3.45 8.19,3 7.65,3 L4.19,3 C3.65,3 3,3.24 3,3.99 C3,13.28 10.73,21 20.01,21 C20.72,21 21,20.37 21,19.82 L21,16.37 C21,15.83 20.55,15.38 20.01,15.38 Z' 
                                                      id='Path' class='primary-color' fill-rule='nonzero'>
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span class='buyer-telephone-display d-flex d-sm-none'>
                                <a class='text-dark-blue' href='tel:082 922 6474'>082 922 6474</a>
                            </span>
                            <a href='#' class='buyer-telephone-show-link underlined d-none d-sm-flex'>
                                $contact_number
                            </a>";
        
        $details .= "<div class='verified-phone-container ml-3'>"; 
        
        $details .= "<div class='bg-grey-50 rounded-pill text-green cursor-pointer d-flex verified-phone-button'>
                        <span class='fortai-svg-icon bsi-primary-primary bsi-primary-green'>
                            <!--?xml version='1.0' encoding='UTF-8'?-->
                            <svg width='24px' height='24px' viewBox='0 0 24 24' version='1.1'
                                xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                <title>thick-tick</title>
                                <g id='thick-tick' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'
                                    class='primary-color'>
                                    <g id='Icon/check_medium' fill-rule='nonzero'>
                                        <g id='check_medium'>
                                            <polygon id='Path-5'
                                                points='18.4168162 5.93933983 20.5381366 8.06066017 10.2651963 18.3336005 3.93933983 12.007744 6.06066017 9.88642365 10.265 14.091'>
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        Verified
                    </div>
                </div>
            </div>";
                                                        
                                                            
                                                      
            $details .= "<div class='d-flex align-items-center'>
            <span class='fortai-svg-icon bsi-primary-primary mr-3 bsi-primary-dark-blue'>
                <!--?xml version='1.0' encoding='UTF-8'?-->
                <svg width='24px' height='24px' viewBox='0 0 24 24' version='1.1' 
                    xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                    <!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
                    <title>Icon/envelope</title>
                    <desc>Created with Sketch.</desc>
                    <g id='Icon/envelope' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                        <g>
                            <polygon id='Path' points='0 0 24 0 24 24 0 24'></polygon>
                            <path d='M20,4 L4,4 C2.9,4 2.01,4.9 2.01,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 Z M20,8 L12,13 L4,8 L4,6 L12,11 L20,6 L20,8 Z' 
                                  id='envelope' class='primary-color'>
                            </path>
                        </g>
                    </g>
                </svg>
            </span>

            <span class='buyer-email-display text-break'>
                $email
            </span>
        </div>
    </div>";

$details .= "<div class='toolbar-container my-4 pt-1 text-md-sm w-100 w-md-auto'>";


                                              

  
            $details .= "<div><a href='#modal-whatsapp' class='Button_base__5Wcwx Button_sm__RWLp1 Button_smWithIcon__y3vYd Button_minWidth__WGVzH Button_textWhite__9w5Wn Button_bgDarkBlue__9V6YV !tw-no-underline tw-drop-shadow-[unset] !tw-px-2 !tw-min-h-[unset] tw-text-sm !tw-text-white btnDetails whatsap' contact_number='$contact_number' uk-toggle><i class='bi bi-whatsapp'></i> Send Whatsapp</a>";

            $details .= "<a href='/gotoemail' target='_blank' class='Button_base__5Wcwx Button_sm__RWLp1 Button_smWithIcon__y3vYd Button_minWidth__WGVzH Button_textWhite__9w5Wn Button_bgDarkBlue__9V6YV !tw-no-underline tw-drop-shadow-[unset] !tw-px-2 !tw-min-h-[unset] tw-text-sm !tw-text-white btnDetails'><i class='bi bi-envelope'></i> Send Email</a>";
            
            $details .= "<a href='#modal-sms' class='Button_base__5Wcwx Button_sm__RWLp1 Button_smWithIcon__y3vYd Button_minWidth__WGVzH Button_textWhite__9w5Wn Button_bgDarkBlue__9V6YV !tw-no-underline tw-drop-shadow-[unset] !tw-px-2 !tw-min-h-[unset] tw-text-sm !tw-text-white btnDetails' uk-toggle><i class='bi bi-chat-left-fill'></i> Send SMS</a><div>";
        
            $details .= "
            </div>
            </div>
            <div class='d-flex flex-wrap align-items-end text-regular mt-1 text-xs-14 quote-cta-container'>
                <span class='quote-icon mr-2 mt-2'>
                    <span class='fortai-svg-icon bsi-primary-grey-600 bsi-sm'>
                        <!--?xml version='1.0' encoding='UTF-8'?-->
                        <svg width='20px' height='20px' viewBox='0 0 20 20' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <g id='Guide-' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                <g id='Style-Guide' transform='translate(-241.000000, -11189.000000)'>
                                    <g id='Icons/Illustrations' transform='translate(115.000000, 10318.000000)'>
                                        <g id='Icons' transform='translate(22.000000, 242.000000)'>
                                            <g id='Icon/quote' transform='translate(102.000000, 627.000000)'>
                                                <g id='quote'>
                                                    <polygon id='Path' points='0 0 24 0 24 24 0 24'></polygon>
                                                    <path d='M21.41,11.58 L12.41,2.58 C12.05,2.22 11.55,2 11,2 L4,2 C2.9,2 2,2.9 2,4 L2,11 C2,11.55 2.22,12.05 2.59,12.42 L11.59,21.42 C11.95,21.78 12.45,22 13,22 C13.55,22 14.05,21.78 14.41,21.41 L21.41,14.41 C21.78,14.05 22,13.55 22,13 C22,12.45 21.77,11.94 21.41,11.58 Z M5.5,7 C4.67,7 4,6.33 4,5.5 C4,4.67 4.67,4 5.5,4 C6.33,4 7,4.67 7,5.5 C7,6.33 6.33,7 5.5,7 Z' id='Shape' class='primary-color'></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                </span>
        
                <span class='formatted-quote mr-2'>
                    <span class='quote-label text-grey-600 text-xs-14 mr-2 mt-2'>Your estimate:</span>
                    <span class='quote mt-2 text-xs-14'></span>
                </span>
                <a href='#modal-estimate' class='quote-link text-underline mt-2 text-xs-14' uk-toggle>
                    Send an estimate
                </a>
            </div>";
                                     
            $details .= "
            <div class='info-message info-fortai-closed alert py-3 px-4 mt-3 error-box error'>
                <div class='title-wrapper'>
                    No more professionals can respond, but you can still follow up
                </div>
            </div>
            <div class='pt-4 d-none' id='marketplace-cancel-booking-container'></div>
        
            <div class='project-credits-to-respond pt-2 mb-4 pt-md-3 align-items-center'>
             <i class='bi bi-coin'></i>
               
                <span class='num-credits-resp pl-2 text-grey-400'>
                    $credits Credits
                </span>
            </div>
        </div>";
                          

        $details .= "
        <div id='response-sections' class='mt-4'>
            <ul class='nav nav-tabs mb-3' id='response-sections-tabs' role='tablist'>
                <li class='nav-item pr-1 pr-sm-2 mr-1 mr-sm-3'>
                    <a class='nav-link active px-1 text-sm text-sm-md' id='activity-tab' data-toggle='tab' href='#response-activity' role='tab' aria-controls='home' aria-selected='true'>Activity</a>
                </li>
                <li class='nav-item pr-1 pr-sm-2 mr-1 mr-sm-3'>
                    <a class='nav-link px-1 text-sm text-sm-md' id='details-tab' data-toggle='tab' href='#response-project-details' role='tab' aria-controls='profile' aria-selected='false'>Lead Details</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link px-1 text-sm text-sm-md' id='notes-tab' data-toggle='tab' href='#response-notes' role='tab' aria-controls='contact' aria-selected='false'>My Notes</a>
                </li>
            </ul>
        </div>
        
        <div class='tab-content' id='myTabContent'>
            <div class='tab-pane fade show active pt-md-3' id='response-activity' role='tabpanel' aria-labelledby='activity-tab'>
                <div id='activity-log'>
                    <div id='activity-log-container' class=''>
                        <div id='activity-log-items-container'>
                            <div class='activity-log-date-item d-flex justify-content-start first'>
                                <div class='left-track flex-grow-0 d-flex flex-column align-items-center'>
                                    <div class='line full flex-fill'></div>
                                </div>
                                <div class='date-container flex-fill pt-2 pb-3 text-center'>
                                    <span class='text-xs text-grey-400'>Mon 23 Sept</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    

        $details .= "
        <div class='activity-log-item d-flex justify-content-between first' data-hash='ca53df1ebe434b6f14bd02c0fe7694ad'>
            <div class='left-track flex-grow-0 d-flex flex-column align-items-center'>
                <div class='line top'></div>
                <div class='item-icon item-icon-called_alt'>
                    <div class='icon-border border rounded-circle d-flex justify-content-center align-items-center' style='background-color:#111637'>
                        <img class='' src='https://d1w7gvu0kpf6fl.cloudfront.net/img/icons/activities-icons/svg/telephone-white.svg' alt=''>
                    </div>
                </div>
                <div class='line bottom flex-fill'></div>
            </div>
            <div class='details flex-column flex-grow-1 ml-2 mb-4 p-3 border text-sm'>
                <div class='details-top d-flex justify-content-between text-sm text-grey-400'>
                    <div class='details-top-left flex-grow-1'>
                        <div class='item-actor-name'>You</div>
                    </div>
                    <div class='details-top-right'>
                        <div class='item-date'>07:28</div>
                    </div>
                </div>
                <div class='details-center'>
                    <p class='item-message mb-0 mt-1'>Called but got no answer</p>
                </div>
            </div>
        </div>
    ";
                                                      
                    
    $details .= "
    <div class='activity-log-item d-flex justify-content-between' data-hash='c4fe0c10d14b69d6a9c8ca5d41e984b3'>
        <div class='left-track flex-grow-0 d-flex flex-column align-items-center'>
            <div class='line top'></div>
            <div class='item-icon item-icon-sent_email_alt'>
                <div class='icon-border border rounded-circle d-flex justify-content-center align-items-center' style='background-color:#111637'>
                    <img src='https://d1w7gvu0kpf6fl.cloudfront.net/img/icons/activities-icons/svg/envelope-white.svg' alt=''>
                </div>
            </div>
            <div class='line bottom flex-fill'></div>
        </div>
        <div class='details flex-column flex-grow-1 ml-2 mb-4 p-3 border text-sm'>
            <div class='details-top d-flex justify-content-between text-sm text-grey-400'>
                <div class='details-top-left flex-grow-1'>
                    <div class='item-actor-name'>You</div>
                </div>
                <div class='details-top-right'>
                    <div class='item-date'>07:27</div>
                </div>
            </div>
            <div class='details-center'>
                <p class='item-message mb-0 mt-1'>Sent 'first_name' an email</p>
            </div>
            <div class='details-bottom'>
                <div class='item-content text-grey-600'>
                    <p class='mb-0'><a href='/sellers/messenger/view-email/7jPDlw1E/' target='_blank'>View</a></p>
                    <a href='#' class='show-more-link mt-3'>Show more</a>
                    <a href='#' class='show-less-link mt-3'>Show less</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class='activity-log-item d-flex justify-content-between' data-hash='0de4fd57f215d42496181f36f664fbd4'>
        <div class='left-track flex-grow-0 d-flex flex-column align-items-center'>
            <div class='line top'></div>
            <div class='item-icon item-icon-called_alt'>
                <div class='icon-border border rounded-circle d-flex justify-content-center align-items-center' style='background-color:#111637'>
                    <img src='https://d1w7gvu0kpf6fl.cloudfront.net/img/icons/activities-icons/svg/telephone-white.svg' alt=''>
                </div>
            </div>
            <div class='line bottom flex-fill'></div>
        </div>
        <div class='details flex-column flex-grow-1 ml-2 mb-4 p-3 border text-sm'>
            <div class='details-top d-flex justify-content-between text-sm text-grey-400'>
                <div class='details-top-left flex-grow-1'>
                    <div class='item-actor-name'>You</div>
                </div>
                <div class='details-top-right'>
                    <div class='item-date'>07:23</div>
                </div>
            </div>
            <div class='details-center'>
                <p class='item-message mb-0 mt-1'>Called but got no answer</p>
            </div>
        </div>
    </div>
";
                                                             


$details .= "
<div class='activity-log-item d-flex justify-content-between' data-hash='b938fc094f8f6b995fac73cb6a202a4c'>
    <div class='left-track flex-grow-0 d-flex flex-column align-items-center'>
        <div class='line top'></div>
        <div class='item-icon item-icon-project_purchased_alt'>
            <div class='icon-border border rounded-circle d-flex justify-content-center align-items-center' style='background-color:#111637'>
                <img src='https://d1w7gvu0kpf6fl.cloudfront.net/img/icons/activities-icons/svg/credit-white.svg' alt=''>
            </div>
        </div>
        <div class='line bottom flex-fill'></div>
    </div>
    <div class='details flex-column flex-grow-1 ml-2 mb-4 p-3 border text-sm'>
        <div class='details-top d-flex justify-content-between text-sm text-grey-400'>
            <div class='details-top-left flex-grow-1'>
                <div class='item-actor-name'>You</div>
            </div>
            <div class='details-top-right'>
                <div class='item-date'>07:19</div>
            </div>
        </div>
        <div class='details-center'>
            <p class='item-message mb-0 mt-1'>Purchased the lead</p>
        </div>
    </div>
</div>

<div class='activity-log-item d-flex justify-content-between' data-hash='54dbac5ebaec03bc98a5d0ac9ca18406'>
    <div class='left-track flex-grow-0 d-flex flex-column align-items-center'>
        <div class='line top'></div>
        <div class='item-icon item-icon-project_released'>
            <div class='icon-border border rounded-circle d-flex justify-content-center align-items-center' style='background-color:#F3F3F6'>
                <img src='https://d1w7gvu0kpf6fl.cloudfront.net/img/icons/activities-icons/svg/looking_for.svg' alt=''>
            </div>
        </div>
        <div class='line bottom flex-fill'></div>
    </div>
    <div class='details flex-column flex-grow-1 ml-2 mb-4 p-3 border text-sm'>
        <div class='details-top d-flex justify-content-between text-sm text-grey-400'>
            <div class='details-top-left flex-grow-1'>
                <div class='item-actor-name'>'first_name'</div>
            </div>
            <div class='details-top-right'>
                <div class='item-date'>04:56</div>
            </div>
        </div>
        <div class='details-center'>
            <p class='item-message mb-0 mt-1'>'description'</p>
        </div>
        <hr>
        <div class='details-bottom'>
            <div class='item-content text-grey-600'>
                <p class='mb-0'><a href='#' class='show-project-details' data-project-id='43211537'>View details</a></p>
                <a href='#' class='show-more-link mt-3'>Show more</a>
                <a href='#' class='show-less-link mt-3'>Show less</a>
            </div>
        </div>
    </div>
</div>

<div class='waiting-loader text-center'>
    <div class='spinner-border text-primary' role='status'>
        <span class='sr-only'>Loading...</span>
    </div>
</div>
<div class='w-100 text-center'>
    <a href='#' class='load-more-items-link btn text-primary border rounded px-4 py-3 mt-3 waiting-hidden d-none'>Show more</a>
</div>
";

$details .= "<div id='modal-whatsapp' class='uk-flex-top' uk-modal><div class='uk-modal-dialog uk-modal-body uk-margin-auto-vertical'>
<button class='uk-modal-close-default' type='button' uk-close></button>
<br>
<h2 class='uk-modal-title' align='center'>Send an SMS</h2><br>
        <p align='center'>Did you message $first_name on WhatsApp</p><br> 
        <div class='d-flex justify-content-center align-items-start response-btns-container'>
        <div class='whatsapp-div'>
        <div class='text-center d-flex justify-content-center align-items-center flex-column response-btn trail' trail_id='4' lead_id='$lead_id'>
            <button id='js-whatsapp-response-feedback-is-not-on-btn' class='btn bg-danger mb-2'> <span class='bark-svg-icon bsi-primary-white '><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
<path d='M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 10.15 4.63 8.45 5.69 7.1L16.9 18.31C15.55 19.37 13.85 20 12 20ZM18.31 16.9L7.1 5.69C8.45 4.63 10.15 4 12 4C16.42 4 20 7.58 20 12C20 13.85 19.37 15.55 18.31 16.9Z' fill='white'></path>
</svg>
</span> </button>
            <span class='regular-text text-xs text-danger'>Number isn't on WhatsApp</span>
        </div>
        <div class='text-center d-flex justify-content-center align-items-center flex-column response-btn trail' trail_id='5' lead_id='$lead_id'>
            <button id='js-whatsapp-response-feedback-could-not-make-it-work-btn' class='btn bg-grey-200 mb-2'> <span class='bark-svg-icon bsi-primary-white '><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
<path d='M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20ZM11 16H13V18H11V16ZM12.61 6.04C10.55 5.74 8.73 7.01 8.18 8.83C8 9.41 8.44 10 9.05 10H9.25C9.66 10 9.99 9.71 10.13 9.33C10.45 8.44 11.4 7.83 12.43 8.05C13.38 8.25 14.08 9.18 14 10.15C13.9 11.49 12.38 11.78 11.55 13.03C11.55 13.04 11.54 13.04 11.54 13.05C11.53 13.07 11.52 13.08 11.51 13.1C11.42 13.25 11.33 13.42 11.26 13.6C11.25 13.63 11.23 13.65 11.22 13.68C11.21 13.7 11.21 13.72 11.2 13.75C11.08 14.09 11 14.5 11 15H13C13 14.58 13.11 14.23 13.28 13.93C13.3 13.9 13.31 13.87 13.33 13.84C13.41 13.7 13.51 13.57 13.61 13.45C13.62 13.44 13.63 13.42 13.64 13.41C13.74 13.29 13.85 13.18 13.97 13.07C14.93 12.16 16.23 11.42 15.96 9.51C15.72 7.77 14.35 6.3 12.61 6.04V6.04Z' fill='white'></path>
</svg>
</span> </button>
            <span class='regular-text text-xs text-grey-600'>I couldn’t make it work</span>
        </div>
        <div class='text-center d-flex justify-content-center align-items-center flex-column response-btn trail' trail_id='3' lead_id='$lead_id'>
            <button id='js-whatsapp-response-feedback-sent-message-btn' class='btn bg-success mb-2'> <span class='bark-svg-icon bsi-primary-white '><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
<path d='M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20ZM15.88 8.29L10 14.17L8.12 12.29C7.73 11.9 7.1 11.9 6.71 12.29C6.32 12.68 6.32 13.31 6.71 13.7L9.3 16.29C9.69 16.68 10.32 16.68 10.71 16.29L17.3 9.7C17.69 9.31 17.69 8.68 17.3 8.29C16.91 7.9 16.27 7.9 15.88 8.29V8.29Z' fill='white'></path>
</svg>
</span> </button>
            <span class='regular-text text-xs text-success'>I sent a message</span>
        </div>
        </div>
    </div>
        </div></div>";

   $details .= "<div id='modal-sms' class='uk-flex-top' uk-modal><div class='uk-modal-dialog uk-modal-body uk-margin-auto-vertical'>
   <button class='uk-modal-close-default' type='button' uk-close></button>
   <br><h2 class='uk-modal-title' align='center'>Send an SMS</h2><br>
        <p align='center'>Send an SMS to $first_name using the number below.</p><br> <h4 align='center'><a href='tel:$contact_number'>$contact_number</a></h4><br>
   <hr/><br><p class='uk-text-right'><button class='uk-button uk-button-default uk-modal-close' type='button'>Cancel</button>
   <button class='uk-button uk-button-primary trail' trail_id='2' lead_id='$lead_id' type='button'>I've sent SMS</button></p></div></div>";

   $details .= "<div id='modal-estimate' class='uk-flex-top' uk-modal><div class='uk-modal-dialog uk-modal-body uk-margin-auto-vertical'>
   <button class='uk-modal-close-default' type='button' uk-close></button>
   <br><h2 class='uk-modal-title' align='center'>Send an estimate</h2><br>
         <h4 align='center'>Enter a guide price and some notes to explain your charges</h4><br>
         <div class='estimate-form my-4'> <div class='form-row estimate align-items-center mx-0 mb-2 py-1'>
                            <div class='estimate-value-input'>
                                <div class='input-group'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text pr-1 text-grey-400 border-white text-xl' id='estimate-currency-symbol'>R</span>
                                    </div>
                                    <input type='number' class='form-text-field estimate-amount form-control pl-1 text-md' id='estimate-amount' placeholder='0'>
                                    <div class='input-group-append'>
                                        <div class='bar py-2'>
                                            <span class='bg-grey-200 d-block h-100' style='width: 2px;'></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='estimate-value-select'>
                                <label for='estimate-type' class='sr-only m-0'>Estimate</label>
                                <select class='form-select-field estimate-type custom-select custom-select-wider text-md prevent-ios-zoom pt-2' id='estimate-type'>
                                    <option value=''>select one</option>
                                    <option value='onceoff'>one off fee</option>
                                    <option value='hour'>/ hour</option>
                                    <option value='visit'>/ visit</option>
                                    <option value='session'>/ session</option>
                                    <option value='head'>/ head</option>
                                    <option value='day'>/ day</option>
                                    <option value='week'>/ week</option>
                                    <option value='month'>/ month</option>
                                </select>
                            </div>
                        </div>

                        <div class='form-textarea-field respond-textarea-field-wrapper mt-4 mb-3'>
                            <label for='respond-textarea-field' class='text-xs-14 text-grey-600'>
                                Any additional details?
                            </label>
                            <textarea class='form-textarea-field respond-textarea-field form-control form-control-md text-xs-14 prevent-ios-zoom' id='respond-textarea-field' placeholder='Message' rows='3'></textarea>
                        </div>
                    </div>
   <hr/><br><p class='uk-text-right'><button class='uk-button uk-button-default uk-modal-close' type='button'>Cancel</button><button class='uk-button uk-button-primary' type='button'>Send Estimate</button></p></div></div>";

return $details;
  }

  public function showLeadsDetails($lead_id,$lead,$first_letter,$first_name,$last_name,$contacted,$remender,$lead_user_id,$frequent,$urgent,$is_phone_verified,$time,$service_name,$location,$description,$hiring_decision,$credits,$masked_email,$masked_contact_number){
    $details = "<div class='project-top'>";

    $details .= "
        <div class='d-flex flew-row flex-wrap justify-content-between align-items-center pb-2 w-100 project-details-grid-container'>
            <div class='project-name-location pr-3 pt-2'>
                <h4 class='mb-0'>
                    <span class='buyer_name'>$first_name</span>
                </h4>
            </div>
            <div class='posted-ago for-leads text-xs text-light-grey pt-2'>
                $time ago
            </div>
        </div>
    ";
    
    $details .= "
        <div class='project-title strong mb-0 lh-md'>$service_name</div>
        <div class='project-name-location'>
            <span class='location'>$location</span>
        </div>
    ";
    
    $details .= "
        <div>
            <div class='d-flex align-items-center mr-4 mt-3'>
                <span class='fortai-svg-icon bsi-primary-primary bsi-sm mr-2 bsi-primary-dark-blue'>
                    <!--?xml version='1.0' encoding='UTF-8'?-->
                    <svg xmlns='http://www.w3.org/2000/svg' id='Layer_1' data-name='Layer_1' viewBox='0 0 24 24' width='24' height='24'>
                        <path d='M23,11a1,1,0,0,1-1-1,8.008,8.008,0,0,0-8-8,1,1,0,0,1,0-2A10.011,10.011,0,0,1,24,10,1,1,0,0,1,23,11Zm-3-1a6,6,0,0,0-6-6,1,1,0,1,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0Zm2.183,12.164.91-1.049a3.1,3.1,0,0,0,0-4.377c-.031-.031-2.437-1.882-2.437-1.882a3.1,3.1,0,0,0-4.281.006l-1.906,1.606A12.784,12.784,0,0,1,7.537,9.524l1.6-1.9a3.1,3.1,0,0,0,.007-4.282S7.291.939,7.26.908A3.082,3.082,0,0,0,2.934.862l-1.15,1C-5.01,9.744,9.62,24.261,17.762,24A6.155,6.155,0,0,0,22.183,22.164Z'/>
                    </svg>
                </span>
                <span class='buyer-telephone-display d-flex' id='d_contact_number'>$masked_contact_number</span>
                <a href='#' class='buyer-telephone-show-link underlined d-none'>Show number</a>
                <div class='verified-phone-container ml-3'>
                   <div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-green-50'>
                        <svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <title>Verified badge icon</title>
                            <path d='M9 1.5C4.86 1.5 1.5 4.86 1.5 9C1.5 13.14 4.86 16.5 9 16.5C13.14 16.5 16.5 13.14 16.5 9C16.5 4.86 13.14 1.5 9 1.5ZM6.9675 12.2175L4.275 9.525C3.9825 9.2325 3.9825 8.76 4.275 8.4675C4.5675 8.175 5.04 8.175 5.3325 8.4675L7.5 10.6275L12.66 5.4675C12.9525 5.175 13.425 5.175 13.7175 5.4675C14.01 5.76 14.01 6.2325 13.7175 6.525L8.025 12.2175C7.74 12.51 7.26 12.51 6.9675 12.2175Z' fill='#47BF9C'></path>
                        </svg>
                        Verified phone
                    </div>
                </div>
            </div>
        </div>
    ";
    
    $details .= "
    <div class='d-flex align-items-center mt-3'>
        <span class='fortai-svg-icon bsi-primary-primary bsi-sm mr-2 bsi-primary-dark-blue fi fi-sr-envelope'>
            <!--?xml version='1.0' encoding='UTF-8'?-->
            <svg xmlns='http://www.w3.org/2000/svg' id='Filled' viewBox='0 0 24 24' width='512' height='512'>
                <path d='M23.954,5.542,15.536,13.96a5.007,5.007,0,0,1-7.072,0L.046,5.542C.032,5.7,0,5.843,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6C24,5.843,23.968,5.7,23.954,5.542Z'/>
                <path d='M14.122,12.546l9.134-9.135A4.986,4.986,0,0,0,19,1H5A4.986,4.986,0,0,0,.744,3.411l9.134,9.135A3.007,3.007,0,0,0,14.122,12.546Z'/>
            </svg>
        </span>
        <span class='buyer-email-display text-break d-flex flex-column project-details-col-project-top' id='d_email'>$masked_email</span>
    </div>
</div>

<div class='project-estimate pt-3 align-items-center text-xs text-grey-600' style='display: none;'>
    <span class='fortai-svg-icon bsi-primary-grey-600 bsi-xs mr-2'>
        <!--?xml version='1.0' encoding='UTF-8'?-->
        <svg width='20px' height='20px' viewBox='0 0 20 20' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <g id='Guide-' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                <g id='Style-Guide' transform='translate(-241.000000, -11189.000000)'>
                    <g id='Icons/Illustrations' transform='translate(115.000000, 10318.000000)'>
                        <g id='Icons' transform='translate(22.000000, 242.000000)'>
                            <g id='Icon/quote' transform='translate(102.000000, 627.000000)'>
                                <g id='quote'>
                                    <path d='M21.41,11.58 L12.41,2.58 C12.05,2.22 11.55,2 11,2 L4,2 C2.9,2 2,2.9 2,4 L2,11 C2,11.55 2.22,12.05 2.59,12.42 L11.59,21.42 C11.95,21.78 12.45,22 13,22 C13.55,22 14.05,21.78 14.41,21.41 L21.41,14.41 C21.78,14.05 22,13.55 22,13 C22,12.45 21.77,11.94 21.41,11.58 Z M5.5,7 C4.67,7 4,6.33 4,5.5 C4,4.67 4.67,4 5.5,4 C6.33,4 7,4.67 7,5.5 C7,6.33 6.33,7 5.5,7 Z' id='Shape' class='primary-color'></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </span>
    <div class='pl-2 project-estimate-text'>
        Average value: <span class='text-dark-blue'></span>
    </div>
</div>

<div class='mt-3 flex-row response-cap-and-count-container d-flex d-lg-inline-flex'>
    <span class='fortai-svg-icon bsi-primary-green bsi-sm mr-2 mt-half response-icon' style='display: none;'>
        <!--?xml version='1.0' encoding='UTF-8'?-->
        <svg width='24px' height='24px' viewBox='0 0 24 24' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
            <g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                <g transform='translate(2.000000, 2.000000)' class='primary-color'>
                    <path d='M18,0 C19.1,0 20,0.9 20,2 L20,14 C20,15.1 19.1,16 18,16 L4,16 L0,20 L0,2 C0,0.9 0.9,0 2,0 L18,0 Z M8.66666667,5.66666667 L8.66666667,3 L4,7.66666667 L8.66666667,12.3333333 L8.66666667,9.6 C12,9.6 14.3333333,10.6666667 16,13 C15.3333333,9.66666667 13.3333333,6.33333333 8.66666667,5.66666667 Z'></path>
                </g>
            </g>
        </svg>
    </span>

    <div class='count-meter'>";
    for ($i = 0; $i < (int)$contacted; $i++) {
$details .= "<div class='meter-bar tw-w-[3px] tw-h-[14px] tw-rounded-[1px] tw-bg-green-500 tw-mr-0.5'></div>";
    }
    for ($i = 0; $i < $remender; $i++) {
        $details .= "<div class='meter-bar tw-w-[3px] tw-h-[14px] tw-rounded-[1px] tw-bg-gray-400 tw-mr-0.5'></div>";
            }

    $details .= "</div>

    <div class='pl-1 responses-text text-xs pl-2 '>
        <span class='response-cap-and-count-text '>
       
            <strong>$contacted</strong>/5 professionals have responded.
        </span>
    </div>
    

    <div class='infobox-icon pl-2 cursor-pointer'>
        <span class='fortai-svg-icon bsi-primary-grey-200 bsi-sm'>
            <!--?xml version='1.0' encoding='UTF-8'?-->
            <svg width='24px' height='24px' viewBox='0 0 24 24' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                <g id='Icon/info_medium' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                    <g id='info_medium' transform='translate(2.000000, 2.000000)' class='primary-color'>
                        <path d='M10,0 C4.48,0 0,4.48 0,10 C0,15.52 4.48,20 10,20 C15.52,20 20,15.52 20,10 C20,4.48 15.52,0 10,0 Z M10,15 C9.45,15 9,14.55 9,14 L9,10 C9,9.45 9.45,9 10,9 C10.55,9 11,9.45 11,10 L11,14 C11,14.55 10.55,15 10,15 Z M10.05,7.5 L10.05,7.5 C9.35964406,7.5 8.8,6.94035594 8.8,6.25 L8.8,6.25 C8.8,5.55964406 9.35964406,5 10.05,5 L10.05,5 C10.7403559,5 11.3,5.55964406 11.3,6.25 L11.3,6.25 C11.3,6.94035594 10.7403559,7.5 10.05,7.5 Z' id='info'></path>
                    </g>
                </g>
            </svg>
        </span>
    </div>
</div>
";
for ($i = 0; $i < $lead['$contacted ']; $i++) {
    $details .= "
    <div class='count-meter tw-flex tw-gap-1 ' style='width: 120px;'>
      <div class='meter-bar tw-w-[3px] tw-h-[14px] tw-rounded-[1px] tw-bg-green-500 tw-mr-0.5'></div>
        <div class='meter-bar tw-w-[20px] tw-h-[10px] tw-bg-green-500 tw-mr-0.5 ' style='background-color: blue;'></div>
    </div>
    <svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <title>Urgent badge icon</title>
        <path d='M10.8 4.5L10.5 3H3.75V15.75H5.25V10.5H9.45L9.75 12H15V4.5H10.8Z' fill='#F7BF53'></path>
    </svg>
    Urgent
    </div>";
}

for ($i = 0; $i < $lead['$remender']; $i++) {
    $details .= "
    <div class='tw-w-[3px] tw-h-[14px] tw-rounded-[1px] tw-bg-green-500 tw-mr-0.5'></div>
    <svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'>
        <title>Urgent badge icon</title>
        <path d='M10.8 4.5L10.5 3H3.75V15.75H5.25V10.5H9.45L9.75 12H15V4.5H10.8Z' fill='#F7BF53'></path>
    </svg>
    Urgent
    </div>
    <div class='pl-1 responses-text text-xs pl-2'>
        <span class='response-cap-and-count-text '>
            <strong>{{$lead['$contacted ']}}</strong>/5 professionals have responded.
        </span>
    </div>
    <div class='infobox-icon pl-2 cursor-pointer'>
        <span class='fortai-svg-icon bsi-primary-grey-200 bsi-sm'>
            <svg width='24px' height='24px' viewBox='0 0 24 24' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                <g id='Icon/info_medium' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                    <g id='info_medium' transform='translate(2.000000, 2.000000)' class='primary-color'>
                        <path d='M10,0 C4.48,0 0,4.48 0,10 C0,15.52 4.48,20 10,20 C15.52,20 20,15.52 20,10 C20,4.48 15.52,0 10,0 Z M10,15 C9.45,15 9,14.55 9,14 L9,10 C9,9.45 9.45,9 10,9 C10.55,9 11,9.45 11,10 L11,14 C11,14.55 10.55,15 10,15 Z M10.05,7.5 L10.05,7.5 C9.35964406,7.5 8.8,6.94035594 8.8,6.25 L8.8,6.25 C8.8,5.55964406 9.35964406,5 10.05,5 L10.05,5 C10.7403559,5 11.3,5.55964406 11.3,6.25 L11.3,6.25 C11.3,6.94035594 10.7403559,7.5 10.05,7.5 Z' id='info'></path>
                    </g>
                </g>
            </svg>
        </span>
    </div>";
}


$details .= "
<div class='tw-flex tw-justify-start tw-items-end' data-cy='lead-price'>
    <i class='bi bi-coin'></i>
    <span class='tw-text-xs tw-font-gordita-regular'>$credits Credits</span>
</div>

<div class='calls-to-action for-leads' style=''>
    <button id='btn_subdetails' class='btn btn-primary large-btn button submit-your-details mt-3 mr-1' data-cy='dashboard-submit'>
        <span id='contact_now' lead_id='$lead_id'>Contact <span class='buyer_name'>$first_name</span></span>
    </button>
    <button class='btn btn-link large-btn not-interested mt-3 mr-1' data-cy='dashboard-not-interested'>
        <span>Not interested</span>
        <i class='fa fa-times'></i>
    </button>
</div>";

$details .= "
<div id='__rctValueBadgesLeadDetails'>
    <div class='tw-flex tw-flex-col tw-mt-5'>
        <div class='tw-flex tw-justify-start tw-items-center tw-gap-2'>
            <span class='tw-text-base'>Highlights</span>
            <button>
                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='#CED0DA' width='20' height='20'>
                    <path fill-rule='evenodd' d='M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z' clip-rule='evenodd'></path>
                </svg>
            </button>
        </div>
    </div>
</div>";


$details .="<div class='tw-flex tw-flex-wrap tw-justify-start tw-items-center tw-gap-1 tw-mt-4'><div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px]'></div>";

   
if ($urgent > 0) {
    $details .= "<div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-yellow-100'>
                    <svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <title>Urgent badge icon</title>
                        <path d='M10.8 4.5L10.5 3H3.75V15.75H5.25V10.5H9.45L9.75 12H15V4.5H10.8Z' fill='#F7BF53'></path>
                    </svg>
                    Urgent
                 </div>";
}if ($hiring_decision > 0) {
    $details .= "<div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-[#27AFF01A]'>
                   <i class='fa fa-bolt' aria-hidden='true'></i>
                   High hiring intent
                   </div>";
}
if ($description > 0) {
    $details .= "<div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-[#EDE8FD]'>
                    <svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <title>Additional details badge icon</title>
                        <path d='M3 7.875C2.3775 7.875 1.875 8.3775 1.875 9C1.875 9.6225 2.3775 10.125 3 10.125C3.6225 10.125 4.125 9.6225 4.125 9C4.125 8.3775 3.6225 7.875 3 7.875ZM3 3.375C2.3775 3.375 1.875 3.8775 1.875 4.5C1.875 5.1225 2.3775 5.625 3 5.625C3.6225 5.625 4.125 5.1225 4.125 4.5C4.125 3.8775 3.6225 3.375 3 3.375ZM3 12.375C2.3775 12.375 1.875 12.885 1.875 13.5C1.875 14.115 2.385 14.625 3 14.625C3.615 14.625 4.125 14.115 4.125 13.5C4.125 12.885 3.6225 12.375 3 12.375ZM6 14.25H15C15.4125 14.25 15.75 13.9125 15.75 13.5C15.75 13.0875 15.4125 12.75 15 12.75H6C5.5875 12.75 5.25 13.0875 5.25 13.5C5.25 13.9125 5.5875 14.25 6 14.25ZM6 9.75H15C15.4125 9.75 15.75 9.4125 15.75 9C15.75 8.5875 15.4125 8.25 15 8.25H6C5.5875 8.25 5.25 8.5875 5.25 9C5.25 9.4125 5.5875 9.75 6 9.75ZM5.25 4.5C5.25 4.9125 5.5875 5.25 6 5.25H15C15.4125 5.25 15.75 4.9125 15.75 4.5C15.75 4.0875 15.4125 3.75 15 3.75H6C5.5875 3.75 5.25 4.0875 5.25 4.5Z' fill='#AF37FB'></path>
                    </svg>
                    Additional details
                </div>";
}

if ($frequent > 0) {
    $details .= "<div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-[#FC974733]'>
                    <svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <title>Frequent user badge icon</title>
                        <path d='M11.1225 3.62248L9.525 2.02498C9.06 1.55998 8.25 1.88998 8.25 2.55748V3.05248C5.295 3.41998 3 5.93998 3 8.99998C3 11.73 4.8225 14.0325 7.3275 14.76C7.7925 14.895 8.25 14.52 8.25 14.04V14.0175C8.25 13.695 8.0475 13.4025 7.74 13.3125C5.865 12.7725 4.5 11.0475 4.5 8.99998C4.5 6.77248 6.12 4.92748 8.25 4.56748V5.71498C8.25 6.38248 9.0525 6.71248 9.525 6.24748L11.1225 4.68748C11.4225 4.40248 11.4225 3.92248 11.1225 3.62248ZM14.7525 7.31998C14.6325 6.90748 14.4675 6.50998 14.2575 6.12748C14.025 5.69998 13.4325 5.63248 13.0875 5.97748L13.08 5.98498C12.8475 6.21748 12.795 6.56998 12.9525 6.85498C13.1025 7.13248 13.2225 7.42498 13.3125 7.72498C13.4025 8.03998 13.695 8.24998 14.0175 8.24998H14.0325C14.52 8.24998 14.895 7.78498 14.7525 7.31998ZM9.75 14.01V14.025C9.75 14.5125 10.215 14.88 10.68 14.745C11.0925 14.625 11.49 14.46 11.8725 14.25C12.3 14.0175 12.3675 13.425 12.0225 13.08L12.0075 13.065C11.775 12.8325 11.4225 12.78 11.1375 12.9375C10.86 13.095 10.5675 13.215 10.2675 13.305C9.96 13.395 9.75 13.6875 9.75 14.01ZM13.08 12.0225C13.425 12.3675 14.0175 12.3 14.25 11.8725C14.4625 11.49 14.625 11.0925 14.745 10.68C14.88 10.215 14.5125 9.75 14.025 9.75H14.01C13.6875 9.75 13.395 9.96 13.305 10.2675C13.215 10.5675 13.095 10.86 12.9375 11.1375C12.78 11.4225 12.8325 11.775 13.065 12.0075L13.08 12.0225Z' fill='#FC9747'></path>
                    </svg>
                    Frequent user
                </div>";
}
$details .= "<div class='d-flex flex-column project-details-col-project-details'>
                <div class='project-details pt-5 data-buyer-name='>
                    <div class='project-details-label'>Details</div>
                    <hr class='project-details-hr'>
                    <div class='project-details-content'>
                        <div class='project-questions-answers highlights'>
                            <div class='project-details-question text-xs text-light-grey pb-2 text-regular'>
                                What kind of building works do you need?
                            </div>
                            <div class='project-details-answer text-xs pb-4'>Renovation &amp; remodelling</div>

                            <div class='project-details-question text-xs text-light-grey pb-2 text-regular'>
                                What do you need refurbishing or remodelling?
                            </div>
                            <div class='project-details-answer text-xs pb-4'>Bedroom, Living Room</div>

                            <div class='project-details-question text-xs text-light-grey pb-2 text-regular'>
                                Do you have plans drawn up?
                            </div>
                            <div class='project-details-answer text-xs pb-4'>No - plans are not required</div>

                            <div class='project-details-question text-xs text-light-grey pb-2 text-regular'>
                                How likely are you to make a hiring decision?
                            </div>
                            <div class='project-details-answer text-xs pb-4'>I will possibly hire someone</div>
                        </div>

                        <div class='project-details-map highlights'>
                            <img class='img-fluid rounded loaded' alt='' width='625' height='235' src='https://maps.googleapis.com/maps/api/staticmap?center=-33.93020000000000,18.84490000000000&amp;zoom=11&amp;size=625x235&amp;maptype=roadmap&amp;key=AIzaSyD3p2CemxOtPGf4igCbaMqo4BrNEF8Wktc'>
                        </div>
                    </div>
                    <hr class='lead-settings-prompt-hr'>
                    <div class='lead-settings-prompt flex'>
                        <div class='font-weight-medium mb-2'>Not seeing the right leads?</div>
                        <div class='font-weight-regular mb-2'>Stop seeing leads with specific answers by customising your settings.</div>

                        <div class='update-link-container d-inline-flex align-items-center'>
                            <span class='fortai-svg-icon bsi-primary-primary bsi-sm mr-2'>
                                <svg width='24px' height='24px' viewBox='0 0 24 24' version='1.1' xmlns='http://www.w3.org/2000/svg'>
                                    <g id='Icon/cog' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                        <g id='cog' transform='translate(2.000000, 2.000000)' class='primary-color'>
                                            <path d='M17.14,10.936 C17.176,10.636 17.2,10.324 17.2,10 C17.2,9.676 17.176,9.364 17.128,9.064 L19.156,7.48 C19.336,7.336 19.384,7.072 19.276,6.868 L17.356,3.544 C17.236,3.328 16.984,3.256 16.768,3.328 L14.38,4.288 C13.876,3.904 13.348,3.592 12.76,3.352 L12.4,0.808 C12.364,0.568 12.16,0.4 11.92,0.4 L8.08,0.4 C7.84,0.4 7.648,0.568 7.612,0.808 L7.252,3.352 C6.664,3.592 6.124,3.916 5.632,4.288 L3.244,3.328 C3.028,3.244 2.776,3.328 2.656,3.544 L0.736,6.868 C0.616,7.084 0.664,7.336 0.856,7.48 L2.884,9.064 C2.836,9.364 2.8,9.688 2.8,10 C2.8,10.312 2.824,10.636 2.872,10.936 L0.844,12.52 C0.664,12.664 0.616,12.928 0.724,13.132 L2.644,16.456 C2.764,16.672 3.016,16.744 3.232,16.672 L5.62,15.712 C6.124,16.096 6.652,16.408 7.24,16.648 L7.6,19.192 C7.648,19.432 7.84,19.6 8.08,19.6 L11.92,19.6 C12.16,19.6 12.364,19.432 12.388,19.192 L12.748,16.648 C13.336,16.408 13.876,16.084 14.368,15.712 L16.756,16.672 C16.972,16.756 17.224,16.672 17.344,16.456 L19.264,13.132 C19.384,12.916 19.336,12.664 19.144,12.52 L17.14,10.936 L17.14,10.936 Z M10,13.6 C8.02,13.6 6.4,11.98 6.4,10 C6.4,8.02 8.02,6.4 10,6.4 C11.98,6.4 13.6,8.02 13.6,10 C13.6,11.98 11.98,13.6 10,13.6 Z' id='Shape'></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <a href='/profile' class='js-lead-prefs-from-lead-link'>Update lead settings</a>";
$details .= "</div>"; // Closing the update-link-container div
$details .= "</div>"; // Closing the lead-settings-prompt flex div
$details .= "</div>"; // Closing the project-details pt-5 data-buyer-name div
$details .= "</div>"; // Closing the d-flex flex-column project-details-col-project-details div

    return $details;
}
}