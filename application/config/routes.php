<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//==============Admin Login=======================
$route['main-admin'] = 'admin/admin_login';
$route['admin/dashboard'] = 'admin/admin_dashboard';
$route['edit-package/(:num)'] = 'package/edit/$1';

//==============Course=======================
$route['new-course']='courses/newCourse';
$route['course-save-update']='courses/courseSaveUpdate';
$route['course/add'] = 'courses/course_add';
$route['course/list'] = 'courses/course_list';
$route['course/delete/(:num)'] = 'courses/delete_course/$1';
$route['course/edit/(:num)'] = 'courses/edit_course/$1';

//==============User Login=======================
$route['login'] = 'user/user_login';
$route['register'] = 'user/user_register';
$route['student-profile'] = 'user/edit_student_profile';
$route['dashboard'] = 'user/user_dashboard';
$route['forget-password'] = 'user/forget_password';

//==============User Course=========================
$route['browse-courses'] = 'courses/browse_courses';
$route['test-schedule/(:num)'] = 'Test_information/testSchedule/$1';
$route['view-course/(:num)'] = 'courses/view_courses/$1';
$route['course/start/(:num)'] = 'courses/start_course/$1';
$route['course/start/(:num)/(:num)'] = 'courses/start_course/$1/$2';
$route['instruction/(:num)'] = 'Quiz/instuction/$1';
//$route['start-test/(:num)'] = 'Quiz/onlineExam/$1';
$route['exam-pattern/(:num)'] = 'Quiz/onlineExam/$1';
$route['practice-pattern/(:num)'] = 'Quiz/onlineExam/$1';
$route['quiz-pattern/(:num)'] = 'Quiz/onlineExam/$1';

//===================submit test============================

$route['submitAns'] = 'Quiz/addAnswer';
$route['checkAns'] = 'Quiz/checkAnswerForbutton';
$route['show-result'] =  'Quiz/testsubmitResult';
$route['final-result/(:num)'] =  'Quiz/result/$1';
$route['practice-result/(:num)/(:num)'] =  'Quiz/practice_result/$1/$1';
$route['preview/(:num)'] = 'Quiz/exam_preview/$1';

//===================only for practice test============================
$route['practice-submitAns'] = 'Quiz/practice_addAnswer';
$route['question-ref'] = 'Quiz/getQuesref';

//==============Front End=======================
$route['contact'] = 'contact/contact';
$route['about'] = 'welcome/about_us';
$route['course'] = 'welcome/course';
$route['whyus'] = 'welcome/whyus';
$route['recentupdate'] = 'welcome/recentupdate';
$route['faqs'] = 'welcome/faqs';

$route['course-details/(:num)'] = 'Welcome/showpages/$1';



//==============student list=======================
$route['manage-student'] = 'student/index';
$route['student-update/(:num)'] = 'student/edit/$1';

 //==============Test Information=======================
$route['test-details'] = 'test_information/index';


$route['edit-question/(:num)'] = 'test_information/editQuestion/$1';
$route['question-add/(:num)'] = 'test_information/add/$1';
$route['test-question/(:num)'] = 'Test_information/editList/$1';
$route['edit-test-details/(:num)'] = 'test_information/edit/$1';
$route['add-question/(:num)'] = 'test_information/addList/$1';
$route['question-list/(:num)'] = 'Test_information/testList/$1';
$route['test-Add'] = 'test_information/add';


//==================package
$route['package'] = 'package/index';
$route['package-update/(:num)'] = 'package/edit/$1';
$route['rowDel'] = 'Package/docdelete';

$route['page/(:num)'] = 'Courses/dycourse/$1';

$route['manage-instructor'] = 'instructor/index';
$route['add-instructor'] = 'instructor/add';
$route['edit-instructor/(:num)'] = 'instructor/edit/$1';
$route['add-topic/(:num)'] = 'package/addTopic/$1';
$route['delete-topic/(:num)'] = 'package/topic_delete/$1';
$route['edit-topic/(:num)/(:num)'] = 'package/topic_edit/$1/$2';
$route['topic-list/(:num)'] = 'package/topicList/$1';

$route['commonMail'] = 'Welcome/common_send_msg';
//==================sidebar======================
$route['take-a-quiz'] = 'Quiz/alltest';
$route['exam'] = 'Quiz/exam';
$route['practice'] = 'Quiz/practice';
$route['quiz'] = 'Quiz/quiz';
$route['show-practice-result'] = 'Quiz/practiceTestDetails';

//==================question list=================
$route['question-hub'] = 'Question_bank/question_list';
$route['add-question-hub'] = 'Question_bank/questionSave';
$route['edit-question-hub/(:num)'] = 'Question_bank/questionhubEdit/$1';
$route['assign-question/(:num)'] = 'Question_bank/question_list/$1';
$route['section'] = 'section/index/';
$route['add-section'] = 'section/add/';
$route['section-delete/(:num)'] = 'section/delete/$1';
$route['section-edit/(:num)'] = 'section/edit/$1';
$route['practiceAttempt'] = 'Quiz/practiceDeatils';
$route['update-qusmark'] = 'Question_bank/questionMark_update';






