<?php include 'inc/header.php'; ?>
<h2>Ajax:Auto Refresh Div Content</h2>
<div class="content">

	<style>
		.data{
			background: #ddd;
			margin-left: 50px;
			padding: 6px,30px;
			width: 250px;
			margin-top: 5px;
		}
		.data ul{
		 margin: 0;
		 padding: 0;
		 list-style: none;
		}
		.data ul li{
		 cursor: pointer;
		 text-align: center;
		}
	</style>

	<form action="" method="post">
     <table>
       <tr>
         <td>Content</td>
         <td>:</td>
         <td>
					 <input type="text" name="body" id="body">
         </td>
       </tr>

			 <tr>
			 	<td></td>
				<td></td>
				<td>
					<input type="submit"  id="autosubmit" value="Post">
				</td>
			 </tr>

     </table>
     <div id="autostatus">

     </div>
  </form>

<script type="text/javascript">

  $(document).ready(function(){
    $('#autosubmit').click(function(){
      var content = $('#body').val();

      if ($.trim(content) !='') {
				$.ajax({
					 url:"check/check_refresh.php",
					 method:"POST",
					 data:{body:content},
					 dataType:"text",
					 success: function(data){
							$('#userstatus').html(data);
					 }
				});
      }
    });

		setInterval(function(){
     $('#autostatus').load("check/getRefresh.php").fadeIn("slow");
	 },1000);
   });

 </script>
</div>
<?php include 'inc/footer.php'; ?>
