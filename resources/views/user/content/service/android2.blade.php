@extends('user.master')

@section('content')

<section>
    <div class="block">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 column">
                        <div class="job-single-sec style3">
                            <div class="job-head-wide">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="job-single-head3">
                                            <div class="job-thumb"> <img src="{{ asset ('user/images/android.jpeg')}}"
                                                    alt="" /> </div>
                                        </div><!-- Job Head -->
                                    </div>
                                    <div class="col-lg-4">
                                        <a class="apply-thisjob" href="#" title=""><i
                                                class="la la-paper-plane"></i>Registrasi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="job-wide-devider">
                                <div class="row">
                                    <div class="col-lg-8 column">
                                        <div class="job-details">
                                            <h3>Job Description</h3>
                                            <p>Company is a 2016 Iowa City-born start-up that develops consectetuer
                                                adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec
                                                urna. In
                                                nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium,
                                                ligula
                                                sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit
                                                nunc
                                                tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
                                            <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae
                                                luctus
                                                metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo
                                                quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor.
                                                Sed
                                                semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis,
                                                mi
                                                neque euismod dui, eu pulvinar nunc sapien</p>
                                            <h3>Required Knowledge, Skills, and Abilities</h3>
                                            <ul>
                                                <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred
                                                    when
                                                    writing CSS)</li>
                                                <li>Proficient in Photoshop, Illustrator, bonus points for familiarity
                                                    with
                                                    Sketch (Sketch is our preferred concepting)</li>
                                                <li>Cross-browser and platform testing as standard practice</li>
                                                <li>Experience using Invision a plus</li>
                                                <li>Experience in video production a plus or, at a minimum, a
                                                    willingness to
                                                    learn</li>
                                            </ul>
                                            <h3>Education + Experience</h3>
                                            <ul>
                                                <li>Advanced degree or equivalent experience in graphic and web design
                                                </li>
                                                <li>3 or more years of professional design experience</li>
                                                <li>Direct response email experience</li>
                                                <li>Ecommerce website design experience</li>
                                                <li>Familiarity with mobile and web apps preferred</li>
                                                <li>Excellent communication skills, most notably a demonstrated ability
                                                    to
                                                    solicit and address creative and design feedback</li>
                                                <li>Must be able to work under pressure and meet deadlines while
                                                    maintaining
                                                    a positive attitude and providing exemplary customer service</li>
                                                <li>Ability to work independently and to carry out assignments to
                                                    completion
                                                    within parameters of instructions given, prescribed routines, and
                                                    standard accepted practices</li>
                                            </ul>
                                        </div>
                                        <div class="share-bar">
                                            <span>Share</span><a href="#" title="" class="share-fb"><i
                                                    class="fa fa-facebook"></i></a><a href="#" title=""
                                                class="share-twitter"><i class="fa fa-twitter"></i></a>
                                        </div>
                                        <div class="extra-job-info">
                                            <span><i class="la la-clock-o"></i><strong>35</strong> Days</span>
                                            <span><i class="la la-file-text"></i><strong>300-500</strong>
                                                Application</span>
                                            <span><i class="la la-search-plus"></i><strong>35697</strong>
                                                Displayed</span>
                                        </div>
                                        <div class="recent-jobs">
                                            <h3>Recent Jobs</h3>
                                            <div class="job-list-modern">
                                                <div class="job-listings-sec no-border">
                                                    <div class="job-listing wtabs">
                                                        <div class="job-title-sec">
                                                            <div class="c-logo"> <img src="http://placehold.it/98x51"
                                                                    alt="" /> </div>
                                                            <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                            <span>Massimo Artemisis</span>
                                                            <div class="job-lctn"><i
                                                                    class="la la-map-marker"></i>Sacramento, California
                                                            </div>
                                                        </div>
                                                        <div class="job-style-bx">
                                                            <span class="job-is ft">Full time</span>
                                                            <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                            <i>5 months ago</i>
                                                        </div>
                                                    </div>
                                                    <div class="job-listing wtabs">
                                                        <div class="job-title-sec">
                                                            <div class="c-logo"> <img src="http://placehold.it/98x51"
                                                                    alt="" /> </div>
                                                            <h3><a href="#" title="">C Developer (Senior) C .Net</a>
                                                            </h3>
                                                            <span>Massimo Artemisis</span>
                                                            <div class="job-lctn"><i
                                                                    class="la la-map-marker"></i>Sacramento, California
                                                            </div>
                                                        </div>
                                                        <div class="job-style-bx">
                                                            <span class="job-is pt ">Part time</span>
                                                            <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                            <i>5 months ago</i>
                                                        </div>
                                                    </div><!-- Job -->
                                                    <div class="job-listing wtabs">
                                                        <div class="job-title-sec">
                                                            <div class="c-logo"> <img src="http://placehold.it/98x51"
                                                                    alt="" /> </div>
                                                            <h3><a href="#" title="">Regional Sales Manager South</a>
                                                            </h3>
                                                            <span>Massimo Artemisis</span>
                                                            <div class="job-lctn"><i
                                                                    class="la la-map-marker"></i>Sacramento, California
                                                            </div>
                                                        </div>
                                                        <div class="job-style-bx">
                                                            <span class="job-is ft ">Full time</span>
                                                            <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                            <i>5 months ago</i>
                                                        </div>
                                                    </div><!-- Job -->
                                                    <div class="job-listing wtabs">
                                                        <div class="job-title-sec">
                                                            <div class="c-logo"> <img src="http://placehold.it/98x51"
                                                                    alt="" /> </div>
                                                            <h3><a href="#" title="">Marketing Dairector</a></h3>
                                                            <span>Massimo Artemisis</span>
                                                            <div class="job-lctn"><i
                                                                    class="la la-map-marker"></i>Sacramento, California
                                                            </div>
                                                        </div>
                                                        <div class="job-style-bx">
                                                            <span class="job-is ft ">Full time</span>
                                                            <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                            <i>5 months ago</i>
                                                        </div>
                                                    </div><!-- Job -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 column">
                                        <div class="job-overview">
                                            <h3>Job Overview</h3>
                                            <ul>
                                                <li><i class="la la-money"></i>
                                                    <h3>Offerd Salary</h3><span>£15,000 - £20,000</span>
                                                </li>
                                                <li><i class="la la-mars-double"></i>
                                                    <h3>Gender</h3><span>Female</span>
                                                </li>
                                                <li><i class="la la-thumb-tack"></i>
                                                    <h3>Career Level</h3><span>Executive</span>
                                                </li>
                                                <li><i class="la la-puzzle-piece"></i>
                                                    <h3>Industry</h3><span>Management</span>
                                                </li>
                                                <li><i class="la la-shield"></i>
                                                    <h3>Experience</h3><span>2 Years</span>
                                                </li>
                                                <li><i class="la la-line-chart "></i>
                                                    <h3>Qualification</h3><span>Bachelor Degree</span>
                                                </li>
                                            </ul>
                                        </div><!-- Job Overview -->
                                        <div class="quick-form-job">
                                            <h3>Contact</h3>
                                            <form>
                                                <input type="text" placeholder="Enter your Name *" />
                                                <input type="text" placeholder="Email Address*" />
                                                <input type="text" placeholder="Phone Number" />
                                                <textarea
                                                    placeholder="Message should have more than 50 characters"></textarea>
                                                <button class="submit">Send Email</button>
                                                <span>You accepts our <a href="#" title="">Terms and
                                                        Conditions</a></span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection