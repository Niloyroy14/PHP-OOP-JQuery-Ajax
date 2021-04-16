<?php include 'inc/header.php'; ?>
<h2>Ajax: AutoComplete TextBox Ability</h2>
<div class="content">
	<style>
    .skill{
      background: #fba991;
			margin-left: 50px;
      padding: 6px,30px;
			width: 250px;
    }
		.skill ul{
     margin: 0;
		 padding: 0;
		 list-style: none;
		}
		.skill ul li{
     cursor: pointer;
		 text-align: center;
		}
	</style>
	<form action="" method="post">
     <table>
       <tr>
         <td>Skill</td>
         <td>:</td>
         <td>
           <input type="text" name="skill" id="skill" placeholder="Enter Your Skill">
         </td>
       </tr>
     </table>
     <div id="skillstatus">

     </div>
  </form>

<script type="text/javascript">

  $(document).ready(function(){
  $('#skill').keyup(function(){
		var skill = $(this).val();
		if(skill!=''){
		$.ajax({
			 url:"check/check_skill.php",
			 method:"POST",
			 data:{skill:skill},
			 dataType:"text",
			 success: function(data){
				 	$('#skillstatus').fadeIn();
					$('#skillstatus').html(data);
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
