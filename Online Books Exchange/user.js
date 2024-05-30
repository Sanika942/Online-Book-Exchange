$(document).ready(function(){
    $("#submit").click(function(){
        var name=$("#name").val();
        var email=$("#email").val();
        var pass=$("#pass").val();

        console.log(name+"\n"+email+"\n"+pass);

        if(!name){alert("Invalid name");return false;}
        else if(!email){alert("Invalid email");return false;}
        else if(!pass){alert("Invalid password");return false;}

        $.ajax({
            type:'POST',
            data:{
                "name":name,
                "email":email,
                "pass":pass,
            },
            url:"./useradd.php",
            dataType:'json',
            success:function(result){
                console.log(result);
                if(result['error']==0)alert("inserted successfully");
                else alert("inserted not successfully");
            },
        });
        window.location="./User_Page.php";


    });
    $("#displaybtn").click(function(){
        window.location="./userdisplay.php";
    });

//     $("#updatebtn").click(function(){
//         var uname=$("#uname").val();
//         var upass=$("#upass").val();
//         if(!uname){alert("Invalid name");return false;}
//         else if(!upass){alert("Invalid Password");return false;}
//         $.ajax({
//             type:'POST',
//             data:{
//                 "uname":uname,
//                 "upass":upass,
//             },
//             url:"./update.php",
//             dataType:'json',
//             success:function(result){
//                 if(result['error']==0)alert("Updated successfully");
//                 else alert("Not updated successfully");
//             },
//         });
//     });

    
//     $("#deletebtn").click(function(){
//         var dpass=$("#dpass").val();
//         if(!dpass){alert("Invalid Password");return false;}
//         $.ajax({
//             type:'POST',
//             data:{
//                 "dpass":dpass,
//             },
//             url:"./delete.php",
//             dataType:'json',
//             success:function(result){
//                 if(result['error']==0)alert("Deleted successfully");
//                 else alert("Not Deleted successfully");
//             },
//         });
//     });

});
