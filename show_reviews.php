<?php
require_once('connect.php');

$review = $connection->query("SELECT name, review_text  FROM review, users WHERE review.u_id = users.user_id");

// вывод будет через html, сейчас просто для наглядности

while ($row = $review->fetch_assoc()) {

    echo '<p>' . $row['name'] . ':   '. $row['review_text'] . '</p>';
}
