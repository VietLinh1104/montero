<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/montera/app/config/config.php'); 

$sql = "SELECT * FROM evlist";
$result = $db->query($sql);
$i = 1;
if ($result->num_rows > 0) {
  
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<div class=" p-0 card outline-square bg-white-item mb-4" style="width: 250px">';
        echo '<img src="'. UPLOAD_PATH . $row["imgPath"] . '" class="card-img-top outline-square" alt="...">';
        echo '<div class="card-body text-black ">';
            echo '<h6 class="card-text font-family-poppins font-semibold- mb-1 fs-16">'.$row["brandName"].' - '.$row["modelName"].'</h6>';
            echo '<div class="d-flex align-items-center">';
                echo '<h6 class="card-title fs-14 m-0 font-bold- text-gray-light">'.$row["price"].'$</h6>';

                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="14.5" height="14.5" fill="currentColor" stroke="black" stroke-width="0.3" class="bi bi-plus-circle " viewBox="0 0 16 16">';
                        echo '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>';
                        echo '<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>';
                    echo '</svg>';
                echo '</a>';
            echo '</div>';
        echo '</div>';
    echo '</div>';

    $i++;
  }
} else {
  echo "0 results";
}
$db->close();
?>