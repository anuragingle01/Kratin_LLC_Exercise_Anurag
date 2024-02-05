<?php
class HomeController extends CI_Controller {
    
    public function index() {
        $this->load->view('home');
    }

    public function yogaExercise() {
        $this->load->view('yoga_exercise');
    }

    public function scheduleMedicines() {
        $this->load->view('medication_schedule');
    }

    public function locateHospital() {
        $this->load->view('locate_hospital');
    }

    public function healthTrack() {
        // Add logic for Health Tracking here
    }
}
