
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student - View course</title>
    <!-- Custom Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome Icons -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- css -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="<?php echo base_url();?>assets/css/jquery.min.js"></script>

    <script>
    // jQuery(function() {
    //     jQuery(this).bind("contextmenu", function(event) {
    //         event.preventDefault();

    //     });
    // });
    </script>

    <link type="text/css" href="<?php echo base_url();?>assets/css/testpage.css" rel="stylesheet">

</head>

<body>

    <div class="section-user">
        <div class="container">
            <div class="row header">
                <div class="col-lg-3">
                    <img class="user-2"
                        src="<?php echo base_url()?>assets/images/profile_imgs/<?php echo $student_details['user_img'];?>">
                </div>
                <div class="col-lg-6">
                    <ul class="user-list">
                        <li><?php echo $testId['test_name'];?></li>
                        <li>Name: <?php echo $student_details['fname'].$student_details['lname']; ?></li>
                        <li>Email: <?php echo $student_details['email']; ?></li>
                    </ul>
                </div>
              
                <div class="col-lg-3">
                    <button   type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logoutModel" style="margin-left: 113px;">
                        Logout</button> <br>
                    <div class="row">
                        <div class="col-md-12 text-center mt-2">
                            <h6>Time :-   <span id="timer"></span> : <span id="timer1"></span></h6>
                        </div>
                    </div>  
                   
                </div>
            </div>

        </div>
    </div>

    <div class="section-quiz">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <?php
                                $s=0;
                                if(isset($getSection) && $getSection!=null)
                                {
                                    $i=1;
                                    foreach ($getSection as $sec) {
                                        $tot=$sec['total'];
                                    
                            ?>
                            <button class="btn tab btn-info card-title-1" id="tab<?php  echo $sec['id']; ?>" data-id="<?php echo $s+1; ?>" data-page="<?php echo $s+1; ?>"><?php echo $sec['name'];?></button>
                            <?php
                                $s=$s+$tot;
                                $i++;
                                    }
                                }
                            ?>
                        </div>
                        <div class="card-body" id="question">

                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="hidden" name="questionID" id="questionID" />
                                    <button type="button" class="btn btn-secondary"  id="skip" data-id="" data-type="skip" >Skip</button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-warning"  id="preview" data-id="" data-type="previous">Previous</button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-danger"   id="subNext" data-id='' data-type="submit">Submit & Next</button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-success" id="review" data-id='' data-type="review">Review</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div id='pagination'></div>	 -->
                </div>

                <div class="col-lg-3">
                    <div class="card" style="width: 401px;">
                        <div class="card-header">Answer Sheet (Summary)
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php 
                               $i=1;
                                foreach($questionList as $key => $value){										
								 ?>
                                <div class="col-lg-3">
                                    <h6 class="card-title-1" id="quesVal_<?php  echo $i; ?>"
                                        style="<?php //echo $color; ?>" data-id="<?php echo $i; ?>" data-page="<?php echo $i; ?>">
                                        <?php echo $i; ?></h6>

                                </div>
                                <?php $i++; }?>
                                <hr>
                                <ul style="list-style:none;">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <li><button type="button"
                                                    class="btn btn-danger btn-sm btn-block">Answered</button></li>
                                        </div>

                                        <div class="col-md-4">
                                            <li><button type="button" class="btn btn-primary btn-sm btn-block">Not
                                                    Answered</button></li>
                                        </div>

                                        <div class="col-md-4">
                                            <li><button type="button"
                                                    class="btn btn-success btn-sm btn-block">Review</button></li>
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <li>
                                                <a class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    href="#exampleModalToggle" role="button">Final Submit</a>

                                            </li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="close-one" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure ! You want to submit the exam
                </div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-primary btn-sm" data-bs-target="#testHistory" id="showtestData"  data-bs-toggle="modal"
                        data-bs-dismiss="modal" >Sure</button> -->

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop" onclick="showtestData()">
                        Sure
                    </button>

                </div>
            </div>
        </div>
    </div>
   
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Attempt Test History</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Total Question Is:
                            <span class="badge bg-primary rounded-pill" id="totalQuestion"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Your Attempt Question Is:
                            <span class="badge bg-primary rounded-pill" id="attempt_question"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Your Review Question Is:
                            <span class="badge bg-primary rounded-pill" id="review_question"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Number Of Question Which You Have Skip:
                            <span class="badge bg-primary rounded-pill" id="skip_question"></span>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">         
                    <a href="<?php echo base_url(); ?>final-result/<?php echo $testId['id']; ?>" class="btn btn-primary btn-sm" id="final_submit">Submit</a>
                   
                </div>
            </div>
        </div>
    </div>

<!-- logout -->
<div class="modal fade" id="logoutModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Are you sure ! you want to logout this exam
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a href="<?php echo base_url(); ?>final-result/<?php echo $testId['id']; ?>" class="btn btn-primary" id="final_submit">Yes</a>
      
      </div>
    </div>
  </div>
</div>
                               

<script type='text/javascript'>
 $(document).ready(function() {
    var testID = '<?php echo $testId['id']; ?>';
    var CourseID = '<?php echo $testId['course_id'] ?>';
    // check last question submission when student page refresh by mistake on exam time
    (function() {
    const lastSubmitAns = Number(localStorage.getItem("lastSubmitAnswer")) + 1;
    const lastSubmitpage = Number(localStorage.getItem("lastSubmitpage")) + 1;
    console.log(lastSubmitpage);
    if (lastSubmitpage) {
        createPagination(lastSubmitpage,lastSubmitpage);
    } else {
        createPagination(1,1);
    }
    })();
	function createPagination(pageNum,page){
		$.ajax({
            url: '<?=base_url()?>Quiz/loadData/' + pageNum + '/' + <?php echo $testId['id']; ?>+'/'+page,
			type: 'get',
			dataType: 'json',
			success: function(responseData){
				// $('#pagination').html(responseData.pagination);
				paginationData(responseData.questionRecord,responseData.page);
                setbtnAttributes(pageNum,responseData.page);
			}
		});
	}

    function setbtnAttributes(pageNum,page){
            // var recordPerPage = 1;
            // if(pageNum != 0){
            //     pageNum = (pageNum-1) * recordPerPage;
            // }    
        $("#subNext").attr('data-id', Number(pageNum) + 1);
        $("#skip").attr('data-id', Number(pageNum) + 1);
        $("#review").attr('data-id', Number(pageNum) + 1);
        $("#preview").attr('data-id', Number(pageNum) - 1);

        $("#subNext").attr('data-page', page);
        $("#skip").attr('data-page', page);
        $("#review").attr('data-page', page);
        $("#preview").attr('data-page', page);
        // if (pre > 0) {
        //     $('#preview').prop('disabled', false);
        // } else {
        //     $('#preview').prop('disabled', true);
        // }
    }
	function paginationData(data,page) {      
        console.log(data);
         $('#question').empty();
         var questionRecord;
         var i=1;
         for (questionRecord in data) {      
            var sec=data[questionRecord].section_id;
            $(".tab").removeClass("btn-danger");
            $(".tab").addClass("btn-info");
            $("#tab"+sec).addClass("btn-danger");
            var qusData = '';
            qusData += '<h6 class="card-title">Passage: </h6>' + data[questionRecord].passage;           
            qusData += '<h6 class="card-title mt-2">Passage Image: </h6>';
            qusData += '<img src="<?php echo base_url()?>uploads/question_bank/'+ data[questionRecord].passage_image +'" class="img-thumbnail"/>';
            qusData += '<h5 class="card-title mt-2">' + page +'.'+ data[questionRecord].question + '</h5>';
            qusData += '<img src="<?php echo base_url()?>uploads/question_bank/'+ data[questionRecord].question_image +'" class="img-thumbnail"/>';

            qusData += '<ol type="A" class="mt-3">';
            qusData +=
                '<li><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="' +
                data[questionRecord].option1 + '">';
            qusData += ' <label class="form-check-label" for="inlineRadio1">' + data[questionRecord].option1 +
                '</label><br></li>';
            qusData +=
                ' <li><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="' +
                data[questionRecord].option2 + '">';
            qusData += ' <label class="form-check-label" for="inlineRadio2">' + data[questionRecord].option2 +
                '</label><br></li>';
            qusData +=
                ' <li><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="' +
                data[questionRecord].option3 + '">';
            qusData += ' <label class="form-check-label" for="inlineRadio3">' + data[questionRecord].option3 +
                '</label></li>';
            qusData +=
                ' <li><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="' +
                data[questionRecord].option4 + '">';
            qusData += ' <label class="form-check-label" for="inlineRadio4">' + data[questionRecord].option4 +
                '</label></li>';
            qusData += '</ol>';

            // check selected value
            checkOptionValue(data[questionRecord].id);

            $('#question').append(qusData);    
            $('#questionID').val(data[questionRecord].id);           
            i=parseInt(i)+1;
        }
           
    }

    
    
    $('#skip').click(function(){
        /*var value =  $(this).attr('data-id');
        var page =  $(this).attr('data-page');
        localStorage.setItem("lastSubmitpage", page); 
        if(page==<?php echo $total_question;?>){}
        else 
        createPagination(value,parseInt(page)+1);*/
        var value =  $(this).attr('data-id');
        var page =  $(this).attr('data-page');
        createPagination(value,parseInt(page)+1);
        var questionID = $('#questionID').val();
        var selectedOption = $("input:radio[name=inlineRadioOptions]:checked").val();     
        $.ajax({
            url: '<?=base_url()?>submitAns',
            type: 'post',
            data: "testID=" + testID + "&CourseID=" + CourseID + "&questionID=" + questionID +
                "&selected_answer=" + selectedOption + "&dataType=" + 'skip',
            dataType: 'json',
            success: function(responseData) {
                localStorage.setItem("lastSubmitAnswer", responseData);    
                localStorage.setItem("lastSubmitpage", page);           
                checkAnswerForbutton(page);
                // $('#pagination').html(responseData.pagination);                
            }
        });     
    })

    $('#subNext').click(function(){
        var value =  $(this).attr('data-id');
        var page =  $(this).attr('data-page');
        createPagination(value,parseInt(page)+1);
        var questionID = $('#questionID').val();
        var selectedOption = $("input:radio[name=inlineRadioOptions]:checked").val();     
        $.ajax({
            url: '<?=base_url()?>submitAns',
            type: 'post',
            data: "testID=" + testID + "&CourseID=" + CourseID + "&questionID=" + questionID +
                "&selected_answer=" + selectedOption + "&dataType=" + 'submit',
            dataType: 'json',
            success: function(responseData) {
                localStorage.setItem("lastSubmitAnswer", responseData);    
                localStorage.setItem("lastSubmitpage", page);           
                checkAnswerForbutton(page);
                // $('#pagination').html(responseData.pagination);                
            }
        });          
    })

    $('#preview').click(function(){
        var value =  $(this).attr('data-id');
        var page =  $(this).attr('data-page');
        localStorage.setItem("lastSubmitpage", page);  
        if(page==1){}
        else
        createPagination(value,parseInt(page)-1);
    })

    $('#review').click(function(){
        var value =  $(this).attr('data-id');
        var page =  $(this).attr('data-page');
        createPagination(value,parseInt(page)+1);

        var questionID = $('#questionID').val();
        var selectedOption = $("input:radio[name=inlineRadioOptions]:checked").val();   

        $.ajax({
            url: '<?=base_url()?>submitAns',
            type: 'post',
            data: "testID=" + testID + "&CourseID=" + CourseID + "&questionID=" + questionID +
                "&selected_answer=" + selectedOption + "&dataType=" + 'review',
            dataType: 'json',
            success: function(responseData) {
                localStorage.setItem("lastSubmitAnswer", responseData);
                localStorage.setItem("lastSubmitpage", page);               
                checkAnswerForbutton(page);       
                
            }
        });      
    })

    $('.card-title-1').click(function() {   
     var pageNum = Number($(this).attr('data-id'));
     var page = Number($(this).attr('data-page'));
     localStorage.setItem("lastSubmitpage", page);  
     createPagination(pageNum,page);
    });

    function checkOptionValue(quesID) {
        $.ajax({
            url: '<?=base_url()?>Quiz/CheckOptionValue',
            type: 'post',
            data: "QuestionID=" + quesID,
            dataType: 'json',
            success: function(responseData) {
                //console.log(responseData.selected_answer);	
                if (typeof(responseData.selected_answer) !== 'undefined') {

                    if ($('input[id="inlineRadio1"]').val() == responseData.selected_answer) {
                        $('input[id="inlineRadio1"]').attr('checked', 'checked');
                    } else if ($('input[id="inlineRadio2"]').val() == responseData.selected_answer) {
                        $('input[id="inlineRadio2"]').attr('checked', 'checked');
                    } else if ($('input[id="inlineRadio3"]').val() == responseData.selected_answer) {
                        $('input[id="inlineRadio3"]').attr('checked', 'checked');
                    } else if ($('input[id="inlineRadio4"]').val() == responseData.selected_answer) {
                        $('input[id="inlineRadio4"]').attr('checked', 'checked');
                    }
                }

            }
        });
    }
    checkAnswerForbutton();
 });


 // check data form database when user submitted the question
 function checkAnswerForbutton(page) {

    let testID = '<?php echo $testId['id']; ?>';
    let CourseID = '<?php echo $testId['course_id'] ?>';
    let studentId = '<?php echo $this->session->userdata('user_id'); ?>';

    $.ajax({
        url: '<?=base_url()?>checkAns',
        type: 'post',
        data: "testID=" + testID + "&CourseID=" + CourseID + "&studentId=" + studentId,
        dataType: 'json',
        success: function(responseData) {

            $.each(responseData, function(key, value) {
                key=parseInt(key)+1;
                if (value.type === "submit") {
                    $('#quesVal_'+key).css('background-color', "#bb2d3b");
                }
                if (value.type === "review") {
                    $('#quesVal_'+key).css('background-color', "#157347");
                }

                //$('#rdSelect').attr('checked')

            });
        }
    });
 }


    // get total Attempt Question

    function showtestData() {
        $("#close-one").click();
        let testID = '<?php echo $testId['id']; ?>';
        $.ajax({
            url: '<?=base_url()?>show-result',
            type: 'post',
            data: "testID=" + testID,
            dataType: 'json',
            success: function(responseData) {
                $('#totalQuestion').html(responseData.allQuestion);

                var TotalAttempt = Number(responseData.allQuestion) - (Number(responseData.review) + Number(
                    responseData.submit));

                $('#skip_question').html(TotalAttempt);

                if (typeof(responseData.review) == 'undefined' || responseData.review === null) {
                    $('#review_question').html('0');
                } else {

                    $('#review_question').html(responseData.review);
                }

                if (typeof(responseData.submit) == 'undefined' || responseData.submit === null) {
                    $('#attempt_question').html('0');
                } else {
                    $('#attempt_question').html(responseData.submit);
                }

            }
        });

    }    
</script>
<script>

if(localStorage.getItem("counter")){
      if(localStorage.getItem("counter") <= 0){
       localStorage.setItem("counter", 0);
       value=0;
      //$('#mymodal1').modal();
      //document.getElementById('tab1').disabled='true';
     }else{
       var value = localStorage.getItem("counter");
     }
   }else{
     var value = 0;
   }

   if(localStorage.getItem("counter1")){
     if(localStorage.getItem("counter1") <= 0){
       var value1 = 60;
     }else{
       var value1 = localStorage.getItem("counter1");
     }
   }else{
     var value1 = 0;
   }
  
   document.getElementById('timer').innerHTML = value;
   document.getElementById('timer1').innerHTML = value1;
   

   var counter = function (){
     if(value <= 0 && value1<=0){
       localStorage.setItem("counter", 0);
       value = 0;
       scorehide();
       clearInterval(interval);
     }else{
       //value = parseInt(value)-1;
       localStorage.setItem("counter", value);
     }
     if(value1 <= 0){
       localStorage.setItem("counter1", 60);
       value1 = 60;
       value = parseInt(value)-1;
       localStorage.setItem("counter", value);
     }else{
       value1 = parseInt(value1)-1;
       localStorage.setItem("counter1", value1);
     }
     

      document.getElementById('timer').innerHTML = value;
      document.getElementById('timer1').innerHTML = value1;

      if(value==0 && value1==0)
      {
          alert('Time is up! Press OK to check your marks')
           //$('#mymodal1').modal();
           //window.location.href = "Particular-result.php?test="+"<?php // echo $testid; ?>&setno=<?php //echo $set; ?>";
           //location.href='Particular-result.php?test=<?php //echo $testid; ?>&setno=<?php //echo $set; ?>'
          // document.getElementById('tab1').disabled='true';
        //    document.onkeyd own = function (e) {  
        //    return (e.which || e.keyCode) != 116;  
        //   };  
      }
   };

   var interval = setInterval(function (){counter();}, 1000);
    if($('#timer').html()=="" && $('#timer1').html()=="")
    {
        $('#mymodal1').modal();
         document.getElementById('tab1').disabled='true';  
    }
    function score()
    {
        $('#score').modal();
        $('#myModal').modal('hide');
    
    }
    function scorehide()
    {
        $("*", "#test").prop('disabled',true);
      $('#myModal1').modal({
        backdrop: 'static',
        keyboard: false
    });
      
    $(':button').prop('disabled', true);
    $("#btnm1").prop('disabled', false);
    }
function finalsubmit()
{
 $('#score').modal();
 $('#myModal').modal('hide');
 $("*", "#test").prop('disabled',true);
 clearInterval(interval);
}
function checktime()
{
   if(localStorage.getItem("counter1") <= 0)
        $("*", "#test").prop('disabled',true);
}

/*document.getElementById('timer').innerHTML =
 05 + ":" + 00;
startTimer();

function startTimer() {
 var presentTime = document.getElementById('timer').innerHTML;
 var timeArray = presentTime.split(/[:]+/);
 var m = timeArray[0];
 var s = checkSecond((timeArray[1] - 1));
 if(s==59){m=m-1}
 if(m<0)
 window.location.href = "exam.php";
 document.getElementById('timer').innerHTML =
   m + ":" + s;
 setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
 if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
 if (sec < 0) {sec = "59"};
 return sec;

}
function score()
{
 $('#score').modal();
 $('#mymodal').modal('hide');
}*/
var ctrlKeyDown = false;

$(document).ready(function(){    
   $(document).on("keydown", keydown);
   $(document).on("keyup", keyup);
});

function keydown(e) {
   if ((e.which || e.keyCode) == 116 || ((e.which || e.keyCode) == 82 && ctrlKeyDown)) {
       // Pressing F5 or Ctrl+R
       e.preventDefault();
   } else if ((e.which || e.keyCode) == 17) {
       // Pressing  only Ctrl
       ctrlKeyDown = true;
   }
};

function keyup(e){
   // Key up Ctrl
   if ((e.which || e.keyCode) == 17)
       ctrlKeyDown = false;
};




</script>

</body>

</html>