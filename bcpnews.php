<?php
$posts = [
    [
        "title" => "Advisory No. 001-0129, s2025",
        "image" => "advisory.png",
        "author" => "Social Media",
        "date" => "2025-01-29 04:00:00",
        "description" => [
            "All students and faculty are hereby informed by the management that the Learning Modality to be used for instruction from tomorrow, January 30 until February 1 (3 days), will be ONLINE (offsite).",
            "This is due to the ongoing concrete pouring at the School’s SPORTS ARENA and other Laboratory Areas, as well as the noise caused by the said construction.",
            "Your understanding and cooperation are greatly appreciated."
        ]
    ],
    [
        "title" => "Enroll now at Bestlink College of the Philippines",
        "image" => "Enrollment.png",
        "author" => "MIS Developer",
        "date" => "2025-01-21 10:00:00",
        "description" => [
            "Be trained to be the best. Be linked to success.",
            "Enrollment is ongoing for First Semester Academic Year 2024-2025",
            "<strong>COLLEGE Freshmen / Transferees / Returnees</strong>",
            "<strong>ADMISSION LINK:</strong> <a href='https://admission.bcp.edu.ph/'>https://admission.bcp.edu.ph/</a>",
            "#bcpupdate"
        ]
    ],
    [
        "title" => "We are hiring - JANUARY 20, 2025",
        "image" => "foreignLanguage.png",
        "author" => "MIS Developer",
        "date" => "2025-01-21 10:00:00",
        "description" => [
            "Be trained to be the best. Be linked to success.",
            "We are hiring! Bestlink College of the Philippines is looking for #foreignlanguageinstructor!",
            "You may visit our office at 1071 Brgy. Kaligayahan, Quirino Highway, Novalic..",
            "<strong>COLLEGE Freshmen / Transferees / Returnees</strong>",
            "<strong>ADMISSION LINK:</strong> <a href='https://admission.bcp.edu.ph/'>https://admission.bcp.edu.ph/</a>",
            "#bcpupdate"
        ]
    ]
];

$recent_posts = [
    ["image" => "advisory.png", "title" => "Advisory No. 001-0129, s2025", "date" => "January 29, 2025"],
    ["image" => "enrollment.png", "title" => "Enroll now at Bestlink College of the Philippines", "date" => "January 25, 2025"],
    ["image" => "hiring.png", "title" => "We are hiring - JANUARY 10, 2025", "date" => "January 10, 2025"],
    ["image" => "founding.png", "title" => "BCP's 23rd Founding Anniversary / January 26, 2025", "date" => "January 17, 2025"],
    ["image" => "WelcomeBcp.png", "title" => "Welcome, our dear BCPians, to another academic journey in this Jubilee Year of Hope!", "date" => "January 16, 2025"],
    ["image" => "enrollmentsoon.png", "title" => "ENROLLMENT IS ONGOING ( 06/03/2024 )", "date" => "June 7, 2024"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCP NEWS</title>
    <link rel="stylesheet" href="bcpnews.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="main-content">
            <?php foreach ($posts as $post): ?>
                <div class="post-container">
                    <div class="post-image">
                        <img src="<?= $post['image'] ?>" alt="Post Image">
                    </div>
                    <div class="post-content">
                        <h2><?= $post['title'] ?></h2>
                        <div class="meta-info">
                            <span class="author"> <i class="icon-user"></i> <?= $post['author'] ?> </span>
                            <span class="date"> <i class="icon-calendar"></i> <?= $post['date'] ?> </span>
                        </div>
                        <?php foreach ($post['description'] as $desc): ?>
                            <p><?= $desc ?></p>
                        <?php endforeach; ?>
                        <div class="read-more-container">
                            <button class="read-more">Read More</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="recent-posts">
            <h3 class="recents">Recent Posts</h3>
            <ul>
                <?php foreach ($recent_posts as $recent): ?>
                    <li>
                        <img src="<?= $recent['image'] ?>" alt="Recent Post">
                        <div class="post-info">
                            <a href="#"> <?= $recent['title'] ?> </a>
                            <p> <?= $recent['date'] ?> </p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>