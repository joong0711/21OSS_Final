<!DOCTYPE html>
<html>
<title>My Diary</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <!--div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div-->
    <a class="w3-right w3-button w3-hover-black" onclick="write_diary()">+</a>
    <div class="w3-center w3-padding-16">My Diary</div>
  </div>
</div>
  

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
  <?php
    $mysqli = mysqli_connect("localhost", "root", "", "oss_diary");

    if(mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_errno());
        exit();
    }else {
        $sql = "SELECT img, title, content FROM diary";
        $res = mysqli_query($mysqli, $sql);
        $count = 0;
        if($res) {
            while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $img  = $newArray['img'];
                $title = $newArray['title'];
                $content = $newArray['content'];
                if($count%4==0){
                  echo '<div class="w3-row-padding w3-padding-16 w3-center">';
                }
                //echo $img." ".$title." ".$content."</br>\n";
                echo '<div class="w3-quarter"><img src=uploads/'.$img.' style="width:100%;height:150px"><h3>'.$title.'</h3><p>'.$content.'</p></div>';
                
                if($count%4==3){
                  echo '</div>';
                }
                $count = $count + 1;
            }
        }else printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
    mysqli_close($mysqli);
    }
    ?>
  </div>


<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

//write diary button
function write_diary() {
  location.href='write_page.php';
}

</script>

</body>
</html>
