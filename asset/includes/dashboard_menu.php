<div class="wrapper">

<div class="sidebar" data-color="purple" data-image="./asset/images/sidebar-1.jpg">

	<div class="logo">
		<a href="" class="simple-text">
			Secure Your Mail
		</a>
	</div>

	<div class="sidebar-wrapper">
        <nav class="nav-collapse sidebar-navbar-collapse" role="navigation">
            <ul class="nav">
                <li class="active">
	                <a href="<?php echo '?index=view_dashboard'; ?>">
	                    <i class="material-icons">dashboard</i>
	                    <p>Dashboard</p>
	                </a>
	            </li>
                <li class="divider-vertical"></li>
                <li>
                	<a href="<?php echo '?index=view_table' ?>">
	                    <i class="material-icons">content_paste</i>
	                    <p>Domaines</p>
	                </a>
	            </li>
                <li class="divider-vertical"></li>
                <li class="dropdown">
                    <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
                    	<i class="material-icons">list</i>
                    	<p>Gestions des listes <b class="caret"></b></p>
                    </a>
                    <div class="collapse" id="toggleDemo" style="height: 0px;">
	                    <ul class="nav nav-list">
	                        <li><a href="<?php echo '?index=view_whitelist' ?>"><i class="material-icons">assignment_turned_in</i>Whitelist</a></li>
	                        <li><a href="<?php echo '?index=view_blacklist' ?>"><i class="material-icons">assignment_late</i>Blacklist</a></li>
	                    </ul>
			        </div>
                </li>
                <li class="divider-vertical"></li>
            </ul>
        </nav>
	</div>
</div>

<div class="main-panel">
	<nav class="navbar navbar-transparent navbar-absolute">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="material-icons">notifications</i>
							<span class="notification">5</span>
							<p class="hidden-lg hidden-md">Notifications</p>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">www.piratebay.com classé <font color=red>rouge</font></a></li>
							<li><a href="#">www.cpasbien.com classé <font color=orange>orange</font></a></li>
							<li><a href="#">www.films-regarder.org classé <font color=orange>orange</font></a></li>
							<li><a href="#">www.google.com classé <font color=green>Vert</font></a></li>
							<li><a href="#">www.facebook.com classé <font color=green>Vert</font></a></li>
						</ul>
					</li>
					<li>
						<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
							   <i class="material-icons">person</i>
							   <p class="hidden-lg hidden-md"><?php echo ($_SESSION['login_result']); ?></p>
 						</a>
 						<ul class="dropdown-menu">
							<li><a href="<?php echo '?index=view_user' ?>">Votre profil</a></li>
							<li><a href="<?php echo '?index=deconnexion' ?>">Deconnexion</a></li>
						</ul>
					</li>
				</ul>

				<form class="navbar-form navbar-right" role="search">
					<div class="form-group  is-empty">
						<input type="text" class="form-control" placeholder="Recherche">
						<span class="material-input"></span>
					</div>
					<button type="submit" class="btn btn-white btn-round btn-just-icon">
						<i class="material-icons">search</i><div class="ripple-container"></div>
					</button>
				</form>
			</div>
		</div>
	</nav>