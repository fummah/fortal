<x-app-layout>
<link rel="stylesheet" href="{{asset('build/assets/css/create.css')}}">

 <!-- Two-Column Section with Get Started and Image -->
 <div class="container1">
        <!-- Left Column -->
         <form>
            @csrf
        <div class="left-column">
            <h1>Secure jobs and grow your business</h1>
            <p>Thousands of opportunities await you. Start today!</p>
            <input type="text" placeholder="Enter your service to get started" id="serviceTxt">
            <input type="hidden" id="serviceID">
            <span id="search-service" class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_left et_pb_bg_layout_light">
                <ul id="inner-service" class="searched-list"></ul>

            </span>
           <a id="step" href="#"> <button type="button">Get Started</button></a>
        </div>
        </form>
        <!-- Right Column -->
        <div class="right-column">
    <div>
        <img src="{{asset('build/assets/img/handy2.png')}}" alt="Freelance Services Image 1" height="500" width="500">
    </div>
</div>

    </div>

    <!-- Services Section -->

    <!-- Popular Services Section -->

    <div class="popular-services">
        <div class="service-item">
        <img src="{{asset('build/assets/img/networking.jpg')}}" alt="Freelance Services Image" height="50" width="50">
            <p>Networking and IT Services</p>
            <div class="rating">★★★★★</div>
        </div>
        <div class="service-item">
        <img src="{{asset('build/assets/img/cctv.jpg')}}" alt="Freelance Services Image" height="50" width="50">
            <p>Security and Surveillance</p>
            <div class="rating">★★★★☆</div>
        </div>
        <div class="service-item">
        <img src="{{asset('build/assets/img/webdesign.jpg')}}" alt="Freelance Services Image" height="50" width="50">
            <p>Web Design</p>
            <div class="rating">★★★★★</div>
        </div>
        <div class="service-item">
        <img src="{{asset('build/assets/img/builders.jpg')}}" alt="Freelance Services Image" height="50" width="50">
            <p>General Builders</p>
            <div class="rating">★★★☆☆</div>
        </div>
    </div> 

</x-app-layout>
