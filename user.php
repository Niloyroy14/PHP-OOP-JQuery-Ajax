<?php include 'inc/header.php'; ?>
<h2>Ajax: Check UserName Ability</h2>
<div class="content">
	<form action="" method="post">
     <table>
       <tr>
         <td>UserName</td>
         <td>:</td>
         <td>
           <input type="text" name="username" id="username" placeholder="Enter Your UserName">
         </td>
       </tr>
			 <tr>
				 <td></td>
			 	<td><button type="button" class="btn btn-success" onclick="saveData()">Submit</button></td>
			 </tr>
     </table>
     <div id="userstatus">

     </div>
  </form>

<script type="text/javascript">
  function saveData(){
  $(document).ready(function(){

      var username = $('#username').val();
      $.ajax({
         url:"check/check_user.php",
         method:"POST",
         data:{username:username},
         dataType:"text",
         success: function(data){
            $('#userstatus').html(data);
         }
      });


   });
 }
 </script>
</div>
<?php include 'inc/footer.php'; ?>
