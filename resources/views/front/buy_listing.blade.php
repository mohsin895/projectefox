@extends('layout.front.master')
@section('content')
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span33">
                <h5 style="color: #08c;">Listing ID: 455745</h5>
                <div class="seller-info-sidebar">

                    <div class="seller-info">
                        <h4>Seller Information</h4>
                    </div>
                 
                    <div class="seller-details">
                        <div>
                            <h6><i class="icon-user"></i> Name</h6>
                            <h6><i class="icon-map-marker"></i> Location</h6>
                            <h6><i class="icon-edit"></i> Registered</h6>
                        </div>
                        <div>
                        @php 
                                    $seller = App\Models\User::find($advertising->user_id);
                                    $city = App\Models\City::find($advertising->city_id);
                                 
                                    @endphp
                            <h6>:{{$seller->f_name}} &nbsp; {{$seller->l_name}}</h6>
                            <h6>: {{$city->city_name}}</h6>
                            <h6>: {{$seller->created_at}}</h6>
                        </div>

                    </div>
                    <div class="seller-rating">
                        <h5>Seller Rating</h5>
                       

                        <h5>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-half"></i>
                        </h5>

                    </div>
                    <div class="seller-verify">
                        <h6><i class="icon-envelope"></i>Verify</h6>
                        <h6> <strong>@if( $seller->status =='1')Email Verified @else not verified @endif</strong></h6>
                    </div>
                    <div class="seller-info">
                        <h4><a href="{{route('user.listing',$advertising['id'])}}">Seller Other Listing</a></h4>
                    </div>
                </div>

                <div class="map-location" style="margin-top: 10px;">
                    <div style="display:flex; justify-content:space-between">
                        <h5>Map Location</h5>
                        <h3><i class="icon-map-marker"></i></h3>
                    </div>
                    <div class="map-view">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58389.59261405639!2d90.42664439459321!3d23.84171867482445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c691ba478fbd%3A0xd1b3f71371eb15ec!2z4Ka54Kav4Kaw4KakIOCmtuCmvuCmueCnjeKAjOCmnOCmvuCmsuCmvuCmsiDgpobgpqjgp43gpqTgprDgp43gppzgpr7gpqTgpr_gppUg4Kas4Ka_4Kau4Ka-4Kao4Kas4Kao4KeN4Kam4Kaw!5e0!3m2!1sbn!2sbd!4v1644398000993!5m2!1sbn!2sbd" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div style="display:flex; justify-content:space-between">
                        <div>
                            <h5>Suburbs</h5>
                            <h5>City</h5>
                        </div>
                        <div>
                            <h5 class="text-muted">Canning vale</h5>
                            <h5 class="text-muted">Perth</h5>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">

                <div class="well well-small">
                    <h2>{{$advertising->title}}</h2>
                    <h4 class="icon-star" style="display: inline;"><strong>Watch</strong></h4>
                    <div class="listing-single-item">
                        <!-- Image carousel Start -->
                        <div class="listing_container">
                            <div class="mySlides">
                                <div class="numbertext">1 / 6</div>
                                <img src="{{asset('images/'.$advertising['main_image'])}}" style="width: 385px; height: 272px;">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 6</div>
                                <img src="https://www.w3schools.com/howto/img_5terre_wide.jpg" style="width: 385px;; height: 272px;">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 6</div>
                                <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" style="width: 385px;; height: 272px;">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">4 / 6</div>
                                <img src="https://www.w3schools.com/howto/img_lights_wide.jpg" style="width: 385px;; height: 272px;">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">5 / 6</div>
                                <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" style="width: 385px;; height: 272px;">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">6 / 6</div>
                                <img src="https://www.w3schools.com/howto/img_snow_wide.jpg" style="width: 385px;; height: 272px;">
                            </div>

                            <!-- <a class="prev" onclick="plusSlides(-1)">???</a>
                                <a class="next" onclick="plusSlides(1)">???</a> -->


                            <div class="row">
                                <div class="column">
                                    <img class="demo cursor" src="https://www.w3schools.com/howto/img_woods_wide.jpg" style="width:50%" onclick="currentSlide(1)" alt="The Woods">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="https://www.w3schools.com/howto/img_5terre.jpg" style="width:50%" onclick="currentSlide(2)" alt="Cinque Terre">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="https://www.w3schools.com/howto/img_mountains.jpg" style="width:50%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="https://www.w3schools.com/howto/img_lights.jpg" style="width:50%" onclick="currentSlide(4)" alt="Northern Lights">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="https://www.w3schools.com/howto/img_nature.jpg" style="width:50%" onclick="currentSlide(5)" alt="Nature and sunrise">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="https://www.w3schools.com/howto/img_snow.jpg" style="width:50%" onclick="currentSlide(6)" alt="Snowy Mountains">
                                </div>
                            </div>
                            <div class="item-description">
                                <p>{{$advertising->description}}
                                </p>

                            </div>


                        </div>
                        <!-- image carosule End  -->

                        <div class="signle-item-details" style="width: 600px;">
                        
                            <div class="share-listing">
                            <form action="{{route('addToCart')}}" id="AddToCart" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$advertising['id']}}" id="">
                                    <input type="hidden" name="business_name" value="{{$advertising['title']}}" id="">
                    
                                    <input type="hidden" name="logo" value="{{$advertising['logo']}}" id="">
                                    <input type="hidden" name="industry" value="{{$advertising['industry']}}" id="">
                                    <input type="hidden" name="city_id" value="{{$advertising['city_id']}}" id="">
                                    <input type="hidden" name="suburbs_id" value="{{$advertising['suburbs_id']}}" id="">
                                    <input type="hidden" name="mobile" value="{{$advertising['mobile']}}" id="">
                                    <input type="hidden" name="landline" value="{{$advertising['landline']}}" id="">
                                    <input type="hidden" name="website" value="{{$advertising['website']}}" id="">
                                    <input type="hidden" name="description" value="{{$advertising['description']}}" id="">
                                    <input type="hidden" name="payment_method" value="{{$advertising['payment_method']}}" id="">
                                    <input type="hidden" name="address" value="{{$advertising['address']}}" id="">
                                    <input type="hidden" name="post_id" value="{{$advertising['post_id']}}" id="">
                                    <input type="hidden" name="total" value="{{$advertising['price']}}" id="">
                                
                                  
                                    <button type="submit" class="btn btn-primary">Buy Now</button>
                                </form>
                            
                                <a href="" style="font-size: 40px;"><i class="icon-facebook-sign"></i></a>
                                <a href="" style="font-size: 40px;"><i class="icon-twitter-sign"></i></a>
                            </div>
                            <div style="display: flex; justify-content:space-evenly">
                                <h6>Listed</h6>
                                <h6 class="text-muted">02/02/2022</h6>
                            </div>
                          
                           
                           
                          
                            <div class="bid-history" style="margin-top: 5px;">
                                <p>2 Watching <a href=""><strong style="color: green; margin-left: 10px;">Watching</strong></a></p>
                            </div>
                            <div class="bid-history" style="margin-top: 5px; text-align: center;">
                                <h4><a href="" style="text-decoration: none; background-color:transparent">Ask Seller A Question</a></h4>
                            </div>
                            <div style="display: flex; justify-content: space-around;">
                                <div style="display: flex; justify-content:space-between">
                                    <div>
                                        <h6>For Sele By</h6>
                                        <h6>Make</h6>
                                        <h6>Model</h6>
                                        <h6>Body Style</h6>
                                        <h6>Year</h6>
                                        <h6>Milleage</h6>
                                        <h6>Transmission</h6>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">{{$advertising->sell}}</h6>
                                        <h6 class="text-muted">BMW</h6>
                                        <h6 class="text-muted">118</h6>
                                        <h6 class="text-muted">{{$advertising->body}}</h6>
                                        <h6 class="text-muted">{{$advertising->year}}</h6>
                                        <h6 class="text-muted">{{$advertising->mileage}}</h6>
                                        <h6 class="text-muted">{{$advertising->transmissions}}</h6>
                                    </div>
                                </div>
                                <div style="display: flex; justify-content:space-between">
                                    <div>
                                        <h6>Fuel</h6>
                                        <h6>Doors</h6>
                                        <h6>Color</h6>
                                        <h6>Condition</h6>
                                        <h6>Air Conditioner</h6>
                                        <h6>Registerd</h6>
                                    </div>
                                    <div>
                                        <h6 class="text-muted">{{$advertising->sell}}</h6>
                                        <h6 class="text-muted">{{$advertising->door}}</h6>
                                        <h6 class="text-muted">{{$advertising->color}}</h6>
                                        <h6 class="text-muted">{{$advertising->condition}}</h6>
                                        <h6 class="text-muted">{{$advertising->airconditioning}}</h6>
                                        <h6 class="text-muted">{{$advertising->registered}}</h6>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div style="display: flex; justify-content:center" v>
                        <div class="seller-accept-shipping" style="text-align: center;">
                            <h4>Seller Accepts</h4>
                            <h6>Cash , EFT , Bitcoin</h6>
                        </div>
                        <div class="seller-accept-shipping" style="text-align: center;">
                            <h4>Shipping</h4>
                            <h6>Collection , Couriar</h6>
                        </div>
                    </div>
                    <p class="releted-p">You Might be Interested in this releted adds </p>
                    <div style="display: flex; justify-content: space-around;">
                        <div class="releted-item">
                            <img src="https://www.w3schools.com/howto/img_snow.jpg" height="70px" width="100px" alt="">
                            <p><a href="">BMW car for Installment</a></p>
                            <p>R 120545</p>
                        </div>
                        <div class="releted-item">
                            <img src="https://www.w3schools.com/howto/img_snow.jpg" height="70px" width="100px" alt="">
                            <p><a href="">BMW car for Installment</a></p>
                            <p>R 120545</p>
                        </div>
                        <div class="releted-item">
                            <img src="https://www.w3schools.com/howto/img_snow.jpg" height="70px" width="100px" alt="">
                            <p><a href="">BMW car for Installment</a></p>
                            <p>R 120545</p>
                        </div>
                        <div class="releted-item">
                            <img src="https://www.w3schools.com/howto/img_snow.jpg" height="70px" width="100px" alt="">
                            <p><a href="">BMW car for Installment</a></p>
                            <p>R 120545</p>
                        </div>
                        <div class="releted-item">
                            <img src="https://www.w3schools.com/howto/img_snow.jpg" height="70px" width="100px" alt="">
                            <p><a href="">BMW car for Installment</a></p>
                            <p>R 120545</p>
                        </div>
                        <div class="releted-item">
                            <img src="https://www.w3schools.com/howto/img_snow.jpg" height="70px" width="100px" alt="">
                            <p><a href="">BMW car for Installment</a></p>
                            <p>R 120545</p>
                        </div>
                    </div>
                </div>


            </div>
            <!--Bid Modal -->
         

            <!-- Modal -->
          

            
        </div>
    </div>
</div>
@endsection

@push('listing_image_carusole')
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
<script>
      function submitText(){
            var html="Confirm your bid of "+$("#bid").val();
            $("#bodyModal").html(html);
        }
</script>
@endpush