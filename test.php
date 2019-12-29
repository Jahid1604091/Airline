<html>
   <head>
      <title>jQuery Redirect OnClick</title>
   </head>
<body>
 
<div style="margin:200px 200px;">
   <!--
      Here are our form elements,
      we have the select box / dropdown list
      which contains our URLs or links
   -->
   <select id="websites" style="width:200px;">
      <option value="http://demos.codeofaninja.com/tutorials/jQuery/get_dynamic_div_height.php">Get Dynamic</option>
      <option value="dbbl.php">DBBL</option>
      <option value="https://codeofaninja.com">Blog</option>
      <option value="http://apple.com">Apple</option>
   </select>
  
   <!--
      And our buttons, the first one is "Open In Same Window"
      which opens the link selected on the dropdown in the same window.
      
      The other button is the "Open In New Tab" which opens the link in
      new tab (or window in safari)
   -->
   <input type="button" value="Open In Same Window" id="open_same_window" />
   <input type="button" value="Open In New Tab" id="open_new_tab" />
</div>
 
<!-- include our library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type='text/javascript'>
$(document).ready(function() {
 
   //this will be triggered when the first button was clicked
   $("#open_same_window").click(function(){
      //this will find the selected website from the dropdown
      var go_to_url = $("#websites").find(":selected").val();
      
      //this will redirect us in same window
      document.location.href = go_to_url;
   });
  
   //this will be triggered when the second button was clicked
   $("#open_new_tab").click(function(){
      //this will find the selected website from the dropdown
      var go_to_url = $("#websites").find(":selected").val();
      
      //this will redirect us in new tab
      window.open(go_to_url, '_blank');
   });
  
});
</script>
 
</body>
</html>