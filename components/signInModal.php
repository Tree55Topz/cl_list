<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button> 
                    <h4><span class="glyphicon glyphicon-leaf"></span> Sign In </h4>
                </div>
				<form method="post" action="login.php" >
					<div class="modal-body" style="padding:40px 50px;">
							<div class="form-group">
								<label for="signIn_usrname"><span class="glyphicon glyphicon-user"></span> Username </label>
								<input type="text" class="form-control" name="username" id="signIn_usrname" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="signIn_psw"> Password </label>
								<input type="text" class="form-control" name="password" id="signIn_psw" placeholder="Enter password">
							</div>
					</div>

					<div class="modal-footer">
						<input type="submit" class="btn signIn_submit" value="Login" />
						<button type="button" class="btn signIn_close" data-dismiss="modal"> Close </button>
					</div>
				</form>
            </div>
        </div>