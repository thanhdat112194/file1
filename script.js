$(document).ready(function(){
    $("#button").click(function(){
        let name = $("#content").val();
        // alert(name);
        $.ajax({
            url:"content.php",
            type:"POST",
            catch:true,
            data:{n:name},
            error:function(jqXHR,textStatus,errorTHrown){
                alert(textStatus+"or"+errorTHrown)
            },
            success:function(data){
                $(".show").html(data);
             
            }
        })
    })

    $(".subfile").click(function(){
     var file = $(this).attr('value');
   
      $.ajax({
       url:"content2.php",
       type:"POST",
       catch:false,
       data:{f:file},
       success:function(data){
        $(".fileshow").html(data);
       }



      })





    })

//   $("#Showall").click(function(){
//         let name = $("#content").val();
//         // alert(name);
//         $.ajax({
//             url:"content2.php",
//             type:"POST",
//             data:{n:name},
//             error:function(jqXHR,textStatus,errorTHrown){
//                 alert(textStatus+"or"+errorTHrown)
//             },
//             success:function(data){
//                 $(".show").html(data);
//             }
//         })
//     })
})
