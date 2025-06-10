<!-- TOP TEN GALLERY-->

<div class="featured-content-top10s" style="overflow-x:clip;">
    <div class="feature-content-box">
        <div class="feature-big-header"><h4 data-lang-id="312-top10s-title">Monthly Top Tens</h4></div>
        <div class="feature-sub-text" data-lang-id="313-top10s-subtitle">Every month thousands of ecobricks are logged by ecobrickers around the world— and peer review by them too!</div>
    </div>
    <div class="gallery10-content-block">
        <div class="flex-container10">

            <?php
            $sql = "SELECT * FROM vw_top_10_last_month ;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

            echo '
            <div class="gal-photo10">
            <a href="details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="https://gobrik.com/'.$row["ecobrick_full_photo_url"].'?v=1" loading="lazy" alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'"></a>';
            echo '<div class="gal10-photo-text"><b>Ecobrick '.$row["ecobrick_unique_id"].'</b><br>By '.$row["ecobrick_owner"].'<br>'.$row["location"].'</div></div>';

            }

            } else {
            echo "Failed to connect to the Brikchain database";
            }

            ?>

        </div>
    </div>
</div>