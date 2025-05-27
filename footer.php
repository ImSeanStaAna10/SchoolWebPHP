<?php
// Load the settings from the database
include_once 'db_connect.php';
include_once 'settings.php'; // Assuming settings.php loads the settings as before
$settings = load_settings($conn); // Fetch all settings

// Define useful links, campuses, contact info, and social media links
$usefulLinks = [
    "Home" => "#index.php",
    "BCP College LMS" => "#https://bcpeducollege.elearningcommons.com/login/index.php",
    "BCP SHS LMS" => "#",
    "BCP SMS" => "#",
    "BCP Student E-Mail" => "#"
];

$campuses = [
    "Millionaire's Village Campus" => "#",
    "Main Campus" => "#",
    "Bulacan Campus" => "#"
];

$contactInfo = [
    "address" => "#1071 Brgy. Kaligayahan, Quirino Highway",
    "city" => "Novaliches Quezon City, Philippines 1123",
    "phone" => "417-4355",
    "email" => "bcp-inquiry@bcp.edu.ph"
];

$socialLinks = [
    "twitter" => "#",
    "facebook" => "#",
    "instagram" => "#",
    "linkedin" => "#"
];
?>

<footer class="footer">
    <div class="footer-container" style="background-color: <?= $settings['footer_background']; ?>; color: <?= $settings['footer_text_color']; ?>;">

        <!-- Useful Links -->
        <div class="footer-section">
            <h3>Useful Links</h3>
            <ul>
                <?php foreach ($usefulLinks as $name => $link): ?>
                    <li><a href="<?= $link ?>" style="color: <?= $settings['link_color']; ?>;"><?= $name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Campuses -->
        <div class="footer-section">
            <h3>Campuses</h3>
            <ul>
                <?php foreach ($campuses as $name => $link): ?>
                    <li><a href="<?= $link ?>" style="color: <?= $settings['link_color']; ?>;"><?= $name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Contact Us -->
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p><?= $contactInfo['address'] ?></p>
            <p><?= $contactInfo['city'] ?></p>
            <p><strong>Contact #:</strong> <?= $contactInfo['phone'] ?></p>
            <p><strong>Email:</strong> <a href="mailto:<?= $contactInfo['email'] ?>" style="color: <?= $settings['link_color']; ?>;"><?= $contactInfo['email'] ?></a></p>
        </div>

        <!-- About BCP -->
        <div class="footer-section about">
            <h3>About BCP</h3>
            <p>At Bestlink College of the Philippines, we provide and promote quality education with modern and 
               unique techniques to enhance the skill and knowledge of our dear students, making them globally 
               competitive and productive citizens.</p>
            <div class="social-icons">
                <?php foreach ($socialLinks as $platform => $link): ?>
                    <a href="<?= $link ?>"><i class="fab fa-<?= $platform ?>" style="color: <?= $settings['link_color']; ?>;"></i></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="footer-bottom" style="background-color: <?= $settings['footer_background']; ?>; color: <?= $settings['footer_text_color']; ?>;">
        <p>© Copyright <strong>BCP</strong>. All Rights Reserved</p>
        <p>Developed by BCP MIS Department</p>
    </div>
    <script src="navscroll.js"></script>
</footer>
