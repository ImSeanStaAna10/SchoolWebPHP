<?php 
include 'header.php'; 

// Fetch settings from the database
include_once 'db_connect.php';
include_once 'settings.php'; // Assuming settings.php loads the settings as before
$settings = load_settings($conn); // Fetch all settings

?>


<link rel="stylesheet" href="styles.css">

<div class = "the_content" style="background-color: <?php echo $settings['background_color']; ?>;" > 
<!-- Hero Section -->
<section class="hero" style="background-color: <?php echo $settings['background_color']; ?>;">
    <div class="hero-content" style="color: <?php echo $settings['body_text_color']; ?>;">
        <h1 id="title" style="font-family: <?php echo $settings['font_family']; ?>; font-size: <?php echo $settings['header_font_size']; ?>;">
            Welcome to Bestlink College of the Philippines
        </h1>
        <p id="subtitle">
            <?php echo "At Bestlink College of the Philippines, we provide and promote quality education with modern and unique techniques to enhance the skills and knowledge of our students, making them globally competitive and productive citizens."; ?>
        </p>
        <a href="admission.php" target="_blank" id="btn" style="background-color: <?php echo $settings['button_background']; ?>; color: <?php echo $settings['button_text_color']; ?>; border-radius: <?php echo $settings['button_border_radius']; ?>;"><b>Enroll Now</b></a>
    </div>
</section>

<!-- Information Boxes -->
<div class="info-container" style="font-family: <?php echo $settings['font_family']; ?>; font-size: <?php echo $settings['header_font_size']; ?>;">
    <?php 
    $infoBoxes = [
        ["icon1.png", "30,000+", "Total students enrolled in Bestlink College of the Philippines"],
        ["icon2.png", "PHP 0.00", "NO TUITION at Bestlink College of the Philippines, only pay PHP 4,975 per semester."],
        ["icon3.png", "K to 12 Program Ready", "Bestlink College of the Philippines offers K to 12 Program"]
    ];
    
    foreach ($infoBoxes as $info) {
        echo "<div class='info-box'>
                <div class='icon'><img src='{$info[0]}' alt='Icon'></div>
                <h3>{$info[1]}</h3>
                <p>{$info[2]}</p>
              </div>";
    }
    ?>
</div>

<!-- Video & Additional Info Section -->
<section class="content-container" style="background-color: <?php echo $settings['background_color']; ?>;"  style="background-color: <?php echo $settings['background_color']; ?>;" >
    <div class="video-container">
        <iframe src="https://www.youtube.com/watch?v=wPk5Y7dCZng" width="100%" height="300" frameborder="0" allowfullscreen></iframe>
    </div>
    
    <div class="info-container2">
        <?php 
        $infoDetails = [
            ["facilitiesLogo.png", "FACILITIES", "Newly constructed and improved facilities for the growing community of Bestlink College of the Philippines."],
            ["socialGatheringLogo.png", "SOCIAL GATHERING", "Bestlink College of the Philippines conducts many social gatherings and school activities to bring the best experience of College Life for the students."]
        ];
        
        foreach ($infoDetails as $detail) {
            echo "<div class='info-box2'>
                    <img src='{$detail[0]}' class='icon'>
                    <div>
                        <h3>{$detail[1]}</h3>
                        <p>{$detail[2]}</p>
                    </div>
                  </div>";
        }
        ?>
    </div>
</section>

<!-- News Update Section -->
<section class="news-update" style="background-color: <?php echo $settings['footer_background']; ?>; color: <?php echo $settings['footer_text_color']; ?>;">
    <h2>BCP NEWS UPDATE</h2>
    <div class="underline"></div>
    <p class="news-description">
        <?php echo "BCP News Update is a dedicated communication channel that keeps our school community informed about our Business Continuity Plan (BCP)."; ?>
    </p>
</section>

<!-- Campus Ministry Section -->
<section class="content">
    <div class="text" style="font-family: <?php echo $settings['font_family']; ?>;">
        <h3>Bestlink College of the Philippines - Campus Ministry</h3>
        <p><em><?php echo "Bestlink College of the Philippines is committed to providing and promoting quality education, with a unique, modern, and research-based curriculum geared towards excellence."; ?></em></p>
        <ul>
            <li>✔️ Be trained to be the <strong>best.</strong></li>
            <li>✔️ Be <strong>linked</strong> to success.</li>
        </ul>
    </div>
    <div class="image">
        <img src="newsPic.png" alt="BCP Campus Ministry">
    </div>
</section>

<!-- Advisory Section -->
<div class="advisorycontainer">
    <div class="imageadvisory">
        <img src="advisory.png" alt="Advisory">
    </div>
    <div class="textadvisory">
        <h2 id="AdvisoryTitle" style="font-family: <?php echo $settings['font_family']; ?>; color: <?php echo $settings['header_text_color']; ?>;">
            Advisory No. 001-0129, s2025
        </h2>
        <p><?php echo "All students and faculty are informed that the Learning Modality will be ONLINE (offsite) from January 30 to February 1 due to ongoing construction."; ?></p>
        <a href="#" style="color: <?php echo $settings['link_color']; ?>;">Read More</a>
        <p><small>Posted by Social Media on January 29, 2025</small></p>
    </div>
</div>

<!-- Enrollment Section -->
<div class="enrollment-container">
    <div class="enrollment-text" style="font-family: <?php echo $settings['font_family']; ?>;">
        <h2 class="enrollment-title">Enroll now at Bestlink College of the Philippines</h2>
        <p class="enrollment-quote">“Be trained to be the best. Be linked to success.”</p>
        <p>Enrollment is ongoing for First Semester Academic Year 2024-2025</p>
        <p><strong>COLLEGE Freshmen / Transferees / Returnees</strong></p>
        <p><strong>ADMISSION LINK:</strong> <a href="https://admission.bcp.edu.ph/" target="_blank" style="color: <?php echo $settings['link_color']; ?>;"><?php echo "https://admission.bcp.edu.ph/"; ?></a></p>
        <p class="hashtag">#bcpupdate</p>
        <a href="#" class="read-more" style="color: <?php echo $settings['link_color']; ?>;">Read More</a>
        <p class="posted-by">Posted by MIS Developer on January 21, 2025</p>
    </div>
    <div class="enrollment-image">
        <img src="Enrollment.png" alt="Bestlink Enrollment Poster">
    </div>
</div>

</div>

<!-- JavaScript File -->
<script src="navscroll.js"></script>

<?php include 'footer.php'; ?>
