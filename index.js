//insert data
$(document).ready(function () {
  function updata_book() {
    $(".book_data").html("");
    $.ajax({
        url:"http://localhost/my%20college%20library/back_end_code/get_data.php",
        type:"GET",
        success:function(data){
            let data_json = JSON.parse(data);
            $.each(data_json, (key, value)=>{
                $(".book_data").append(
              "<tr>"+
              "<td>"+value.id+"</td>"+
              "<td>"+value.name+"</td>"+
              "<td class='class'>"+value.class+"</td>"+
              "<td>"+value.semister+"</td>"+
              "<td>"+value.mobile+"</td>"+
              "<td>"+value.book_name+"</td>"+
              "<td>"+value.issue_date+"</td>"+
               "<td><button class='edit' data-eid='"+value.id+"'>Edit</button>  <button class='delete' data-did='"+value.id+"'>delete</button></td>"+
            "</tr>"
                )
            })
        }
    });
  }

  updata_book();

  //add new book record
  $("#add").click(function (e) {
    e.preventDefault();
    let Student_name = $("#name").val();
    let student_class = $("#class").val();
    let Student_semister = $("#semister").val();
    let Student_mobile_no = $("#mobile_no").val();
    let Student_book = $("#book").val();
    if (Student_name == "") {
      $(".response").fadeIn();
      $(".response")
        .removeClass("success")
        .addClass("error")
        .html("Enter Student Full Name");
      setTimeout(() => {
        $(".response").fadeOut();
      }, 2000);
    } else if (student_class == "") {
      $(".response").fadeIn();
      $(".response")
        .removeClass("success")
        .addClass("error")
        .html("Enter Student Class");
      setTimeout(() => {
        $(".response").fadeOut();
      }, 2000);
    } else if (Student_semister == "") {
      $(".response").fadeIn();
      $(".response")
        .removeClass("success")
        .addClass("error")
        .html("Enter Student Semister");
      setTimeout(() => {
        $(".response").fadeOut();
      }, 2000);
    } else if (Student_mobile_no == "") {
      $(".response").fadeIn();
      $(".response")
        .removeClass("success")
        .addClass("error")
        .html("Enter Student Mobile Number");
      setTimeout(() => {
        $(".response").fadeOut();
      }, 2000);
    } else if (Student_book == "") {
      $(".response").fadeIn();
      $(".response")
        .removeClass("success")
        .addClass("error")
        .html("Enter Book Name");
      setTimeout(() => {
        $(".response").fadeOut();
      }, 2000);
    } else {
      let addFormData = $("#add_form").serialize();
      $.ajax({
        url: "http://localhost/my%20college%20library/back_end_code/insert_data.php",
        type: "POST",
        data: addFormData,
        success: function (data) {
          if (data == "success") {
            $(".response").fadeIn();
            $(".response")
              .removeClass("error")
              .addClass("success")
              .html("New book record added successfully");
            setTimeout(() => {
              $(".response").fadeOut();
            }, 2000);
          }
        },
      });
    }
  });

  //edit table record
  $(document).on("click", ".edit", function(){
    let id = $(this).data("eid");
    $(".update_form").show();
    $.ajax({
        url:"http://localhost/my%20college%20library/back_end_code/get_single_data.php",
        type:"POST",
        data:{std_id:id},
        success:function(data){
            let single_data = JSON.parse(data);
            $.each(single_data, (key, value)=>{
                $("#Student_id").val(value.id);
                $("#Student_name").val(value.name);
                $("#Student_class").val(value.class);
                $("#Student_sem").val(value.semister);
                $("#Student_book").val(value.book_name);
                $("#Student_mobile").val(value.mobile);
            })
        }
    })
  })

  //remove update form
  $(".remove_update_form").click(function(){
    $(".update_form").hide();
  })

  //correction data
  $("#update").click(function(e){
    e.preventDefault();
    let correction_data = $("#update_form").serialize();
    $.ajax({
        url:"http://localhost/my%20college%20library/back_end_code/update_data.php",
        type:"POST",
        data:correction_data,
        success:function(data){
           if(data == "success"){
            $(".correction_form").fadeIn();
            $(".correction_form")
              .removeClass("error")
              .addClass("success")
              .html("Successfully Updated");
            setTimeout(() => {
              $(".correction_form").fadeOut();
              location.reload();
            }, 2000);
           }
        }
    })
  })

  //delete record in table
  $(document).on("click", ".delete", function(){
    let id = $(this).data("did");
    $.ajax({
        url:"http://localhost/my%20college%20library/back_end_code/delete_data.php",
        type:"POST",
        data:{did:id},
        success:function(data){
            if(data == "delete"){
                $(".table_response").fadeIn();
            $(".table_response")
              .removeClass("error")
              .addClass("success")
              .html("Successfully Delete");
            setTimeout(() => {
              $(".table_response").fadeOut();
              location.reload();
            }, 2000);
            }
        }
    })
  })

  //search functionality
  $("#search").click(function(e){
    $(".book_data").html("");
    e.preventDefault();
     let search_value = $("#std_name").val();
     $.ajax({
      url:"http://localhost/my%20college%20library/back_end_code/search_data.php",
      type:"POST",
      data:{name:search_value},
      success:function(data){
       let search_data = JSON.parse(data);
       if(search_data.status != false){
        $.each(search_data, (key, value)=>{
          $(".book_data").append(
            "<tr>"+
            "<td>"+value.id+"</td>"+
            "<td>"+value.name+"</td>"+
            "<td class='class'>"+value.class+"</td>"+
            "<td>"+value.semister+"</td>"+
            "<td>"+value.mobile+"</td>"+
            "<td>"+value.book_name+"</td>"+
            "<td>"+value.issue_date+"</td>"+
             "<td><button class='edit' data-eid='"+value.id+"'>Edit</button>  <button class='delete' data-did='"+value.id+"'>delete</button></td>"+
          "</tr>"
          )
        })
       }else{
        $(".delete").fadeIn();
            $(".table_response")
              .removeClass("error")
              .addClass("success")
              .html("Not Exists Record");
            setTimeout(() => {
              $(".table_response").fadeOut();
              location.reload();
            }, 2000);  
       }
      }
     })
  })

});
