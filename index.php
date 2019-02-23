<html>
<head>
<title>
<?php
$name = 'Citations.php';
echo "$name\n";
include 'convert.php';
?>
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="citations.css">
</head>

<body class="black_bg">
<nav class="nav_color navbar navbar-default black_bg">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="/citations.php"><img id="logo" class="light_up" src="data_4_citations/cfmapps2.png"></a>
    </div>
  </div>
</nav>

<div class="title light_up">
</div>
<br>
<br>
<h1 class="white_heading"><center>Chicago MS Citations:</center></h1>
<br>
<br>
<div class="container">
	<div class="row">
	  <form role="form" name="input_form" action="" method="post">
      <label class="blue_item" for="$type">Select Resource Type </label>
      <select name="$Type" id="form_select" value="book" class="white_bg">
        <option value="book">book</option>
        <option value="website">website</option>
        <option value="lecture">lecture</option>
        <option value="journal">journal</option>
        <option value="magazine">magazine</option>
        <option value="presentation">presentation</option>
        <option value="newspaper">newspaper</option>
        <option value="interview">interview</option>
        <option value="film_music_rec">film_music_rec</option>
      </select>
      <br>
      <br>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$Title">$Title</label>
            <input type="text" class="form-control" name="$Title" value="Php for Dummies">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$Sub_Title">$Sub_Title</label>
            <input type="text" class="form-control" name="$Sub_Title" value="Intergrated Approach">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$Author_FN">$Author_FN</label>
            <input type="text" class="form-control" name="$Author_FN" value="John">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$Author_INIT">$Author_INIT</label>
            <input type="text" class="form-control" name="$Author_INIT" value="F">
        </div>

        <div class="clearfix"></div>

        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$Author_LN">$Author_LN</label>
            <input type="text" class="form-control" name="$Author_LN" value="Don">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$Publisher">$Publisher</label>
            <input type="text" class="form-control" name="$Publisher" value="Pearson">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$City_Published">$City_Published</label>
            <input type="text" class="form-control" name="$City_Published" value="Harare">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">  <!-- can get $Year_Published from the $Month_Published-->
            <label class="blue_item"  for="$Month_Published">$Month_Published</label>
            <input type="month" value="2019-02" class="form-control" name="$Month_Published">
        </div>

        <div class="clearfix"></div>

        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$ISBN">$ISBN</label>
            <input type="number" class="form-control" name="$ISBN" value="0123456789">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$Url_Doi">$Url_Doi</label>
            <input type="url" class="form-control" name="$Url_Doi" value="https://www.johndon.com">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$Date_Accessed">$Date_Accessed</label>
            <input type="date" value="1990-07-23" class="form-control" name="$Date_Accessed">
        </div>
        <div class="form-group col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <label class="blue_item"  for="$PageNum">$PageNum</label>
            <input type="number" class="form-control" name="$PageNum" value="27">
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-10 col-sm-3 col-md-3 col-lg-3">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
    <div class="clearfix"></div>
    <br>
    <br>
	</div>
</div>

<div class="cit_section light_up blue_bg">
  <div class="output panel panel-default light_up white_bg">
    <output id="output" form="input_form"  name="output">
      <center><h1 class="black_heading">Output:</h3></center>
      <?php
      if ($_POST) {
        $res = processor();
        $parts = explode("&",$res);
        echo "<br>";
        echo "<u>Footnote:</u> <br>";
        echo "$parts[0]<br><br>";
        echo "<br>";
        echo "<u>Bibliographic_entry:</u><br>";
        echo " $parts[1]<br><br>";
      } ?>
    </output>
  </div>
</div>

<div class="other_rsc light_up black_bg" id="other_rsc">
  <br>
  <h1 align="center" class="white_heading"> Other Resources </h1>
  <br> <br>
  <center><img src="data_4_citations/arrow.png" alt="" id="arrow" class="light_up"></center>
  <br>
  <br>
  <div class="grid">
    <div class="grid_item light_up">
      <!-- spacer-->
    </div>
    <div class="grid_item light_up">
      <a href="https://www.chicagomanualofstyle.org/home.html"><img src="data_4_citations/grid_item_1.png" alt=""></a>
    </div>
    <div class="grid_item light_up">
      <a href="https://www.onlineschools.org/online-writing-center/"><img src="data_4_citations/grid_item_6.png" alt=""></a>
    </div>
    <div class="grid_item light_up">
      <a href="https://www.chicagomanualofstyle.org/tools_citationguide.html"><img src="data_4_citations/grid_item_2.png" alt=""></a>
    </div>
    <div class="grid_item">
      <!-- spacer -->
    </div>
    <div class="grid_item light_up">
      <a href="https://www.chicagomanualofstyle.org/help-tools/resources.html"><img src="data_4_citations/grid_item_4.png" alt=""></a>
    </div>
    <div class="grid_item light_up">
      <a href="https://www.chicagomanualofstyle.org/help-tools/Videos.html"><img src="data_4_citations/grid_item_5.png" alt=""></a>
    </div>
    <div class="grid_item light_up">
      <a href="https://www.chicagomanualofstyle.org/qanda/latest.html"><img src="data_4_citations/grid_item_3.png" alt=""></a>
    </div>
  </div>
  <br> <br> <br> <br> <br> <br>
</div>

<br> <br> <br> <br> <br>

<footer class="light_up black_bg">
  <a href="https://www.chicagomanualofstyle.org/home.html"><img class="inline" src="data_4_citations/cmos_online2.png" alt="" width="300px" height="80px"></a>
  <a href="https://www.onlineschools.org/online-writing-center/"><img class="inline" src="data_4_citations/online_school2.png" alt="" width="300px" height="80px"></a>
  <h4 style="float:right;"="right" class="inline white_item">Citations Made Easy! Copyright 2019</h4>
</footer>

</body>
</html>
