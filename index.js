
$(document).ready(function(){
    $("#btn").click(function(){
        var uname = $("#uname").val();
        var surname =$("#surname").val();
        if(uname == "" || surname == ""){
            alert("All Fields are required!");
        }
        else{
            $.get(
                "process.php",
                // {uname:uname,surname:surname},
                $('#myForm').serialize(),
                function(response,status,xhr){
                    $("#result").text(response);
                    alert(status);
                    alert(xhr);
                }


            );
        }
    })
});