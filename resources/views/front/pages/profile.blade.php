@extends('front.layouts.layout')
@section('content')
    <style>
        h1, h2, h3, h4, h5, h6, p{
            text-align: left !important;
        }
    </style>
    <div class="banner-section page-header-section style-1 login-section">
    <section class="profile-section">
        <div class="container">
            <div class="section-wrapper">
                <div class="member-profile">
                    <div class="profile-item">
                        <div class="profile-cover">
                            <img src="assets/images/profile/cover.jpg" alt="cover-pic">
                            <div class="edit-photo custom-upload">
                                <div class="file-btn"><i class="icofont-camera"></i>
                                    Edit Photo</div>
                                <input type="file">
                            </div>
                        </div>
                        <div class="profile-information">
                            <div class="profile-pic">
                                <img src="assets/images/profile/Profile.jpg" alt="DP">
                                <div class="custom-upload">
                                    <div class="file-btn">
                                        <span class="d-none d-lg-inline-block"> <i class="icofont-camera"></i>
                                            Edit</span>
                                        <span class="d-lg-none mr-0"><i class="icofont-plus"></i></span></div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="profile-name">
                                <h4>William Smith</h4>
                                <p>Active 02 Minutes Ago</p>
                            </div>
                            <ul class="profile-contact">
                                <li>
                                    <a href="#">
                                        <div class="icon"><i class="icofont-user"></i></div>
                                        <div class="text">
                                            <p>Add Friends</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon"><i class="icofont-envelope"></i></div>
                                        <div class="text">
                                            <p>Public Message</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon"><i class="icofont-envelope"></i></div>
                                        <div class="text">
                                            <p>Private Message</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="profile-item d-none">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <a href="#"><img src="assets/images/profile/Profile.jpg" alt="profile"></a>
                            </div>
                            <div class="lab-content">
                                <div class="profile-name">
                                    <div class="p-name-content">
                                        <h4>William Smith</h4>
                                        <p>Active 02 Minutes Ago</p>
                                    </div>

                                    <div class="contact-button">
                                        <button class="contact-btn">
                                            <i class="icofont-info-circle"></i>
                                        </button>
                                    </div>
                                </div>
                                <ul class="profile-contact">
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-user"></i></div>
                                            <div class="text">
                                                <p>Add Friends</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-envelope"></i></div>
                                            <div class="text">
                                                <p>Publice Message</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-envelope"></i></div>
                                            <div class="text">
                                                <p>Private Message</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="profile-details">
                        <nav class="profile-nav">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Profile</button>
                                <button class="nav-link" id="nav-friends-tab" data-bs-toggle="tab"
                                        data-bs-target="#friends" type="button" role="tab" aria-controls="friends"
                                        aria-selected="false">Friends <span class="item-number">16</span></button>
                                <button class="nav-link" id="nav-groups-tab" data-bs-toggle="tab"
                                        data-bs-target="#groups" type="button" role="tab" aria-controls="groups"
                                        aria-selected="false">Groups <span class="item-number">06</span></button>
                                <button class="nav-link" id="nav-photos-tab" data-bs-toggle="tab"
                                        data-bs-target="#photos" type="button" role="tab" aria-controls="photos"
                                        aria-selected="false">Photos</button>
                                <button class="nav-link" id="nav-media-tab" data-bs-toggle="tab" data-bs-target="#media"
                                        type="button" role="tab" aria-controls="media" aria-selected="false">Media <span
                                        class="item-number">35</span></button>
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        More
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Activity</a></li>
                                        <li><a class="dropdown-item" href="#">Privacy</a></li>
                                        <li><a class="dropdown-item" href="#">Block user</a></li>
                                    </ul>
                                </div>

                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">

                            <!-- Profile tab -->
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <article>
                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Base Info</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <ul class="info-list">
                                                            <li>
                                                                <p class="info-name">Name</p>
                                                                <p class="info-details">William Smith</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">I'm a</p>
                                                                <p class="info-details">Woman</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Loking for a</p>
                                                                <p class="info-details">Men</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Marital Status</p>
                                                                <p class="info-details">Single</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Age</p>
                                                                <p class="info-details">36</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Date of Birth</p>
                                                                <p class="info-details">27-02-1996</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Address</p>
                                                                <p class="info-details">Streop Rd, Peosur, Inphodux,
                                                                    USA.</p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Myself Summary</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <p>Collaboratively innovate compelling mindshare after
                                                            prospective partnerships Competently sereiz long-term
                                                            high-impact internal or "organic" sources via user friendly
                                                            strategic themesr areas creat Dramatically coordinate
                                                            premium partnerships rather than standards compliant
                                                            technologies ernd Dramatically matrix ethical collaboration
                                                            and idea-sharing through opensource methodologies and
                                                            Intrinsicly grow collaborative platforms vis-a-vis effective
                                                            scenarios. Energistically strategize cost effective ideas
                                                            before the worke unde.</p>
                                                    </div>
                                                </div>
                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Looking For</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <ul class="info-list">
                                                            <li>
                                                                <p class="info-name">Things I'm looking for</p>
                                                                <p class="info-details">I want a funny person</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Whatever I like</p>
                                                                <p class="info-details">I like to travel a lot</p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Lifestyle</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <ul class="info-list">
                                                            <li>
                                                                <p class="info-name">Interest</p>
                                                                <p class="info-details">Dogs,Cats</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Favorite vocations spot</p>
                                                                <p class="info-details">Maldives, Bangladesh</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Looking for</p>
                                                                <p class="info-details">Serious Relationshiop,Affair</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Smoking</p>
                                                                <p class="info-details">Casual Smoker</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Language</p>
                                                                <p class="info-details">English, French, Italian</p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div class="info-card">
                                                    <div class="info-card-title">
                                                        <h6>Physical info</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <ul class="info-list">
                                                            <li>
                                                                <p class="info-name">Height</p>
                                                                <p class="info-details">5'8 ft</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Weight</p>
                                                                <p class="info-details">72 kg</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Hair Color</p>
                                                                <p class="info-details">Black</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Eye Color</p>
                                                                <p class="info-details">Brown</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Body Type</p>
                                                                <p class="info-details">Tall</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Ethnicity</p>
                                                                <p class="info-details">Middle Eastern</p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Aside Part -->
                                        <div class="col-xl-4">
                                            <aside class="mt-5 mt-xl-0">
                                                <div class="widget search-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Filter Search Member</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Serious Dating With TuruLav Your Perfect
                                                                Match is Just a Click Away.</p>
                                                            <form action="/" class="banner-form">
                                                                <div class="gender">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">I am a </option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="person">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Looking for</option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="age">
                                                                    <div
                                                                        class="right d-flex justify-content-between w-100">
                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">18</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">36</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="city">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Choose Your Country
                                                                            </option>
                                                                            <option value="1">USA</option>
                                                                            <option value="2">UK</option>
                                                                            <option value="3">Spain</option>
                                                                            <option value="4">Brazil</option>
                                                                            <option value="5">France</option>
                                                                            <option value="6">Newzeland</option>
                                                                            <option value="7">Australia</option>
                                                                            <option value="8">Bangladesh</option>
                                                                            <option value="9">Turki</option>
                                                                            <option value="10">Chine</option>
                                                                            <option value="11">India</option>
                                                                            <option value="12">Canada</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="interest">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Your Interests
                                                                            </option>
                                                                            <option value="1">Gaming</option>
                                                                            <option value="2">Fishing</option>
                                                                            <option value="3">Skydriving</option>
                                                                            <option value="4">Swimming</option>
                                                                            <option value="5">Racing</option>
                                                                            <option value="6">Hangout</option>
                                                                            <option value="7">Tranvelling</option>
                                                                            <option value="8">Camping</option>
                                                                            <option value="9">Touring</option>
                                                                            <option value="10">Acting</option>
                                                                            <option value="11">Dancing</option>
                                                                            <option value="12">Singing</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <button class="">Find Your Partner</button>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget like-member">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>you may like</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="row row-cols-3 row-cols-sm-auto g-3">
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/01.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/02.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/03.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/04.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/05.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/06.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/07.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/08.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/09.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget active-group">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>join the group</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="group-item lab-item">
                                                                <div
                                                                    class="lab-inner d-flex flex-wrap align-items-center">
                                                                    <div class="lab-content w-100">
                                                                        <h6>Active Group A1</h6>
                                                                        <p>Colabors atively fabcate best breed and
                                                                            apcations through visionary</p>
                                                                        <ul class="img-stack d-flex">
                                                                            <li><img src="assets/images/group/group-mem/01.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/02.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/03.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/04.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/05.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/06.png"
                                                                                     alt="member-img"></li>
                                                                            <li class="bg-theme">12+</li>
                                                                        </ul>
                                                                        <div class="test"> <a href="profile.html"
                                                                                              class="lab-btn">
                                                                                <i class="icofont-users-alt-5"></i>
                                                                                View Group</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="group-item lab-item">
                                                                <div
                                                                    class="lab-inner d-flex flex-wrap align-items-center">
                                                                    <div class="lab-content w-100">
                                                                        <h6>Active Group A2</h6>
                                                                        <p>Colabors atively fabcate best breed and
                                                                            apcations through visionary</p>
                                                                        <ul class="img-stack d-flex">
                                                                            <li><img src="assets/images/group/group-mem/01.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/02.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/03.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/04.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/05.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/06.png"
                                                                                     alt="member-img"></li>
                                                                            <li class="bg-theme">16+</li>
                                                                        </ul>
                                                                        <div class="test"> <a href="profile.html"
                                                                                              class="lab-btn">
                                                                                <i class="icofont-users-alt-5"></i>
                                                                                View Group</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Frinds Tab -->
                            <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="nav-friends-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <article>
                                                <div class="row gy-4 gx-3 justify-content-center">
                                                    <div class=" col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/01.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">jenifer Guido</a> </h6>
                                                                    <p>Active 1 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/02.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Andrea Guido</a> </h6>
                                                                    <p>Active 2 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/03.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Anna hawk</a> </h6>
                                                                    <p>Active 5 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/04.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Andreas Adam</a> </h6>
                                                                    <p>Active 4 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/05.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Alaina T</a> </h6>
                                                                    <p>Active 1 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/06.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Aron Smith</a> </h6>
                                                                    <p>Active 3 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/07.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Helen Gomz</a> </h6>
                                                                    <p>Active 3 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/08.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Andrez jr</a> </h6>
                                                                    <p>Active 5 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/09.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Ladiga Guido</a> </h6>
                                                                    <p>Active 5 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/10.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Andrea Guido</a> </h6>
                                                                    <p>Active 1 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/11.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Jene Aiko</a> </h6>
                                                                    <p>Active 4 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/12.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Jhon Cena</a> </h6>
                                                                    <p>Active 2 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/13.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Irfan Patel </a> </h6>
                                                                    <p>Active 5 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/14.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Hames Radregez</a> </h6>
                                                                    <p>Active 1 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/15.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Johan ben</a> </h6>
                                                                    <p>Active 2 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/16.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Johannes</a> </h6>
                                                                    <p>Active 6 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/17.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Helena Mind</a> </h6>
                                                                    <p>Active 4 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/18.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Virat Alba</a> </h6>
                                                                    <p>Active 3 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/19.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Afrin Nawr</a> </h6>
                                                                    <p>Active 5 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-6">
                                                        <div class="lab-item member-item style-1">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <img src="assets/images/member/20.jpg"
                                                                         alt="member-img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h6><a href="#">Jason Roy</a> </h6>
                                                                    <p>Active 2 Day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Aside Part -->
                                        <div class="col-xl-4">
                                            <aside class="mt-5 mt-xl-0">
                                                <div class="widget search-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Filter Search Member</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Serious Dating With TuruLav Your Perfect
                                                                Match is Just a Click Away.</p>
                                                            <form action="/" class="banner-form">
                                                                <div class="gender">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">I am a </option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="person">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Looking for</option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="age">
                                                                    <div
                                                                        class="right d-flex justify-content-between w-100">
                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">18</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">36</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="city">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Choose Your Country
                                                                            </option>
                                                                            <option value="1">USA</option>
                                                                            <option value="2">UK</option>
                                                                            <option value="3">Spain</option>
                                                                            <option value="4">Brazil</option>
                                                                            <option value="5">France</option>
                                                                            <option value="6">Newzeland</option>
                                                                            <option value="7">Australia</option>
                                                                            <option value="8">Bangladesh</option>
                                                                            <option value="9">Turki</option>
                                                                            <option value="10">Chine</option>
                                                                            <option value="11">India</option>
                                                                            <option value="12">Canada</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="interest">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Your Interests
                                                                            </option>
                                                                            <option value="1">Gaming</option>
                                                                            <option value="2">Fishing</option>
                                                                            <option value="3">Skydriving</option>
                                                                            <option value="4">Swimming</option>
                                                                            <option value="5">Racing</option>
                                                                            <option value="6">Hangout</option>
                                                                            <option value="7">Tranvelling</option>
                                                                            <option value="8">Camping</option>
                                                                            <option value="9">Touring</option>
                                                                            <option value="10">Acting</option>
                                                                            <option value="11">Dancing</option>
                                                                            <option value="12">Singing</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <button class="">Find Your Partner</button>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget like-member">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>you may like</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="row row-cols-3 row-cols-sm-auto g-3">
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/01.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/02.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/03.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/04.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/05.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/06.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/07.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/08.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/09.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget active-group">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>join the group</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="group-item lab-item">
                                                                <div
                                                                    class="lab-inner d-flex flex-wrap align-items-center">
                                                                    <div class="lab-content w-100">
                                                                        <h6>Active Group A1</h6>
                                                                        <p>Colabors atively fabcate best breed and
                                                                            apcations through visionary</p>
                                                                        <ul class="img-stack d-flex">
                                                                            <li><img src="assets/images/group/group-mem/01.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/02.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/03.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/04.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/05.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/06.png"
                                                                                     alt="member-img"></li>
                                                                            <li class="bg-theme">12+</li>
                                                                        </ul>
                                                                        <div class="test"> <a href="profile.html"
                                                                                              class="lab-btn">
                                                                                <i class="icofont-users-alt-5"></i>
                                                                                View Group</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="group-item lab-item">
                                                                <div
                                                                    class="lab-inner d-flex flex-wrap align-items-center">
                                                                    <div class="lab-content w-100">
                                                                        <h6>Active Group A2</h6>
                                                                        <p>Colabors atively fabcate best breed and
                                                                            apcations through visionary</p>
                                                                        <ul class="img-stack d-flex">
                                                                            <li><img src="assets/images/group/group-mem/01.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/02.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/03.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/04.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/05.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/06.png"
                                                                                     alt="member-img"></li>
                                                                            <li class="bg-theme">16+</li>
                                                                        </ul>
                                                                        <div class="test"> <a href="profile.html"
                                                                                              class="lab-btn">
                                                                                <i class="icofont-users-alt-5"></i>
                                                                                View Group</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Group Tab -->
                            <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="nav-groups-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <article>
                                                <div class="row gy-3">
                                                    <div class="col-12">
                                                        <div class="group-item lab-item style-1">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                                <div class="lab-thumb me-md-4 mb-4 mb-md-0">
                                                                    <img src="assets/images/group/group-page/01.jpg"
                                                                         alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4>Active Group A2</h4>
                                                                    <p>Colabors atively fabcate best breed and
                                                                        apcations through visionary value </p>
                                                                    <ul class="img-stack d-flex">
                                                                        <li><img src="assets/images/group/group-mem/01.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/02.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/03.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/04.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/05.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/06.png"
                                                                                 alt="member-img"></li>
                                                                        <li class="bg-theme">12+</li>
                                                                    </ul>
                                                                    <div class="test"> <a href="profile.html"
                                                                                          class="lab-btn"> <i
                                                                                class="icofont-users-alt-5"></i>
                                                                            View Group</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="group-item lab-item style-1">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                                <div class="lab-thumb me-md-4 mb-4 mb-md-0">
                                                                    <img src="assets/images/group/group-page/02.jpg"
                                                                         alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4>Active Group A2</h4>
                                                                    <p>Colabors atively fabcate best breed and
                                                                        apcations through visionary value </p>
                                                                    <ul class="img-stack d-flex">
                                                                        <li><img src="assets/images/group/group-mem/01.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/02.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/03.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/04.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/05.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/06.png"
                                                                                 alt="member-img"></li>
                                                                        <li class="bg-theme">12+</li>
                                                                    </ul>
                                                                    <div class="test"> <a href="profile.html"
                                                                                          class="lab-btn"> <i
                                                                                class="icofont-users-alt-5"></i>
                                                                            View Group</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="group-item lab-item style-1">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                                <div class="lab-thumb me-md-4 mb-4 mb-md-0">
                                                                    <img src="assets/images/group/group-page/03.jpg"
                                                                         alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4>Active Group A2</h4>
                                                                    <p>Colabors atively fabcate best breed and
                                                                        apcations through visionary value </p>
                                                                    <ul class="img-stack d-flex">
                                                                        <li><img src="assets/images/group/group-mem/01.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/02.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/03.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/04.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/05.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/06.png"
                                                                                 alt="member-img"></li>
                                                                        <li class="bg-theme">12+</li>
                                                                    </ul>
                                                                    <div class="test"> <a href="profile.html"
                                                                                          class="lab-btn"> <i
                                                                                class="icofont-users-alt-5"></i>
                                                                            View Group</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="group-item lab-item style-1">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                                <div class="lab-thumb me-md-4 mb-4 mb-md-0">
                                                                    <img src="assets/images/group/group-page/04.jpg"
                                                                         alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4>Active Group A2</h4>
                                                                    <p>Colabors atively fabcate best breed and
                                                                        apcations through visionary value </p>
                                                                    <ul class="img-stack d-flex">
                                                                        <li><img src="assets/images/group/group-mem/01.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/02.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/03.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/04.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/05.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/06.png"
                                                                                 alt="member-img"></li>
                                                                        <li class="bg-theme">12+</li>
                                                                    </ul>
                                                                    <div class="test"> <a href="profile.html"
                                                                                          class="lab-btn"> <i
                                                                                class="icofont-users-alt-5"></i>
                                                                            View Group</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="group-item lab-item style-1">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                                <div class="lab-thumb me-md-4 mb-4 mb-md-0">
                                                                    <img src="assets/images/group/group-page/05.jpg"
                                                                         alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4>Active Group A2</h4>
                                                                    <p>Colabors atively fabcate best breed and
                                                                        apcations through visionary value </p>
                                                                    <ul class="img-stack d-flex">
                                                                        <li><img src="assets/images/group/group-mem/01.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/02.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/03.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/04.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/05.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/06.png"
                                                                                 alt="member-img"></li>
                                                                        <li class="bg-theme">12+</li>
                                                                    </ul>
                                                                    <div class="test"> <a href="profile.html"
                                                                                          class="lab-btn"> <i
                                                                                class="icofont-users-alt-5"></i>
                                                                            View Group</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="group-item lab-item style-1">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-4">
                                                                <div class="lab-thumb me-md-4 mb-4 mb-md-0">
                                                                    <img src="assets/images/group/group-page/02.jpg"
                                                                         alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4>Active Group A2</h4>
                                                                    <p>Colabors atively fabcate best breed and
                                                                        apcations through visionary value </p>
                                                                    <ul class="img-stack d-flex">
                                                                        <li><img src="assets/images/group/group-mem/01.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/02.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/03.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/04.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/05.png"
                                                                                 alt="member-img"></li>
                                                                        <li><img src="assets/images/group/group-mem/06.png"
                                                                                 alt="member-img"></li>
                                                                        <li class="bg-theme">12+</li>
                                                                    </ul>
                                                                    <div class="test"> <a href="profile.html"
                                                                                          class="lab-btn"> <i
                                                                                class="icofont-users-alt-5"></i>
                                                                            View Group</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Aside Part -->
                                        <div class="col-xl-4">
                                            <aside class="mt-5 mt-xl-0">
                                                <div class="widget search-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Filter Search Member</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Serious Dating With TuruLav Your Perfect
                                                                Match is Just a Click Away.</p>
                                                            <form action="/" class="banner-form">
                                                                <div class="gender">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">I am a </option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="person">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Looking for</option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="age">
                                                                    <div
                                                                        class="right d-flex justify-content-between w-100">
                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">18</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">36</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="city">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Choose Your Country
                                                                            </option>
                                                                            <option value="1">USA</option>
                                                                            <option value="2">UK</option>
                                                                            <option value="3">Spain</option>
                                                                            <option value="4">Brazil</option>
                                                                            <option value="5">France</option>
                                                                            <option value="6">Newzeland</option>
                                                                            <option value="7">Australia</option>
                                                                            <option value="8">Bangladesh</option>
                                                                            <option value="9">Turki</option>
                                                                            <option value="10">Chine</option>
                                                                            <option value="11">India</option>
                                                                            <option value="12">Canada</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="interest">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Your Interests
                                                                            </option>
                                                                            <option value="1">Gaming</option>
                                                                            <option value="2">Fishing</option>
                                                                            <option value="3">Skydriving</option>
                                                                            <option value="4">Swimming</option>
                                                                            <option value="5">Racing</option>
                                                                            <option value="6">Hangout</option>
                                                                            <option value="7">Tranvelling</option>
                                                                            <option value="8">Camping</option>
                                                                            <option value="9">Touring</option>
                                                                            <option value="10">Acting</option>
                                                                            <option value="11">Dancing</option>
                                                                            <option value="12">Singing</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <button class="">Find Your Partner</button>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget like-member">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>you may like</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="row row-cols-3 row-cols-sm-auto g-3">
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/01.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/02.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/03.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/04.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/05.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/06.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/07.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/08.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/09.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget active-group">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>join the group</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="group-item lab-item">
                                                                <div
                                                                    class="lab-inner d-flex flex-wrap align-items-center">
                                                                    <div class="lab-content w-100">
                                                                        <h6>Active Group A1</h6>
                                                                        <p>Colabors atively fabcate best breed and
                                                                            apcations through visionary</p>
                                                                        <ul class="img-stack d-flex">
                                                                            <li><img src="assets/images/group/group-mem/01.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/02.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/03.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/04.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/05.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/06.png"
                                                                                     alt="member-img"></li>
                                                                            <li class="bg-theme">12+</li>
                                                                        </ul>
                                                                        <div class="test"> <a href="profile.html"
                                                                                              class="lab-btn">
                                                                                <i class="icofont-users-alt-5"></i>
                                                                                View Group</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="group-item lab-item">
                                                                <div
                                                                    class="lab-inner d-flex flex-wrap align-items-center">
                                                                    <div class="lab-content w-100">
                                                                        <h6>Active Group A2</h6>
                                                                        <p>Colabors atively fabcate best breed and
                                                                            apcations through visionary</p>
                                                                        <ul class="img-stack d-flex">
                                                                            <li><img src="assets/images/group/group-mem/01.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/02.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/03.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/04.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/05.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/06.png"
                                                                                     alt="member-img"></li>
                                                                            <li class="bg-theme">16+</li>
                                                                        </ul>
                                                                        <div class="test"> <a href="profile.html"
                                                                                              class="lab-btn">
                                                                                <i class="icofont-users-alt-5"></i>
                                                                                View Group</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Photos Tab -->
                            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="nav-photos-tab">
                                <div class="photo-title text-center border-radius-2 bg-theme p-1 mb-4">
                                    <h3 class="mb-0">All Uploaded Pictures</h3>
                                </div>
                                <div
                                    class="row g-3 g-lg-4 justify-content-center row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6">
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/03.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/02.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/01.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/04.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/05.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/06.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/07.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/08.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/09.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/10.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/11.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/12.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/13.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/14.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/15.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/16.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/17.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/18.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/19.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="gallery-img">
                                            <img src="assets/images/member/20.jpg" alt="image" class="rounded">

                                        </div>
                                    </div>
                                </div>
                                <div class="load-btn">
                                    <a href="#" class="lab-btn">Load More<i class="icofont-spinner"></i></a>
                                </div>
                            </div>
                            <!-- Media Tab -->
                            <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="nav-media-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <article>
                                                <div class="media-wrapper">
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="all-media-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#all-media"
                                                                    type="button" role="tab" aria-controls="all-media"
                                                                    aria-selected="true"><i class="icofont-star"></i> All
                                                                Media</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="album-tab" data-bs-toggle="tab"
                                                                    data-bs-target="#album" type="button" role="tab"
                                                                    aria-controls="album" aria-selected="false"><i
                                                                    class="icofont-layout"></i> Albums
                                                                <span>04</span></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="photos-media-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#photos-media"
                                                                    type="button" role="tab" aria-controls="photos-media"
                                                                    aria-selected="false"><i class="icofont-image"></i>
                                                                Photos <span>12</span></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="video-tab" data-bs-toggle="tab"
                                                                    data-bs-target="#video" type="button" role="tab"
                                                                    aria-controls="video" aria-selected="false"><i
                                                                    class="icofont-video-alt"></i> Videos
                                                                <span>0</span></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="music-tab" data-bs-toggle="tab"
                                                                    data-bs-target="#music" type="button" role="tab"
                                                                    aria-controls="music" aria-selected="false"><i
                                                                    class="icofont-music-disk"></i> Music
                                                                <span>0</span></button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContent">
                                                        <!-- All Media Tab -->
                                                        <div class="tab-pane fade show active" id="all-media"
                                                             role="tabpanel" aria-labelledby="all-media-tab">
                                                            <div class="media-title">
                                                                <h3>Media Gallery</h3>
                                                            </div>
                                                            <div class="media-content">
                                                                <ul class="media-upload">
                                                                    <li class="upload-now">
                                                                        <div class="custom-upload">
                                                                            <div class="file-btn"><i
                                                                                    class="icofont-upload-alt"></i>
                                                                                Upload</div>
                                                                            <input type="file">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div
                                                                    class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-4 g-3">
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/01.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/02.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/03.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/04.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/05.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/06.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/07.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/08.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/09.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/10.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/11.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/12.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/03.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/02.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="load-btn">
                                                                    <a href="#" class="lab-btn">Load More<i
                                                                            class="icofont-spinner"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Albums -->
                                                        <div class="tab-pane fade" id="album" role="tabpanel"
                                                             aria-labelledby="album-tab">
                                                            <div class="media-title">
                                                                <h3>Album Lists</h3>
                                                            </div>
                                                            <div class="media-content">
                                                                <ul class="media-upload">
                                                                    <li class="upload-now">
                                                                        <div class="custom-upload">
                                                                            <div class="file-btn"><i
                                                                                    class="icofont-upload-alt"></i>
                                                                                Upload</div>
                                                                            <input type="file">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="row g-4">
                                                                    <div class="col-lg-4 col-sm-6">
                                                                        <div class="album text-center">
                                                                            <div class="album-thumb">
                                                                                <a href="#">
                                                                                    <img src="assets/images/member/02.jpg"
                                                                                         alt="album">
                                                                                </a>
                                                                            </div>
                                                                            <div class="album-content">
                                                                                <h6>Private</h6>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-sm-6">
                                                                        <div class="album text-center">
                                                                            <div class="album-thumb">
                                                                                <a href="#">
                                                                                    <img src="assets/images/member/03.jpg"
                                                                                         alt="album">
                                                                                </a>
                                                                            </div>
                                                                            <div class="album-content">
                                                                                <h6>Crush</h6>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-sm-6">
                                                                        <div class="album text-center">
                                                                            <div class="album-thumb">
                                                                                <a href="#">
                                                                                    <img src="assets/images/member/06.jpg"
                                                                                         alt="album">
                                                                                </a>
                                                                            </div>
                                                                            <div class="album-content">
                                                                                <h6>Public</h6>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-sm-6">
                                                                        <div class="album text-center">
                                                                            <div class="album-thumb">
                                                                                <a href="#">
                                                                                    <img src="assets/images/member/08.jpg"
                                                                                         alt="album">
                                                                                </a>
                                                                            </div>
                                                                            <div class="album-content">
                                                                                <h6>Favorite</h6>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="load-btn">
                                                                    <a href="#" class="lab-btn">Load More<i
                                                                            class="icofont-spinner"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Photos -->
                                                        <div class="tab-pane fade" id="photos-media" role="tabpanel"
                                                             aria-labelledby="photos-media-tab">
                                                            <div class="media-title">
                                                                <h2>All Photos</h2>
                                                            </div>
                                                            <div class="media-content">
                                                                <ul class="media-upload">
                                                                    <li class="upload-now">
                                                                        <div class="custom-upload">
                                                                            <div class="file-btn"><i
                                                                                    class="icofont-upload-alt"></i>
                                                                                Upload</div>
                                                                            <input type="file">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div
                                                                    class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-4 g-3">
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/01.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/02.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/03.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/04.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/05.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/06.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/07.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/08.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/09.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/10.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/11.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/12.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/03.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="media-thumb">
                                                                            <img src="assets/images/member/02.jpg"
                                                                                 alt="img">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="load-btn">
                                                                    <a href="#" class="lab-btn">Load More<i
                                                                            class="icofont-spinner"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Videos -->
                                                        <div class="tab-pane fade" id="video" role="tabpanel"
                                                             aria-labelledby="video-tab">
                                                            <div class="media-title">
                                                                <h3>All Videos</h3>
                                                            </div>
                                                            <div class="media-content">
                                                                <ul class="media-upload">
                                                                    <li class="upload-now">
                                                                        <div class="custom-upload">
                                                                            <div class="file-btn"><i
                                                                                    class="icofont-upload-alt"></i>
                                                                                Upload</div>
                                                                            <input type="file">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p><i class="icofont-worried"></i> Sorry !!
                                                                            There's no media found for the
                                                                            request !! </p>
                                                                    </div>
                                                                </div>
                                                                <div class="load-btn">
                                                                    <a href="#" class="lab-btn">Load More<i
                                                                            class="icofont-spinner"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Music -->
                                                        <div class="tab-pane fade" id="music" role="tabpanel"
                                                             aria-labelledby="music-tab">
                                                            <div class="media-title">
                                                                <h3>All Music</h3>
                                                            </div>
                                                            <div class="media-content">
                                                                <ul class="media-upload">
                                                                    <li class="upload-now">
                                                                        <div class="custom-upload">
                                                                            <div class="file-btn"><i
                                                                                    class="icofont-upload-alt"></i>
                                                                                Upload</div>
                                                                            <input type="file">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p><i class="icofont-worried"></i> Sorry !!
                                                                            There's no media found for the
                                                                            request !! </p>
                                                                    </div>
                                                                </div>
                                                                <div class="load-btn">
                                                                    <a href="#" class="lab-btn">Load More<i
                                                                            class="icofont-spinner"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </article>
                                        </div>
                                        <!-- Aside Part -->
                                        <div class="col-xl-4">
                                            <aside class="mt-5 mt-xl-0">
                                                <div class="widget search-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Filter Search Member</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Serious Dating With TuruLav Your Perfect
                                                                Match is Just a Click Away.</p>
                                                            <form action="/" class="banner-form">
                                                                <div class="gender">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">I am a </option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="person">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Looking for</option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="age">
                                                                    <div
                                                                        class="right d-flex justify-content-between w-100">
                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">18</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">36</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="city">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Choose Your Country
                                                                            </option>
                                                                            <option value="1">USA</option>
                                                                            <option value="2">UK</option>
                                                                            <option value="3">Spain</option>
                                                                            <option value="4">Brazil</option>
                                                                            <option value="5">France</option>
                                                                            <option value="6">Newzeland</option>
                                                                            <option value="7">Australia</option>
                                                                            <option value="8">Bangladesh</option>
                                                                            <option value="9">Turki</option>
                                                                            <option value="10">Chine</option>
                                                                            <option value="11">India</option>
                                                                            <option value="12">Canada</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="interest">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Your Interests
                                                                            </option>
                                                                            <option value="1">Gaming</option>
                                                                            <option value="2">Fishing</option>
                                                                            <option value="3">Skydriving</option>
                                                                            <option value="4">Swimming</option>
                                                                            <option value="5">Racing</option>
                                                                            <option value="6">Hangout</option>
                                                                            <option value="7">Tranvelling</option>
                                                                            <option value="8">Camping</option>
                                                                            <option value="9">Touring</option>
                                                                            <option value="10">Acting</option>
                                                                            <option value="11">Dancing</option>
                                                                            <option value="12">Singing</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <button class="">Find Your Partner</button>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget like-member">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>you may like</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="row row-cols-3 row-cols-sm-auto g-3">
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/01.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/02.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/03.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/04.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/05.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/06.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/07.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/08.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="#">
                                                                            <img src="assets/images/widget/09.jpg"
                                                                                 alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget active-group">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>join the group</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="group-item lab-item">
                                                                <div
                                                                    class="lab-inner d-flex flex-wrap align-items-center">
                                                                    <div class="lab-content w-100">
                                                                        <h6>Active Group A1</h6>
                                                                        <p>Colabors atively fabcate best breed and
                                                                            apcations through visionary</p>
                                                                        <ul class="img-stack d-flex">
                                                                            <li><img src="assets/images/group/group-mem/01.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/02.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/03.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/04.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/05.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/06.png"
                                                                                     alt="member-img"></li>
                                                                            <li class="bg-theme">12+</li>
                                                                        </ul>
                                                                        <div class="test"> <a href="profile.html"
                                                                                              class="lab-btn">
                                                                                <i class="icofont-users-alt-5"></i>
                                                                                View Group</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="group-item lab-item">
                                                                <div
                                                                    class="lab-inner d-flex flex-wrap align-items-center">
                                                                    <div class="lab-content w-100">
                                                                        <h6>Active Group A2</h6>
                                                                        <p>Colabors atively fabcate best breed and
                                                                            apcations through visionary</p>
                                                                        <ul class="img-stack d-flex">
                                                                            <li><img src="assets/images/group/group-mem/01.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/02.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/03.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/04.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/05.png"
                                                                                     alt="member-img"></li>
                                                                            <li><img src="assets/images/group/group-mem/06.png"
                                                                                     alt="member-img"></li>
                                                                            <li class="bg-theme">16+</li>
                                                                        </ul>
                                                                        <div class="test"> <a href="profile.html"
                                                                                              class="lab-btn">
                                                                                <i class="icofont-users-alt-5"></i>
                                                                                View Group</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
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
    </div>

@endsection
