<?php include 'admissionHeader.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Requirements</title>
    <link rel="stylesheet" href="admissionprocess.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="container">
        <?php 
           
            $enrollmentRequirements = [
                "College" => [
                    "icon" => "fa-solid fa-graduation-cap",
                    "categories" => [
                        "College New/Freshmen" => [
                            "Form 138 (Report Card)",
                            "Form 137",
                            "Certificate of Good Moral",
                            "PSA Authenticated Birth Certificate",
                            "Passport Size ID Picture (White Background, Formal Attire) - 2pcs.",
                            "Barangay Clearance"
                        ],
                        "College Transferee" => [
                            "Transcript of Records from Previous School",
                            "Honorable Dismissal",
                            "Certificate of Good Moral",
                            "PSA Authenticated Birth Certificate",
                            "Passport Size ID Picture (White Background, Formal Attire) - 2pcs.",
                            "Barangay Clearance"
                        ]
                    ]
                ],
                "Senior High School" => [
                    "icon" => "fa-solid fa-graduation-cap",
                    "categories" => [
                        "Original Copy of the following documents" => [
                            "Form 138 (Report Card)",
                            "Form 137",
                            "Certificate of Good Moral",
                            "2x2” ID Picture (White Background) - 2pcs.",
                            "Photocopy of NCAE Result",
                            "ESC Certificate, if a graduate of a private Junior High School",
                            "PSA Authenticated Birth Certificate",
                            "Barangay Clearance",
                            "Photocopy of Diploma"
                        ]
                    ]
                ]
            ];

            // Loop through each enrollment category and generate the HTML dynamically
            foreach ($enrollmentRequirements as $title => $details) {
                echo '<div class="card">';
                echo '<div class="icon"><i class="' . $details["icon"] . '"></i></div>';
                echo '<h2>' . $title . '</h2>';
                echo '<hr>';

                foreach ($details["categories"] as $categoryTitle => $requirements) {
                    echo '<p><strong>' . $categoryTitle . '</strong></p>';
                    echo '<ul>';
                    foreach ($requirements as $requirement) {
                        echo '<li>' . $requirement . '</li>';
                    }
                    echo '</ul>';
                }

                echo '<button>Proceed</button>';
                echo '</div>';
            }
        ?>
    </div>

</body>
<?php include 'admissionFooter.php'; ?>
</html>
