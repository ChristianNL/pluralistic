<?php
global $conn;
include_once("AdminSpace/db.php");
echo '<link rel="stylesheet" href="css/testimonial_2.css"/>';

// Requête SQL pour récupérer les témoignages triés par nombre d'étoiles et date
$sql = "SELECT * FROM temoignages ORDER BY etoiles DESC, date_enregistrement DESC LIMIT 4";
$result = $conn->query($sql);
$output = "";


if ($result->num_rows > 0) {
    // Parcourir les résultats et afficher chaque témoignage
    while($row = $result->fetch_assoc()) {
        $output .= '<figure class="snip1533">';
        $output .= '<figure class="testimonial-snip">';
        $output .= '<div class="testimonial-rating">';
        $output .= '<fieldset class="testimonial-rating">';
        
        switch ($row['etoiles']) {
            case 5 : 
                $output .= '<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>';
                $output .= '<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>';
                $output .= '<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>';
                $output .= '<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>';
                $output .= '<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>';
                break;
            case 4 : 
                $output .= '<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>';
                $output .= '<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>';
                $output .= '<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>';
                $output .= '<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>';
                break;
            case 3 : 
                $output .= '<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>';
                $output .= '<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>';
                $output .= '<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>';
                break;
            case 2 : 
                $output .= '<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>';
                $output .= '<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>';
                break;
            default : 
            $output .= '<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>';
        }
        
        $output .= '</fieldset>';
        $output .= '</div>';
        $output .= '<figcaption>';
        $output .= '<blockquote>';
        $output .= '<p>' . $row['commentaire'] . '</p>';
        $output .= '</blockquote>';
        $output .= '<h2>' . $row['date_enregistrement'] . '</h2>';
        $output .= '<h3>' . $row['nom'] . '</h3>';
        $output .= '<h4 style="font-weight: smaller; font-style: italic; margin: 0 0 20px">chez ' . $row['structure'] . '</h4>';
        $output .= '</figcaption>';
        $output .= '</figure>';
        $output .= '</figure>';
    }
} else {
    $output = "Aucun témoignage trouvé.";
}

$conn->close();
echo "<div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'>" . $output . "</div>";
?>
