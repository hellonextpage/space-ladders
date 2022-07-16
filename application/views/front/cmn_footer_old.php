<!-- Footer -->
<footer class="site-footer text-uppercase">
        <div class="footer-top bg-primary">
            <div class="container wow fadeIn" data-wow-delay="0.5s">
                <div class="row">
					<div class="col-5 col-lg-2 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services border-0">
                            <h5 class="m-b30 text-white">Quick Links</h5>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us </a></li>
                                <li><a href="service.php">Services</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-7 col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services border-0">
                            <h5 class="m-b30 text-white">Our Services</h5>
                            <ul>
                                <li><a href="rental.php">Rental Assistance</a></li>
                                <li><a href="property.php">Property Management</a></li>
                                <li><a href="property.php">Property Agreements</a></li>
                                <li><a href="repair.php">Repair & Maintenance</a></li>
                                <li><a href="plot.php">Plot / Site Monitoring</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-lg-4 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h5 class="m-b30 text-white ">Contact us</h5>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>address</strong>  #8-7-98/85/p-2/11, Agriculture Colony, Hastinapuram Central, Sagar Road, Hyderabad-500079</li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>+91 8790051799 </li>
								<li><i class="ti-email"></i><strong>email</strong>info@rohithestates.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4 ">
                        <div class="widget">
                            <h5 class="m-b30 text-white">Social Links</h5>
							
							<ul class="list-inline m-a0">
								<li><a href="#" class="site-button facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="site-button linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="site-button instagram circle "><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="site-button twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 text-left "> <span>Copyright © 2020 rohithestates.com</span> </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 text-right "> 
						<div class="widget-link "> 
							<ul>
								<li>Designed & Developed By <a href="https://nextpagetechnologies.com/" target="blank"> Next Page Technologies Pvt Ltd.</a></li> 
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="<?php echo base_url()?>/assets/js\combining.js"></script><!-- COMBINING JS  -->
<script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
</body>
</html>
<script src="<?php echo base_url()?>/assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script>
    $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        autoplay:true,
        responsive: [
        {
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
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



    function incValue(name,id){
        var incrValue = $("#"+id).val();
        $("#"+id).val(parseInt(incrValue)+parseInt(1));
    }

    function decValue(name,id){
        var decValue = $("#"+id).val();
        $("#"+id).val(parseInt(decValue)-parseInt(1));
    }


    function checkLogin(){
        var mobile = $("#userphone").val();
        var password = $("#userpassword").val();
        $.ajax({
            method:'POST',
            data:{'mobile':mobile,'password':password},
            url:'<?php echo base_url()?>home/checkLogin',
            success:function(response){
                if(response==false){
                    $(".login-err").show().fadeOut(5000);
                    //alert('Please enter valid phone number and password.');
                }else{
                    window.location.reload();
                }
            }

        })
    }

    function validateNumber(event) {
		var key = window.event ? event.keyCode : event.which;
		if (event.keyCode === 8 || event.keyCode === 46) {
			return true;
		} else if ( key < 48 || key > 57 ) {
			return false;
		} else {
			return true;
		}
	}
</script>
