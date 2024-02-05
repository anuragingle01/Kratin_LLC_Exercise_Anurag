<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Medications extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Medications_model');
        $this->load->library('twilio');
    }

    public function index()
    {
        // Load the view to enter medication details
        $this->load->view('medications_form');
    }
    public function success($medication_id) {
        // Load the success view with the medication ID
        $data['medication_id'] = $medication_id;
        $this->load->view('success', $data);
    }
    

    public function save_medication()
    {
        // Save medication details to the database
        $medication_data = array(
            'medication_name' => $this->input->post('medication_name'),
            'dosage' => $this->input->post('dosage'),
            'timing' => $this->input->post('timing'),
            // Add other fields as needed
        );

        $medication_id = $this->Medications_model->save_medication($medication_data);

        // Set up SMS notification
        $message = "It's time to take your medication: {$medication_data['medication_name']} (Dosage: {$medication_data['dosage']})";

        // Replace with the user's phone number from the form
        $to_phone_number = '+917020650282';

        // Pass the "From" number as an argument when calling the sms method
        $from_phone_number = '+18589970485'; // Replace with your Twilio phone number
        try {
            $this->twilio->sms($from_phone_number, $to_phone_number, $message);
            echo 'Sent message to ' . $to_phone_number;
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }


        redirect('success/' . $medication_id);


    }
}
