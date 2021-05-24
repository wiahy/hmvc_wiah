<div class="container" style="padding:64px 0">
<?php
print_r($user);

?>

<div class="container" style="padding-bottom: 64px; padding-top:64px">
	<form>
	  <div class="form-group row">
		<label for="user" class="col-sm-2 col-form-label">Username</label>
		<div class="col-sm-10">
		  <input value="<?php echo $user[0]['username'] ?>" type="text" class="form-control" name="user" id="user" placeholder="Username">
		</div>
	  </div>
	  <div class="form-group row">
		<label for="pass" class="col-sm-2 col-form-label">Password</label>
		<div class="col-sm-10">
		  <input value="<?php echo $user[0]['password'] ?>" type="password" class="form-control" id="pass" name="pass" placeholder="Password">
		</div>
	  </div>
	  <div class="form-group row">
		<div class="col-sm-2">Checkbox</div>
		<div class="col-sm-10">
		<?php 
			$checkadmin = $checkuser = "";
			if ($user[0]['level'] == "admin") $checkadmin = "checked";
			else $checkuser = "checked";
		?>
		
		  <div class="form-check">
			<input class="form-check-input" <?php echo $checkadmin ?> type="radio" name="opsilevel" id="opsiadmin">
			<label class="form-check-label" for="opsiadmin">
			  Admin
			</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" <?php echo $checkuser ?> type="radio" name="opsilevel" id="opsiuser">
			<label class="form-check-label" for="opsiuser">
			  User
			</label>
		  </div>
		  
		</div>
	  </div>
	  <div class="form-group row">
		<div class="col-sm-10">
		  <button type="submit" class="btn btn-primary">Sign in</button>
		</div>
	  </div>
	</form>
</div>
</div>