<!--différents templates HTML-->



</div>
<!--ajout de jquery UI-->
<script type="application/javascript" src="jquery-ui/js/jquery-1.9.1.js"></script> 
<script type="application/javascript" src="jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>

<!--script pour lautocompletion-->
<script type="application/javascript"> 
$(function(){  
$("#chercher").on('input', function() { 
  $("#chercher").autocomplete({source: 'autocomplete.php?req='+$("#chercher").val()}); 
  }); 
});   
</script>
</body>

</html>