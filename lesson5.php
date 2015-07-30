<div class="tab-pane" id="tab5">
  <article class="lesson5">

    <div class="lesson_title">
      <h4>Lesson 5</h4>
      <h1>Bootstrap Buttons &amp; Images</h1>
    </div>

    <!-- buttons -->
    <div class="buttons">
    	<h2>BUTTONS</h2>
    	<hr>

    	<!-- options -->
    	<div class="col-md-12">
    		<h3>Button Options</h3>
    		<p>Use any of the available button classes to quickly create a styled button.</p>
    		<div class="table_example">
				<!-- Standard button -->
				<button type="button" class="btn btn-default">Default</button>

				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
				<button type="button" class="btn btn-primary">Primary</button>

				<!-- Indicates a successful or positive action -->
				<button type="button" class="btn btn-success">Success</button>

				<!-- Contextual button for informational alert messages -->
				<button type="button" class="btn btn-info">Info</button>

				<!-- Indicates caution should be taken with this action -->
				<button type="button" class="btn btn-warning">Warning</button>

				<!-- Indicates a dangerous or potentially negative action -->
				<button type="button" class="btn btn-danger">Danger</button>

				<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
				<button type="button" class="btn btn-link">Link</button>
			</div>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/options.php'); ?>
				</code>			
			</div>
    	</div>

    	<!-- sizes -->
    	<div class="col-md-12">
    		<h3>Button Sizing</h3>
    		<p>
	    		Fancy larger or smaller buttons? Add
				<code>.btn-lg</code>
				,
				<code>.btn-sm</code>
				, or
				<code>.btn-xs</code>
				for additional sizes.
			</p>
    		<div class="table_example">
				<p>
				  <button type="button" class="btn btn-primary btn-lg">Large button</button>
				  <button type="button" class="btn btn-default btn-lg">Large button</button>
				</p>
				<p>
				  <button type="button" class="btn btn-primary">Default button</button>
				  <button type="button" class="btn btn-default">Default button</button>
				</p>
				<p>
				  <button type="button" class="btn btn-primary btn-sm">Small button</button>
				  <button type="button" class="btn btn-default btn-sm">Small button</button>
				</p>
				<p>
				  <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
				  <button type="button" class="btn btn-default btn-xs">Extra small button</button>
				</p>
			</div>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/sizing.php'); ?>
				</code>			
			</div>
			<p>
				Create block level buttons—those that span the full width of a parent— by adding
				<code>.btn-block</code>
				.
			</p>
			<div class=" col-md-8 col-md-offset-2">
				<div class="table_example">
					<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
					<button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
				</div>
				<div class="well well-sm code_margin">		
					<code>
						<?php include('code/lesson5/full_width_sizing.php'); ?>
					</code>			
				</div>
			</div>
    	</div>

    	<!-- panel -->
    	<div class="col-md-12">
	    	<div class="panel panel-info">
	    		<div class="panel-heading">
	    			Context-specific usage
	    		</div>
	    		<div class="panel-body">
    				Button classes can be used on <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, and <code>&lt;input&gt;</code> elements, <strong>BUT</strong> only <code>&lt;button&gt;</code> elements are supported within Bootstrap nav and navbar components.
	    		</div>
	    	</div>
	    </div>

    	<!-- tags -->
    	<div class="col-md-12">
    		<h3>Usable Tags</h3>
    		<p>
    			Use the button classes on an
				<code>&lt;a&gt;</code>
				,
				<code>&lt;button&gt;</code>
				, or
				<code>&lt;input&gt;</code>
				element.
			</p>
    		<div class="table_example">
				<a class="btn btn-default" href="#" role="button">Link</a>
				<button class="btn btn-default" type="submit">Button</button>
				<input class="btn btn-default" type="button" value="Input">
				<input class="btn btn-default" type="submit" value="Submit">
			</div>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/tags.php'); ?>
				</code>			
			</div>
    	</div>
    </div>

    <div class="row row_pad"></div>

    <!-- images -->
    <div class="images">
    	<h2>IMAGES</h2>
    	<hr>

    	<!-- Responsive Images -->
    	<div class="col-md-12">
    		<h3>Responsive Images</h3>
    		<p>
	    		Images in Bootstrap 3 can be made responsive-friendly via the addition of the
				<code>.img-responsive</code>
				class. This applies
				<code>max-width: 100%;</code>
				and
				<code>height: auto;</code>
				to the image so that it scales nicely to the parent element.
			</p>
			<br>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/responsive.php'); ?>
				</code>			
			</div>
    	</div>

    	<!-- Image Shapes -->
    	<div class="col-md-12">
    		<h3>Image Shapes</h3>
    		<p>
    			Add classes to an
				<code>&lt;img&gt;</code>
				element to easily style images in any project.
    		</p>
    		<div class="table_example table_images">
				<img src="img/place_holder.jpg" alt="image rounded" class="img-rounded">
				<img src="img/place_holder.jpg" alt="image circle" class="img-circle">
				<img src="img/place_holder.jpg" alt="image thumbnail" class="img-thumbnail">
			</div>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson5/shapes.php'); ?>
				</code>			
			</div>
    	</div>
    	
    </div>

    <!-- lesson task -->
	<div class="task">
		<div class="task1">
			<div class="col-md-12">
				<h3>WooHoo creating nice buttons and adjusting images is a breeze now. Time to practice what you've learned!</h3>
				<p class="lead">Open your index.html from the BootstrapTest folder in sublime.</p>
				<ol>
					<li>Create 2 new sibiling - <strong>(seperate)</strong> <code>div</code> tags, one with a class of <code>container-fluid</code>, and one with a class of <code>container</code> below all other lesson practice divs</li>
					<li>Add a div tag with a class of <code>row</code> inside each new div</li>
					<li>Inside each <code>row</code> add <code>button</code> tags. Attach a class of <code>btn btn-primary btn-block</code> to each, and in between the button tag add content to your new buttons, i.e. Submit, Send Email, Default Button, etc.</li>
					<li>Add a <code>&lt;br&gt;</code> after each new button tags</li>
					<li>Time to add some grid components - make 2 new <code>div</code>, 1 in each row - with a class of <code>col-md-8</code> for the 1st one and <code>col-md-6 col-md-offset-3</code> for the 2nd</li>
					<li>In our <code>col-md-8</code> div, begin with 2 new <code>button</code> tags, 1 <code>&lt;input&gt;</code> 1 <code>a</code> tag, and 1 more <code>button</code> forthe last tag</li>
					<li>Now you can add a few classes to make this components look nice really quickly. <strong>But</strong> first you should give these buttons names. In between the opening and closing <code>a</code> &amp; <code>button</code> tags, give each button a name, i.e. Submit, act now, start today, etc. Finally add a value attribute to the <code>input</code> to name it, something like <code>value="Input Button"</code>.</li>
					<li>Add a few classes <code>btn btn-lg</code> on your 1st <code>button</code>. On your 2nd <code>button</code>, add <code>btn btn-sm btn-primary</code></li>
					<li>For your <code>input</code> add a class of <code>btn btn-danger btn-lg</code>, also add the type attribute equal to <code>button</code></li>
					<li>Your <code>a</code> tag should get the class of <code>btn btn-success</code></li>
					<li>For your 3rd button, give it the classes <code>btn btn-default btn-lg</code></li>
					<li>Move inside your other <code>container</code> div, add 3 <code>img</code> tags inside your <code>col-md-6 col-md-offset-3</code> div in there</li>
					<li>Add 3 Images with a width no greater than 250px. If you need one you can save this <a href="http://img1.wikia.nocookie.net/__cb20100519113307/mafiawars/images/8/8d/7-eleven_logo-250x250.gif.png" target="_blank">Sweet Picture!</a> image into your img folder</li>
					<li>On your 1st <code>img</code>, add a class of <code>img-circle</code>, to create a circle around your Image</li>
					<li>On your 2nd <code>img</code>, add a class of <code>img-rounded</code>, to round your Image</li>
					<li>On your 3rd <code>img</code>, add a class of <code>img-thumbnail</code>, to create a thumbnail feel around your Image</li>
				</ol>
				<p>Open this file in your browser to see what you just did!</p>
				<a href="answers/lesson5.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
				<br><br>
				<p>EXCELLENT!!! Everyone loves nice buttons and images! Inspect some of the elements to see what Bootstrap's Css is doing to your tags!</p>
				<p>Take a look at <a href="http://getbootstrap.com/css/#buttons" target="_blank">Bootstrap Buttons</a> &amp; <a href="http://getbootstrap.com/css/#images" target="_blank">Bootstrap Images</a> to learn even more about editing bootstrap buttons and images</p>
				<div class="next1">
					<a href="#tab6" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: More Buttons &amp; Inputs! <i class="fa fa-2x fa-child"></i></a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="col-xs-12">
			<a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete This Bootstrap <Strong>Buttons &amp; Images</Strong> Task Before Moving On!</a>
		</div>
	</div>
  </article>
</div>