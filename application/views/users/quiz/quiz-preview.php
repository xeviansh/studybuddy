<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student - View course</title>

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- css -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/css/jquery.min.js"></script>

    <script>
        // jQuery(function() {
        //     jQuery(this).bind("contextmenu", function(event) {
        //         event.preventDefault();

        //     });
        // });
    </script>

    <link type="text/css" href="<?php echo base_url(); ?>assets/css/testpage.css" rel="stylesheet">
    <!-- hello user how  -->
</head>

<body>
    <div class="section-quiz">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header" style="background-color: #0c83e2;">
                            <?php echo $testId['test_name']; ?>

                        </div>
                        <div class="card-body" id="question">

                        </div>

                        <div class="row">
                            <div class="col-md-11 ml-4">
                                <div id="accordion">

                                    <div class="card" style="margin-bottom: -3px;">
                                        <div class="card-header" id="headingTwo" style="background-color:#2196f3;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:#fff; text-decoration:none">
                                                    Explanation
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p id="explnation" class="mb-2"></p>
                                                <a id="explanation_file" class="badge badge-success mb-2" target="_blank" style="display: none;">Show Image</a>
                                            </div>
                                            <div class="card-body">
                                                <a id="expla_video" class="badge badge-success mb-2" target="_blank" style="display: none;">Video Link</a>
                                               
                                                <!-- <iframe width="560" id="expla_video" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree" style="background-color:#2196f3;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:#fff; text-decoration:none">
                                                    Reference
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p id="referance" class="mb-2"></p>
                                               

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning" id="preview" data-id="" data-type="previous"><span class="material-icons">arrow_back_ios</span>Previous</button>
                                </div>

                                <div class="col-md-6 text-right">
                                    <input type="hidden" name="questionID" id="questionID" />
                                    <button type="button" class="btn btn-secondary" id="skip" data-id="" data-type="skip">Next <span class="material-icons">keyboard_arrow_right</span></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- <div id='pagination'></div>	 -->
                </div>

                <div class="col-lg-3">
                    <div class="card" style="width: 401px;">
                        <div class="card-header" style="background-color: #0c83e2;">Answer Sheet (Summary)
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                $i = 1;
                                foreach ($questionList as $key => $value) {
                                ?>
                                    <div class="col-lg-3">
                                        <h6 class="card-title-1" id="quesVal_<?php echo $i; ?>" style="<?php //echo $color; 
                                                                                                        ?>" data-id="<?php echo $i; ?>" data-page="<?php echo $i; ?>">
                                            <?php echo $i; ?></h6>
                                    </div>
                                <?php $i++;
                                } ?>
                                <hr>
                                <ul style="list-style:none;">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <li><button type="button" class="btn btn-danger btn-sm btn-block">Answered</button></li>
                                        </div>

                                        <div class="col-md-4">
                                            <li><button type="button" class="btn btn-primary btn-sm btn-block">Not
                                                    Answered</button></li>
                                        </div>

                                        <div class="col-md-4">
                                            <li><button type="button" class="btn btn-success btn-sm btn-block">Review</button></li>
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
                    createPagination(lastSubmitpage, lastSubmitpage);
                } else {
                    createPagination(1, 1);
                }

            })();



            function createPagination(pageNum, page) {
                console.log(page)
                $.ajax({
                    url: '<?= base_url() ?>Quiz/loadData/' + pageNum + '/' + <?php echo $testId['id']; ?> +
                        '/' + page,
                    type: 'get',
                    dataType: 'json',
                    success: function(responseData) {
                        // $('#pagination').html(responseData.pagination);
                        paginationData(responseData.questionRecord, responseData.page);
                        setbtnAttributes(pageNum, responseData.page);
                    }
                });
            }

            function setbtnAttributes(pageNum, page) {

                $("#skip").attr('data-id', Number(pageNum) + 1);
                $("#preview").attr('data-id', Number(pageNum) - 1);

                $("#skip").attr('data-page', page);

                $("#preview").attr('data-page', page);


            }

            function paginationData(data, page) {

                $('#question').empty();
                var questionRecord;
                var i = 1;
                for (questionRecord in data) {

                    var qusData = '';
                    qusData += '<p id="passage_paragraph" style="display:none"><strong>Passage:</strong>' + data[questionRecord].passage + '</p>';
                    qusData += '<img   id="passage_img" class="img-thumbnail"  style="width: 100%;height: auto; display:none"><br>';
                    qusData += '<h5 class="card-title">' + page + '. ' + data[questionRecord].question + '</h5>';
                    qusData += '<img id="question_img" class="img-thumbnail" style="display:none"><br>';
                    qusData += '<ol type=" ">';
                    qusData +=
                        '<li><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="' +
                        data[questionRecord].option1 + '" disabled>';
                    qusData += ' <label class="form-check-label" for="inlineRadio1">' + data[questionRecord]
                        .option1 +
                        '</label><span id="sp_1" style=" position: relative; top: 3px; margin-left: 4px;"></span><br></li>';
                    qusData +=
                        ' <li><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="' +
                        data[questionRecord].option2 + '" disabled>';
                    qusData += ' <label class="form-check-label" for="inlineRadio2">' + data[questionRecord]
                        .option2 +
                        '</label><span id="sp_2" style=" position: relative; top: 3px; margin-left: 4px;"></span><br></li>';
                    qusData +=
                        ' <li><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="' +
                        data[questionRecord].option3 + '" disabled>';
                    qusData += ' <label class="form-check-label" for="inlineRadio3">' + data[questionRecord]
                        .option3 +
                        '</label><span id="sp_3" style=" position: relative; top: 3px; margin-left: 4px;"></span></li>';
                    qusData +=
                        ' <li><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="' +
                        data[questionRecord].option4 + '" disabled>';
                    qusData += ' <label class="form-check-label" for="inlineRadio4">' + data[questionRecord]
                        .option4 +
                        '</label><span id="sp_4" style=" position: relative; top: 3px; margin-left: 4px;"></span></li>';
                    qusData += '</ol>';

                    // check selected value
                    checkOptionValue(data[questionRecord].id);

                    $('#question').append(qusData);

                    $('#explnation').html(data[questionRecord].explanation);

                    $('#questionID').val(data[questionRecord].id);

                    if (data[questionRecord].explanation_file != '') {
                        $('#explanation_file').show();
                        $('#explanation_file').attr('href', '<?php echo base_url(); ?>uploads/question_bank/' + data[
                            questionRecord].explanation_file);
                    }

                    if (data[questionRecord].expla_video != '') {
                        $('#expla_video').show();
                        $('#expla_video').attr('href', data[questionRecord].expla_video);
                    }
                    if (data[questionRecord].reference != '') {
                        $('#referance').show();
                        $('#referance').attr('href', data[questionRecord].reference);
                    }

                    if (data[questionRecord].passage != '') {
                        $('#passage_paragraph').css('display', 'block');
                    }
                    if (data[questionRecord].passage_image != '') {
                        $('#passage_img').css('display', 'block');
                        $('#passage_img').attr('src', '<?php echo base_url(); ?>uploads/question_bank/' + data[questionRecord].passage_image);
                    }

                    if (data[questionRecord].question_image != '') {
                        $('#question_img').css('display', 'block');
                        $('#question_img').attr('src', '<?php echo base_url(); ?>uploads/question_bank/' + data[questionRecord].question_image);
                    }

                    i = parseInt(i) + 1;
                }

            }

            $('#skip').click(function() {
                var value = $(this).attr('data-id');

                var page = $(this).attr('data-page');
                localStorage.setItem("lastSubmitpage", page);
                if (page == <?php echo $total_question; ?>) {
                    $(this).prop("disabled", true);
                } else {
                    $(this).prop("disabled", false);
                    createPagination(value, parseInt(page) + 1);
                }

            })



            $('#preview').click(function() {
                var value = $(this).attr('data-id');
                var page = $(this).attr('data-page');
                localStorage.setItem("lastSubmitpage", page);
                $('#skip').prop("disabled", false);
                if (page == 1) {} else
                    createPagination(value, parseInt(page) - 1);
            })

            $('.card-title-1').click(function() {
                var pageNum = Number($(this).attr('data-id'));
                var page = Number($(this).attr('data-page'));
                localStorage.setItem("lastSubmitpage", page);
                createPagination(pageNum, page);
            });

            function checkOptionValue(quesID) {
                $.ajax({
                    url: '<?= base_url() ?>Quiz/CheckOptionValue',
                    type: 'post',
                    data: "QuestionID=" + quesID,
                    dataType: 'json',
                    success: function(responseData) {
                        //  console.log(responseData.correct_answer);	
                        if (typeof(responseData.selected_answer) !== 'undefined') {

                            if ($('input[id="inlineRadio1"]').val() == responseData.selected_answer) {
                                $('input[id="inlineRadio1"]').attr('checked', 'checked');
                                if (responseData.selected_answer == responseData.correct_answer) {
                                    $("label[for=inlineRadio1]").addClass('text-success');
                                    $("#sp_1").addClass('material-icons').html('done');
                                } else {
                                    $("label[for=inlineRadio1]").addClass('text-danger');

                                    $("#sp_1").addClass('material-icons').html('cancel');
                                }

                            } else if ($('input[id="inlineRadio1"]').val() == responseData.correct_answer) {
                                $("label[for=inlineRadio1]").addClass('text-success');
                                $("#sp_1").addClass('material-icons').html('done');
                            }

                            if ($('input[id="inlineRadio2"]').val() == responseData.selected_answer) {
                                $('input[id="inlineRadio2"]').attr('checked', 'checked');
                                if (responseData.selected_answer == responseData.correct_answer) {
                                    $("label[for=inlineRadio2]").addClass('text-success');
                                    $("#sp_2").addClass('material-icons').html('done');
                                } else {
                                    $("label[for=inlineRadio2]").addClass('text-danger');
                                    $("#sp_2").addClass('material-icons').html('cancel');
                                }
                            } else if ($('input[id="inlineRadio2"]').val() == responseData.correct_answer) {
                                $("label[for=inlineRadio2]").addClass('text-success');
                                $("#sp_2").addClass('material-icons').html('done');

                            }


                            if ($('input[id="inlineRadio3"]').val() == responseData.selected_answer) {
                                $('input[id="inlineRadio3"]').attr('checked', 'checked');
                                //$("label[for=inlineRadio3]").addClass('text-danger');
                                if (responseData.selected_answer == responseData.correct_answer) {
                                    $("label[for=inlineRadio3]").addClass('text-success');
                                    $("#sp_3").addClass('material-icons').html('done');
                                } else {
                                    $("label[for=inlineRadio3]").addClass('text-danger');
                                    $("#sp_3").addClass('material-icons').html('cancel');
                                }
                            } else if ($('input[id="inlineRadio3"]').val() == responseData.correct_answer) {
                                $("label[for=inlineRadio3]").addClass('text-success');
                                $("#sp_3").addClass('material-icons').html('done');

                            }


                            if ($('input[id="inlineRadio4"]').val() == responseData.selected_answer) {
                                $('input[id="inlineRadio4"]').attr('checked', 'checked');

                                if (responseData.selected_answer == responseData.correct_answer) {
                                    $("label[for=inlineRadio4]").addClass('text-success');
                                    $("#sp_4").addClass('material-icons').html('done');
                                } else {
                                    $("label[for=inlineRadio4]").addClass('text-danger');
                                    $("#sp_4").addClass('material-icons').html('cancel');
                                }
                                //$("label[for=inlineRadio4]").addClass('text-danger');
                            } else if ($('input[id="inlineRadio4"]').val() == responseData.correct_answer) {
                                $("label[for=inlineRadio4]").addClass('text-success');
                                $("#sp_4").addClass('material-icons').html('done');
                            }

                            // if ($('input[id="inlineRadio1"]').val() == responseData.selected_answer) {
                            //     $('input[id="inlineRadio1"]').attr('checked', 'checked');
                            //     $("label[for=inlineRadio1]").addClass('text-danger');
                            // } else if ($('input[id="inlineRadio2"]').val() == responseData.selected_answer) {
                            //     $('input[id="inlineRadio2"]').attr('checked', 'checked');

                            // } else if ($('input[id="inlineRadio3"]').val() == responseData.selected_answer) {
                            //     $('input[id="inlineRadio3"]').attr('checked', 'checked');
                            //     $("label[for=inlineRadio3]").addClass('text-danger');

                            // } else if ($('input[id="inlineRadio4"]').val() == responseData.selected_answer) {
                            //     $('input[id="inlineRadio4"]').attr('checked', 'checked');
                            //     $("label[for=inlineRadio4]").addClass('text-danger');

                            // }
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
                url: '<?= base_url() ?>checkAns',
                type: 'post',
                data: "testID=" + testID + "&CourseID=" + CourseID + "&studentId=" + studentId,
                dataType: 'json',
                success: function(responseData) {

                    $.each(responseData, function(key, value) {
                        key = parseInt(key) + 1;
                        if (value.type === "submit") {
                            $('#quesVal_' + key).css('background-color', "#bb2d3b");
                        }
                        if (value.type === "review") {
                            $('#quesVal_' + key).css('background-color', "#157347");
                        }

                        //$('#rdSelect').attr('checked')

                    });
                }
            });
        }
    </script>




    <script>
        if (localStorage.getItem("counter")) {
            if (localStorage.getItem("counter") <= 0) {
                localStorage.setItem("counter", 0);
                value = 0;
                //$('#mymodal1').modal();
                //document.getElementById('tab1').disabled='true';
            } else {
                var value = localStorage.getItem("counter");
            }
        } else {
            var value = 0;
        }

        if (localStorage.getItem("counter1")) {
            if (localStorage.getItem("counter1") <= 0) {
                var value1 = 60;
            } else {
                var value1 = localStorage.getItem("counter1");
            }
        } else {
            var value1 = 0;
        }

        document.getElementById('timer').innerHTML = value;
        document.getElementById('timer1').innerHTML = value1;


        var counter = function() {
            if (value <= 0 && value1 <= 0) {
                localStorage.setItem("counter", 0);
                value = 0;
                scorehide();
                clearInterval(interval);
            } else {
                //value = parseInt(value)-1;
                localStorage.setItem("counter", value);
            }
            if (value1 <= 0) {
                localStorage.setItem("counter1", 60);
                value1 = 60;
                value = parseInt(value) - 1;
                localStorage.setItem("counter", value);
            } else {
                value1 = parseInt(value1) - 1;
                localStorage.setItem("counter1", value1);
            }


            document.getElementById('timer').innerHTML = value;
            document.getElementById('timer1').innerHTML = value1;

            if (value == 0 && value1 == 0) {
                alert('Time is up! Press OK to check your marks')
                //$('#mymodal1').modal();
                //window.location.href = "Particular-result.php?test="+"<?php // echo $testid; 
                                                                        ?>&setno=<?php //echo $set; 
                                                                                                        ?>";
                //location.href='Particular-result.php?test=<?php //echo $testid; 
                                                            ?>&setno=<?php //echo $set; 
                                                                                            ?>'
                // document.getElementById('tab1').disabled='true';
                //    document.onkeyd own = function (e) {  
                //    return (e.which || e.keyCode) != 116;  
                //   };  
            }
        };

        var interval = setInterval(function() {
            counter();
        }, 1000);
        if ($('#timer').html() == "" && $('#timer1').html() == "") {
            $('#mymodal1').modal();
            document.getElementById('tab1').disabled = 'true';
        }

        function score() {
            $('#score').modal();
            $('#myModal').modal('hide');

        }

        function scorehide() {
            $("*", "#test").prop('disabled', true);
            $('#myModal1').modal({
                backdrop: 'static',
                keyboard: false
            });

            $(':button').prop('disabled', true);
            $("#btnm1").prop('disabled', false);
        }

        function finalsubmit() {
            $('#score').modal();
            $('#myModal').modal('hide');
            $("*", "#test").prop('disabled', true);
            clearInterval(interval);
        }

        function checktime() {
            if (localStorage.getItem("counter1") <= 0)
                $("*", "#test").prop('disabled', true);
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

        $(document).ready(function() {
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

        function keyup(e) {
            // Key up Ctrl
            if ((e.which || e.keyCode) == 17)
                ctrlKeyDown = false;
        };
    </script>

</body>

</html>