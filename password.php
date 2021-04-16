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
       <br>
       <tr>
         <td>Password</td>
         <td>:</td>
         <td>
           <input type="password" name="password" id="password" placeholder="Enter Your Password">
         </td>
       </tr>
       <br>
			 <tr>
				 <td></td>
			 	<td><button type="button" class="btn btn-success" id="showPassword">Show Password</button></td>
			 </tr>
     </table>
     <div id="userstatus">

     </div>
  </form>

<script type="text/javascript">

  $(document).ready(function(){
    $('button').click(function(){
      var password = $('#password');
      var fieldType=password.attr('type');
      if (fieldType=='password') {
          password.attr('type','text');
          $('#showPassword').text("Hide Password");
      }else {
        password.attr('type','password');
        $('#showPassword').text("Show Password");
      }

    });
   });

 </script>
</div>
<?php include 'inc/footer.php'; ?>
