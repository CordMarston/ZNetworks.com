$(document).ready(function(){$("#cButton").click(function(){$.post("assets/sendmail.php",$("#cForm").serialize()).done(function(e){$.confirm({theme:"supervan",title:"Thank You!",content:"A Z Networks representative will reach out to you to confirm your consultation.",buttons:{close:function(){}}})})});var e=window.innerHeight-270;$(".viewBio").click(function(){var t=$(this).attr("employee"),o=$(this).attr("name");$.confirm({theme:"supervan",title:o,columnClass:"col-md-10 text-left",content:"url:includes/viewemployee.php?employee="+t,buttons:{close:function(){}},onContentReady:function(){$(".eHolder").css("max-height",e+"px")}})}),$(document).on("click",".item",function(){$(".employeeHolder").load("assets/employee-spotlight.php")})});