 <ul class="nav navbar-nav navbar-right">
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>
						<li>
							<a href="logout.php"> My Profile </a>
						</li>	
						<li>
							<a href="logout.php"> Log Out </a>
						</li>	
					<?php else : ?>
						<li>
							<a role="button" data-toggle="modal" data-target="#signIn"> Sign In </a>
						</li>
						<li>
							<a role="button" data-toggle="modal" data-target="#register"> Register </a>
						</li>
					<?php endif; ?>
                </ul>