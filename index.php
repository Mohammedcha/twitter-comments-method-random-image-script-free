<?php include("includes/quiz_header.php"); ?>

<ul class="reskinning_content">
	<li class="cd-selected">
		<center>
			<div class="ads" >
			<!-- adsense -->
			
			
			
				<!-- adsense ad unit here مسح هاد السطر و وضع ادسنس -->
				
				
				
			<!-- adsense -->
			</div>
		</center>	
		<div class="wrapper">
			<div class="img">
				<center>
					<div>
						<img width="100%" height="100%"src="<?php echo $path . $img ?>" alt="mohammed cha" />
					</div>
				</center>
			</div>
			<div class="details">
				<h1><?php echo $quiz_answer_title ; ?></h1>
				<p><?php echo $quiz_answer_description ; ?></p>
				<center>
					<form>
						<a class="twitter button" href="http://twitter.com/share?text=<?php echo $quiz_title ; ?> &url=<?php echo $quiz_url ; ?>/?<?php echo $six_number ?>" target="blank"><i class="fa fa-twitter"></i>  <?php echo $share_button; ?>  </a>
						<input class="button" type=button value="<?php echo $refresh_button; ?>" onClick="window.location.reload()">
					</form>  
				</center>
		  </div>
		</div>
		<center>
			<div class="ads">
			<!-- adsense -->
			
			
			
				<!-- adsense ad unit here مسح هاد السطر و وضع ادسنس -->
				
				
				
			<!-- adsense -->
			</div>
		</center>	
	</li>
</ul>

<?php include("includes/quiz_footer.php"); ?>