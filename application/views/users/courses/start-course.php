<style>
/*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #1d2327;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #2b3236;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #72aee6;
}
#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #2271b1;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}
button#sidebarCollapse i {
    margin-right: 0px;
}

button#sidebarCollapse span {
    font-family: 'Poppins';
    font-weight: 600;
    padding: 5px 15px;
}
ul.CTAs {
    padding: 15px !important;
}
img{max-width:100%;}
ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 0px;
    margin-bottom: 0px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}
#sidebar ul li.gereral-dashboard> a {
    background: #262d32;
}
/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

.play-youtube {
    width: 100%;
    margin: auto;
    height: 800px;
    display: block;
}
p.MsoNormal span b {
    font-size: 16px !important;
    font-family: 'Poppins';
    font-weight: 400 !important;
}
h1.h2 {
    font-weight: 700;
}	
.quiz_row h3 {
    font-size: 22px;
    font-weight: 600;
    color: #242424;
}
.quiz_row ul li label {
    font-size: 16px;
    text-transform: capitalize;
    font-family: 'Poppins';
}
@media (max-width:600px){
#sidebar.active {
    min-width: 250px !important;
    margin-left: 0px;
}
#sidebar {
    min-width: 0px;
    max-width: 0px;
    background: #1d2327;
    color: #fff;
    transition: all 0.3s;
    overflow: hidden;
}	
	
}

</style>
<?php

if(!empty($course_result)){
	//print_r($course_result);
	$course_result = $course_result[0];
	$course_title = $course_result->course_title;
	$course_description = $course_result->course_description;
	$courseimg = $course_result->course_img;
	$courseimg_path = base_url() . '/assets/images/course_imgs/' . $courseimg;
}

?>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="">


            <ul class="list-unstyled components main_nav">
                <img style="max-width:100%;padding:0 15px;margin-bottom:15px;" src="<?php echo base_url() . 'assets/images/logo/logo-white2.png'; ?>" alt="Card image cap" width="600px" class="rounded">
				
			<?php 
			if(!empty($full_course_detail)){
				$l = 1;
				foreach($full_course_detail as $course_lesson=>$subarray){
				?>


                <li class="active gereral-dashboard">
                    <a href="#lessonlist-<?php echo $l; ?>" <?php /* data-toggle="collapse" aria-expanded="true" class="dropdown-toggle" */ ?> ><?php echo $l .'.	 '. $course_lesson; ?></a>
                    <ul class="collapse show list-unstyled" id="lessonlist-<?php echo $l; ?>">        
					<?php
					foreach($subarray as $print){
						echo '<li>';
						echo '<a href="' . base_url() . 'course/start/' . $print['course_id'] . '/' . $print['topic_id'] . '">' . $print['topic_title'] . '</a>';
						echo '</li>';
					}
					?>
                
                    </ul>
                </li>

				<?php
				$l++;
				}
			echo '<pre>';
			//print_R($subarray);
			echo '</pre>';
			}
			?>
            </ul>

			<ul class="list-unstyled CTAs">
                <li>
                    <a href="<?php echo base_url().'dashboard'; ?>" class="download">Main Dashbarod</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                              <a  class="nav-link custom_bk_bt" href="javascript:window.history.go(-1);">Back</a>
                            </li>
          
                        </ul>
                    </div>
                </div>
            </nav>
<?php 	
/* 	echo '<pre>';

print_r($subarray);
echo '</pre>'; */
?>
<div class="">

							
<?php
//============================Success=====================================
if(!empty($this->session->flashdata('success_notice')))
{
?>							
		<div class="alert alert-dismissible bg-success text-white border-0 fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<?php echo $this->session->flashdata('success_notice'); ?>
		</div>
<?php
}

//============================Danger=====================================
if(!empty($this->session->flashdata('danger_notice')))
{
?>							
		<div class="alert alert-dismissible bg-danger text-white border-0 fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<?php echo $this->session->flashdata('danger_notice'); ?>
		</div>
<?php
}
?> 	

<?php
if(!empty($topic_result)){
/* 	echo '<pre>';
print_r($topic_result);
echo '</pre>'; */
$topic_title = $topic_result->topic_title;
$topic_category = $topic_result->topic_category;
$topic_youtube_link = $topic_result->youtube_link;
$topic_video = $topic_result->video;
$topic_document = $topic_result->document;
$quiz_id = $topic_result->quiz_id;
	
$ytarray=explode("/", $topic_youtube_link);
$ytendstring=end($ytarray);
$ytendarray=explode("?v=", $ytendstring);
$ytendstring=end($ytendarray);
$ytendarray=explode("&", $ytendstring);
$ytcode=$ytendarray[0];
$file_path = '';
if(!empty($topic_video)){
 $file_path = base_url() . 'assets/topic-files/' . $topic_video;
}
	if($topic_category != '' && $topic_category == 'you_tube_link_bx' && $topic_youtube_link  != ''){
	?>
	<iframe class="play-youtube" src="https://www.youtube.com/embed/<?php echo $ytcode; ?>"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<h2><?php echo $topic_title; ?></h2>
	<?php	
	}

	
	elseif($topic_category != '' && $topic_category == 'upload_video_bx' && $topic_video  != ''){
	?>
	<iframe class="play-youtube" src="<?php echo $file_path; ?>"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<h2><?php echo $topic_title; ?></h2>
	<?php	
	}
	
	
	elseif($topic_category != '' && $topic_category == 'upload_document_bx' && $topic_document  != ''){
		$doc_file = base_url() . 'assets/topic-files/' . $topic_document;
		$ext = pathinfo($topic_document, PATHINFO_EXTENSION);
		$allowed_formats = array('png','jpg','jpeg','gif');
		if (in_array($ext, $allowed_formats))
		{
	?>
		<img src="<?php echo $doc_file; ?>" width="100%" alt="Topic Img" title="Topic Img">
		<h2><?php echo $topic_title; ?></h2>
	<?php
		}
	
	}
	
	
		elseif($topic_category != '' && $topic_category == 'choose_quiz_bx' && $quiz_id  != ''){
	?>
	<?php echo $quiz_form; ?>
	<?php
	}
	
	else{
	
	
		
	}
	?>

<?php
}
else{
		if(!empty($courseimg) && file_exists($courseimg_path)){
		?>
		<img src="<?php echo $courseimg_path; ?>">
		<?php
		}
		?>
		<h1><?php if(!empty($course_title)){ echo $course_title; } ?></h1>
		<p><?php if(!empty($course_description)){ echo $course_description; } ?></p>
		<?php
}
?>			
</div>
			
			
        </div>
    </div>
	
	
	<script>
	$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
			
			



    $('a.youtube-link').each(function() {
        var yt_url = this.href,
            yt_id = yt_url.split('?v=')[1],
            yt_title = $(this).text();
        $(this).replaceWith('<div class="youtube-box" style="background-image:url(http://img.youtube.com/vi/' + yt_id + '/0.jpg);"><span class="youtube-title">' + yt_title + '</span><span class="youtube-bar"><span class="yt-bar-left"></span><span class="yt-bar-right"></span></span><span class="youtube-play">Play</span></div>');

        $('div.youtube-box').click(function() {
            $(this).replaceWith('<iframe class="youtube-frame" src="http://www.youtube.com/embed/' + yt_id + '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        });
    });




        });
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	