<?php include'header.php'; ?>




<div class="container" style="width: 350px;">
	<div class="row">

			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="#" role="form">
						<div class="form-group">
							<h2>Identifiez-vous</h2>
						</div>
						<div class="form-group">
							<strong>Adresse E-mail Ou Nom </strong>
							<input id="email" type="email" maxlength="50" class="form-control" name="email">
						</div>
						<div class="form-group">
							<strong>Mot de passe</strong>
							<span class="right"><a href="forgot_password.php">Mot de passe oublié?</a></span>
							<input id="password" type="password" maxlength="25" class="form-control" name="password">
						</div>
						<div class="form-group" style="padding-top: 12px;">
							<button id="submit" type="button" class="btn btn-success btn-block" name="submit">Connexion</button>
						</div>
						<div id="notification"  style="padding-top: 12px;">
							
						</div>


						<div class="form-group divider">
							<hr class="left"><small>Vous etes Nouveau ?</small><hr class="right">
						</div>
						<p class="form-group"><a href="#" class="btn btn-info btn-block">Crée votre Compte</a></p>
						<p class="form-group">By signing in you are agreeing to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
						
					</form>
				</div>
			</div>
		</div>
	</div>

	<script>
	$("#submit").click(function(){
		$.post("api/login.php",
		{
			email: $("#email").val(),
			password: $("#password").val()
		},
		function(data, status){
			if(status == 'success') {
				if(data=='missing_fields'){
					$("#notification").html('<div class="alert alert-warning" role="alert"> Please fill all the fields </div>');
				}
				else if(data=='false'){
					$("#notification").html('<div class="alert alert-warning" role="alert"> Wrong email or password </div>');
				}
				else if(data=='true'){
					 window.location.replace("/paul1/index.php");
					
				}
			}
		});
	});
	</script>