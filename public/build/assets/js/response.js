let leadsArr = [];
$(document).ready(function() {
    $("#myleads").empty();
    $(".loader").show();
    var _token = $('input[name="_token"]').val();
    const obj = {_token};
    
    // Usage:
    getJSONResponse("getleads",obj).then((data) => {
    leadsArr = data["leads"]["leadsArr"];
    displayLeads(leadsArr);
}).catch((error) => {
    //console.error('Failed to fetch leads:', error);  // Handle the error here
});      
});


$(document).on('click','.be_first',function() {
    $("#myleads").empty();
    $(".loader").show();
    const beFirstArr = $.grep(leadsArr, function(json) {
        return json.contacted === 0;
    });
    displayLeads(beFirstArr);    
});

$(document).on('click','.trail',function() {    
    let _token = $('input[name="_token"]').val();
    let trail_id = $(this).attr("trail_id");
    let lead_id = $(this).attr("lead_id");

    const obj = {_token,trail_id,lead_id};
    getJSONResponse("addleadstrail",obj).then((data) => {
        console.log(data);
    }).catch((error) => {
        console.error('Failed to fetch leads:', error);  // Handle the error here
    });         
});


$(document).on('click','.my_urgent',function() {
    $("#myleads").empty();
    $(".loader").show();
    const beFirstArr = $.grep(leadsArr, function(json) {
        return json.urgent === 1;
    });
    displayLeads(beFirstArr);      
});
$(document).on('click','.view_lead',function() {
    var _token = $('input[name="_token"]').val();
   let lead_id = $(this).attr("m");  
   const obj = {_token,lead_id};
   let details = ""; 

   getHTMLResponse("getresponsedetails",obj).then((data) => {
    details = data;
    $("#show_details").html(details);
}).catch((error) => {
    details = 'There is an error : '+error;  // Handle the error here
});    
   $("#show_details").html(details);
});

$(document).on('click','#add_note',function() {
    var _token = $('input[name="_token"]').val();
   let lead_id = $(this).attr("m");  
   const obj = {_token,lead_id};
   getHTMLResponse("addleadnote",obj).then((data) => {
    console.log(data);
}).catch((error) => {
    console.log('There is an error : '+error);  // Handle the error here
}); 
});

const displayLeads = (json) =>{
    const beFirstArr = $.grep(leadsArr, function(obj) {
        return obj.contacted === 0;
    });
    const urgentArr = $.grep(leadsArr, function(obj) {
        return obj.urgent === 1;
    });
    $(".matching_leads").text(json.length);
    $("#be_first").text(beFirstArr.length);
    $("#my_urgent").text(urgentArr.length);

    for(key in json)
        {
            let lead_id = json[key]["lead_id"];
            let first_letter = json[key]["first_letter"];
            let first_name = json[key]["first_name"];
            let location = json[key]["location"];
            let time = json[key]["time"];
            let urgent = json[key]["urgent"];
            let is_phone_verified = json[key]["is_phone_verified"];
            let additional_details = json[key]["additional_details"];
            let frequent = json[key]["frequent"];
            let contacted = json[key]["contacted"];
            let description = json[key]["description"];
            let hiring_decision = json[key]["hiring_decision"];   
            let remender = json[key]["remender"];
            let service_name = json[key]["service_name"];
            let credits = json[key]["credits"];
            $("#myleads").append(leadsTemplate(lead_id,first_letter,first_name,location,time,urgent,is_phone_verified,additional_details,frequent,description,contacted,remender,service_name,credits,hiring_decision));
          
        }
        $(".loader").hide();
}

const getJSONResponse = (url,obj) => {
    return new Promise((resolve, reject) => {        
        $.ajax({
            url: '/'+url,
            type: 'POST',
            data: obj,
            beforeSend: function() {
                $(".loader").show();
            },
            success: function(data) {
                resolve(data);  // Resolve the promise with the data
            },
            error: function(xhr, status, error) {
                //console.error('Error:', status, error);
                reject(error);  // Reject the promise if there's an error
            },
            complete: function() {
                $(".loader").hide();
            }
        });
    });
};
const getHTMLResponse = (url,obj) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: '/'+url,
            type: 'POST',
            data: obj,
            beforeSend: function() {
                $(".loader").show();
            },
            success: function(data) {
                resolve(data);  // Resolve the promise with the data
            },
            error: function(xhr, status, error) {
                //console.error('Error:', status, error);
                reject(error);  // Reject the promise if there's an error
            },
            complete: function() {
                $(".loader").hide();
            }
        });
    });
};




const leadsTemplate = (
    lead_id, first_letter, first_name, location, time, urgent, 
    is_phone_verified, additional_details, frequent, description, 
    contacted, remender, service_name, credits,hiring_decision
) => {

    let txt = "<button m='" + lead_id + "' class='view_lead'>" +
              "<div class='leads-list-item-card tw-p-6 tw-mx-4 tw-border-l-4 tw-border-transparent " +
              "tw-rounded-lg tw-bg-white hover:tw-bg-gray-50 tw-shadow-md hover:tw-shadow-lg' data-cy='lead-card-is-active-false'>" +
              "<div class='tw-flex tw-justify-between'>" +
              "<div class='tw-flex tw-relative LeadsListItem_blueDot__magSY'>" +
              "<div class='tw-mr-4'>" +
              "<div class='Avatar_base__iRlms Avatar_radiusFull__-VC23 Avatar_bgAF42FF__vTweJ' style='width: 40px; height: 40px;'>" +
              "<span class='tw-text-white tw-text-base tw-text-center'>" + first_letter + "</span>" +
              "</div></div>" +
              "<div class='tw-text-left'>" +
              "<p class='tw-m-0'>" + first_name + "</p>" +
              "<p class='tw-m-0 tw-font-gordita-regular tw-text-xs'>" + location + "</p>" +
              "<p class='tw-mt-1 tw-font-gordita-regular tw-text-xs tw-text-gray-500'></p>" +
              "</div></div>" +
              "<span class='tw-p-1 tw-m-0 tw-text-gray-600 tw-text-xs tw-font-gordita-regular " +
              "tw-bg-green-50 tw-h-fit tw-rounded'>" + time + "</span></div>" +
              "<div class='tw-flex tw-flex-wrap tw-justify-start tw-items-center tw-gap-1 tw-mt-4' data-cy='value-badges'>";

    if (urgent > 0) {
        txt += "<div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 " +
               "tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-yellow-100'>" +
               "<svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'>" +
               "<title>Urgent badge icon</title>" +
               "<path d='M10.8 4.5L10.5 3H3.75V15.75H5.25V10.5H9.45L9.75 12H15V4.5H10.8Z' fill='#F7BF53'></path>" +
               "</svg> Urgent</div>";
    }
     if (is_phone_verified > 0) {
        txt += "<div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-green-50'> \
                <svg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'> \
                    <title>Verified badge icon</title> \
                    <path d='M9 1.5C4.86 1.5 1.5 4.86 1.5 9C1.5 13.14 4.86 16.5 9 16.5C13.14 16.5 16.5 13.14 16.5 9C16.5 4.86 13.14 1.5 9 1.5ZM6.9675 12.2175L4.275 9.525C3.9825 9.2325 3.9825 8.76 4.275 8.4675C4.5675 8.175 5.04 8.175 5.3325 8.4675L7.5 10.6275L12.66 5.4675C12.9525 5.175 13.425 5.175 13.7175 5.4675C14.01 5.76 14.01 6.2325 13.7175 6.525L8.025 12.2175C7.74 12.51 7.26 12.51 6.9675 12.2175Z' fill='#47BF9C'></path> \
                </svg> \
                Verified phone \
                </div>";
    }
    

         if(additional_details>0)
            {
                        txt += "<div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-[#EDE8FD]'><title>Additional details badge icon</title><i class='fa fa-list' aria-hidden='true'></i></path>Additional details</div>";
             }  
             
        if(hiring_decision>0)
            {
                txt += "<div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-[#27AFF01A]'><title>Intent badge icon</title><i class='fa fa-bolt' aria-hidden='true'></i></path> High hiring intent</div>";
             } 
       
             if (frequent > 0) {
                txt += "  <div class='tw-flex tw-justify-start tw-items-center tw-gap-1 tw-py-1 tw-px-2 tw-rounded-[100px] tw-font-gordita-regular tw-text-xs tw-bg-[#FC974733]'>";
                txt += "    <title>Frequent user badge icon</title>";
                txt += "    <i class='fa fa-refresh' aria-hidden='true'></i> Frequent user";
                txt += "  </div>";
            }
            
            txt += "</div><div class='tw-flex tw-flex-col tw-p-2 tw-bg-gray-100 tw-rounded tw-text-xs tw-mt-4'>";
            txt += "  <span class='tw-text-left tw-mb-3'><b>" + service_name + "</b></span>";
            txt += "  <span class='tw-text-left tw-font-gordita-regular tw-text-gray-700'>" + description + "</span>";
            txt += "</div><div class='tw-flex tw-justify-between tw-mt-4'>";
            txt += "  <div class='tw-flex tw-justify-start tw-items-end' data-cy='lead-price'>";
            txt += "    <title>Fortai Token</title>";
            txt += "    <i class='bi bi-coin'></i> ";
            txt += " <span class='tw-text-xs tw-font-gordita-regular tw-flex tw-justify-start tw-items-end'>" +

"      </span>" +
credits + " <span style='margin-left:3px'>Credits</span>" +
"    </span>";

            txt += "  </div>";
            txt += "  <div class='tw-flex tw-justify-start tw-gap-2 tw-items-center'>";
            txt += "    <div class='tw-flex'>";
       
    for (let i = 0;i<contacted; i++)
    {
        txt += "<div class='tw-w-[3px] tw-h-[14px] tw-rounded-[1px] tw-bg-green-500 tw-mr-0.5'></div>";
    }
    for (let i = 0;i<remender; i++)
        {
            txt += "<div class='tw-w-[3px] tw-h-[14px] tw-rounded-[1px] tw-bg-gray-400 tw-mr-0.5'></div>";
        }
 txt += "</div><div><div><span class='tw-block tw-text-xs tw-font-gordita-regular'>";
if(contacted>0)
{
    txt += contacted+"/5";
}
else{
    txt +="<span>1st to respond</span>";  
}
 txt += " </span></div></div></div></div></div></button>";                                    
    
 return txt;
};

$(document).on('click','.whatsap',function(){
let contact_number = $(this).attr("contact_number").replace('+','');
window.open('https://api.whatsapp.com/send/?phone='+contact_number+'&text&type=phone_number&app_absent=0', '_blank');
})