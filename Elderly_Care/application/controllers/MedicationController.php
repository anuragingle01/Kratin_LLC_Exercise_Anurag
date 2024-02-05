
<?php
class MedicationController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Medication_model');
    }

    public function index() {
        $this->load->model('Medication_model');
        
        $data['medications'] = $this->Medication_model->get_medications();
        
        $this->load->view('medication_schedule', $data);
    }

    public function add_medication() {
        $data = array(
            'medicine_name' => $this->input->post('medicine_name'),
            'dosage' => $this->input->post('dosage'),
            'timing' => $this->input->post('timing')
        );

        $this->Medication_model->add_medication($data);

        redirect('medication');
    }
    public function send_email() {
        $medicineName = $this->input->post('medicine_name');
        $recipientEmail = 'anurag.ingle@mitaoe.ac.in'; // Use your predefined email address

        $this->load->library('email');

        $this->email->from('anuragingle2002@gmail.com', 'Anurag Ingle');
        $this->email->to($recipientEmail);
        $this->email->subject('Medication Reminder');
        $this->email->message('It\'s time to take ' . $medicineName);

        if ($this->email->send()) {
            echo 'Email sent successfully';
        } else {
            echo 'Error sending email: ' . $this->email->print_debugger();
        }
    }
}
