<?php
class MedicationController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Medication_model');
    }

    public function index()
    {
        $data['medications'] = $this->Medication_model->get_medications();
        $this->load->view('medication_schedule', $data);
    }

    public function add_medication()
    {
        $medicine_names = $this->input->post('medicine_name');
        $dosages = $this->input->post('dosage');
        $timings = $this->input->post('timing');

        foreach ($medicine_names as $key => $medicine_name) {
            $data = array(
                'medicine_name' => $medicine_name,
                'dosage' => $dosages[$key],
                'timing' => $timings[$key]
            );

            $this->Medication_model->add_medication($data);
        }

        $this->load->view('medication_added');
    }


    public function get_schedule_history($medicine_name, $dosage, $timing)
    {
        $this->db->where('medicine_name', $medicine_name);
        $this->db->where('dosage', $dosage);
        $this->db->where('timing', $timing);
        $query = $this->db->get('medications');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function view_scheduled_medications()
    {
        $data['scheduled_medications'] = $this->Medication_model->get_all_scheduled_medications();

        $this->load->view('scheduled_medications', $data);
    }
}
