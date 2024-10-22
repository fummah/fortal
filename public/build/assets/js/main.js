$(document).on("keyup","#serviceTxt",function(){
    let serviceTxt = $(this).val();
    var _token = $('input[name="_token"]').val();
    $("#inner-service").empty();
    const obj = {
        serviceTxt,_token
    }
    if(serviceTxt.length>2)
    {
        $.ajax({
            url: '/getservices',
            type: 'POST',   
            data: obj,
            beforeSend: function() {                
                $("#search-service").show();
            },
            success: function(data) {
                console.log(data);
                const json = data["services"];
                for(key in json)
                {
                    let service = json[key]["service_name"];
                    let id = json[key]["id"];
                    $("#inner-service").append("<li class='service' id='"+id+"' service_name='"+service+"'>"+service+"</li>");
                  
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error);                
            },
            complete: function() {
            }
        });
        
    }
});

$(document).on("click",".service",function(){
    let id = $(this).attr("id");
    let service_name=$(this).attr("service_name");
    $("#serviceTxt").val(service_name);
    $("#serviceID").val(id);
    $("#search-service").hide();
    $("#inner-service").empty();
    $("#step").attr("href","/profession/create-account/"+id+"?service="+service_name)
});

$(document).ready(function() {
    let currentIndex = 0;
    const images = $('.slideshow img');
    const imageCount = images.length;

    function showNextImage() {
        images.eq(currentIndex).removeClass('active').fadeOut(1000); 
        currentIndex = (currentIndex + 1) % imageCount; 
        images.eq(currentIndex).addClass('active').fadeIn(1000); 
    }


    images.eq(currentIndex).addClass('active').fadeIn(1000);

   
    setInterval(showNextImage, 3000); 
});

