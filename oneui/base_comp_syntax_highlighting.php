<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/highlightjs/github-gist.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Highlight.js <small>Beautiful syntax highlighting for showcasing your code.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Syntax Highlighting</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<!-- Syntax Highlighting functionality is initialized in App() -> uiHelperHighlightjs() -->
<!-- HTML -->
<div class="content">
    <h2 class="content-heading">HTML</h2>
</div>
<div class="content content-full bg-white">
    <pre class="pre-sh"><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
</div>
<!-- END HTML -->

<!-- CSS -->
<div class="content">
    <h2 class="content-heading">CSS</h2>
</div>
<div class="content content-full bg-white">
    <pre class="pre-sh"><code class="css">/*
=================================================================
SECTION
=================================================================
*/

/* Sub section 1 */
selector {
}

/* Sub section 2 */
selector {
}

/*
=================================================================
SECTION
=================================================================
*/

/* Sub section 1 */
selector {
}

/* Sub section 2 */
selector {
}</code></pre>
</div>
<!-- END CSS -->

<!-- Less -->
<div class="content">
    <h2 class="content-heading">Less</h2>
</div>
<div class="content content-full bg-white">
    <pre class="pre-sh"><code class="less">@base: #f938ab;

.box-shadow(@style, @c) when (iscolor(@c)) {
    -webkit-box-shadow: @style @c;
    box-shadow:         @style @c;
}

.box-shadow(@style, @alpha: 50%) when (isnumber(@alpha)) {
    .box-shadow(@style, rgba(0, 0, 0, @alpha));
}

.box {
    color: saturate(@base, 5%);
    border-color: lighten(@base, 30%);
    div { .box-shadow(0 0 5px, 30%) }
}</code></pre>
</div>
<!-- END Less -->

<!-- JavaScript -->
<div class="content">
    <h2 class="content-heading">JavaScript</h2>
</div>
<div class="content content-full bg-white">
    <pre class="pre-sh"><code class="javascript">/*
 *  Document   : app.js
 *  Author     : pixelcave
 */

var App = function() {

    // User Interface init
    var uiInit = function() {

    };

    return {
        init: function() {
            uiInit();
        }
    };
}();

// Initialize app when page loads
jQuery(function(){ App.init(); });</code></pre>
</div>
<!-- END JavaScript -->

<!-- PHP -->
<div class="content">
    <h2 class="content-heading">PHP</h2>
</div>
<div class="content content-full bg-white">
    <pre class="pre-sh"><code class="php">&lt;?php
class App {
    function home() {
        // ...
    }

    function profile() {
        // ...
    }

    function settings() {
        // ...
    }
}</code></pre>
</div>
<!-- END PHP -->

<!-- Ruby -->
<div class="content">
    <h2 class="content-heading">Ruby</h2>
</div>
<div class="content content-full bg-white">
    <pre class="pre-sh"><code class="ruby"># Output "I love Ruby"
say = "I love Ruby"
puts say

# Output "I *LOVE* RUBY"
say['love'] = "*love*"
puts say.upcase

# Output "I *love* Ruby"
# five times
5.times { puts say }</code></pre>
</div>
<!-- END Ruby -->

<!-- Python -->
<div class="content">
    <h2 class="content-heading">Python</h2>
</div>
<div class="content content-full bg-white">
    <pre class="pre-sh"><code class="python">name = raw_input('What is your name?\n')

print 'Hi, %s.' % name</code></pre>
</div>
<!-- END Python -->

<!-- JSON -->
<div class="content">
    <h2 class="content-heading">JSON</h2>
</div>
<div class="content content-full bg-white">
    <pre class="pre-sh"><code class="json">{
    "menu": {
        "id": "file",
        "value": "File",
        "popup": {
            "menuitem": [
                {"value": "New", "onclick": "CreateNewDoc()"},
                {"value": "Open", "onclick": "OpenDoc()"},
                {"value": "Close", "onclick": "CloseDoc()"}
            ]
        }
    }
}</code></pre>
</div>
<!-- END JSON -->
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/highlightjs/highlight.pack.js"></script>

<!-- Page JS Code -->
<script>
    $(function(){
        // Init page helpers (Highlight.js plugin)
        App.initHelpers('highlightjs');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>