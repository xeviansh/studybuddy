                            <div class="media align-items-center mb-headings">
                                <div class="media-body">
                                    <h1 class="h2">Edit Question</h1>
                                </div>
                                <div class="media-right">
                                   <a  class="custom_bk_bt" href="javascript:window.history.go(-1);">Back</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
									<div class="card">
									<div class="card-header">
										<h4 class="card-title">Information</h4>
									</div>
									<div class="card-body">	
<?php
if(!empty($quiz_question)){
	$quiz_question = $quiz_question[0];
	$question_answers = $quiz_question->question_answers;
	$question_answers = json_decode($question_answers, true);
	$correct_answer = $quiz_question->correct_answer;
	$correct_answer = json_decode($correct_answer, true);

	
?>									
									<?php echo form_open_multipart(); ?>
																					

									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">Question:</label>
                                        <div class="col-sm-9">
                                             <input type="text"
													name="question_title"
                                                       id="title"
                                                       class="form-control <?php if(!empty(form_error('question_title'))){ echo 'is-invalid'; } ?>"
                                                       placeholder="Write a question"
                                                      value="<?php echo $quiz_question->question_title; ?>">
													   <?php echo form_error('question_title'); ?>
                                        </div>
                                    </div>
									
									<div class="form-group row">
                                        <label for="quiz_image" class="col-sm-3 col-form-label form-label">Question Image:</label>
                                        <div class="col-sm-9 col-md-9">
										<?php
										if(!empty($quiz_question->question_img)){
										?>
										<p><img src="<?php echo base_url() . '/assets/images/question_imgs/'. $quiz_question->question_img; ?>" alt="" width="100%" class="rounded"></p>
										<?php
										}
										?>
                                            <div class="custom-file">
                                                <input type="file" name="question_img" class="question_img <?php if(!empty(form_error('question_img'))){ echo 'is-invalid'; } ?>">
												<div class="input-group mb-3">
												  <div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="fas fa-paperclip"></i></span>
												  </div>
												  <input type="text" class="form-control" disabled placeholder="Upload File" aria-label="Upload File" aria-describedby="basic-addon1">
												  <div class="input-group-append">
													<button class="questionbrowse input-group-text btn btn-success" id="basic-addon2"><i class="fas fa-search"></i>  Browse</button>
												  </div>
												</div>
											<?php echo form_error('question_img'); ?>
                                            </div>
                                        </div>
                                    </div>





										
										
									<div class="form-group row">
                               <label for="quiz_image" class="col-sm-3 col-form-label form-label">Question Video:</label>
                                        <div class="col-sm-9 col-md-9">
										<?php
										if(!empty($quiz_question->question_video)){
										?>
										<p>	<iframe class="play-youtube rounded" width="100%" height='350px'  src="<?php echo base_url() . 'assets/quiz/question_videos/'. $quiz_question->question_video; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
										<?php
										}
										?>
										
                                            <div class="custom-file">
                                                <input type="file" name="question_video" class="question_img <?php if(!empty(form_error('question_video'))){ echo 'is-invalid'; } ?>">
												<div class="input-group mb-3">
												  <div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="fas fa-paperclip"></i></span>
												  </div>
												  <input type="text" class="form-control" disabled placeholder="Upload File" aria-label="Upload File" aria-describedby="basic-addon1">
												  <div class="input-group-append">
													<button class="questionbrowse input-group-text btn btn-success" id="basic-addon2"><i class="fas fa-search"></i>  Browse</button>
												  </div>
												</div>
											<?php echo form_error('question_video'); ?>
                                            </div>
                                        </div>
                                    </div>

									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">Description:</label>
                                        <div class="col-sm-9">
											<textarea name="question_description" class="form-control" id="exampleFormControlTextarea1" rows="9"><?php echo $quiz_question->question_description; ?></textarea>

                                        </div>
                                    </div>
									<div class="form-group row">
									<label for="quiz_title" class="col-sm-3 col-form-label form-label">Multiple:</label>
                                        <div class="col-sm-9">
										<div class="row">
											<div class="col-md-9 col-sm-9">
												<label for="quiz_anwsers" class="col-form-label form-label">Anwsers:</label>
											</div>
											<div class="col-md-3 col-sm-3 text-center">
												<label for="quiz_anwsers" class="col-form-label form-label">Correct Answers:</label>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">

												<div class="multi-field-wrapper">
												<div class="multi-fields">
													<?php
													$i = 0;
													if(!empty($question_answers) && !empty($question_answers[0])){
													foreach($question_answers as $index=>$anwser){
														if(!empty($anwser)){
													?>
														<div class="multi-field multi-cus-filed">
															<div class="row">
																<div class="col-md-9 col-sm-9">
																	<div class="form-group">
																		  <input type="text" class="form-control question_answers"  name="question_answers[<?php echo $i; ?>]" placeholder="Enter Report name" value="<?php echo $anwser; ?>">
																	</div>
																</div>		
																<div class="col-md-3 col-sm-3">
																	<div class="form-group">
													<input type="checkbox" class="form-control correctanswer" name="correctanswer[<?php echo $i; ?>]" placeholder="Enter correct answer" <?php if(!empty($correct_answer[$index])) { if($anwser==$correct_answer[$index]) { echo 'checked'; } } ?>   value="1" >
																	</div>
																</div>										
															</div>
														  <button type="button" class="remove-field remove-cus-filed">X</button>
														</div>
													<?php
													$i++;
													}	
													}	
													}
else{
?>
														<div class="multi-field multi-cus-filed">
															<div class="row">
																<div class="col-md-9 col-sm-9">
																	<div class="form-group">
																		  <input type="text" class="form-control question_answers"  name="question_answers[0]" placeholder="Enter Report name" value="">
																	</div>
																</div>		
																<div class="col-md-3 col-sm-3">
																	<div class="form-group">
																	<input type="checkbox" class="form-control correctanswer" name="correctanswer[0]" placeholder="Enter correct answer"  value="1" >
																	</div>
																</div>										
															</div>
														  <button type="button" class="remove-field remove-cus-filed">X</button>
														</div>
<?php
}	
													?>
													</div>
													<button type="button" class="add-field btn btn-success">Add field</button>
													<button type="submit" name="add_question" class="btn  btn-outline-primary">Submit</button>
												</div>											
												
											</div>
										</div>
                                        </div>
                                    </div>
																				  
										<?php echo form_close(); ?> 
										<?php
}
else{
	echo '<div class="nofound" >No Found</div>';
}
?>
									</div>
                                    </div>
                                </div>
                            </div>
							


<style>


.btn.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  outline: none;
  color: #fff;
}

.multi-cus-filed{
  position:relative;
}

.remove-cus-filed {
    background: #0c65a8;
    border-radius: 200%;
    padding: 4px 13px;
    border: none;
    color: white;
    font-size: 19px;
    position: absolute;
    top: 0px;
right: 55px;    height: 50px;    width: 50px;
}


.multi-cus-filed{
  position:relative;
}


</style>
				  
				 

<script>

$('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
	var counter = $(".multi-field").length;
	//alert(counter);
	if(counter == ''){
		var counter=0;
	}
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('.question_answers').val('').focus();
		$('.multi-field:last-child', $wrapper).find('.question_answers').attr('name', 'question_answers['+ counter +']');
		$('.multi-field:last-child', $wrapper).find('.correctanswer').attr('name', 'correctanswer['+ counter +']');
		counter++;
    });
	
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});

</script>
