<?php include('connection.php')?>
<nav id="menu">
				<ul class="links">
                	<li><a href="about.php">About Us</a></li>
					
                    <?php if(!isset($_SESSION['user']))
					{
						?>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                    <?php
					}
					else
					{
						?>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li><a href="changeprofile.php">Change Profile</a></li>
                        <li><a href="book.php">Books</a></li>
                        <li><a href="upload.php">Upload</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <?php
           
					}
					?>
                    
                    <li><a href="contact.php">Contact Us</a></li>
				</ul>
			</nav>