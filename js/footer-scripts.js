<script type="text/javascript">                     
//validacija search-a

var frmvalidator  = new Validator("searchform");
frmvalidator.addValidation("s","req","Field must not be empty");



//hamburger meni sa ikonicom
$(document).ready(function() {
  $('#simple-menu').sidr({
      side: 'right'
    });
});


$('.menu-icon').click(function() {
  $(this).toggleClass('is-active')});
  
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpMWAMHoYdgUpRLhyECIzE6gahX0h49lk">
//google map
    </script>


<script type="text/javascript">
 //accordion skripta
  $(".accordion > li > h4").click(function(){
 
    if(false == $(this).next().is(':visible')) {
        $('.accordion ul').slideUp(300);
    }
    $(this).next().slideToggle(300);
});
//da pokaze prvi item accordiona otvorenim
//$('.accordion ul:eq(0)').show();
 

var  mn = $(".main-navigation");
    mns = "main-navigation-scroled";

$(window).scroll(function() {
  if( $(this).scrollTop() > 50 && $(this).width() > 768) {
    mn.addClass(mns);
	$("#nav-logo").hide();
  } else {
    mn.removeClass(mns);
	$("#nav-logo").show();
  }
});
</script>