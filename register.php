<!DOCTYPE HTML>
<html>
  <?php 
      $page_title = "Home";
      include("./includes/head.php");
  ?>
<body>
  <?php include("./includes/header.php"); ?>
	<div class="register">
		<div class="container">
		   <form> 
				 <div class="register-top-grid">
					<h1>PERSONAL INFORMATION</h1>
					 <div>
						<span>First Name<label>*</label></span>
						<input type="text"> 
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text"> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h4>LOGIN INFORMATION</h4>
							 <div>
								<span>Password<label>*</label></span>
								<input type="text">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="text">
							 </div>
							 <div class="clearfix"> </div>
					 </div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
	</div>
	<div class="grid_2">
		<div class="container"> 
			<div class="col-md-3 col_2">
				<h3>Stock Photo<br>Categories</h3>
			</div>
			<div class="col-md-9 col_5">
				<div class="col_1_of_5 span_1_of_5">
					<ul class="list1">
					    <li><a href="stock.html">Abstract</a></li>
			            <li><a href="stock.html">Animals/Wildlife</a></li>
			            <li><a href="stock.html">The Arts</a></li>
			            <li><a href="stock.html">Backgrounds/Textures</a></li>
			            <li><a href="stock.html">Beauty/Fashion</a></li>
			            <li><a href="stock.html">Buildings/Landmarks</a></li>
		            </ul>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<ul class="list1">
					    <li><a href="stock.html">Business/Finance</a></li>
			            <li><a href="stock.html">Celebrities</a></li>
			            <li><a href="stock.html">Editorial</a></li>
			            <li><a href="stock.html">Education</a></li>
			            <li><a href="stock.html">Food and Drink</a></li>
			            <li><a href="stock.html">Healthcare/Medical</a></li>
		            </ul>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<ul class="list1">
					    <li><a href="stock.html">Holidays</a></li>
			            <li><a href="stock.html">Illustrations/Clip-Art</a></li>
			            <li><a href="stock.html">Industrial</a></li>
			            <li><a href="stock.html">Interiors</a></li>
			            <li><a href="stock.html">Miscellaneous</a></li>
			            <li><a href="stock.html">Model Released Only</a></li>
		            </ul>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<ul class="list1">
					    <li><a href="stock.html">Nature</a></li>
			            <li><a href="stock.html">Objects</a></li>
			            <li><a href="stock.html">Parks/Outdoor</a></li>
			            <li><a href="stock.html">People</a></li>
			            <li><a href="stock.html">Religion</a></li>
			            <li><a href="stock.html">Science</a></li>
		            </ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
  <?php include("./includes/footer.php");?>
</body>
</html>		