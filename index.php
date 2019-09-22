<?php

?>


<html>

    <head>
        <title>MindEye</title>
        <link href="https://fonts.googleapis.com/css?family=Dosis:800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:400,600,700" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
        <style type = "text/css">
body {
margin: 0;
padding: 0;
    background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
                                      max-height: 100%;
                                      background-attachment: fixed;
                                      background-position: center;
                                      background-repeat: no-repeat;
                                      background-size: cover;
                                      }
                                      
                                      p {
                                      margin-bottom: 40px !important;
                                      }
                                      
                                      ::placeholder {
                                      color: white;
                                      opacity: 1;
                                      }
                                      
                                      .title {
                                      color: rgba(255, 251, 244, 0.95);
                                      font-family: "Dosis", sans-serif;
                                      font-size:95px;
                                      text-align: center;
                                      margin-top: 30px;
                                      }
                                      .header {
                                      font-size: 70px;
                                      margin-bottom: 70px;
                                      }
                                      .submit {
                                      font-family: "Catamaran", sans-serif;
                                      font-size:19px;
                                      padding-bottom: 5px;
                                      padding-top: 5px;
                                      padding-left: 13px;
                                      padding-right: 13px;
                                      margin-top: 10px;
                                      margin-right: 0px;
                                      color: #ffffff;
                                      border: 0px solid;
                                      background-color: rgba(255, 251, 244, 0.5);
                                      cursor: pointer;
                                      transition-duration: 0.3s;
                                      }
                                      .submit:hover {
                                      background-color: rgba(255, 251, 244, 0.75);
                                      }
                                      
                                      #results{
                                      margin-top: 10px;
                                      width:490px;
                                      height:370px;
                                      border: 2px solid #ffffff;
                                      border-radius: 15px;
                                      overflow: hidden;
                                      margin-left:auto;
                                      margin-right:0;
                                      text-align: left;
                                      }
                                      
                                      #takepic {
                                      float: left;
                                      margin-top: 20px;
                                      }
                                      
                                      #submit {
                                      float: right;
                                      
                                      }
                                      
                                      #pics {
                                      float: right;
                                      width:calc(50% - 40px);
                                      margin-left:40px;
                                      text-align: right;
                                      }
                                      #pics2 {
                                      margin-right:40px;
                                      text-align: left;
                                      float:right;
                                      width:calc(50% - 40px);
                                      }
                                      .int{
                                      float: right;
                                      width: calc(202.31px - 5px);
                                      font-family: "Catamaran", sans-serif;
                                      border: 2px solid rgba(255, 251, 244, 0.5);
                                      font-size: 19px;
                                      color: #ffffff;
                                      transition-duration: 0.3s;
                                      background-color: transparent;
                                      margin-top: 10px;
                                      margin-left: 5px;
                                      padding-bottom: 3.5px;
                                      padding-top: 3.5px;
                                      padding-left: 13px;
                                      padding-right: 13px;
                                      
                                      }
                                      
                                      .int:focus {
                                      outline: none;
                                      }
        </style>
    </head>

    <body>
    	<div class="header">
    		<p class="title">mindeye</p>
   		</div>
        <div class = "container">
            <form method="POST" action="storeImage.php">
                <div class="row">
                    <div id="pics">
                        <div id="my_camera"></div>

                        <input type=button value="Take Snapshot" onClick="take_snapshot()" id = "takepic" class="submit">
                        <input type="hidden" name="image" class="image-tag">
                    </div>
                    <div id="pics2">
                        <div id="results"></div>
                    	<div class="col-md-12 text-center">
                        	<br/>
                        	<input class="int" type="text" placeholder = "Name" name = "name">
                        	<input class="int" type="text" placeholder = "Relation" name = "relation">
                        	<button class="submit" id = "submit">Submit</button>
                    	</div>
                	</div>
                </div>
            </form>
        </div>

        <script language="JavaScript">
            Webcam.set({
                width: 490,
                height: 390,
                image_format: 'jpeg',
                jpeg_quality: 180
            });

            Webcam.attach( '#my_camera' );

            function take_snapshot() {
                Webcam.snap( function(data_uri) {
                    $(".image-tag").val(data_uri);
                    document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                } );
            }
        </script>

    </body>

</html>
