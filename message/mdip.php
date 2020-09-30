<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css"> -->
    
    <script src="https://kit.fontawesome.com/a6e2755b4d.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->


    <style>
        

        body {
            font-family: "Lato", sans-serif;
            transition: background-color .9s;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: rgb(214, 203, 203);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 45px;
            width: 300px;
        }
        
        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 14px;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            color: #818181;
            margin-top: -15px;
        }

        @media screen and (min-height: 600px) {
            .sidenav {
                padding-top: 15px;
                /* background-color: rgb(214, 0, 0); */
                
            }

            .sidenav a {
                font-size: 15px;
            }
        }

        from h1 {
            color: aquamarine;
        }

        #scroll-text {
            margin-left: 26px;
            background-color: blueviolet;
        }




        /* css for text scrolling */

        .marquee {
            height: 550px;
            width: 92%;
            margin: auto;
        }

        /* css end for text scrolling */

        /* button css start */
        .bgcontainer {
            width: 287px;
            margin-left: 0px;

        }

        #color1 {
            width: 80px;
            height: 33px;
            margin-left: 20px;
            margin-top: -6px;
        }

        }

        #submitColor {
            height: 40px;
            margin-left: 140px;
            margin-top: -40px;
            width: 47px;
            text-align: center;
            border-radius: 3px;
            display: block;
            font-weight: bold;
          
        }

        #color2 {
            width: 80px;
            height: 33px;
            margin-left: 9px;
        }

        #submitColor2 {
            margin-left: 219px;
            margin-top: -33px;
            text-align: center;
            border-radius: 3px;
            display: block;
            font-weight: bold;
            border-radius: 9px;
            width: 49px;
            height: 31px;
            font-size: 14px;

        }

        #input-font {
            height: 31px;
            margin-top: 0px;
            margin-left: 20px;
            width: 79px;
        }
    

        #fsize {
            height: 31px;
            margin-left: 20px;
            margin-top: 0px;
            width: 46px;
            display: inline-block;

        }

        #bar {
            margin-top: -90px;
            font-size: 30px;
            cursor: pointer;
            position: sticky;
            top: 550px;
            left: 10px;
            margin-left: 98%;
        }

        h3 {
            margin-left: 20px;
        }

        #one {
            display: block
        }

        /* button css end  */
        #Fcenter {
            margin-left: 5px;
        }

        .align {
            background-color: rgb(189, 160, 160);
            border: solid 1px rgb(153, 117, 117);
            height: 30px;
            width: 26px;
            
        }

        #scroll-btn {
            margin-top: -35px;
            width: 158px;
            height: 36px;
            margin-left: 75px;
        }

        .fa, .fab, .fad,.fal,.far,.fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        .favbtn:hover {
            background-color: rgb(16, 63, 65);
        }

        #idname1 {
            /* border: solid red 2px; */
            height: 36px;
            border-radius: 7px;
            font-size: 16px;
            margin-left: 10px;
        }

        #idbtn {
            /* border: solid red 2px; */
            
            border-radius: 17px;
            margin-left: 17px;
            width: 80px;
            height: 37px;
            font-weight: bold;
        }


        #left1 {
            margin-left: 9px;
        }

        /* #normal {
            font-size: 12px;
        } */

        .srbtn {
            background-color: hsla(67.1, 53.1%, 62.4%, 0.81);
        }

        .srbtn:hover {
            background-color: rgb(174, 190, 48);
        }

        #rbtn {

            background-color: rgba(240, 19, 19, 0.76);
            width: 71px;
            border: solid 1px rgb(153, 117, 117);
            border-radius: 9px;
            margin-top: 40px;
            margin-left: 117px;
            font-weight: bold;
            font-size: 14px;

        }

        #rbtn:hover {
            background-color: rgba(255, 60, 0, 0.76);
            display: block;

        }

        #TheForm {
            display: block;
        }

        #FForm {
            /* border: solid red 3px; */
            width: 196px;
            display: inline-block;
            height: 111px;
        }

        #bgc {
            
            display: inline-block;
            font-size: 16px;
        }

        #fc {
            /* border: solid 3px red; */
            display: inline-block;
            font-size: 16px;
            margin-left: 22px;
        }

        #idofid {
            display: inline-block;
        }


        #idbtn1 {
            /* border: solid red 2px; */
            height: 32px;
            border-radius: 12px;
            margin-left: 6px;
            width: 100px;
            font-weight: bold;
            font-size: 11px;
        }
        #idbtn2 {
            /* border: solid red 2px; */
            height: 32px;
            border-radius: 12px;
            margin-left: 7px;
            width: 100px;
            font-weight: bold;
            font-size: 11px;
        }
       
       #editid{
        height: 29px;
        font-size: 16px;
        padding: 0px;
        font-weight: bold;
        color: red;
        width: 141px;
        margin-left:20px;
        display: block;
       }

       li {
            display: inline;
        }

        #deviceupdate{
            /* border: solid red 2px; */
            margin-top: 10px;
            margin-left: 20px;
            font-weight: bold;
            color: red;
            display: block;
            font-size: 13px;
            top: 0px;
            position: absolute;

        }

        #idlabel{
            display: inline-block;
            margin-top: 30px;
            margin-left: 20px;
            font-size: 16px;
        }

        #redborder{
            border: solid 2px white;
        }
        #timeclose{
            
            height: 16px;
            display: block;
            width: 290px;
        }
        .heading{
            font-size: 16px
        }
        #scroll{
           
            display:inline-block
        }
        .toggle{
            
            margin-left: 45px;
            height: 34px;
            width:75px;
            font-weight: bold;
            font-size:14px;
        }
    </style>

</head>

<body>

    
    <div id="one">  
       

        <div id="redborder">
            <div id="RunningDisply">
                <marquee behavior="scroll" direction="up" id="mymarquee" style="height: 600px; font-size: 35px; " ><span id='result'> </span></marquee>
            </div>
            <div id="StillDisply" style="height: 600px; font-size: 35px; " ><span id='result1'> </span></div>

       </div>
      
        <div id="main">
            <div id="bar" onclick="openNav()"><i class="fas fa-angle-double-left"></i></div>
        </div>
    </div>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
    <div id="mySidenav" class="sidenav">
        <!-- <a style="display: inline-block; font-size: 16px;" id="deviceupdate"></a> -->
        <div id="timeclose">
            <label for="internertcheck" id="deviceupdate"></label>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i>
            </a>
        </div>
        
     
       <hr>
       <div >
            <h3 id="idlabel" style="display: block;">Device ID</h3>
            
            <input type="text" id="editid" placeholder="Device ID" name="editid" required>
       </div>
            
            
    
           

        </form>
        <hr>
     

            <div class="bgcontainer">
                <h3 id="bgc">Bg-Color</h3>
                <h3 id="fc">Font-Color</h3>
                <input type="color" id="color1" name="favcolor" value="#ffffff">
                
        
                <input id="color2" type="color">
                <input id="submitColor2" value="OK" type="button" class="srbtn" />
            </div>
        </form>
        
        <hr>
        
        <h3 class="heading">Font-Style</h3>
        <select id="input-font" class="input" onchange="changeFontStyle (this);">

            <option value="Arial" selected="selected">
                Arial
            </option>
            <option value="Arial Black">Arial Black</option>
            <option value="cursive">cursive</option>
            <option value="Courier New">Courier New</option>
            <option value="fantasy">Fantasy</option>
            <option value="Geogia">Geogia</option>
            <option value="Impact">Impact</option>
            <option value="Impact">Metropolis</option>
            <option value="Verdana">Lovelo</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Verdana">Verdana</option>


        </select>
        <button id="Fcenter" class="align favbtn" onclick="myFunction1()"><i class="fas fa-align-center"></i></button>

        <button id="Fleft" class="align favbtn" onclick="myFunction2()"><i class="fas fa-align-left"></i>
        </button>
        <button id="Fright" class="align favbtn" onclick="myFunction3()"><i class="fas fa-align-right"></i></button>
        <button id="Fjudtify" class="align favbtn" onclick="myFunction4()"><i class="fas fa-align-justify"></i></button>
        <button id="bold" class="align favbtn" onclick="myFunction5()"><i class="fas fa-bold"></i></button>
        <button id="normal" class="align favbtn" onclick="myFunction6()">B</button>

        <hr>
        <div style="display:inline-block; width: 240px;">
            <h3 class="heading" style="display:inline-block; ">Font-Size</h3>
            <h3 class="heading" id=scroll>Scrolling</h3>
        </div>
        
        <div style="display:inline-block; width: 240px;">
        <select id="fsize" class="input" onchange="changeFontSize (this);">

            <option value="35" selected="selected">
                35
            </option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="60">60</option>
            <option value="75">75</option>
            <option value="90">90</option>
            <option value="110">110</option>
            <option value="120">120</option>
            <option value="140">140</option>
            <option value="155">160</option>
   
        </select>

        <form action="" style="display: inline-block;">
            <input class="toggle" type="button" id="1" value="OFF" style="color:blue"
            onclick="toggle(this);">
        </form>

        </div>
        
        <input type="reset" id="rbtn" value="RESET" class="srbtn align" onclick="myFunctionreset()"> 
      
  
        
    </div>


    <!-- font style start  -->
    <script>
        $(document).ready(function(){
            document.getElementById("StillDisply").style.display = "block";
            document.getElementById("RunningDisply").style.display = "none";
        });


        var changeFontStyle = function (font) {
            document.getElementById("result").style.fontFamily = font.value;
        } 
    
    // <!-- font style end  -->


    // <!-- font alignment start -->
    
        function myFunction1() {
            document.getElementById("mymarquee").style.textAlign = "center";
        }
    
        function myFunction2() {
            document.getElementById("mymarquee").style.textAlign = "left";

        }
 
        function myFunction3() {
            document.getElementById("mymarquee").style.textAlign = "right";

        }

        function myFunction4() {
            document.getElementById("mymarquee").style.textAlign = "justify";
        }
   
        function myFunction5() {
            document.getElementById("result").style.fontWeight = "800";
        }
  
        function myFunction6() {
            document.getElementById("result").style.fontWeight = "100";
        }
  
    // <!-- font alignment end  -->


    // <!-- font  size  -->
    
        var changeFontSize = function (font) {

            document.getElementById("stext2")
            result.style.fontSize = font.value + "px";
            // console.log(font.value);
        } 
 
        function changeFcolor() {
            var color2 = document.getElementById("color2").value; // cached
            var color1 = document.getElementById("color1").value;
            document.bgColor = color1;
            document.getElementById("redborder").style.borderColor = color1;

            document.getElementById("result").style.color = color2;
        }

        document.getElementById("submitColor2").addEventListener("click", changeFcolor, false);

    // <!-- font color end  -->

        function openNav() {
            document.getElementById("mySidenav").style.width = "300px";
            document.getElementById("main").style.marginLeft = "300px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

    // <!-- rset all setting start  -->
 
        function myFunctionreset() {
            document.getElementById("result").style.fontWeight = "100";
            document.getElementById("result").style.textAlign = "justify";
            document.getElementById("result").style.color = "black";
            document.getElementById("result").style.fontFamily = "Arial";
            document.bgColor = "white";
            document.getElementById("stext2")
            result.style.fontSize = "35" + "px";
            document.getElementById("mymarquee").style.textAlign = "left";
            document.getElementById("fsize").value = "35";
            document.getElementById("input-font").value = "Arial";

            document.getElementById("color1").value = "#ffffff";
            document.getElementById("color2").value = "#000000";

        }

    
// /////////////////////EDIT ID FUNCTION////////////////////////////////////////

function idedit1() {
            
            editid = document.getElementById('inputid').value;
            $.post("update.php", { readrecord: editid });
            alert("success")
          
            window.location.reload();
        }
// /////////////////////////////////////////////////////////////
        var editidValue = document.getElementById('editid').value;
        console.log(editidValue)
        var sendPostReq = false
        var afterchange=null
        function doRefresh() {
            editid = document.getElementById('editid').value;
            
            
            if(editid){
                sendPostReq = true
                
                if (sendPostReq == true && afterchange != editid){
                    console.log("POST REQUEST SEND")
                    afterchange = editid
                    $.ajax({
                    url:"update.php",
                    type:"post",
                    data:{ idread:editid },
                    success:function(data,status){

                        var postdata = data;
                        var chars = postdata.split("&date=");

                        if (chars[1]){
                            var str1=chars[1];
                            var str2 = "Updated at ";
                        }
                        else{
                            var str1 = "Not Found!";
                            var str2 = "Device ";
                        }

                        var content = str2.concat(str1);
                        // console.log(typeof content);

                        $('#result1').html(chars[0]);
                        $('#result').html(chars[0]);
                        $( "#deviceupdate" ).empty().append( content );



                        ////////////////border color when data refrefre after error start//////////////////

                        var color1 = document.getElementById("color1").value;
                        document.bgColor = color1;
                        document.getElementById("redborder").style.borderColor = color1;

                        ////////////////border color when data refrefre after error start//////////////////

                    },
                    error: function () {
                        // console.log("Error : Page not found..!");

                        document.getElementById("redborder").style.borderColor = "red";
                    
                    },
                    timeout: function () {
                        // console.log("timeout : server not responce");
                    },
                    complete: function () {
                            // console.log( "complete : doRefresh data page" );
                    }
                    });
                } 
                
                
            else{
                sendPostReq = false
                }

            
   
        }}
        $(function () {
            setInterval(doRefresh, 2000);
        });

        // ////////////////////////marquee scrolling start


        // function toggle(button)
        // {
        // if(document.getElementById("1").value=="ON"){
        //     document.getElementById('mymarquee').start();
        // document.getElementById("1").value="OFF";}

        // else if(document.getElementById("1").value=="OFF"){
        //     document.getElementById('mymarquee').stop();
        // document.getElementById("1").value="ON";}
        // }




        function toggle(button)
        {
        if(document.getElementById("1").value=="OFF"){
            //document.getElementById('mymarquee').start();
            //$("stopdisplay").hide();
            //$("scrolling").show();
            document.getElementById("StillDisply").style.display = "none";
            document.getElementById("RunningDisply").style.display = "block";
            document.getElementById("1").value="ON";}

        else if(document.getElementById("1").value=="ON"){
            //document.getElementById('mymarquee').stop();
            //$("scrolling").hide();
            //$("stopdisplay").show();
            
            document.getElementById("StillDisply").style.display = "block";
            document.getElementById("RunningDisply").style.display = "none";
            document.getElementById("1").value="OFF";}
        }
        // /////////////////////////maerquee scrolling end


    </script>
    <!-- pop up end  -->

</body>

</html>