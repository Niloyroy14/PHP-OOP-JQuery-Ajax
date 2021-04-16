<?php include 'inc/header.php'; ?>
<h2>Ajax: Live Data Search</h2>
<div class="content">


	<form action="" method="post">
     <table>
       <tr>
         <td>Keyword</td>
         <td>:</td>
         <td>
           <input type="text" name="search" id="search" placeholder="Enter Your Keyword">
         </td>
       </tr>
     </table>
     <div id="searchstatus">

     </div>
  </form>

<script type="text/javascript">

  $(document).ready(function(){
  $('#search').keyup(function(){
		var search = $(this).val();
		if(search!=''){
		$.ajax({
			 url:"check/check_search.php",
			 method:"POST",
			 data:{search:search},
			 dataType:"text",
			 success: function(data){
				 	$('#searchstatus').fadeIn();
					$('#searchstatus').html(data);
			 }
		});
	}
	});

	$(document).on('click','li',function(){
		  $('#skill').val($(this).text());
    	$('#skillstatus').fadeOut();
	});
  });

 </script>
</div>
<?php include 'inc/footer.php'; ?>
