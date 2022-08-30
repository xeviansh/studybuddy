<?php

$config = [

    'test_details' => [
        [
            'field' => 'course_id',
            'label' => 'Course Name',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'test_name',
            'label' => 'Test Name',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'test_type',
            'label' => 'Test Type',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'start_date',
            'label' => 'Start Date',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'end_date',
            'label' => 'End Date',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'total_question',
            'label' => 'Total Question',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'total_mark',
            'label' => 'Total Mark',
            'rules' => 'trim|required'
        ]

    ],

    'question_bank' => [
        
        [
            'field' => 'question',
            'label' => 'Question',
            'rules' => 'trim|required'
        ],

        

        [
            'field' => 'option1',
            'label' => 'option1',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'option2',
            'label' => 'option2',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'correct_answer',
            'label' => 'Correct answer',
            'rules' => 'trim|required'
        ],
    ],
    'student' => [
        [
            'field' => 'fname',
            'label' => 'First Name',
            'rules' => ''
        ],
        [
            'field' => 'lname',
            'label' => ' Last Name',
            'rules' => 'trim|required'
        ],

        

        [
            'field' => 'phone',
            'label' => 'Mobile',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required'
        ],

      
    ]





];
