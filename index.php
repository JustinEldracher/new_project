<?php
$title = "My New Project!";

$script = "alert('This is a page-specific script!');";

$body = <<<HERE
	<h1 class="text-center text-info">Hello World!</h1>

HERE;

$body .= <<<HERE
	<div class="row">
            <div class="col-lg-12">
				<div class="alert alert-warning alert-dismissible">
					Something's Wrong!!
				</div>
                <h1>A Bootstrap Starter Template</h1>
                <p class="lead">Complete with pre-defined file paths that you won't have to change!</p>
				<textarea class="summernote"></textarea>
			</div>
		</div>
		<div class="row">
			<form name="form1" id="form1" role="form" class="col-lg-6" novalidate>
				<div class="control-group form-group">
					<div class="controls checkbox">
						<label><input type="checkbox" name="chk1" required data-validation-required-message="Check me!" /> Click Me!</label>
					</div>
				</div>
				<div class="control-group form-group has-feedback">
					<div class="controls">
						<label>Full Name:</label>
						<input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
						<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
					</div>
				</div>
				<div class="control-group form-group has-feedback">
					<div class="controls">
						<label>Phone Number:</label>
						<input type="text" class="form-control" id="phone" required 
						data-validation-regex-regex="\d-\d\d\d-\d\d\d-\d\d\d\d" 
						data-validation-regex-message="Please enter a valid phone number. (#-###-###-####)"
						data-validation-required-message="Please enter your phone number">
						<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
					</div>
				</div>
				<div class="control-group form-group has-feedback">
					<label>Email Address:</label>
					<div class="controls form-group input-group">
						<span class="input-group-addon"><span class="fa fa-at"></span></span>
						<input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
						<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
					</div>
					<p class="help-block"></p>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Message:</label>
						<textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
					</div>
				</div>
				<div id="success"></div>
				<!-- For success/fail messages -->
				<input type="submit" class="btn btn-primary" value="Send Message" />
			</form>
        </div>
        <!-- /.row -->
HERE;

include "page.php";
?>