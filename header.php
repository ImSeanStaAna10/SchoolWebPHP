<?php
$siteTitle = "Bestlink College of the Philippines";
$menuItems = [
    "ABOUT BCP" => "about.php",
    "ADMISSION" => "admission.php",
    "BCP NEWS" => "bcpnews.php",
    "STUDENT SERVICES" => "#",
    "ACADEMICS" => "#",
    "CAREERS" => "#",
    "SETTINGS" => "settings_page.php"
];

// Load styling settings from the database
include 'db_connect.php'; // your new database connection
include 'settings.php';   // settings loading function

// Load settings dynamically
$settings = load_settings($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($siteTitle) ?></title>
    <link rel="stylesheet" href="styles.css">

    <style>
        :root {
            --header-background: <?= htmlspecialchars($settings['header_background']); ?>;
            --header-text-color: <?= htmlspecialchars($settings['header_text_color']); ?>;
            --header-scrolled-background: <?= htmlspecialchars($settings['nav_link_hover_color']); ?>;
            --header-scrolled-text-color: <?= htmlspecialchars($settings['nav_link_hover_color']); ?>;
            --navbar-text-color: <?= htmlspecialchars($settings['nav_link_color']); ?>;
            --body-background-color: <?= htmlspecialchars($settings['button_background']); ?>;
            --button-color: <?= htmlspecialchars($settings['button_color']); ?>;
            --button-hover-color: <?= htmlspecialchars($settings['nav_link_hover_color']); ?>;
            --footer-background-color: <?= htmlspecialchars($settings['footer_background']); ?>;
            --footer-text-color: <?= htmlspecialchars($settings['footer_text_color']); ?>;
            --header-link-underline: <?= htmlspecialchars($settings['link_underline']); ?>;
            
           
        }

        body {
            background-color: var(--body-background-color);
            color: var(--navbar-text-color);
            font-family: <?= htmlspecialchars($settings['font_family']); ?>;
            font-size: <?= htmlspecialchars($settings['font_size']); ?>;
        }

        header {
            background-color: var(--header-background);
            color: var(--header-text-color);
            padding: 20px;
            text-align: center;
        }

        header.scrolled {
            background-color: var(--header-scrolled-background);
            color: var(--header-scrolled-text-color);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: var(--navbar-text-color);
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: var(--button-hover-color);
            link: var( --header-link-underline);
        }

        .button {
            background-color: var(--button-color);
            color: var(--header-text-color);
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: var(--button-hover-color);
            
        }

        footer {
            background-color: var(--footer-background-color);
            color: var(--footer-text-color);
            padding: 20px;
            text-align: center;
        }
        
    </style>
</head>
<body>

<header id="header">
    <div class="logo" style="background-color: <?php echo $settings['background_color']; ?>;">
        <a href="index.php">
            <img src="bcp.png" alt="BCP Logo" style="width: <?php echo $settings['logo_width']; ?>;" style="height: <?php echo $settings['logo_height']; ?>;">
        </a>
    </div>

    <nav>
        <ul>
            <?php foreach ($menuItems as $name => $link): ?>
                <li><a href="<?= htmlspecialchars($link) ?>"><?= htmlspecialchars($name) ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>




<script src="navscroll.js"></script>
</body>
</html>
