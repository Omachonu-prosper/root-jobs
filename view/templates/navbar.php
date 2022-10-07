<nav class="navbar navbar-expand navbar-dark bg-success">
	<a class="navbar-brand" href="#">RootJobs!</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
 	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
    			<a class="nav-link" href="#"><i class="fa fa-home"></i></a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#"><i class="fa fa-comment"></i></a>
      		</li>
      		<li class="nav-item dropdown <?php if(CURRENT_PAGE == 'account') echo 'active' ?>">
        		<a class="nav-link dropdown-toggle hide-dropdown-icon" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        			<i class="fa fa-user-circle"></i> <?php if(CURRENT_PAGE == 'account') echo '<span class="sr-only">(current)</span>' ?>
        		</a>
        		<div class="dropdown-menu pull-dropdown-leftward green-border" aria-labelledby="navbarDropdown">
          			<a class="dropdown-item" href="/view/user/account.php">Settings</a>
          			<div class="dropdown-divider"></div>
          			<a class="dropdown-item" href="/controller/auth/logout.php">Logout</a>
        		</div>
      		</li>
	    </ul>
	</div>
</nav>