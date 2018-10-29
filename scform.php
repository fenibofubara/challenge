<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup Form</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">-->
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="form.css" >
    <script src="form.js"></script>
    </head>
    <body >
        <style type="text/css">
            #txtcol{
                color:white;
               
            }
            .input{
                background-color:white;
                border-color: #878889;
                border-width:2px;
            }

        </style>
         
        <div class="container" style="margin-bottom: 20px;margin-top:15px">
            
           
            <div class="form-container" style="margin-top:10px; background-color:#878889;border-color:#06967D;border-width:2px;">
                <a href="" class="fa fa-arrow-left btn btn-xs" onclick="javascript:window.history.back();" style="color:white;"></a>
                 
             <div align="center"> <a  href ="https://www.myrewin.com"><img src="logo.png" class="img-responsive" width="50px"></a></div>
              <blockquote style="font-style: italic;font-size:14px;color: white" align="center";>With MyRewin as a socio-intellectual app/web platform, Signup Challenge is for young Nigerian students and fresh graduates with strong marketing and negotiations skills.</blockquote>
               
               <div align="center"><img src="sign.gif" style="height:50px; width:50px"></div>
                  
               <hr>
               <h4 style="font-family: cursive;color: white" align="center" class="txtcol">Sign Up Challenge</h4>
                <form method="post" id="reused_form" enctype=&quot;multipart/form-data&quot;>
                    <label for="name" id="txtcol">Full Name:</label>
                    <input  id="name" type="text" name="Name" required maxlength="50" class="input">
                    <label for="phone" id="txtcol">Phone:</label>
                    <input id="phone" type="text" name="phone" required maxlength="13" class="input">
                    <label for="phone" id="txtcol">Sex:</label>
                          <input list="sex" class="input">
                          <datalist id="sex" placeholder="sex">
                          <option value="male">
                          <option value="female"> 
                        </datalist>
                    <label for="email" id="txtcol">Email Address:</label>
                    <input id="email" type="email" name="Email" required maxlength="50" class="input">
                    <label for="state" id="txtcol">State Of Residence</label>
                    <input id="state" type="text" name="state" required maxlength="50" class="input">
                    <label for="email" id="txtcol">Level/status:</label>
                    <input id="email" type="level" name="level" required maxlength="50" class="input" placeholder="400L,500L or graduates ">

                    <label for="name" id="txtcol">Photo</label>
                    <input type="file" class="form-control" id="image" name="image">
      
                    &nbsp;
                    <button  type="submit" style=" background-color:#06967D;color:white;border-color:#06967D;font-weight: bolder;">SEND</button>
                    <br>&nbsp;
                    <div align="center" style="color:white;"><a href = "https://www.myrewin.com/about" style="text-decoration:none; color:white;">Know More About Myrewin Here</a></div>
               
                </form>
                <div id="success_message" style="display:none">
                   <div align="center"><h3>Form submit successfull!</h3> </div> 
                    <p> We will get back to you soon. </p>
                    
                     <div align="center" style="color:#06967D"><a href = "https://www.myrewin.com/about" style="text-decoration:none">Know More About Myrewin Here</a></div>
                </div>

                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>
        </div>
    </body>
</html>