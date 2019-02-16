<?php /* Template Name: contact page */ ?>
<?php get_header(); ?>


<div id="my-map"></div>
<div class="contact-info-form">
	<div class="info">
		 <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                    else :
                        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                    endif;
          ?>
	</div>

        <form method="POST" name="contactform" action="<?php echo get_template_directory_uri() ;?>/contact-form-handler.php" id="form"> 
        <table>
        <tr>
        <td><label for='name'><h4>Your Name:</h4></label></td><td><input type="text" name="name"></td>
        </tr>
        <tr>
        <td><label for='email'><h4>Email Address:</h4></label></td><td><input type="text" name="email"></td>
        </tr>
        </table>
        <label for='message'><h4>Message:</h4></label> <br>
        <textarea name="message"></textarea>
        
        <input type="submit" value="Submit"><br>
        </form>
 <div class="clear"></div>
</div>

<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>

 
<?php get_footer(); ?>