<!DOCTYPE html>

<?php include("functions/functions.php");?>

<html>
    <head>
    
    <title>PASTIME</title>
    
    <link rel="stylesheet" href="styles/style.css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    </head>

<body>
    <!-----------------container starts---------------------------------->
    <div class="container">
    
    <div id="head_wrap">
        <div id="header">
            <img src="images/logo.png">
        <form method="post" action="" id="form1">
            <strong>Email:</strong>
            <input type="email" name="email" placeholder="Email" required="required"/>
            <strong>Password:</strong>
            <input type="password" name="pass" placeholder="*****" required="required"/>            
        <button name="login">Login</button>
        </form>
        </div>
        
        </div>
        
        
     <!----------Content form area starts ------------------------------>   
        <div id="content">
        
        <div>
            <img src="images/">
        </div>
        <div id="form2">
            <form action=" " method="post">
            <h2>Sign Up Here</h2>
            <table>
                <tr>
                    <td align="right">Name:</td>
                    <td>
                    <input type="text" name="u_name" placeholder="Enter your name" required="required"/>
                    </td>
                </tr>
                
                <tr>
                    <td align="right">Password:</td>
                    <td>
                    <input type="password" name="u_pass" placeholder="Enter your password" required="required"/>
                    </td>
                </tr>
                
                <tr>
                    <td align="right">Email:</td>
                    <td>
                    <input type="email" name="u_email" placeholder="Enter your email" required="required" />
                    </td>
                </tr>
                
                <tr>
                    <td align="right">Country:</td>
                    <td>
                    <select name="u_country">
                    <option>Select a country</option>
                    <option>United States</option> 
                    <option>Canada</option>
                    <option>United Kingdom</option>
                    <option>France</option>
                    </select>
                    </td>
                </tr>
                
                  <tr>
                    <td align="right" required="required">Gender:</td>
                    <td>
                    <select name="u_gender">
                    <option>Select a gender</option>
                    <option>Male</option> 
                    <option>Female</option>
                    </select>
                    </td>
                </tr>
                
                <tr>
                    <td align="right">Born:</td>
                    <td>
                    <input type="date" name="u_birthday" />
                    </td>
                </tr>
                
                 <tr>
                    <td>
                    <button name="sign_up">Sign Up</button>
                    </td>
                </tr>
            </table>
            </form>
            <?php InsertUser(); ?>
        </div>  
        </div>
        
        <div id="footer">
            <h2>&copy; 2016- www.pastime.com</h2>
        </div>
        
    </div>
    <!-----------------container ends------------------------------------>

    
</body>





</html>