$(document).ready(function () {
    var DOMAIN = "http://localhost/Coursework3/pub_html/";

//Manage Category
    manageCategory(1);
    function manageCategory(pn){
        $.ajax({
            url : DOMAIN+"/includes/process.php",
            method: "POST",
            data: {manageCategory : 1, pageno:pn},
            success: function (data) {
                $("#get_category").html(data);
            }
        })
    }
    
    $("body").delegate(".page-link","click",function(){
        var pn = $(this).attr("pn");
        manageCategory(pn);
    })

})
