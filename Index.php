<html>
    <head>
        <title>Login page</title>
    </head>
    <body>
        <h1>Login Page</h1>
        <img src="pictures/character.png" alt="character" width="auto" height="auto">
        <form name="login">
            <label><b>Username</b></label>
            <input type="text" name="userid" class="Safety" placeholder="Username" id="userid"/><br><br>
            <label><b>Password</b></label>
            <input type="password" name="pswrd" class="Safety" placeholder="Password" id="pswrd"/><br><br>
            <button type="Submit" class="button" name="log" value="Login">
            Login
            </button>
        </form>
        <?php
        if(isset($_GET['log']))
        {
            $usrname = $_GET['userid'];
            $passwd = $_GET['pswrd'];
            if($usrname == 'cd14be2751' && $passwd == 'Skanda')
            {
                echo('<script>window.location = "Home.html";</script>');
            }
            else
            {
                echo('<script>alert("Error Password or Username")</script>');
            }
        }
        ?>
        <style>
            h1{
                margin-left: 33%;
            }
            form{
                color: aqua;
            }
            img{
                margin-left: 33%;
            }
            .button{
                background-color: aqua;
                border-radius: 0%;
                padding: 15px 170px;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;    
            }
            .safety{
                text-align: center;
            }
            body  
            {  
                margin: 0;  
                padding: 0;  
                background-color:#6abadeba;  
                font-family: 'Arial';  
            }  
            form
            {  
                width: 382px;  
                overflow: hidden;  
                margin: auto;  
                margin: 20 0 0 450px;  
                padding: 80px;  
                background: #23463f;  
                border-radius: 15px ;  
            } 
            #userid
            {  
                width: 300px;  
                height: 30px;  
                border: none;  
                border-radius: 3px;  
                padding-left: 8px;  
            }  
            #pswrd
            {  
                width: 300px;  
                height: 30px;  
                border: none;  
                border-radius: 3px;  
                padding-left: 8px;  
            }  
            #log
            {  
                width: 300px;  
                height: 30px;  
                border: none;  
                border-radius: 17px;  
                padding-left: 7px;  
                color: blue; 
            }
            </style>
    </body>
</html>