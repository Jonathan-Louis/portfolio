	
	<footer class="footer mt-auto py-3">
	
		<div class="container">
		
			<span class="text-muted">&copy; Jonathan Louis </span>
			<a href="https://github.com/Jonathan-Louis">
				<img src="/github-logo.png" width="50px">
			</a>
			
		</div>
		
	</footer>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

	
	
	<script type="text/javascript">
	
		$("#contactForm").submit(function (e) {
				
				var error = "";
				
				if ($("#emailAddress").val() == ""){
					
					error += "The email field is empty<br>";
					
				}
				
				if ($("#emailSubject").val() == ""){
					
					error += "The subject field is empty<br>";
					
				}
				
				if ($("#emailText").val() == ""){
					
					error += "The ask us field is empty";
					
				}
				
				if (error != ""){
				
					$('#errorDiv').html('<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form: </strong><br>' + error + '</div>');
					
					return false;
					
				} else {
					
					return true;
					
				}

			
				
			});
			
			$("#homepageButton").click(function() {
				
				window.location.assign("http://jonathan-louis.great-site.net/?page=projects");
				
			});
		
	</script>
  
  
  </body>
</html>