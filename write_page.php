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
    <a class="w3-right w3-button w3-hover-black" onclick="go_main()">Main</a>
    <div class="w3-center w3-padding-16">Write Diary</div>
  </div>
</div>
  

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="text" name="title" placeholder=" title" style="width:100%;height:40px;margin:10px"><br/>
    <input type="text" name="content" placeholder=" content" style="width:100%;height:150px;margin:10px"><br/>
    <input type="button" onclick="go_main()" value="Cancel" style="width:60px;height:30px;margin:3px">
    <input type="submit" name="submit" value="Submit" style="width:60px;height:30px;margin:3px">
  </form>
</div>

<script>
//write diary button
function write_diary() {
  location.href='write_page.html';
}

function go_main() {
  location.href='main_page.php';
}

</script>

</body>
</html>
