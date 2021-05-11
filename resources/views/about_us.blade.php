<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    {{-- <link href="{{ asset('assets/css/jquery-ui.css') }}"> --}}
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <div class="page-wrapper">
        @include('includes.header')
        @include('includes.navbar')

        <div class="about-us-content">
            <h2>Welcome to our shop online</h2>
            <p>We aim to offer our customers a variety of the latest Watches. We’ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget friendly products. We offer all of this while providing excellent customer service and friendly support.

                We always keep an eye on the latest trends in Sneaker and put our customers’ wishes first. That is why we have satisfied customers all over the world, and are thrilled to be a part of the Sneaker industry.
                
                The interests of our customers are always the top priority for us, so we hope you will enjoy our products as much as we enjoy making them available to you.</p>
            <h4>What is an About Us Page?</h4>
            <p>An About Us Page is a page on your website that tells your readers all about you. It includes a detailed description covering all aspects of your business and you as entrepreneurs. This includes the products or services you are offering, how you came into being as a business, your mission and vision, your aim, and maybe something about your future goals too. Your “About Us” page is your perfect opportunity to tell a compelling story about yourself and your business.</p>
            <h4>About Us Page: What Should an About Us Page Include?</h4>
            <p>It is important not to overlook the marketing potential that lies within the content of your website’s About Us page. The About Us page plays a large part in the impression you leave on a visitor to your website. It is your chance to make the best out of this opportunity and present yourself and your brand in the best possible way. This is where people come to learn more about your brand and the people behind it. There’s also a high chance that your About Us page will be your most frequently viewed page. You need to make sure that the information you add on the About Us page accurately represents who you are as a brand. That’s why we’ve included a list that you can go through to make sure you haven’t missed anything crucial.</p>
            <h6>1.Vision and Mission</h6>
            <p>Start your About Us page by telling your customers about yourself. What is unique about you, what are your key features and what is your mission? Try to stand out by conveying your values and culture as a brand, or what brought your company together. Use this area to fully answer the question of who you are as a brand, and what you represent. This does not means that it has to be overly lengthy, but you can nonetheless use this space to communicate yourself in the way you are comfortable with, with your audience.</p>
            <h6>2.Your History</h6>
            <p>Take the visitors on your website to a trip down memory lane, and give them an insight to the history behind your store. Here, you can show them where, how, and when you started, and everything your business has accomplished on the way. This is you chance to share your relevant milestones and achievements relating to your business in an engaging way. You can even choose to present your history to your viewers in the form of a timeline, which allows you to display a large amount of information in a visually engaging manner. Your customers or potential customers might be interested in seeing how you grew over the years.</p>
            <h6>3. Team Member Profiles</h6>
            <p>Add an emotional element to your About Us page by adding details of the people that are driving the passion at your business. People find it easier to connect with human beings, so allow the personality of your crew to shine through the About Us page.</p>
            <h6>4. Multimedia & Infographics</h6>
            <p>A well-built infographic might help visitors remember about you or your business better than any amount of words. So if you think it works better for your brand or business, skip the lengthy description, or add a well-designed graphic that can help your visitors understand your concept. Or maybe you would like to add a cool video about how your business was created, or about your story and let it speak for itself.</p>
        </div>
        <div class="newslater">
            <div class="col-4">
                <h4>Sign Up For Newsletters</h4>
                <p>Be the First to Know. Sign up for newsletter today</p>
            </div>
            <div class="col-4">
                <div class="content-subs">
                    <input type="text" class="form-control" placeholder="Enter your email adresse here..."/>
                    <span>Subscribe !</span>
                </div>
            </div>
            <div class="col-4">
                <div class="newslater-icon">
                    <div class="twitter">
                        <i class="fab fa-twitter-square"></i>
                    </div>
                    <div class="google-plus">
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                    <div class="fcb">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="youtube">
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-content">
                <div class="row">
                    <div class="col-3">
                        <div class="first-content">
                            <div class="logo">
                                <img src="{{ asset('assets/images/logo.png') }}" />
                                <div class="slogan">
                                    <h4>Apex Medical</h4>
                                    <p>PARAMEDICAL STORE</p>
                                </div>
                            </div>
                            <p class="slogan-desc">We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="information">
                            <h4>Information</h4>
                            <ul>
                                <li>About Us</li>
                                <li>Delivery Information</li>
                                <li>Privacy Policy</li>
                                <li>Terms & Conditions</li>
                                <li>Contact Us</li>
                                <li>Site Map</li>
                                <li>Returns</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="Contact-Us">
                            <h4>Contact Us</h4>
                            <span class="title-contact">Address: <span>4710-4890 Breckinridge St,Fayetteville, NC 28311</span></span><br></br>
                            <span class="title-contact">Email: <span>support@plazatheme.com</span></span><br>
                            <span class="title-contact">Call us: <span>1-1001-234-5678</span></span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="Twitter-feed">
                            <h4>Our Twitter Feed</h4>
                            <div class="twitter-box">
                                <p>Check out "Alice - Multipurpose Responsive #Magento #Theme" on #Envato by @Plazathemes #Themeforest https://t.co/DNdhAwzm88</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
       
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/js/notify.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script>

    <script src="{{ asset('assets/js/toggleCat.js') }}"></script>

</body>
</html>