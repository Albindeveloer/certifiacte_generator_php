$(document).ready(function(){
        $('#sbutton').click(function(){
            $('#content').load('studentDetails.php');
        });

        $('#svbutton').click(function(){
            $('#content').load('viewStudentDetails.php');
           
        });
        $('#TCbutton').on('click',function(){
            $('#content').load('TC.php');
        });
        $('#CCbutton').click(function(){
            $('#content').load('TC.php');
           
        });
});

     
   
    



