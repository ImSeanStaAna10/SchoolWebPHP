<?php include 'admissionHeader.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMISSION</title>
    <link rel="stylesheet" href="admission.css">
</head>
<body>

<?php
echo '<div class="content">
        <p>
            The Admission\'s online application process is quick, easy, and secure. 
            You can start filling in your application now, save your work, and complete it later. 
            You will receive a unique applicant number, which allows you to access your personal application, 
            change it and add documents and submit or start new applications any time you want.
        </p>

        <h3>There are some basic requirements you should keep in mind before you start filling in your application:</h3>
        <ul>
            <li>You will graduate from Junior High School this year or have already graduated.</li>
            <li>You want to study and develop yourself in a new environment.</li>
            <li>You are able to write and communicate in the language the studies are conducted in.</li>
            <li>You will graduate ALS – Alternative Learning System, PEPT - Philippine Educational Placement Test.</li>
        </ul>
    </div>';

$steps = [
    [
        "icon" => "search.png",
        "title" => "Find a track or course of your interest",
        "description" => "The first thing you have to do to get started with the application process is to find a track/strand or course that interests you. You can use the course finder to sort through all the different opportunities. Next to the course listing, you will find buttons to start the application."
    ],
    [
        "icon" => "form.png",
        "title" => "Fill in and submit an online application form",
        "description" => "In the online application form, you have to submit personal information, academic results, and references from your teacher(s)."
    ]
];

foreach ($steps as $step) {
    echo '<div class="step">
            <div class="icon">
                <img src="' . $step["icon"] . '" alt="Step Icon">
            </div>
            <div class="text">
                <h2>' . $step["title"] . '</h2>
                <p>' . $step["description"] . '</p>
            </div>
          </div>
          <div class="divider"></div>';
}

echo '<div class="step">
        <div class="icon">
            <img src="email.png" alt="Email Icon">
        </div>
        <div class="text">
            <h2>Letter of Acceptance</h2>
            <p>After successfully completing the earlier parts of the enrolment process, you will receive an official e-mail of acceptance from us. The letter of acceptance can be conditional or unconditional.</p>
        </div>
    </div>

    <div class="divider"></div>

    <div class="step">
        <div class="text">
            <h2>Check Your DepEd Voucher Eligibility</h2>
            <p><a href="#">Click here</a> to check your eligibility for the DepEd Voucher program.</p>
        </div>
    </div>

    <div class="divider"></div>

    <div class="apply-button">
        <a href="admissionprocess.php" target="_blank" class="btn">Proceed to Online Application</a>
    </div>';
?>

<script src="script.js"></script>
</body>

<?php include 'admissionFooter.php'; ?>

</html>
