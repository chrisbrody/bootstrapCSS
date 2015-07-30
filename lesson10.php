<div class="tab-pane" id="tab10">
  <article class="lesson10">
    
    <div class="lesson_title">
      <h4>Lesson 10</h4>
      <h1>Page Headers, Nice Thumbnails, &amp; The "Jumbotron"</h1>
    </div>

    <!-- page headers -->
    <div class="page_headers">
      <h2>Page Headers</h2>
      <p>
        A simple shell for an
        <code>h1</code>
        to appropriately space out and segment sections of content on a page. It can utilize the
        <code>h1</code>
        's default
        <code>small</code>
        element, as well as most other components (with additional styles).
      </p>
      <hr>

      <!-- basic -->
      <div class="col-md-12">
        <h3>
          Basic Page Header
        </h3>
        <div class="table_example">
          <div class="page-header">
            <h1>Example page header <small>Subtext for header</small></h1>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/page_header.php'); ?>
          </code>     
        </div>
      </div>

    </div>

    <!-- thumbnails -->
    <div class="page_headers">
      <h2>Thumbnails</h2>
      <p>Extend Bootstrap's grid system with the thumbnail component to easily display grids of images, videos, text, and more.</p>
      <hr>

      <!-- Default example -->
      <div class="col-md-12">
        <h3>
          Default Example
        </h3>
        <p>
          By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.
        </p>
        <div class="table_example">
          <div class="row">

            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img alt="100%x180" src="img/171x180.jpg" style="height: 180px; width: 100%; display: block;">
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="img/171x180.jpg" alt="..." style="height: 180px; width: 100%; display: block;">
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="img/171x180.jpg" alt="..." style="height: 180px; width: 100%; display: block;">
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="img/171x180.jpg" alt="..." style="height: 180px; width: 100%; display: block;">
              </a>
            </div>

          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/thumbnail_default.php'); ?>
          </code>     
        </div>
      </div>
      <div class="clearfix"></div>
      <!-- Custom content -->
      <div class="col-md-12">
        <h3>
          Custom Content
        </h3>
        <p>
          With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.
        </p>
        <div class="table_example">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/260x180.jpg" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/260x180.jpg" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/260x180.jpg" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/260x180.jpg" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/thumbnail_custom.php'); ?>
          </code>     
        </div>
      </div>
    </div>

    <!-- jumbotron -->
    <div class="jumbotrons">
      <h2>Jumboptron</h2>
      <p>A lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.</p>
      <hr>

      <!-- Basic -->
      <div class="col-md-12">
        <h3>
          Basic Jumbotron
        </h3>
        <div class="table_example">
          <div class="clearfix"></div>
          <div class="container" style="max-width:700px;">
            <div class="jumbotron">
              <h1>Hello, world!</h1>
              <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/jumbotron_full.php'); ?>
          </code>     
        </div>
        <h3>Jumbotron inside a container</h3>
        <p>
          To make the jumbotron full width, and without rounded corners, place it outside all
          <code>.container</code>
          s and instead add a
          <code>.container</code>
          within.
        </p>
        <div class="table_example">
          <div class="jumbotron">
            <div class="container">
              <h1>Hello, world!</h1>
              <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/jumbotron_contained.php'); ?>
          </code>     
        </div>
      </div>

    </div>

    <!-- task 10 -->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Adding Jumbotrons, Page Headers &amp; Thumbnails to any website is a breeze now...so lets write some more of your own <code>CODE</code> to master these!</h3>
          <p class="lead">Open your index.html again</p>
          <ol>
            <li>Create 3 <code>div</code> tags below everything, give a class of <code>jumbtron</code> to the 1st, a class of <code>clearfix</code> to the 2nd and a class of either <code>container</code> or <code>container-fluid</code> to your 3rd div</li>
            <li>Inside your jumbotron div, add another <code>div</code> tag, with a class of <code>container</code>. Inside here, add a <code>h1</code> tag with some words, e.x. Awesome Bootstrap Jumbrotron!</li>
            <li>Add a <code>p</code> tag below, and fill it with a line of random text from <a href="http://www.lipsum.com" target="_blank">Lorem Ipsum</a>, also add 1 <code>a</code> tag with the classes of <code>btn</code>, <code>btn-primary</code> &amp; <code>btn-lg</code> and its role attribute equal to <code>button</code>. Give content to the anchor: Learn More - text between tags</li>
            <li>Below the btn-primary a tag, add a <code>div</code> tag, with a class of <code>clearfix</code> here and a line break tag: <code>&lt;br&gt;</code> after, followed by another <code>div</code> tag, with a class of <code>row</code>. Inside here, add 4 more <code>div</code> tags, with the classes of <code>col-xs-6</code> &amp; <code>col-md-3</code> on each one</li>
            <li>Inside each each of the 4 new divs, add 1 <code>a</code> tag with a class of <code>thumbnail</code> and an <code>img</code> tag inside each anchor, we'll use the same image we used before <a href="http://img1.wikia.nocookie.net/__cb20100519113307/mafiawars/images/8/8d/7-eleven_logo-250x250.gif.png" target="_blank">This Sweet 7Eleven Logo</a> - or you can use any other one</li>
            <li>Set each img src to your 7.11 logo <code>src="img/711.jpg"</code> and add a alt attribute equal to <code>image place holder</code> and the number of the image 1 - 4. <strong>Alternatively</strong> you can set each img <code>src="http://img1.wikia.nocookie.net/__cb20100519113307/mafiawars/images/8/8d/7-eleven_logo-250x250.gif.png"</code>, the images file location, rendering the image without saving it</li>
            <li>Move into your 3rd original div with the class of <code>container</code> or <code>container-fluid</code>, add 3  <code>div</code> tags inside here, the 1st with a class of <code>jumbotron</code>, the 2nd a class of <code>page-header</code> and your 3rd a class of <code>row</code></li>
            <li>In the interior of your jumbotron div, again add a <code>h1</code> with some text e.x. Bootstraps Jumbotron! - Add a <code>p</code> tag below and fill a line of text with <a href="http://www.lipsum.com" target="_blank">Lorem Ipsum</a>, And finally add a <code>a</code> tag with the classes of <code>btn</code>,  <code>btn-success</code> &amp; <code>btn-lg</code> and a role attribute of <code>button</code>. Add content to the anchor. i.e. Learn More</li>
            <li>In your <code>page-header</code> div add a <code>h1</code>tag and add some text e.x. Example Bootstrap Page Header - Nice!</li>
            <li>Next inside your <code>row</code> div, add four new <code>div</code> tags, with the classes of <code>col-sm-6</code> &amp; <code>col-md-3</code> on each. Add another <code>div</code> tag, inside each grid div with a class of <code>thumbnail</code></li>
            <li>Add a <code>img</code> tag, again link your img src to <a href="http://img1.wikia.nocookie.net/__cb20100519113307/mafiawars/images/8/8d/7-eleven_logo-250x250.gif.png" target="_blank">This Sweet 7Eleven Logo</a>. &amp; a <code>div</code> tag below the img, with a class of <code>caption</code></li>
            <li>Next create a <code>h3</code>, <code>p</code> &amp; 2 <code>a</code>tags inside your caption div. Add text of "Thumbnail label" to your h3 tag. Fill your p tag with some more dummy <a href="http://www.lipsum.com" target="_blank">Lorem Ipsum</a> text</li>
            <li>Add the text of <code>button</code> in between your <code>a</code> tags, and add a role of <code>button</code> to each one</li>
            <li>Finally the 1st anchor the classes of <code>btn</code> &amp; <code>btn-success</code> and the 2nd anchor the classes of <code>btn</code> &amp; <code>btn-danger</code></li>
          </ol>
          <p>Open this file in your browser to see your Thumbs, Page-header &amp; JUMBOTRON!</p>
          <a href="answers/lesson10.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>Jumbotrons, Thumbnails &amp; Page Headers are great Bootstrap CSS elements that you can utilize anytime now!</p>
          <p>Check out <a href="http://getbootstrap.com/components/#page-header" target="_blank">Bootstrap Page Headers</a>, <a href="http://getbootstrap.com/components/#thumbnails" target="_blank">Bootstrap Thumbnails</a> &amp; <a href="http://getbootstrap.com/components/#jumbotron" target="_blank">Bootstrap's Jumbotrons</a> to learn even more!</p>
          <div class="next1">
            <a href="#tab11" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Bootstrap Panels, Wells &amp; List-Groups! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12">
        <a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Header, Thumbnails &amp; Jumbotron</Strong> Task Before Moving On!</a>
      </div>
    </div>

  </article>
</div>