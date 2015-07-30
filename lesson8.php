<div class="tab-pane" id="tab8">
  <article class="lesson8">

    <div class="lesson_title">
      <h4>Lesson 8</h4>
      <h1>Adding Labels &amp; Badges</h1>
    </div>

    <!-- labels -->
    <div class="labels">
      <h2>Labels</h2>
      <hr>

      <!-- default -->
      <div class="col-md-12">
        <h3>
          Default Labels
        </h3>
        <p>
          
        </p>
        <div class="table_example">
          <h1>Example heading <span class="label label-default">New</span></h1>
          <h2 class="lowercase">Example heading <span class="label label-default">New</span></h2>
          <h3>Example heading <span class="label label-default">New</span></h3>
          <h4>Example heading <span class="label label-default">New</span></h4>
          <h5>Example heading <span class="label label-default">New</span></h5>
          <h6>Example heading <span class="label label-default">New</span></h6>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/label_default.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Available variations -->
      <div class="col-md-12">
        <h3>
          Available Variations
        </h3>
        <p>
          Add any of the below mentioned modifier classes to change the appearance of a label.
        </p>
        <div class="table_example">
          <span class="label label-default">Default</span>
          <span class="label label-primary">Primary</span>
          <span class="label label-success">Success</span>
          <span class="label label-info">Info</span>
          <span class="label label-warning">Warning</span>
          <span class="label label-danger">Danger</span>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/label_variations.php'); ?>
          </code>     
        </div>
      </div>


    </div>

    <!-- badges -->
    <div class="badges">
      <h2>Badges</h2>
      <p>
        Easily highlight new or unread items by adding a
        <code>&lt;span class="badge"&gt;</code>
        to links, Bootstrap navs, and more.
      </p>
      <hr>

      <!-- basic -->
      <div class="col-md-12">
        <h3>
          Basic Example
        </h3>
        <div class="table_example">
          <a href="#">Inbox <span class="badge">42</span></a>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/badge_default.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Adapts to active nav states -->
      <div class="col-md-12">
        <h3>
          Active nav states &amp; Stacked
        </h3>
        <p>
          Built-in styles are included for placing badges in active states in pill navigations.
        </p>
        <div class="table_example">
          <ul class="nav nav-pills">
            <li class="active">
              <a href="#">
                Home
                <span class="badge">42</span>
              </a>
            </li>
            <li>
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">
                Messages
                <span class="badge">3</span>
              </a>
            </li>
          </ul>
          <br>
          <ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
            <li class="active">
              <a href="#">
                <span class="badge pull-right">42</span>
                Home
              </a>
            </li>
            <li>
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">
                <span class="badge pull-right">3</span>
                Messages
              </a>
            </li>
          </ul>
          <br>
          <button class="btn btn-primary" type="button">
          Messages
          <span class="badge">4</span>
          </button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/badge_active.php'); ?>
          </code>     
        </div>
      </div>


    </div>


    <!-- task 8 -->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Lets Jump right into writing some <code>CODE</code> to make some labels &amp; badges.</h3>
          <p class="lead">Open our index.html file from the project folder we have been using the past Lessons</p>
          <ol>
            <li>Start by a <code>div</code> tag, with class of <code>container-fluid</code> or <code>container</code>, outside all other lesson code</li>
            <li>Add another <code>div</code> tag, with a class of <code>row</code> and a 3rd <code>div</code> inside the row with the classes of <code>col-xs-6</code> &amp; <code>col-md-8</code></li>
            <li>Add a <code>h1</code> tag, with the text of Example Heading 1 add a space next to the text &amp; add a <code>span</code> tag</li>
            <li>Give this span the classes of <code>label</code> &amp; <code>label-default</code> and a text of Default Label</li>
            <li>Add an <code>h2</code> tag below your h1 with the text of Example Heading 2, add a space next to the text and add a <code>span</code> tag</li>
            <li>Attach the classes of <code>label</code> &amp; <code>label-primary</code> to this span and a text of Primary Label</li>
            <li>Next, add a <code>h3</code> tag below your h2 with the text of Example Heading 3. Again add a space next to the text and add a <code>span</code> tag</li>
            <li>Give this span the classes of <code>label</code> &amp; <code>label-primary</code> and a text of Primary Label</li>
            <li>Below your header3 tag, make 2 <code>a</code> tags with a text of the 1st as Inbox and 2nd as Messages.</li>
            <li>Add 1 space next to our text inside our anchors and create a <code>span</code> tag in each, with a class attribte of <code>badge</code> and any number between each of the opening and closing span tags</li>
            <li>Add 2 <code>&lt;br&gt;</code> tags below your anchors, to add a little space between our elements. Next create a <code>ul</code> with the classes of <code>nav</code>,  <code>nav-pills</code> &amp; <code>nav-stacked</code></li>
            <li>Inside this, add 2 <code>li</code> tags, with <code>a</code> tags inside each, so we can link them when we need to to</li>
            <li>Set our 1st <code>li</code> to have a class of <code>active</code>. Add a span in each a tag, with a classes of <code>badge</code> &amp; <code>pull-right</code> and a number between the span tags</li>
            <li>Finally Label your nav items, on the next line after each span, designate names i.e. Home, Profile, Email, Contacts</li>
          </ol>
          <p>Open this file in your browser to see what we just did!</p>          
          <a href="answers/lesson8.php" target="_blank" class="text-danger">Ex: This is how your new file should look</a>
          <br><br>
          <p>EXCELLENT!!! We just built some bootstrap sweet labels &amp; badges, those will come in handy down the road!</p>
          <p>Check out <a href="http://getbootstrap.com/components/#labels" target="_blank">Bootstrap Labels</a> &amp; <a href="http://getbootstrap.com/components/#badges" target="_blank">Bootstrap Badges</a> to learn even more!</p>
          <div class="next1">
            <a href="#tab9" data-toggle="tab" class="btn btn-code btn-lg tabs"><i class="fa fa-child fa-2x"></i> Next Up: Bootstrap Alerts &amp; Progress-bars! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12">
        <a class="btn btn-task btn-lg btn-block"><i class="fa fa-terminal"></i> Complete This Bootstrap <Strong>Labels &amp; Badges</Strong> Task Before Moving On!</a>
      </div>
    </div>
  </article>
</div>