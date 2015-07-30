<div class="tab-pane" id="tab7">
  <article class="lesson7">

    <div class="lesson_title">
      <h4>Lesson 7</h4>
      <h1>Navbars, Breadcrumbs &amp; Pagination</h1>
    </div>

    <!-- Navs -->
   	<div class="navs">
   		<h2>Navs</h2>
   		<p>
		Navs available in Bootstrap have shared markup, starting with the base
		<code>.nav</code>
		class, as well as shared states. Swap modifier classes to switch between each style.
		</p>
   		<hr>
   		<!-- tabs -->
	    <div class="col-md-12">
	    	<h3>Tabs</h3>
	    	<p>
	    		Note the
				<code>.nav-tabs</code>
				class requires the
				<code>.nav</code>
				base class.
			</p>
	    	<div class="table_example">
				<ul class="nav nav-tabs" role="tablist">
				  <li class="active"><a href="#">Home</a></li>
				  <li><a href="#">Profile</a></li>
				  <li><a href="#">Messages</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/tab.php'); ?>
				</code>			
			</div>
	    </div>

	    <!-- Pills -->
	    <div class="col-md-12">
	    	<h3>Pills</h3>
	    	<p>
	    		Take that same HTML, but use
				<code>.nav-pills</code>
				instead:
			</p>
	    	<div class="table_example">
				<ul class="nav nav-pills">
				  <li class="active"><a href="#">Home</a></li>
				  <li><a href="#">Profile</a></li>
				  <li><a href="#">Messages</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/pills.php'); ?>
				</code>			
			</div>
			<p>
				Pills are also vertically stackable. Just add
				<code>.nav-stacked</code>
				.
			</p>
			<div class="table_example">
				<ul class="nav nav-pills nav-stacked">
				  <li class="active"><a href="#">Home</a></li>
				  <li><a href="#">Profile</a></li>
				  <li><a href="#">Messages</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/pills_stacked.php'); ?>
				</code>			
			</div>
	    </div>

	    <!-- Justified nav-->
		<div class="col-md-12">
	    	<h3>Justified Nav</h3>
	    	<p>
	    		Easily make tabs or pills equal widths of their parent at screens wider than 768px with
				<code>.nav-justified</code>
				. On smaller screens, the nav links are stacked.
	    	</p>
	    	<div class="table_example">
	    		<ul class="nav nav-tabs nav-justified" role="tablist">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Profile</a>
					</li>
					<li>
						<a href="#">Messages</a>
					</li>
				</ul>
				<br>
				<ul class="nav nav-pills nav-justified">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Profile</a>
					</li>
					<li>
						<a href="#">Messages</a>
					</li>
				</ul>
	    	</div>
	    	<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/nav_justified.php'); ?>
				</code>			
			</div>
	    </div>
	</div>

	<div class="row"></div>

	<!-- task 7a -->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Time to create a few sweet nav-tabs that will work in mere seconds!</h3>
          <p class="lead">Open your project folder we have been using the past few days</p>
          <ol>
          	<li>Start a new <code>div</code> tag outside all the past lessons work, with a class attribute equal to <code>container</code> or <code>container-fluid</code> create a <code>ul</code> tag inside, with the classes of <code>nav</code>, <code>nav-tabs</code> &amp; <code>nav-justified</code> and a role attribute equal to <code>tablist</code></li>
          	<li>Inside add 3 <code>li</code> tags, each with an <code>a</code> tags inside. Give your 1st <code>li</code> tag a class equal to <code>active</code>. Name each anchor i.e. Tab One, Tab Two &amp; Tab Three - <strong>the content between the tags</strong></li>
          	<li>Outside of your <code>ul</code> create a new div below, with a class of <code>tab-content</code>.  Inside add 3 more <code>div</code> tags, each with a class of <code>tab-pane</code>, since we have 3 list items we will link to above.  To the 1st <code>tab-pane</code> div add an additional class of active, to correlate with your active<code>li</code> tag</li>
          	<li>Set each tap-pane div's id attribute to <code>id="tab1"</code>, <code>id="tab2"</code> &amp; <code>id="tab3"</code>, one on each in order, then in the anchor href's above add the id #tab1, #tab2, #tab3, which will correlate the tabs: 
          		<code><br>&lt;a href="#tab1"&gt; relates to &lt;div id="tab1" class="tab-pane active"&gt;<br> &lt;a href="#tab2"&gt; relates to &lt;div id="tab2" class="tab-pane"&gt; <br> &lt;a href="#tab3"&gt; relates to &lt;div id="tab3" class="tab-pane"&gt;</code>
          	</li>
          	<li>Finally add content into your tabs and then check it out.  Add a <code>h1</code> &amp; <code>p</code> tags, to your first div with a classes of <code>tab-pane active</code>, add a <code>h2</code> &amp; <code>p</code> tag, to your second div with a class of <code>tab-pane</code> &amp; a <code>h3</code> &amp; <code>p</code> tag, to your third div with a class of <code>tab-pane</code></li>
          	<li>Fill out your new HTML tags using <a href="" target="_blank">Lorem Lipsum</a></li>
          	<li>Last but certainly not least, Actually probably the most important thing to make these work is adding your <code>data-toggle="tab"</code> to all of your anchor tags in your <code>ul</code>. With this, browsers will now know to toggle between tabs!</li>
          	<li class=""><strong>VERY IMPORTANT</strong> - For this to work you must copy &amp; paste 2 <code>script</code> tags right before your closing <code>body</code> tag
          		<ul>
          			<li>
          				<a href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" target="_blank">&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"&gt;&lt;/script&gt;</a> - jQuery is required to use bootstrap JS - paste this above Bootstrap
          			</li>
          			<li>
          				<a href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" target="_blank">&lt;script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"&gt;&lt;/script&gt;</a> - Bootstrap JS is similar to CSS, just a script instead of a link - paste this below jQuery
          			</li>
          		</ul>
          	</li>
          </ol>
          <p>Open this file in your browser to see the magic you just made!</p>
          <a href="answers/lesson7a.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>AMAZING!!! Tabs are a very difficult concept to wrap our heads around, Way to get through it with ease!</p>
          <p>Check out more on <a href="http://getbootstrap.com/components/#nav" target="_blank">Bootstrap Navs</a></p>
          <div class="next1">
            <a href="#navbars" class="btn btn-code btn-lg"><i class="fa fa-child fa-2x"></i> Next Up: Easy Navbars! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12">
        <a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete This <Strong>Bootstrap Nav</Strong> Task Before Moving On!</a>
      </div>
    </div>

    <div class='row'></div>


	<!-- Nav Bar -->
	<div id="navbars" class="nav_bar">
		<h2>Navbar</h2>
		<hr>

		<!-- default nav -->
		<div class="col-md-12">
			<h3>Default Navigation</h3>
			<p>Navbars are responsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases.</p>
			<div class="table_example">
				<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Brand</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="#">Link</a></li>
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				      <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">Submit</button>
				      </form>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/default_navbar.php'); ?>
				</code>			
			</div>
		</div>

		<!-- Component Alignment -->
		<div class="col-md-6">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4>Component Alignment</h4>
				</div>
				<div class="panel-body">
					<p>
						Align nav links, forms, buttons, or text, using the
						<code>.navbar-left</code>
						or
						<code>.navbar-right</code>
						utility classes. Both classes will add a CSS float in the specified direction. For example, to align nav links, put them in a separate
						<code>&lt;ul&gt;</code>
						with the respective utility class applied.
					</p>
					<p>
						These classes are mixin-ed versions of
						<code>.pull-left</code>
						and
						<code>.pull-right</code>
						, but they're scoped to media queries for easier handling of navbar components across device sizes.
					</p>
				</div>
			</div>
		</div>
		
		<!-- Fixed to top -->
		<div class="col-md-12">
			<h3>Navigation Fixed to Top</h3>
			<p>
				Add
				<code>.navbar-fixed-top</code>
				and include a
				<code>.container</code>
				or
				<code>.container-fluid</code>
				to center and pad navbar content.
			</p>
			<div class="table_example">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div id="bs-example-navbar-collapse-6" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/fix_top.php'); ?>
				</code>			
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-danger" style="margin:10px 0;">
				<div class="panel-heading">
					<h4>Body padding required when using <code>navbar-fixed-top</code> Navigation Bars</h4>
				</div>
				<div class="panel-body">
					<p class="text-muted">
						The fixed navbar will overlay your other content, unless you add
						<code>padding</code>
						to the top of the
						<code>&lt;body&gt;</code>
						. <strong>Tip:</strong> By default, the bootstrap navbar is 50px high.
						<div class="well well-sm">	
							<code>
								<?php include('code/lesson7/body_pad.php'); ?>
							</code>	
						</div>
					</p>
				</div>
			</div>
		</div>

		<!-- Fixed to bottom -->
		<div class="col-md-12">
			<h3>Navigation Fixed to Bottom</h3>
			<p>
				Add
				<code>.navbar-fixed-bottom</code>
				and include a
				<code>.container</code>
				or
				<code>.container-fluid</code>
				to center and pad navbar content.
			</p>
			<div class="table_example">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div id="bs-example-navbar-collapse-6" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/fix_bottom.php'); ?>
				</code>			
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-danger" style="padding-bottom:10px;">
				<div class="panel-heading">
					<h4>Body padding required for navbar-fixed-bottom Navigation Bars</h4>
				</div>
				<div class="panel-body">
					<p class="text-muted">
						The fixed navbar will overlay your other content, unless you add
						<code>padding</code>
						to the bottom of the
						<code>&lt;body&gt;</code>
						. <strong>Tip:</strong> By default, the bootstrap navbar is 50px high.
						<div class="well well-sm">	
							<code>
								<?php include('code/lesson7/body_pad_bottom.php'); ?>
							</code>	
						</div>
					</p>
				</div>
			</div>
		</div>

		<!-- Navigation Static Top -->
		<div class="col-md-12">
			<h3>Navigation Static Top</h3>
			<p>
				Create a full-width navbar that scrolls away with the page by adding
				<code>.navbar-static-top</code>
				and include a
				<code>.container</code>
				or
				<code>.container-fluid</code>
				to center and pad navbar content.
				</p>
				<p>
				Unlike the
				<code>.navbar-fixed-*</code>
				classes, you do not need to change any padding on the
				<code>body</code>
				.
			</p>
			<div class="table_example">
				<nav class="navbar navbar-default navbar-static-top" role="navigation">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div id="bs-example-navbar-collapse-6" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/static_top.php'); ?>
				</code>			
			</div>
		</div>

		<!-- Inverted Navigation -->
		<div class="col-md-12">
			<h3>Inverted Navigation</h3>
			<p>
				Modify the look of the navbar by adding
				<code>.navbar-inverse</code>
				.
			</p>
			<div class="table_example">
				<nav class="navbar navbar-inverse" role="navigation">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div id="bs-example-navbar-collapse-6" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/inverted_navbar.php'); ?>
				</code>			
			</div>
		</div>

	</div>

	<div class="row"></div>

	<!-- task 7b -->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Time to build your own Bootstrap navigation that will collapse on smaller viewports!</h3>
          <p class="lead">Open your project folder we have been using the past lessons</p>
          <ol>
          	<li>Lets start at the top of your index.html just below your opening <code>body</code> tag. Create two new <code>nav</code> tags, one will be for a fixed-top nav and the other a fixed-bottom navbar.</li>
          	<li>Add a classes of <code>navbar</code>, <code>navbar-default</code> &amp; <code>navbar-fixed-top</code> and a role equal to <code>navigation</code>, to your 1st nav tag.  For your second nav tag Add a classes of <code>navbar</code> <code>navbar-inverse</code> <code>navbar-fixed-bottom</code> and a role equal to <code>navigation</code></li>
          	<li>Create two <code>div</code> tags inside each <code>nav</code> tag. Fore each, give the 1st div a class of <code>navbar-header</code> and 2nd the classes of <code>collapse</code> &amp; <code>navbar-collapse</code></li>
          	<li>Add a <code>button</code> &amp; <code>a</code> tag inside each <code>&lt;div class="navbar-header"&gt;...&lt;/div&gt;</code> the button will serve as your button that appears when your nav collapses at smaller screens, &amp; your <code>a</code> will serve as our Brand Name!</li>
          	<li>Give your 2 anchor tags a class of <code>navbar-brand</code> and name them Brand Name - or whatever content you want for your bran, between the opening and closing tags</li>
          	<li>To your buttons we need to add a class of <code>navbar-toggle</code>, set its type attribute to <code>button</code> and to make them actually work we need to add <code>data-toggle="collapse"</code> as an attribute, and finally set its target <code>data-target="#"</code>, we will match this soon to your next closest div!</li>
          	<li>Add 4 <code>span</code> tags inside both button tags, the 1st with a class of <code>sr-only</code> and the content should say - Toggle navigation, in between the open and close span tag</li>
          	<li>To out 2nd, 3rd &amp; 4th span, set their class to <code>icon-bar</code>, doing this will give us a nice looking toggle button when we are view at smaller viewports</li>
          	<li>So you have your collapse button set now lets match it to the correct div, do this by setting your id attributes on your <code>&lt;div class="collapse navbar-collapse"&gt;</code> to anything i.e. nav-collapse-1, nav-collapse-2.  We need to copy these names into the respective <code>data-target="#"</code> from step 6, Ensure the "#" is kept, remember we are calling an ID here so we must the #</li>
          	<li>Finally create your actual Nav Items. Start with a <code>ul</code> with a classes of <code>nav</code> &amp; <code>navbar-nav</code> inside your 2 <code>navbar-collapse</code> div tags</li>
          	<li>Create at least three <code>li</code> tags with an <code>a</code> tag inside. Add a class attribute of active to your 1st <code>li</code> tag. And Last we will name your 6 links or more, whatever you would like i.e. Home, Profile, Link 1, Link 2 - as content between the tags</li>
          </ol>
          <p>Open this file in your browser to see what we just did!</p>
          <a href="answers/lesson7b.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Great Job. Navigation is essential in all websites and webapps, With Bootstrap all our worries can be put at ease!</p>
          <p>More on <a href="http://getbootstrap.com/components/#navbar" target="_blank">Bootstrap Navigation Bars</a> can be found here!</p>
          <div class="next1">
            <a href="#breads" class="btn btn-code btn-lg"><i class="fa fa-child fa-2x"></i> Next Up: Bootstrap Breadcrumbs &amp; Pagination! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12">
        <a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete This Bootstrap <Strong>Navigation Bars</Strong> Task Before Moving On!</a>
      </div>
    </div>

    <div class='row'></div>

	<!-- breadcrumbs -->
	<div id="breads" class="bread">
		<h2>Breadcrumbs</h2>
		<hr>

		<!-- breadcrumbs -->
		<div class="col-md-12">
			<p class="lead">
				Indicate the current page's location within a navigational hierarchy.
			</p>	
			<p> Separators are automatically added in CSS through
				<code>:before</code>
				and
				<code>content</code>
				.
			</p>
			<div class="table_example">
				<ol class="breadcrumb">
					<li class="active">Home</li>
				</ol>
				<ol class="breadcrumb">
					<li>
						<a href="#">Home</a>
					</li>
					<li class="active">Library</li>
				</ol>
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li><a href="#">Library</a></li>
				  <li class="active">Data</li>
				</ol>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/breadcrumb.php'); ?>
				</code>			
			</div>
		</div>

	</div>

	<!-- Pagination -->
	<div class="pagination">
		<h2>Pagination</h2>
		<p class="lead">
			Provide pagination links for your site or app with the multi-page pagination component, or the simpler
			<a href="#pager">pager alternative</a>
			.
		</p>
		<hr>

		<!-- default -->
		<div class="col-md-12">
			<h3>
				Default Pagination
			</h3>
			<p>
				Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.
			</p>
			<div class="table_example">
				<ul class="pagination">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/dafault_pagination.php'); ?>
				</code>			
			</div>
		</div>

		<!-- disabled vs active -->
		<div class="col-md-12">
			<h3>
				Disabled and Active states
			</h3>
			<p>
				Links are customizable for different circumstances. Use
				<code>.disabled</code>
				for unclickable links and
				<code>.active</code>
				to indicate the current page.
			</p>
			<div class="table_example">
				<ul class="pagination">
				  <li class="disabled"><a href="#">&laquo;</a></li>
				  <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/active_pagination.php'); ?>
				</code>			
			</div>
		</div>

		<!-- sizing -->
		<div class="col-md-12">
			<h3>
				Pagination Sizing
			</h3>
			<p>
				Fancy larger or smaller pagination? Add
				<code>.pagination-lg</code>
				or
				<code>.pagination-sm</code>
				for additional sizes.
			</p>
			<div class="table_example">
				<ul class="pagination pagination-lg">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
				<br>
				<ul class="pagination">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
				<br>
				<ul class="pagination pagination-sm">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/sizing_pagination.php'); ?>
				</code>			
			</div>
		</div>

	</div>

	<!-- Pager -->
	<div id="pager">
		<h2>Pager</h2>
		<p class="lead">Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>
		<hr>

		<!-- default -->
		<div class="col-md-12">
			<h3>
				Default example
			</h3>
			<p>
				By default, the pager centers links.
			</p>
			<div class="table_example">
				<ul class="pager">
				  <li><a href="#">Previous</a></li>
				  <li><a href="#">Next</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/default_pager.php'); ?>
				</code>			
			</div>
		</div>

		<!-- Aligned links -->
		<div class="col-md-12">
			<h3>
				Aligned links
			</h3>
			<p>
				Alternatively, you can align each link to the sides. <strong>Note:</strong> Create left and right arrows using <code>&laar ;</code> for a Left Arrow &amp; <code>&raar ;</code> for a Right Arrow - <strong>minus the space between the <code>r</code> &amp; <code>;</code></strong>.
			</p>
			<div class="table_example">
				<ul class="pager">
					<li class="previous">
						<a href="#">← Older</a>
					</li>
					<li class="next">
						<a href="#">Newer →</a>
					</li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/aligned.php'); ?>
				</code>			
			</div>
		</div>

		<!-- Optional disabled state -->
		<div class="col-md-12">
			<h3>
				Disabled state
			</h3>
			<p>
				Pager links also use the general
				<code>.disabled</code>
				utility class from the pagination.
			</p>
			<div class="table_example">
				<ul class="pager">
				  <li class="previous disabled"><a href="#">&larr; Older</a></li>
				  <li class="next"><a href="#">Newer &rarr;</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/disabled_pager.php'); ?>
				</code>			
			</div>
		</div>

	</div>

	<!-- task 7c -->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Woot!!! More Tools To Make Navigation Easier!!</h3>
          <p class="lead">Open your index.html from the BootstrapTest folder</p>
          <ol>
          	<li>Start with adding a <code>div</code> tag, with a class equal to <code>container-fluid</code> or <code>container</code>, and a <code>div</code> tag with a class of <code>row</code> inside</li>
          	<li>Next add 3 <code>div</code> tags, in here with a classes of <code>col-xs-6</code> &amp; <code>col-md-12</code> for the first, <code>col-xs-6</code> &amp; <code>col-md-8</code> for the second &amp; <code>col-xs-12</code> &amp; <code>col-md-4</code> for the third</li>
          	<li>In your first new div we will make some bootstrap breadcrumbs, add a <code>ol</code> with a class of <code>breadcrumb</code>, add 3 li tags in here, with the 1st &amp; 2nd getting <code>a</code> tags inside the <code>li</code>. This way we can link to your previous pages and your third is your current location - so we don't need a anchor</li>
          	<li>Give your 3rd <code>li</code> a class of <code>active</code> and finally we can name your breadcrumbs, 1st as Home, 2nd as Contact &amp; 3rd as Business Address</li>
          	<li>In your 2nd new div lets create some pagination, add a <code>ul</code> with a class of <code>pagination</code>.  Lets add 7 <code>li</code> with <code>&lt;a href="#"&gt;</code> inside.</li>
          	<li>Between your 1st <code>a</code> tag add <code>& laquo ;</code> without any spaces and the same for your last <code>a</code> but change it to <code>& raquo ;</code> again without the spaces. These will produce two nice double arrows</li>
          	<li>Lets Number the Rest of the anchors 1 thru 5. And you will have built your first bootstrap pagination!!</li>
          	<li>On to the Final Task, building a Bootstrap Pager. Start in your 3rd div by creating a <code>ul</code> and add a class attribute of <code>pager</code></li>
          	<li>Add two <code>li</code> tags with <code>&lt;a href=""&gt;...&lt;/a&gt;</code> inside each.  Give your 1st li a class of <code>previous</code> and your 2nd li a class of <code>next</code>.</li>
          	<li>Between your 1st anchor start with <code>&larr ; Older</code> again remove the spaces, Finally between your 2nd anchor start with <code>&rarr ; Newer</code> again no spaces, to create a arrow right</li>
          </ol>
          <p>Open this file in your browser to see checkout your new creations!</p>
          <a href="answers/lesson7c.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Great Job working with Bootstrap breadcrumbs &amp; paginations</p>
          <p>Check out more on <a href="http://getbootstrap.com/components/#breadcrumbs" target="_blank">Bootstrap Breadcrumbs</a>, <a href="http://getbootstrap.com/components/#pagination" target="_blank">Bootstrap Pagination</a> &amp; <a href="http://getbootstrap.com/components/#pagination-pager" target="_blank">Bootstrap Pagers</a>!</p>
          <div class="next1">
            <a href="#tab8" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Bootstrap Labels &amp; Badges! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12">
        <a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete This Bootstrap <Strong>Breadcrumbs &amp; Pagination</Strong> Task Before Moving On!</a>
      </div>
    </div>
  </article>
</div>