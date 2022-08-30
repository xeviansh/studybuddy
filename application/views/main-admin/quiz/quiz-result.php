<style>

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.custom_quiz_tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}


#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.quiz_step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.quiz_step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.quiz_step.finish {
  background-color: #04AA6D;
}
</style>

<style>
.quiz_row {
    background: #f1f1f1;
    padding: 17px;
    border-radius: 5px;
    margin: 21px 0px;
}
.quiz_row h3 {
    margin: 10px;
    height: auto;
	color:#2196F3;
}
.quiz_row ul {
    margin: 0px;
    padding: 0px;
}
.quiz_row li {
    list-style: none;
    margin: 1px;
    padding: 6px 5px;
    font-size: 15px;
}
.quiz_row input[type="radio"] {
    margin-right: 12px;
}


</style>

<div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
                                <div class="flex mb-2 mb-sm-0">
                                    <h1 class="h2">Quiz Result</h1>
                                </div>
                               <!--- <a href="<?php echo base_url().'/quiz/add'; ?>" class="btn btn-success">Add quiz</a>--->
                            </div>
							
							<div class="row">
							
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
<div class="quiz_box">
<form id="regForm" action="" method="post">
<!-- One "custom_quiz_tab" for each quiz_step in the form: -->
		<?php 
		//print_r($courses_list);
		if(!empty($quiz_questions)){
			//echo '<pre>';
			//print_r($quiz_questions);
			//echo '</pre>';
		
			?>
			<div class="custom_quiz_tab">
			<?php
			$i = 1;	
			foreach($quiz_questions as $print){
			$answers_array = json_decode($print->question_answers, TRUE);
			?>
			<div class="quiz_row">
				<h3><?php echo $i; ?>) <?php echo $print->question_title; ?></h3>
				<ul>
				<?php
				if(!empty($answers_array)){
				foreach ($answers_array as $index=>$result) {
				?>
				<li><label><input type="radio" name="givenanswer[<?php echo $print->ID; ?>]" value="<?php echo $result; ?>"><?php echo $result; ?></label></li>
				<?php
				} 
				} 
				?>
				</ul>
			</div>		
			<?php
			$i++;
			}
			?>
  </div>
  <?php

}
else{
	echo '<div class="nofound">No Found</div>';
}
?>
<!--	
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>--->
  <!-- Circles which indicates the steps of the form: -->
<!---
  <div style="text-align:center;margin-top:40px;">
  <?php 
  $t = 1;
  if(!empty($total_questions)){
  while($t <= $total_questions) {
	  echo '<span class="quiz_step"></span>';
	$t++;  
  }
  }
  ?>
  </div>
--->
</form>









</div>



                                        </div>
                           
                                    </div>
                                </div>                  
				  </div>
							
							
							
							

<script>
var currentTab = 0; // Current custom_quiz_tab is set to be the first custom_quiz_tab (0)
showTab(currentTab); // Display the current custom_quiz_tab

function showTab(n) {
  // This function will display the specified custom_quiz_tab of the form...
  var x = document.getElementsByClassName("custom_quiz_tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct quiz_step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which custom_quiz_tab to display
  var x = document.getElementsByClassName("custom_quiz_tab");
  // Exit the function if any field in the current custom_quiz_tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current custom_quiz_tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current custom_quiz_tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct custom_quiz_tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("custom_quiz_tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current custom_quiz_tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the quiz_step as finished and valid:
  if (valid) {
    document.getElementsByClassName("quiz_step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("quiz_step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current quiz_step:
  x[n].className += " active";
}
</script>





