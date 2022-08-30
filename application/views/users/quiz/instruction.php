<?php if($getTestData['allCount'] > 0){ ?>
<style>
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    }
.panel-success {
    border-color: #337ab7;
}
.panel-success>.panel-heading {
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;
}
.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel-body {
    padding: 15px;
}
</style>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Courses</li>
    </ol>
    <div class="clearfix"></div>
    <div class="panel panel-success">
      <div class="panel-heading">Instruction</div>
      <div class="panel-body">
        <ul>
            <li>Read and understand the test guidelines.</li>
            <li>Know the test format.</li>
            <li>Test yourself.</li>
            <li>carve out a quiet test-taking spot with minimal distractions.</li>
        </ul>
        <div class="form-check">
            <input class="form-check-input ml-1" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
             Are you agree this term's & condition.
            </label>
        </div>
        <!-- <input type="checkbox" name="">&nbsp; -->
        <hr>
        <button type="button" onclick="settimer()"  class="button btn btn-success btn-sm float-right">Start Test</button><br>
      </div>
    </div>
</div>
<?php
    // this value insert when user go to practice test
    $checkTestType = $this->db->query('select * from manage_testdetails where id="'.$testID.'"')->row_array();
?>

<script>
localStorage.clear();
function settimer()
{
   localStorage.getItem("counter");  
   var obj = { store: localStorage };
   obj.store.setItem('counter',<?php echo $getTestData['timer']; ?>);
   obj.store.getItem('counter');
   
   <?php if($checkTestType['test_type'] == 2 || $checkTestType['test_type'] == 3){ ?>
    var testId = '<?php echo $testID;?>';
    var student_id = '<?php echo  $this->session->userdata('user_id');?>';
    var currDate = new Date();
    var cdate = currDate.getFullYear() + '-' + currDate.getMonth()+1 + '-' + currDate.getDate();
    var ctime = currDate.getHours() + '-' + currDate.getMinutes() + '-' + currDate.getSeconds();

    practice_test(testId, student_id, cdate, ctime);
    <?php } ?>
  //  exam = 1, practice = 2, quiz = 3
    <?php 
   
        if($examType['test_type'] == 1){
            $location_path  = base_url().'exam-pattern/'.$testID;
        }else if($examType['test_type'] == 2){
            $location_path  = base_url().'practice-pattern/'.$testID;
        }else{
            $location_path  = base_url().'quiz-pattern/'.$testID;
        }
    ?>
   //location.href='<?php echo base_url();?>start-test/<?php echo $testID;?>';
   location.href = '<?php echo $location_path; ?>';

}

<?php if($checkTestType['test_type'] == 2 || $checkTestType['test_type'] == 3){ ?>

function practice_test(testId, student_id, cdate, ctime){

    var data = 'testid=' + testId + '&student_id='+ student_id + '&cdate=' + cdate + '&ctime=' + ctime; 

    $.ajax({
        url: '<?= base_url() ?>practiceAttempt',
        type: 'post',
        data: data,
        dataType: 'json',
        success: function(responseData) {
            sessionStorage.setItem("sess_attemptId", responseData);
            console.log('practice attempt data successfully saved...');           
        }
    });

}
<?php } ?>
    document.querySelector(".button").disabled = true;
    $(document).ready(function(){
        let button = document.querySelector(".button");
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                button.disabled = false; 
                console.log("Checkbox is checked.");
            }
            else if($(this).prop("checked") == false){
                console.log("Checkbox is unchecked.");
                button.disabled = true; 
                
            }
        });
    });
</script>

<script type="text/javascript">
	//  $(document).ready(function() {
    //     function disableBack() { window.history.forward() }

    //     window.onload = disableBack();
    //     window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    // });
	</script>
<?php } ?>

