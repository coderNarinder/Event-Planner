  <!--footer start  here-->
    <footer>
        <div class="container cst-container">
            <div class="footer-sec">
			    <div class="cst-col">
				  <div class="footer-logo">
                    <a href="{{ url('/') }}"><img src="{{url(getMataData('website_logo','common'))}}"></a>
                    <!-- <p>Lorem Ipsum Dolor Sit Amet<span>Trusted to deliver 9.3M items since 2013</span></p> -->
                </div>
				<div class="social-icons">
                    <ul>
                        <li><a href="{{getMataData('social_facebook_link','common')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{getMataData('social_google_plus_link','common')}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="{{getMataData('social_twitter_link','common')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{getMataData('social_youtube_link','common')}}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="{{getMataData('social_instagram_link','common')}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
				</div>
                <div class="cst-col ">
                    <h4 class="active">Important Links</h4>
                    <ul>
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li><a href="{{url('/contactus')}}">Contact Us</a></li>
                        <li><a href="{{url('/about')}}">About Us</a></li>
                        <!-- <li><a href="{{url('/reviews')}}">Reviews</a></li>
                        <li><a href="{{url('/customers')}}">Customers</a></li> -->
                        <li><a href="{{url('/privacy-policy')}}">Policies</a></li>
                        <li><a href="{{url('/features-list')}}">Features</a></li>

                    </ul>
                </div>
                <div class="cst-col">
				<div class="cst-col c-c-inner">
                    <h4>Services</h4>
                    <ul> 
                        <li><a href="{{url('print-file-guide')}}">Printing</a></li>
                        <!-- <li><a href="{{url('/warehousing-fulfillment')}}">Warehousing & Fulfillment</a></li> -->
                        <!-- <li><a href="{{url('services/design-service')}}">Design Services</a></li> -->

                       <!--  <li><a href="{{url('services/photo-service')}}">Photo Services</a></li>
                        <li><a href="{{url('services/branding-service')}}">Branding Services</a></li> -->
                    </ul>
                </div>
                    <h4>Products</h4>
                    <ul>
                        <!-- <li><a href="{{url('/product_category')}}">Products</a></li> -->
                        <li><a href="{{url('/product_category')}}">Products & Pricing</a></li>
                        <li><a href="{{url( route('mockup_product_category') )}}">Mockup Generator</a></li>
                        <!-- <li><a href="{{url('upcomingProducts')}}">Upcoming Products</a></li> -->
                        <!-- <li><a href="javascript:void(0);">Products In Europe</a></li> -->
                      <!--   <li><a href="{{url('/customEmbroidered')}}">Custom Embroidered Shirts</a></li>
                        <li><a href="javascript:void(0);">Custom Sweatshirts</a></li>
                        <li><a href="{{url('holiday-order-deadlines')}}">Holiday Orders Deadlines</a></li> -->
                    </ul>
                </div>
                <div class="cst-col">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="{{url('/blogs')}}">Blog</a></li>
                        <li><a href="{{url('faq')}}">FAQ</a></li>
                        <!-- <li><a href="{{url('news')}}">News / Press</a></li> -->
                        <li><a href="{{url('sitemap')}}">Sitemap</a></li>
                        <li><a href="{{ url( route('how_its_works') ) }}">How it Works</a></li>
                        <!-- <li><a href="{{url('information')}}">Info</a></li -->
                    </ul>
                </div>
                <div class="cst-col">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="{{url('integrations')}}">Integrations</a></li>
                        <li><a href="{{url('quality')}}">Quality</a></li>
                        <li><a href="{{url('print-file-guide')}}">Print File Guide</a></li>
                        <!-- <li><a href="{{url('/api/webhook/')}}">API</a></li> -->
                        <!-- <li><a href="javascript:void(0);">Print Genie App</a></li> -->
                        <li><a href="{{url('/contactus')}}">Feature Requests</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container cst-container">
                <p>{{getMataData('bottom_line_all_right_reserved','common')}}</p>
            </div>
        </div>
    </footer>

<!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
<!-- <script src="https://cc.cdn.civiccomputing.com/8/cookieControl-8.x.min.js"></script>
<script>
    var config = {
        apiKey: 'ce290134c2bc952082d16df275bf1c14d6f3c9c3',
        product: 'COMMUNITY',
        initialState: "notify",
        statement : {
            description: 'For more information visit our',
            name : 'Privacy Policy',
            url: 'https://www.printgenie.com/privacy-policy',
            updated : '24/09/2019'
          },
        optionalCookies: [
            {
                    name: 'analytics',
                    label: 'Analytics',
                    description: '',
                    cookies: [],
                    onAccept : function(){},
                    onRevoke: function(){}
                },{
                    name: 'marketing',
                    label: 'Marketing',
                    description: '',
                    cookies: [],
                    onAccept : function(){},
                    onRevoke: function(){}
                },{
                    name: 'preferences',
                    label: 'Preferences',
                    description: '',
                    cookies: [],
                    onAccept : function(){},
                    onRevoke: function(){}
                }
        ],

        position: 'LEFT',
        theme: 'DARK'
    };
    
    CookieControl.load( config );
</script>

<noscript>GDPR Cookie Consent by <a href="https://www.freeprivacypolicy.com/">FreePrivacyPolicy</a></noscript> -->
<!-- End Cookie Consent -->
    <!--footer end  here-->

<!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
<script type="text/javascript" src="//www.FreePrivacyPolicy.com/cookie-consent/releases/3.0.0/cookie-consent.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
   cookieconsent.run({"notice_banner_type":"headline","consent_type":"express","palette":"dark","change_preferences_selector":"#changePreferences","language":"en"});
});
</script>

<noscript>GDPR Cookie Consent by <a href="https://www.freeprivacypolicy.com/">FreePrivacyPolicy</a></noscript>
<!-- End Cookie Consent -->




 