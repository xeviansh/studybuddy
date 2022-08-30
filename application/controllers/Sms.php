<?php
public function sendSms(){
 
$this->load->library('twilio');
$sms_sender = trim($this->input->post('sms_sender'));
$sms_reciever = $this->input->post('sms_recipient');
$sms_message = trim($this->input->post('sms_message'));
$from = '+'.$sms_sender; //trial account twilio number
$to = '+'.$sms_reciever; //sms recipient number
$response = $this->twilio->sms($from, $to,$sms_message);
 
if($response->IsError){
 
echo 'Sms Has been Not sent'
}
else{
 
echo 'Sms Has been sent';
}
}
?>