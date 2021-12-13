/********************Img priview***********/

$(document).ready(function(){
    $("#upload_file").change(function () {
        const file = this.files[0];
        if (file) {
            let reader = new FileReader();

            reader.onload = function (event) {
                $("#imgPreview").attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
 });

/****************************INSERT DATA*******************************/
$(document).ready(function(e){
  $('#insert_data').on('submit',(function(e){
       e.preventDefault();
      var fd = new FormData();
      var files = $('#upload_file')[0].files[0];
      fd.append('file', files);
      fd.append("name", $('#name').val() );
      fd.append("email", $('#email').val());
      fd.append("gender", $('input[type="radio"]').val());
      fd.append("state", $('#state :selected').val());
      fd.append("dob", $('#dob').val());
      
      $.ajax({
          url: 'insert.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){   
          $('#insert_data')[0].reset();
          $('#imgPreview').empty();
          $('#myModal').modal('hide');
          $("#tape tr").detach();
            getdata();  
           $('.alert-success').html('User added successfully').fadeIn().delay(4000).fadeOut('slow');

          },
          error: function() {
                console.log("Signup was unsuccessful");
            }
        
      });
  }));

});
  /*****************Listing data***********************/

$(document).ready(function(){
     getdata();
});
 function getdata(){

  $("#tabe").html('');

     $.ajax({ 
        type:'GET',
        url:'fetch.php',
        async: false,
        datType:'JSON',
        success:function(data){
         //console.log(data);
         var result = JSON.parse(data);
         var len = result.length;
            for(var i=0; i<len; i++){
                var id = result[i]['id'];
                var name = result[i].name;
                var email = result[i].email;
                var gender = result[i].gender;
                var state = result[i].state;
                var dob = result[i].dob;
                var photo = result[i].photo;


                var tr_str = "<tr>" +
                    "<td>" + id + "</td>" +
                    "<td>" + name + "</td>" +
                    "<td>" + email + "</td>" +
                    "<td>" + gender + "</td>" +
                    "<td>" + state + "</td>" +
                    "<td>" + dob + "</td>" +
                 "<td>"+'<a href="javascript:;" "><img src="' + photo + '"></a>'+"</td>"+
                    "<td>"+'<a href="#"  id="edit_'+id+'" class="edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#up-modal">EDIT</a>'+"</td>"+
                    "<td>"+'<a href="javascript:;"  id="'+id+'" class="dele delete btn btn-danger">DELETE</a>'+"</td>"+
                    "</tr>";
                 $("#tabe").append(tr_str);
            }
       }

   });
}

/**************************Delete Data*******************************/

$(document).on('click','.delete',function(){
 var id =$(this).attr('id');
 var $tr = $(this).closest('tr');

   $.ajax({
       url:'delete.php',
       type:'POST',
       data:{ 'checking_delete':true,
              'id':id,
        },
       success:function(data){
         $tr.find('td').fadeOut(1000,function(){ 
         $tr.remove();  

          });  
       },
       error: function(data) {
            alert("error");
        }
   });

});

/*$(document).on('click','.hello',function(){
  $( this ).parents().find('.alert').remove();
});*/
/*******************Confirmcode"************************/
/*  $("document").on('click','.dele',function(){
    alert('jhell');
  });*/
   
/*$("document").on('click','.dele',function(){
  confdel();
});

   function confdel(){
         $.confirm({
          title: 'Confirm!',
          content: 'Do you want to delete!',
          buttons: {
              confirm: function () {
                  $.alert('Are you sure to delete this record?');
                  return false;
              },
              cancel: function () {
                  $.alert('Canceled!');
                },
              }
        });
    }*/

/*$("document").on('click','.del',function(){
  alert('hello');
    if (!confirm("Are you sure to delete this record ?")){
      return false;
    }
  });*/
/***************Fetch edit data***************************/

$(document).on('click','.edit', function(){
    var id =$(this).attr("id");
    //alert(id);

     $.ajax({
         type:'POST',
         url:'edit.php',
         data:{'id' :id,},
         cache: false,
         datType:'JSON',    
         success:function(response){
           //console.log(response); 

           var result = JSON.parse(response);
           console.log(result); 
           $('#hii_id').val(result.id);
           $('#up_name').val(result.name);
           $('#up_email').val(result.email);
           $('#up_gender').val(result.gender);
           $('#up_state').val(result.state);
           $('#up_dob').val(result.dob);
           $("#imgPreview").attr("src",result.photo);
         },

     });
});
/************************update data in database*/

$(document).ready(function(){
 $('#update_data').on('click','.update',function(e){
        e.preventDefault();
      var up_data = new FormData();
      var files = $('#update_file')[0].files[0];
     // alert(files);
      up_data.append('up_file', files);
      up_data.append( "id", $('#hii_id').val());
      up_data.append("name", $('#up_name').val() );
      up_data.append("email", $('#up_email').val());
      up_data.append("gender", $('input[type="radio"]').val());
      up_data.append("state", $('#state :selected').val());
      up_data.append("dob", $('#up_dob').val());


      $.ajax({
         type :'POST',
         url  :'update.php',
         data: up_data,
        contentType: false,
        processData: false,
        success:function(response){
          console.log(response);
         $('#update_data')[0].reset();
          $('#up-modal').modal('hide');
          $('.alert-success').html('User updated successfully').fadeIn().delay(4000).fadeOut('slow');
              getdata(); 

        },

      });
 }); 
});