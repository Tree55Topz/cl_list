<!-- Register Modal -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-leaf"></span> Register </h4>
                </div>
				<form action="register.php" method="post"> 
					<div class="modal-body" style="padding:40px 50px;">
							<div class="form-group">
								<label for="register_usrname"><span class="glyphicon glyphicon-user"></span> Username </label>
								<input type="text" class="form-control" name="username"  placeholder="Enter usernaenae">
							</div>
							<div class="form-group">
								<label for="register_email"> Email </label>
								<input type="text" class="form-control" name="email"  placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="register_psw"> Password </label>
								<input type="text" class="form-control" name="password"  placeholder="Enter password">
							</div>
							<div class="form-group">
								<label for="cnfm_psw"> Confirm Password </label>
								<input type="text" class="form-control" name="confirm_password" placeholder="Confirm password">
							</div>  
					</div>

					<div class="modal-footer">

						<input type="submit" class="btn register_submit" value="Register" />
						<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>

					</div>
				</form>
            </div>
        </div>
