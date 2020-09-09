<7php
   
    if (array_key_exists('u',$_post) or array_kry_exists('p',&_post)){
	  $link = mysqli_connect("localhost",root","123456","luketypingpro");
	    if (mysqli_connect_error()){
	    
		    die ("there was an error connecting to the database");
		 
		}


      if ($_post['u'] == '') {
    
            echo "<h1>Email addres is required.</h1>";	
	   
      } else if ($_post['p'] =='') {
	    
	    	echo "<h1>password is required.</h1>";
		
   	  } else {

        $query + "select 'id" FROM	'userdata' WHERE email = '".mysqli_real_escape_string($link, $_post['u'])."'";
		$result = mysqli_query($link, $query);
		
		if (mysqli_num_rows($result) > 0) {
		
		   echo "<h1>That email addres has already been taken.</h1>";
		} else {
		
		   $query = "insert into 'user data' ('email', 'password<) values ('".mysqli_real_escape_syring($_post['u']."','".mysqli_real_escape_string($_post['p]."'";
		   
		   if (mysqli_queary($linl, $query)) {
		   
		         echo "<h1>you have been signed up!</h1>";
		
            } else {
                 echo "<h1>there is a problem i signing you up, pease try again later</h1>";

			}	 
	    }
	  }	
	
    }
	
	
	
	
	?>
	<html>
	<head>
	
	<link rel="stylesheet" href="signup.css">
	</head>
	
	<div class="login">
	   <h1>Hi  ,  Guest  !</h1>
	 
	   <form method ="post">
	
      <table>
	   <tr>
	    <th>
		<input type="email" name="u" placeholder="your email" required="required" />
		</th> <th> <input type="password" name="p" placeholder="password" required="required" />
	   </tr>
       <tr>

       </tr>
         <table>
            <button type="submit" class="btn btn-primary btn-block btn-large" >
        SIGN IN</button>
      </form>
	</div>  








	
	
	
	
	
	