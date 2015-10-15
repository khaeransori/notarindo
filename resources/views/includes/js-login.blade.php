
<script type="text/javascript">
  jQuery(document).ready(function($){
    $("#forgotPass").click(function(e){
            $("#forgot-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            e.preventDefault();
        });
        $("#loginForm").click(function(e){
            $("#login-form").delay(100).fadeIn(100);
            $("#forgot-form").fadeOut(100);
            e.preventDefault();
        });
  });
</script>