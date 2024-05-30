$(document).ready(function(){
    $("#submit").click(function(){
        var name=$("#name").val();
        var author=$("#author").val();
        var publication=$("#publication").val();
        var branch=$("#branch").val();


        console.log(name+"\n"+author+"\n"+publication+"\n"+branch);

        if(!name){alert("Invalid name");return false;}
        else if(!author){alert("Invalid author");return false;}
        else if(!publication){alert("Invalid publication");return false;}
        else if(!branch){alert("Invalid branch");return false;}


        $.ajax({
            type:'POST',
            data:{
                "name":name,
                "author":author,
                "publication":publication,
                "branch":branch,
            },
            url:"./Reqadd.php",
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
        window.location="./User_Page.php";
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
