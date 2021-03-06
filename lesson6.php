<div class="tab-pane" id="tab6">
  <article class="lesson6">

    <div class="lesson_title">
      <h4>Lesson 6</h4>
      <h1>More Buttons &amp; Input Groups</h1>
    </div>

    <!-- button groups -->
    <div class="More Buttons">
    	<h2>Button Groups</h2>
    	<p>Group a series of buttons together on a single line with a div of button group class <code>.btn-group</code> surrounding the buttons.</p>
    	<hr>

    	<!-- basic  -->
    	<div class="col-md-12">
    		<h3>Basic Example</h3>
    		<p>
    			Wrap a series of buttons with
				<code>.btn</code>
				in
				<code>.btn-group</code>
				.
    		</p>
    		<div class="table_example">
    			<div class="btn-group">
				  <button type="button" class="btn btn-default">Left</button>
				  <button type="button" class="btn btn-default">Middle</button>
				  <button type="button" class="btn btn-default">Right</button>
				</div>
    		</div>
    		<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/basic.php'); ?>
				</code>			
			</div>
    	</div>


    	<!-- button nesting  -->
    	<div class="col-md-12">
    		<h3>Button Nesting</h3>
    		<p>
    			Place a
				<code>.btn-group</code>
				within another
				<code>.btn-group</code>
				when you want dropdown menus mixed with a series of buttons.  To make your dropdown work we need to include a class of <code>dropdown-toggle</code>, as well as a data-toggle attribute - <code>data-toggle="dropdown"</code>.  This ensures your bootstrap dropdown js code runs to make the list appear on click and disappear on click.
    		</p>
    		<div class="table_example">
    			<div class="btn-group">
				  <button type="button" class="btn btn-default">1</button>
				  <button type="button" class="btn btn-default">2</button>

				  <div class="btn-group">
				    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				      Dropdown
				      <span class="caret"></span>
				    </button>
				    <ul class="dropdown-menu" role="menu">
				      <li><a href="#">Dropdown link</a></li>
				      <li><a href="#">Dropdown link</a></li>
				    </ul>
				  </div>
				</div>				
    		</div>
    		<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/nesting.php'); ?>
				</code>			
			</div>
    	</div>

    	<!-- vertical buttons  -->
    	<div class="col-md-12">
    		<h3>Vertical Buttons</h3>
    		<p>
    			Make a set of buttons appear vertically stacked rather than horizontally.
				<strong class="text-danger">Split button dropdowns are not supported here.</strong>
    		</p>
    		<div class="table_example">
    			<div class="btn-group-vertical">
					<button class="btn btn-default" type="button">Button</button>
					<button class="btn btn-default" type="button">Button</button>
					<div class="btn-group">
						<button id="btnGroupVerticalDrop1" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
						Dropdown
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" role="menu">
							<li>
								<a href="#">Dropdown link</a>
							</li>
							<li>
								<a href="#">Dropdown link</a>
							</li>
						</ul>
					</div>
					<button class="btn btn-default" type="button">Button</button>
					<div class="btn-group">
						<button id="btnGroupVerticalDrop1" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
						Dropdown
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" role="menu">
							<li>
								<a href="#">Dropdown link</a>
							</li>
							<li>
								<a href="#">Dropdown link</a>
							</li>
						</ul>
					</div>
					<div class="btn-group">
						<button id="btnGroupVerticalDrop1" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
						Dropdown
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" role="menu">
							<li>
								<a href="#">Dropdown link</a>
							</li>
							<li>
								<a href="#">Dropdown link</a>
							</li>
						</ul>
					</div>
				</div>
    		</div>
    		<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/vertical.php'); ?>
				</code>			
			</div>
    	</div>

    	<!-- justified button groups  -->
    	<div class="col-md-12">
    		<h3>Justified Buttons</h3>
    		<p>
    			Make a group of buttons stretch at equal sizes to span the entire width of its parent. Also works with button dropdowns within the button group.
    		</p>
    		<div class="table_example">
    			<h4>
	    			With
					<code>&lt;a&gt;</code>
					elements
				</h4>
				<p>
					Just wrap a series of
					<code>.btn</code>
					s in
					<code>.btn-group.btn-group-justified</code>
					.
				</p>
    			<div class="btn-group btn-group-justified">
					<a class="btn btn-default" role="button">Left</a>
					<a class="btn btn-default" role="button">Middle</a>
					<a class="btn btn-default" role="button">Right</a>
				</div>
    		</div>
    		<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/justified.php'); ?>
				</code>			
			</div>
			<div class="table_example">
    			<h4>
	    			With
					<code>&lt;button&gt;</code>
					elements
				</h4>
				<p>
					To use justified button groups with
					<code>&lt;button&gt;</code>
					elements,
					<strong class="text-danger">you must wrap each button in a button group</strong>
					. Most browsers don't properly apply CSS for justification to
					<code>&lt;button&gt;</code>.
				</p>
				<div class="btn-group btn-group-justified">
				  <div class="btn-group">
				    <button type="button" class="btn btn-default">Left</button>
				  </div>
				  <div class="btn-group">
				    <button type="button" class="btn btn-default">Middle</button>
				  </div>
				  <div class="btn-group">
				    <button type="button" class="btn btn-default">Right</button>
				  </div>
				</div>
    		</div>
    		<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/justified_btn.php'); ?>
				</code>			
			</div>
    	</div>
    	
    </div>

    <div class="row"></div>

    <!-- task 6a -->
	<div class="task">
		<div class="task1">
			<div class="col-md-12">
				<h3>Aligning buttons can be rough, luckily Bootstrap has you covered!</h3>
				<p class="lead">Open your index.html from the BootstrapTest folder in sublime</p>
				<ol>
					<li>Start by adding a new div with the class attribute of <code>container</code> outside everthing we've done so far</li>
					<li>Create a <code>div</code> tag with a class attribute of <code>row</code>, and 2 sibiling <code>div</code> tags nested inside of it, one with <code>col-xs-12</code> &amp; the other <code>col-xs-6</code></li>
					<li>Inside your <code>col-xs-12</code> add a <code>div</code> tag with the class of <code>btn-group-vertical</code> this will make your buttons appear vertically</li>
					<li>Add 3 <code>button</code> tags with <code>type</code> attribute equal to <code>button</code> and a <code>class</code> attribute equal to <code>btn</code></li>
					<li>Insert whatever content you want between the opening and closing tags of each <code>button</code></li>
					<li>Add a class of <code>btn-lg and btn-success</code> to the 1st <code>button</code></li>
					<li>On the 2nd <code>button</code> tag, add a class of <code>and btn-primary</code> and on the 3rd <code>button</code> tag add a class attribute of <code>btn btn-lg btn-info</code></li>
					
					
					<li>Inside your <code>col-xs-6</code> div, create a div with the classes of <code>btn-group btn-group-justified</code> and 2 divs inside that with the class of <code>btn-group</code></li>
					<li>Add one <code>button</code> tag inside each group, with a type attribute of <code>button</code>, for one button add the classes of <code>btn btn-lg btn-danger</code> and call this Button Number One - content in between the <code>button</code> tag</li>
					<li>On your 2nd button, add the classes of <code>btn btn-lg btn-info</code> and call this one Button Number Two</li>
				</ol>
				<p>Open this file in your browser to test the code!</p>
				<a href="answers/lesson6a.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
				<br><br>
				<p>You just hand built some more bootstrap buttons, vertical and justified!</p>
				<p>Read through <a href="http://getbootstrap.com/components/#btn-groups" target="_blank">Bootstrap Button Groups</a> to learn more about bootstrap buttons.</p>
				<div class="next1">
					<a href="#inputs" class="btn btn-code btn btn-lg"><i class="fa fa-child fa-2x"></i> Next Up: More Inputs! <i class="fa fa-2x fa-child"></i></a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="col-xs-12">
			<a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete This Bootstrap <Strong>Buttons</Strong> Task Before Moving On!</a>
		</div>
	</div>

    <div class="row"></div>

    <!-- button dropdowns -->
    <div id="button_drops" class="button_dropdowns">
    	<h2>Button Dropdowns</h2>
    	<p class="lead">
			Use any button to trigger a dropdown menu by placing it within a
			<code>.btn-group</code>
			and providing the proper menu markup.
		</p>
    	<hr>

    	<!-- single button dropdown -->
    	<div class="col-md-12">
    		<h3>Single Button Dropdowns</h3>
    		<p>Turn a button into a dropdown toggle with some basic markup changes.</p>
    		<div class="table_example">
    			<!-- Single button -->
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				    Default <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				    Primary <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
				    Success <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
				    Info <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
				    Warning <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
				    Danger <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
    		</div>
    		<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/single_dropdown.php'); ?>
				</code>			
			</div>
    	</div>

    	<!-- Split button dropdowns -->
    	<div class="col-md-12">
    		<h3>Split button dropdowns</h3>
    		<p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
    		<div class="table_example">
    			<div class="btn-group">
				  <button type="button" class="btn btn-default">Default</button>
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-primary">Primary</button>
				  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-success">Success</button>
				  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-info">Info</button>
				  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-warning">Warning</button>
				  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-danger">Danger</button>
				  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
    		</div>
    		<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/split_dropdown.php'); ?>
				</code>			
			</div>
    	</div>

    	<!-- dropdown variation -->
    	<div class="col-md-12">
    		<h3>Dropup variation</h3>
    		<p>
    			Trigger dropdown menus above elements by adding
				<code>.dropup</code>
				to the parent.
    		</p>
    		<div class="table_example">
    			<div class="btn-group dropup">
				  <button type="button" class="btn btn-default">Dropup</button>
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
				<div class="btn-group dropup">
				  <button type="button" class="btn btn-primary">Dropup</button>
				  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
    		</div>
    		<div class="well well-sm">
    			<code>
    				<?php include('code/lesson6/dropdown_variation.php'); ?>
    			</code>
    		</div>
    	</div>

    </div>


    <div class="row"></div>

    <!-- task 6b -->
	<div class="task">
		<div class="task1">
			<div class="col-md-12">
				<h3>Creating more variations of Bootstrap buttons should be second nature by now ;)...time to write some of your own <code>CODE</code>!</h3>
				<p class="lead">Open your index.html from the BootstrapTest folder in sublime</p>
				<ol>
					<li>Start with a new div that has a class of <code>container</code>.</li>
					<li>Create a <code>row</code> div, and a <code>col-md-6</code> div.</li>
					<li>Inside add a <code>p</code> &amp; <code>a</code> tag, set your <code>a</code> class to <code>btn btn-danger btn-block</code>. Between your opening and closing anchor tags name it, Anchor Button.</li>
					<li>Fill your paragraph out with a few lines from <a href="http://www.lipsum.com/" target="_blank">Lorem Ipsum</a>.</li>
					<li>Start with a new <code>row</code> div, with another div with a class of <code>btn-group dropup</code> inside.</li>
					<li>Add two buttons with a <code>type="button"</code> attribute. Name your 1st button "Split Dropup Button" and give it a class of <code>btn btn-defualt</code>.</li>
					<li>For your 2nd button give it a class of <code>btn btn-primary dropdown-toggle</code> and a data-toggle attribute of <code>dropdown</code></li>
					<li>Add two spans inside your 2nd button, the first with a class of <code>caret</code>, and the second with a class of <code>sr-only</code> and a name of Toggle Dropdown.</li>
					<li>Again for your dropdown we need to create a <code>ul</code> with a class of <code>dropdown-menu</code> and a role of <code>menu</code>.</li>
					<li>Lets create 5 <code>&lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;</code> tags, remove the 4th anchor tag and give the remaining <code>a</code> tags a name of Drop Up Link 1 - Drop Up Link 4, in between the opening and closing <code>a</code> tags.</li>
					<li>The 4th <code>li</code> should get a class of <code>divider</code>, to create a divid between your 3rd and 4th anchor links.</li>
				</ol>
				<p>Open this file in your browser to check out your new full-width &amp; drop up buttons!!!</p>				
				<a href="answers/lesson6b.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
				<br><br>
				<p>Way to go...mastering even more of bootstrap, the most wonderful css/js framework out there!</p>
				<p>Check out <a href="http://getbootstrap.com/components/#btn-dropdowns" target="_blank">Bootstrap Button Dropdowns</a> for more on this subject!</p>
				<div class="next1">
					<a href="#inputs" class="btn btn-code btn btn-lg"><i class="fa fa-child fa-2x"></i> Next Up: More Inputs! <i class="fa fa-2x fa-child"></i></a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!-- Hide 6b due to no JS in this tutorial therefore no dropdowns -->
		<!-- <div class="col-xs-12">
			<a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete This Bootstrap <Strong>Dropdown & Dropup Buttons</Strong> Task Before Moving On!</a>
		</div> -->
	</div>

    <div class="row"></div>

    <!-- more inputs -->
    <div id="inputs" class="more_inputs">
	    <h2>Input Groups</h2>
	    <p>
			Extend form controls by adding text or buttons before, after, or on both sides of any text-based input. Use
			<code>.input-group</code>
			with an
			<code>.input-group-addon</code>
			to prepend or append elements to a single
			<code>.form-control</code>
			.
		</p>
	    <hr>
	    <div class="col-md-12">
	    	<div class="panel panel-warning">
    			<div class="panel-heading">
    				<h4>Don't mix with other components</h4>
    			</div>
    			<div class="panel-body">
    				<p class="text-muted">
    					Do not mix form groups or grid column classes directly with input groups. Instead, nest the input group inside of the form group or grid-related element.
					</p>
    			</div>
    			<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/mixin.php'); ?>
				</code>			
			</div>
    		</div>
	    </div>
	    <!-- Basic Example -->
	    <div class="col-md-12">
	    	<h3>Basic Example</h3>
	    	<p></p>
	    	<div class="table_example">
	    		<div class="input-group">
				  <span class="input-group-addon">@</span>
				  <input type="text" class="form-control" placeholder="Username">
				</div>
				<br>
				<div class="input-group">
				  <input type="text" class="form-control">
				  <span class="input-group-addon">.00</span>
				</div>
				<br>
				<div class="input-group">
				  <span class="input-group-addon">$</span>
				  <input type="text" class="form-control">
				  <span class="input-group-addon">.00</span>
				</div>
	    	</div>
	    	<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/default.php'); ?>
				</code>			
			</div>
	    </div>

	    <!-- Checkboxes and radio addons -->
	    <div class="col-md-12">
	    	<h3>Checkboxes and radio addons</h3>
	    	<p>Place any checkbox or radio option within an input group's addon instead of text.</p>
	    	<div class="table_example">
	    		<div class="row">
				  <div class="col-lg-6">
				    <div class="input-group">
				      <span class="input-group-addon">
				        <input type="checkbox">
				      </span>
				      <input type="text" class="form-control">
				    </div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
				  <div class="col-lg-6">
				    <div class="input-group">
				      <span class="input-group-addon">
				        <input type="radio">
				      </span>
				      <input type="text" class="form-control">
				    </div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
	    	</div>
	    	<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/checkbox_radio.php'); ?>
				</code>			
			</div>
	    </div>

	    <!-- Input w/button dropowns -->
	    <div class="col-md-12">
	    	<h3>Input with Button dropdowns</h3>
	    	<div class="table_example">
	    		<div class="row">
				  <div class="col-lg-6">
				    <div class="input-group">
				      <div class="input-group-btn">
				        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
				        <ul class="dropdown-menu" role="menu">
				          <li><a href="#">Action</a></li>
				          <li><a href="#">Another action</a></li>
				          <li><a href="#">Something else here</a></li>
				          <li class="divider"></li>
				          <li><a href="#">Separated link</a></li>
				        </ul>
				      </div><!-- /btn-group -->
				      <input type="text" class="form-control">
				    </div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
				  <div class="col-lg-6">
				    <div class="input-group">
				      <input type="text" class="form-control">
				      <div class="input-group-btn">
				        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
				        <ul class="dropdown-menu dropdown-menu-right" role="menu">
				          <li><a href="#">Action</a></li>
				          <li><a href="#">Another action</a></li>
				          <li><a href="#">Something else here</a></li>
				          <li class="divider"></li>
				          <li><a href="#">Separated link</a></li>
				        </ul>
				      </div><!-- /btn-group -->
				    </div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
	    	</div>
	    	<div class="well well-sm">		
				<code>
					<?php include('code/lesson6/dropdowns.php'); ?>
				</code>			
			</div>
	    </div>

    </div>

    <!-- task 6c -->
	<div class="task">
		<div class="task1">
			<div class="col-md-12">
				<h3>Bootstrap gives you the ability to create a variety of sweet looking <code>inputs</code>!</h3>
				<p class="lead">Open your index.html from the BootstrapTest folder in sublime.</p>
				<ol>
					<li>Start with a new <code>div</code> tag, &amp; add a class attribute equal to <code>contianer-fluid</code>, add a <code>div</code> inside, give this a class attribute of <code>row</code></li>
					<li>Add 2 <code>div</code> tags inside for your grid, one  with the classes of <code>col-xs-9 col-md-6</code> &amp; the other with the classes of <code>col-xs-7 col-md-6</code></li>
					<li>In your first col-xs-9, add 2 <code>input</code> with a class attribute equal to <code>form-control</code>, give the 1st a type attribute of <code>color</code>.  Next create a <code>&lt;br&gt;</code> in between your two new inputs</li>
					<li>Give your 2nd input a type attribute of <code>number</code> with a min attribute equal to <code>1</code> and a max attribute equal to <code>5</code></li>
					<li>In your <code>div</code> with a class of <code>col-xs-7 col-md-6</code>, create a 2 more <code>input</code> tags, the 1st set a type attribute equal to <code>range</code> with a min attribute equal to <code>1</code> and a max attribute equal to <code>10</code>, also add a class attribute of <code>form-control</code></li>
					<li>Add another <code>br</code> tag between your 2 new <code>input</code> tags</li>
					<li>Last, set your type attribute equal to <code>date</code> in your 4th <code>input</code>, and a class attribute equal to <code>form-control</code></li>
				</ol>
				<p>Open this file in your browser to see how good out inputs look...<code>Be Aware:</code> Not all inputs are compatible with all browsers, Go to: <a href="http://www.w3schools.com/html/html5_form_input_types.asp" target="_blank">HTML5 Inputs</a> for a current list of all inputs and which browsers they work on.  If you can't use some of your new inputs try switching browsers based on your helpful link.</p>
				<a href="answers/lesson6c.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
				<br><br>
				<p>EXCELLENT JOB!!! building bootstrapified inputs, pretty easy just adding a class to any input!</p>
				<p>Check out <a href="http://getbootstrap.com/components/#input-groups" target="_blank">Bootstrap Input Groups</a> to learn even more on inputs!</p>
				<div class="next1">
					<a href="#tab7" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Navigation Bars &amp; More! <i class="fa fa-2x fa-child"></i></a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="col-xs-12">
			<a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete This Bootstrap <Strong>Inputs</Strong> Task Before Moving On!</a>
		</div>
	</div>
  </article>
</div>