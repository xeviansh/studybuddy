<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends MY_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('common_list');		
        $this->load->library('paypal_lib');
	}
	public function newCourse()
	{
		$datas['title'] = 'Add Package';
		$datas['instructor'] = $this->common_list->package_list('manage_instructor');		
		$datas['main_content'] = 'main-admin/Package/add_package';
        $this->load->view('main-admin/template/template',$datas); 
	}


	// private function upload_files($path,$syllabus_name,$document_name, $files,$courseID)
   	// {
		

	// 	if(!empty($files)){
	// 		$uploadData = array();
	// 		$filesCount = count($files); 
	// 		for($i = 0; $i < $filesCount; $i++){ 
	// 			$_FILES['file']['name']     = $files[$i]; 
	// 			$_FILES['file']['type']     = $_FILES['doc_file']['type'][$i]; 
	// 			$_FILES['file']['tmp_name'] = $_FILES['doc_file']['tmp_name'][$i]; 
	// 			$_FILES['file']['error']    = $_FILES['doc_file']['error'][$i]; 
	// 			$_FILES['file']['size']     = $_FILES['doc_file']['size'][$i]; 
				 
	// 			// File upload configuration 
	// 			$uploadPath = $path; 
	// 			$config['upload_path'] = $uploadPath; 
	// 			$config['allowed_types'] = 'jpg|jpeg|png|gif'; 				
				 
	// 			// Load and initialize upload library 
	// 			$this->load->library('upload', $config); 
	// 			$this->upload->initialize($config); 

	// 			// Upload file to server 
	// 			if($this->upload->do_upload('file')){ 
	// 				// Uploaded file data 
	// 				$fileData = $this->upload->data(); 
	// 				$uploadData['course_id'] = $courseID; 
	// 				$uploadData['syllabus_name'] = $syllabus_name[$i];
	// 				$uploadData['document_name'] = $document_name[$i]; 
	// 				$uploadData['document'] = $fileData['file_name']; 
	// 				$uploadData['cip'] =  $this->input->ip_address();
	// 				$uploadData['cby'] =  $this->session->userdata('user_id'); 
	// 				$uploadData['cstatus'] = 1; 
	// 			}

	// 			$this->db->insert('manage_syllabus_details', $uploadData);		

	// 			 $checkQuery = $this->db->query('select count(id) as allcount from manage_syllabus_details 
	// 							where syllabus_name ="'.$syllabus_name[$i].'"
	// 							and document_name="'.$document_name[$i].'"
	// 							and course_id="'.$courseID.'"	
	// 							')->row_array();	
						
	// 			if($checkQuery['allcount'] > 0 ){
	// 				$this->db->delete('manage_syllabus_details', array('course_id' => $courseID, 'syllabus_name'=>$syllabus_name[$i], 'document_name'=> $document_name[$i]));
	// 				$this->db->insert('manage_syllabus_details', $uploadData);			
	// 			}else{
	// 				$this->db->insert('manage_syllabus_details', $uploadData);
	// 			}

	// 			//$this->db->insert('manage_syllabus_details', $uploadData);
				
	// 		} 
		
	// 	} 	
	// }
	public function courseSaveUpdate()
	{
            // Form field validation rules 
        	$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('price', 'Price', 'trim|required');	
			$instructor = implode(',',$this->input->post('instructor'));
           
			 $galleryData = array(
				'name' => $this->input->post('name'),
				'subtitle'=> $this->input->post('subtitle'),
				'price'=> $this->input->post('price'),
				'instructor'=> $instructor,
				'long_description'=> $this->input->post('long_description'),
				'short_description'=> $this->input->post('short_description'),
				'course_info'=>$this->input->post('course_info'),
				'mentor_info'=>$this->input->post('mentor_info'),
				'cip' => $this->input->ip_address(),
				'cby' => 1,
				'cstatus' => $this->input->post('status')
			); 

                if (!empty($_FILES["image"]["name"])) {
                    $name = 'IMG' . "-" . rand(1000, 100000).".".get_file_extension($_FILES["image"]["name"]);
                    $tmp_name = $_FILES["image"]["tmp_name"];
                    $error = $_FILES["image"]["error"];
                    $path = 'uploads/package_image/' . $name;
                    move_uploaded_file($tmp_name, $path);
                    $galleryData['image'] = $name;
                }  
				
				// $path = 'uploads/package_document';
				// $syllabus_name = $this->input->post('syllabus_name');
				// $document_name = $this->input->post('document_name');
				// $files = $_FILES['doc_file']['name'];	
				
				
                if($this->form_validation->run() == true){
                    // Insert gallery data 
                    if(!($this->input->post('tid')))
                    {
                        $insert = $this->db->insert('mange_package', $galleryData);
                        $package_id = $this->db->insert_id();
						// upload multiple id
						//$this->upload_files($path,$syllabus_name,$document_name, $files, $package_id);

                        $this->session->set_flashdata('success', 'Course added successfully.');
                    }else{

                    	$id=$this->input->post('tid');
					//	$this->upload_files($path,$syllabus_name,$document_name, $files, $id);
						$insert =  $this->common_list->update_data("mange_package", $galleryData,$id); 
						
                        $this->session->set_flashdata('success', 'Course updated successfully.');
                    }
                    if($insert){  
                    	redirect(base_url().'package'); 
                    }
                    else{
                    	$this->session->set_flashdata('success', 'Failed.');
                    	redirect(base_url().'new-course');
                    }
                }else{
					$datas['main_content'] = 'main-admin/Package/add_package';
       				 $this->load->view('main-admin/template/template',$datas); 
				}
	}

	public function browse_courses()
	{
		if(!$this->is_user_login()) {
			redirect($this->userlogin);
		}
		$data['courses_list'] = $this->common_list->get_data('mange_package');
		$data['main_content'] = 'users/courses/browse-courses';
		$this->load->view('users/template/template',$data);
	}
	

	public function view_courses($id=false)
	{
		if(!$this->is_user_login()) {
		redirect($this->userlogin);
		}
		
		$data['package_details'] = $this->common_list->set_data('mange_package', $id);		
		$data['topic_list'] = $this->common_list->gettbledata('manage_topic','course_id', $id);
		$data['main_content'] = 'users/courses/view-course';
		$this->load->view('users/template/template',$data);
	}

	public function buy_course()
	{
		$data = array(
				"student_id" => $this->session->userdata('user_id'),
				"purchase_type" => $this->input->post('ptype'),
				"test_id" =>	$this->input->post('testid'),
				"course_id" =>	$this->input->post('courseID'),
				"duration" => 365,			
				"activation_date" => date('Y-m-d'),
				"expiry_data" => date('Y-m-d', strtotime('+365 day')),
				"payment_id" =>	123456,
				"payment_response" => 12554544,
				"amount" =>	50000, 
				'cip' => $this->input->ip_address(),
				'cby' => $this->session->userdata('user_id'),

			);
		$insert = $this->db->insert('manage_my_course', $data);
		if(!empty($insert)){
			echo 1;
		}else{
			echo 2;
		}
	}


	public function dycourse($id)
	{
		$data['package_details'] = $this->common_list->set_data('mange_package', $id);
		// echo "<pre>";
        // print_r($data['package_details']);
        if($data['package_details']['instructor']!="")
		    $data['instructor'] = $this->db->query('select * from manage_instructor where id in('.$data['package_details']['instructor'].')')->result_array();
	
	// echo "<pre>";		print_r($data['instructor']);

		$data['main_content'] = 'front-end/common-page';
		$this->load->view('front-end/template/template',$data);	
	}

	
	
}






















 

     


 