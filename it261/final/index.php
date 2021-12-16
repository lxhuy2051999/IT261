<?php
session_start();
include 'config.php';


if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

 if(isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}
?>
<?php include('./includes/header.php'); ?>
<!-- 
    Home Page variables:
 -->
<?php

 

    // --------cards-----------------------------------------------------------------------------------------------------
    $cards = array();
    $cards[0] = array('title' => "Bachelor&#039;s Degree", 'body' => 'Our bachelor’s degrees will help you advance your education and career in high-demand fields.', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-08/bachelors-degrees-at-seattlecentralcollege_0.jpg');
    $cards[1] = array('title' => "College Transfer", 'body' => 'Start your bachelor’s degree here, and transfer to a four-year university to finish your degree.', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-08/high-school-programs-seattle-central-college.jpg');
    $cards[2] = array('title' => "Career Training", 'body' => 'Learn in-demand skills from expert instructors to help you build a rewarding career.', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-08/careertraining-seattlecentralcollege.jpg');
    $cards[3] = array('title' => "High School Programs", 'body' => 'You don’t have to wait until you graduate from high school to start earning college credits.', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-08/high-school-programs-seattle-central-college.jpg');
    $cards[4] = array('title' => "Basic &amp; Transitional Studies", 'body' => 'If you aren’t ready for college-level courses, we have ESL, GED®, I-BEST and other programs.', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-08/pre-college-studies-seattlecentral_0.jpg');
    $cards[5] = array('title' => "Explore Other Programs", 'body' => 'We also offer Continuing Education, International programs, eLearning and more.', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-08/explore-all-programs-at-seattle-central-college.jpg');
    // end of cards-----------------------------------------------------------------------------------------------------

    //statistics -----------------------------------------------------------------------------------------------------
    $statistics = array();
    $statistics[0] = array('content' => 'more than {15,000} students enrolled', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-10/15000plusenrolled-seattle-central-college.png');
    $statistics[1] = array('content' => '{15:1} student-faculty ratio', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-10/15to1student-facultyratio-seattle-central.png');
    $statistics[2] = array('content' => 'students from {83} countries', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-10/international-students-83countries-represented-seattle-central.png');
    $statistics[3] = array('content' => '{&gt;50%} students of color', 'image' => 'https://seattlecentral.edu/sites/default/files/2017-10/overhalf-students-of-color-seattle-central.png');
    //end of statistics -----------------------------------------------------------------------------------------------------

    //testimonials -----------------------------------------------------------------------------------------------------
    $testimonials = array();
    $testimonials[0] = array('name' => 'Fadumo Daud', 'info' => 'Fadumo D., Respiratory Therapy student', 'review' => '&quot;To me, Seattle Central College was like home. Walking down the hall, I can see other people who look like me.&quot;', 'image' => 'https://seattlecentral.edu/sites/default/files/2019-07/fadumo-daud.jpg');
    $testimonials[1] = array('name' => 'Snow Zhou', 'info' => 'Snow Z., Business student', 'review' => '&quot;A lot of the professors are my friends and also my mentors. Sometimes I feel they are like my parents.', 'image' => 'https://seattlecentral.edu/sites/default/files/2019-07/snow-zhou.jpg');
    $testimonials[2] = array('name' => 'Xander Hurley', 'info' => 'Xander H., Business Technology student', 'review' => '&quot;I got my confidence back here. I now know what I can do and where I can go... I know that no matter what, Seattle Central gave me the foundation to have a great life.&quot;', 'image' => 'https://seattlecentral.edu/sites/default/files/2019-07/xander-hurley.jpg');
    // end of testimonials -----------------------------------------------------------------------------------------------------
?>
<!-- End of Home Page variables -->

<!-- 
    Home Page functions
 -->
<?php


    function generateProgramsCards($card){
        $result = '';
        foreach($card as $card) {
            $result .= '<div class="card">';
            $result .= '<img src="'.$card['image'].'" alt="Card image cap">';
            $result .= '<div class="card-body">';
            $result .= '<h5 class="card-title">' . $card['title'] . '</h5>';
            $result .= '<p class="card-text">' . $card['body'] . '</p>';
            $result .= '<a href="#" class="btn btn-primary">Learn More</a>';
            $result .= '</div>';
            $result .= '</div>';
        }
        return $result;
    }

    function generateStatistics($statistics) {
        $result = '';
        foreach($statistics as $statistic) {
            $result .= '<div class="statistic-card">';
            $result .= '<div class="statistic-image">';
            $result .= '<img src="' . $statistic['image'] . '" alt="">';
            $result .= '</div>';
            $content = str_replace('{', '<span>', $statistic['content']);
            $content = str_replace('}', '</span>', $content);
            $result .= '<p class="statistic-content">' . $content . '</p>';
            $result .= '</div>';
        }
        return $result;
    }

    function generateTestimonials($testimonials) {
        $result = '';
        foreach($testimonials as $testimonial) {
            $result .= '<div class="testimonial-card">';
            $result .= '<div class="testimonial-image">';
            $result .= '<img src="' . $testimonial['image'] . '" alt="'.$testimonial['name'].'">';
            $result .= '</div>';
            $result .= '<div class="testimonial-content">';
            $result .= '<p class="testimonial-review">' . $testimonial['review'] . '</p>';
            $result .= '<h4 class="testimonial-info">' . $testimonial['info'] . '</h4>';
            $result .= '</div>';
            $result .= '</div>';
        }
        return $result;
    }
?>
<!-- 
     End of Home Page functions
  -->
<!-- Home page body -->
<section class="hero">
    <div class="hero-logo">
        <img src="https://seattlecentral.edu/sites/default/files/2020-07/seattle-central-tigers.png"
            alt="Seattle Central College\'s logo">
    </div>

</section>

<section class="programs">
    <h1 class="programs-header">Programs to inspire you</h1>
    <p class="programs-sub-header">With over 25 fields of study, you’re sure to find your passion.</p>
    <div class="programs-cards-container">
        <?php echo generateProgramsCards($cards); ?>
    </div>
</section>

<section class="learn-at-scc">
    <div class="sub-background"></div>
    <h1>Learn in the heart<br /> of Seattle</h1>
</section>

<section class="statistic">
    <h1>By the Numbers</h1>
    <div class="content-container">
        <?php echo generateStatistics($statistics); ?>
    </div>
</section>

<section class="testimonials">
    <h1>
        Our students speak...
    </h1>
    <div class="content-container">
        <?php echo generateTestimonials($testimonials); ?>
    </div>
</section>

<section class="about">
    <h1>About Seattle Central College</h1>
    <p>
        What began as the first community college in Seattle, WA, has grown into a thriving center for higher education
        that supports our dynamic and growing community. For more than 50 years, Seattle Central College has provided
        effective and accessible programs – including bachelor’s degrees, associate degrees and professional
        certificates – that prepare students to succeed in a range of endeavors.
    </p>
</section>
<!-- End of home page -->

<?
include('includes/footer.php');
?>