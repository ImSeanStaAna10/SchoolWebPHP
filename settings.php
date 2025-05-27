<?php
function load_settings($conn) {
    $query = "SELECT * FROM style_settings";
    $result = mysqli_query($conn, $query);
    $settings = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $settings[$row['setting_key']] = $row['setting_value'];
    }
    return $settings;
}
?>
