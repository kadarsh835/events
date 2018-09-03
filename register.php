<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
    <script type="text/javascript">
        function add_row() {
            $rowno = $("#employee_table ul").length;

            $rowno = $rowno + 1;
            $("#employee_table ul:last").after("<ul id='row" + $rowno + "' class='noBullet'><h5>Person " + $rowno + "</h5><li><input type='text' class='inputFields' name='name[]' placeholder='Participant Name'></li><li><input type='text' class='inputFields' name='age[]' placeholder='Contact Number'></li><li><input type='text' class='inputFields' name='job[]' placeholder='Gender:M/F'></li><li><input  id='bt' type='button' value='DELETE' onclick=delete_row('row" + $rowno + "')></li><div class='form-check-inline'><li><label >Accomodation: &nbsp;</label><label class='form-check-label'><input type='checkbox' class='form-check-input' value='1'>18th &nbsp;</label><input type='checkbox' class='form-check-input' value='2'>19th &nbsp;</label><input type='checkbox' class='form-check-input' value='3'>20th &nbsp;</label></li></div></ul>");
        }

        function delete_row(rowno) {
            $('#' + rowno).remove();
        }

        function calc() {
            $per = $("#employee_table ul").length;
            $check = 0;
            for ($i = 1; $i <= $per; $i++) {
                $check += $("#row" + $i + " .form-check-inline :checked").length;
            }

            $('.modal-body').html("<p>Participation Charge : Rs. 250</p><p>Per person accomodation charge : Rs. 50</p><p>No. of Participants : " + $per + "</p><p>Accomodation  for " + $check + " nights</p><p>You have to pay a total of : " + (250 + $check * 50) + "</p>");
            $('#myModal').modal('show');
        }
    </script>
</head>
<?php $event_name="Register";
	if($_GET["event"])
		$event_name=$_GET["event"]; ?>

<body tcap-name="main">
    <div class="goback" onclick="location.href='../index.html'"><span>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                <style type="text/css">
                    .cd-nugget-info-arrow {
                        fill: #fff;
                    }
                </style>
                <polygon class="cd-nugget-info-arrow" points="15,7 4.4,7 8.4,3 7,1.6 0.6,8 0.6,8 0.6,8 7,14.4 8.4,13 4.4,9 15,9 "></polygon>
            </svg>
        </span><span> Zeitgeist</span></div>
    <div class="container">
        <div class="row signupSection">
            <div class="col-md-6 info" style="background: url(../img/original/<?php echo $event_name." .jpg"; ?>);background-repeat: no-repeat;
                background-size: cover;">
                <h2>
                    <?php echo $event_name; ?>
                </h2>
            </div>
            <div class="col-md-6 style-2">

                <?php $login=1; $solo=0;
	if($login){
		if(!$solo){
			echo '<form action="#" method="POST" class="signupForm" name="signupform">
			<h2>Register</h2>
			<ul class="noBullet">
			  <li>
				<label for="username"></label>
				<input type="text" class="inputFields" id="username" name="username" placeholder="Team Name" value="" oninput="return userNameValidation(this.value)" required/>
			  </li>
			  <li>
				<label for="username"></label>
				<input type="text" class="inputFields" id="username" name="username" placeholder="College Name" value="" oninput="return userNameValidation(this.value)" required/>
			  </li>
			  <li>
				<label for="username"></label>
				<input type="text" class="inputFields" id="username" name="username" placeholder="Team Contact Number" value="" oninput="return userNameValidation(this.value)" required/>
			  </li>
			</ul>
			<div id="employee_table">
				<ul id="row1" class="noBullet"><h5>Team Leader</h5><li><input type="text" class="inputFields" name="name[]" placeholder="Name"></li><li><input type="text" class="inputFields" name="age[]" placeholder="Contact Number"></li><li><input type="text" class="inputFields" name="job[]" placeholder="Gender:M/F"></li><div class="form-check-inline"><li><label >Accomodation: &nbsp;</label><label class="form-check-label"><input type="checkbox" class="form-check-input" value="">18th &nbsp;</label><input type="checkbox" class="form-check-input" value="">19th &nbsp;</label><input type="checkbox" class="form-check-input" value="">20th &nbsp;</label></li></div></ul>
			</div>
			<ul class="noBullet">
				<li><input id="bt" type="button" onclick="add_row();" value="ADD PERSON"></li>
				<li id="center-btn">
					<input type="submit" id="join-btn" onclick="calc();" name="join" alt="Join" value="Register">
				</li>
			</ul>
		</form>';
		}
	else echo'<form action="#" method="POST" class="signupForm" name="signupform">
    <h2>Register</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="Name" value="" oninput="return userNameValidation(this.value)" required/>
      </li>
	  <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="College Name" value="" oninput="return userNameValidation(this.value)" required/>
      </li>
	  <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="Contact Number" value="" oninput="return userNameValidation(this.value)" required/>
      </li>
    </ul>
	<div id="employee_table">
		<ul id="row1" class="noBullet">
		<li><input type="text" class="inputFields" name="job[]" placeholder="Gender:M/F"></li><div class="form-check-inline"><li><label >Accomodation: &nbsp;</label><label class="form-check-label"><input type="checkbox" class="form-check-input" value="">18th &nbsp;</label><input type="checkbox" class="form-check-input" value="">19th &nbsp;</label><input type="checkbox" class="form-check-input" value="">20th &nbsp;</label></li></div>
		</ul>
	</div>
	<ul class="noBullet">
	<input type="submit" id="join-btn" onclick="calc();" name="join" alt="Join" value="Register">
      </li>
		</ul>';
		}else 
		echo '<form style="margin-top:70px" action="#" method="POST" class="signupForm" name="signupform">
    <h2>SIGN IN</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="Name" value="" oninput="return userNameValidation(this.value)" required/>
      </li>
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      
    </ul>
	<ul class="noBullet">
		<li id="center-btn">
			<input type="submit" id="join-btn" name="join" alt="Join" value="Sign In">
		</li>
	</ul>
  </form>';
  ?>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Charges</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Proceed</button>
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        var alertRedInput = "#8C1010";
        var defaultInput = "rgba(10, 180, 180, 1)";

        function userNameValidation(usernameInput) {
            var username = document.getElementById("username");
            var issueArr = [];
            if (/[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/.test(usernameInput)) {
                issueArr.push("No special characters!");
            }
            if (issueArr.length > 0) {
                username.setCustomValidity(issueArr);
                username.style.borderColor = alertRedInput;
            } else {
                username.setCustomValidity("");
                username.style.borderColor = defaultInput;
            }
        }

        function passwordValidation(passwordInput) {
            var password = document.getElementById("password");
            var issueArr = [];
            if (!/^.{7,15}$/.test(passwordInput)) {
                issueArr.push("Password must be between 7-15 characters.");
            }
            if (!/\d/.test(passwordInput)) {
                issueArr.push("Must contain at least one number.");
            }
            if (!/[a-z]/.test(passwordInput)) {
                issueArr.push("Must contain a lowercase letter.");
            }
            if (!/[A-Z]/.test(passwordInput)) {
                issueArr.push("Must contain an uppercase letter.");
            }
            if (issueArr.length > 0) {
                password.setCustomValidity(issueArr.join("\n"));
                password.style.borderColor = alertRedInput;
            } else {
                password.setCustomValidity("");
                password.style.borderColor = defaultInput;
            }
        }
    </script>
</body>

</html>