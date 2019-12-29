<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dialog box</title>
    <link rel="stylesheet" href="css/dialogBox.css">
</head>
<body>
    <div id="white-background">
        
    </div>
    
    <div id="dlgbox">
        <div id="dlg-header">You are logged out</div>
        <div id="dlg-body">Kindly Log in to continue</div>
        <div id="dlg-footer">
            <button onclick="dlgLogin()">log In</button>
        </div>
    </div>
    
    
    <p>Click the button to see dialog box</p>
    <button onclick="showDialog()">Click me!</button>
    
    
    <script>
    
    function dlgLogin(){
        var whitebg=document.getElementById("white-background");
        var dlg=document.getElementById("dlgbox");
        whitebg.style.display="none";
        dlg.style.display="none";
    }
        
        
    function showDialog(){
        var whitebg=document.getElementById("white-background");
        var dlg=document.getElementById("dlgbox");
        whitebg.style.display="block";
        dlg.style.display="block";
        
        
        var winWidth=window.innerWidth;
        var winHeight=window.innerHeight;
        dlg.style.left=(winWidth/2)-480/2+"px";
        dlg.style.top="150px";
        
    }
    </script>
</body>
</html>