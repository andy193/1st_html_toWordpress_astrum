<div class="twelve alt columns">

<?php

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <div class="help">
        <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
    </div>
  <?php
    return;
  }
?>

<?php if ( have_comments() ) : ?>
    <h3 class="headline">Add Comment</h3><span class="line" style="margin-bottom: 35px"></span><div class="clearfix"></div>
    
    <!-- Add Comment Form -->
    <form id="add-comment" class="add-comment">
        <fieldset>

            <div>
                <label>Nick:</label>
                <input type="text" value=""/>
            </div>
                
            <div>
                <label>Email: <span>*</span></label>
                <input type="text" value=""/>
            </div>

            <div>
                <label>Comment: <span>*</span></label>
                <textarea cols="40" rows="3"></textarea>
            </div>

        </fieldset>

        <input type="button" class="add-comment-btn" value="Add Comment" />
        <div class="clearfix"></div>

    </form>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>