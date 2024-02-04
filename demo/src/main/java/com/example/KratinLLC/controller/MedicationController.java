package com.example.KratinLLC.controller;

import com.example.KratinLLC.model.Medication;
import com.example.KratinLLC.repository.MedicationRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@Controller
@RequestMapping("/api/medications")
public class MedicationController {

    @Autowired
    private MedicationRepository medicationRepository;

    @PostMapping
    @ResponseBody
    public String saveMedication(@RequestBody Medication medication) {
        // Save the medication details to the database
        medicationRepository.save(medication);

        return "Medication saved successfully.";
    }

    @GetMapping
    @ResponseBody
    public List<Medication> getAllMedications() {
        // Retrieve all medications from the database
        return medicationRepository.findAll();
    }
}
