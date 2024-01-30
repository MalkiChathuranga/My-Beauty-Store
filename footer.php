   <!-- Testimonials -->
   <section class="pd-footer-sec pd-padd pd-p-b pd-p-t">
     <div class="container">

       <div class="pd-footer-row">

         <div class="pd-col-20">
           <h4>Social</h4>
           <a href="#" target="_blank"> <i class="fa-brands fa-instagram"></i> Instagram</a>
           <a href="#" target="_blank"> <i class="fa-brands fa-twitter"></i> Twitter</a>
           <a href="#" target="_blank"> <i class="fa-brands fa-facebook"></i> Facebook</a>
           <a href="#" target="_blank"> <i class="fa-brands fa-youtube"></i> Youtube</a>
         </div>

         <div class="pd-col-20">
           <h4>Contact</h4>
           <a href="#" target="_blank">Contact</a>
           <a href="#">yourexample@gmail.com</a>
           <a href="#">example@gmail.com</a>
           <a href="#">Call us +1 254 568-5479</a>
         </div>

         <div class="pd-col-20">
           <h4>About</h4>
           <a href="#">Support Center</a>
           <a href="#">Customer Support</a>
           <a href="#">About Us</a>
           <a href="checkout.php">Checkout</a>
         </div>

         <div class="pd-col-20">
           <h4>Customer Care</h4>
           <a href="faq.php">FAQ & Helps </a>
           <a href="#">Shipping & Delivery</a>
           <a href="#">Return & Exchange</a>
         </div>


         <div class="pd-col-20">
           <h4>Our Information </h4>
           <a href="#">Privacy Policy Update </a>
           <a href="terms.php">Terms & Conditions</a>
           <a href="#">Return Policy</a>
           <a href="#">Site Map</a>
         </div>

       </div>
     </div>
   </section>


   <section class="pd-bottom-bar">

     <div class="pd-credit">
       <p>Copyright &copy; <?php date('Y'); ?> <a href="#">mybutylk.com</a> All rights reserved. </p>
     </div>

     <div class="pd-bootom-pay-logoes">
       <img src="inc/img/master_card.png" />
       <img src="inc/img/paypal.jpg" />
       <img src="inc/img/visa.jpg" />
       <img src="inc/img/skrill.png" />

     </div>

   </section>









   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



   <script type="text/javascript">
     $('.pd-main-slider').slick({
       dots: false,
       infinite: true,
       speed: 500,
       fade: true,
       cssEase: 'linear'

     });
     $('.pd-deals-home-slider').slick({
       dots: false,
       infinite: true,
       arrows:true,
       speed: 500,
       fade: true,
       cssEase: 'linear',
       autoplay: true,
       speed: 800,
       autoplaySpeed: 1800,
       slidesToShow: 1

     });
     $('.pd-testi-slider').slick({
       dots: false,
       infinite: false,
       arrows:false,
       autoplay: true,
       speed: 800,
       autoplaySpeed: 1800,
       slidesToShow: 3,
       slidesToScroll: 1,
       responsive: [{
           breakpoint: 1024,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 1,
             infinite: true,
             dots: true
           }
         },
         {
           breakpoint: 600,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 1
           }
         },
         {
           breakpoint: 480,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         }
         // You can unslick at a given breakpoint now by adding:
         // settings: "unslick"
         // instead of a settings object
       ]
     });

     $('.pd-insta-slider').slick({
       dots: false,
       infinite: false,
       autoplay: true,
       arrows:false,
       speed: 800,
       autoplaySpeed: 2500,
       slidesToShow: 6,
       slidesToScroll: 1,
       responsive: [{
           breakpoint: 1024,
           settings: {
             slidesToShow: 5,
             slidesToScroll: 1,
             infinite: true,
             dots: true
           }
         },
         {
           breakpoint: 600,
           settings: {
             slidesToShow: 3,
             slidesToScroll: 1
           }
         },
         {
           breakpoint: 480,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 1
           }
         }
       ]
     });


     $('.pd-related-prod-slider').slick({
       dots: true,
       arrows:false,
       infinite: true,
       autoplay: true,
       speed: 800,
       autoplaySpeed: 2500,
       slidesToShow: 4,
       slidesToScroll: 4,
       responsive: [{
           breakpoint: 1024,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 1,
             infinite: true,
             dots: true
           }
         },
         {
           breakpoint: 600,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 1
           }
         },
         {
           breakpoint: 480,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         }
       ]
     });



     $('.product-images').slick({
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: true,
       fade: true,
       autoplay:true,
       asNavFor: '.prod-img-sld-nv'
     });

     $('.prod-img-sld-nv').slick({
       slidesToShow: 4,
       slidesToScroll: 1,
       autoplay:true,
       asNavFor: '.product-images',
       dots: false,
       arrows: false,
       centerMode: false,
       focusOnSelect: true
     });

     /*
* @Adilade Input Quantity Increment
* 
* Free to use - No warranty
*/

var input = document.querySelector('#qty');
var btnminus = document.querySelector('.qtyminus');
var btnplus = document.querySelector('.qtyplus');

if (input !== undefined && btnminus !== undefined && btnplus !== undefined && input !== null && btnminus !== null && btnplus !== null) {
	
	var min = Number(input.getAttribute('min'));
	var max = Number(input.getAttribute('max'));
	var step = Number(input.getAttribute('step'));

	function qtyminus(e) {
		var current = Number(input.value);
		var newval = (current - step);
		if(newval < min) {
			newval = min;
		} else if(newval > max) {
			newval = max;
		} 
		input.value = Number(newval);
		e.preventDefault();
	}

	function qtyplus(e) {
		var current = Number(input.value);
		var newval = (current + step);
		if(newval > max) newval = max;
		input.value = Number(newval);
		e.preventDefault();
	}
		
	btnminus.addEventListener('click', qtyminus);
	btnplus.addEventListener('click', qtyplus);
  
} // End if test


   </script>

   <script src="inc/js/main.js"></script>
   </body>

   </html>