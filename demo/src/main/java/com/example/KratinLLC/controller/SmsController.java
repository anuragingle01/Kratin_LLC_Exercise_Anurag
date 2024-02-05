package com.example.KratinLLC.controller;

import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
@RequestMapping("/api/send-sms")
public class SmsController {

    @Value("${twilio.accountSid}")
    private String accountSid;

    @Value("${twilio.authToken}")
    private String authToken;

    @Value("${twilio.phoneNumber}")
    private String twilioPhoneNumber;

    @PostMapping
    @ResponseBody
    public String sendSms() {
        // Initialize Twilio
        Twilio.init(accountSid, authToken);

        // Example: Send SMS to a specific number
        String phoneNumber = "user_phone_number"; // Replace with the user's phone number
        String message = "It's time to take your medication!";

        Message.creator(
                new com.twilio.type.PhoneNumber("+" + phoneNumber),
                new com.twilio.type.PhoneNumber("+" + twilioPhoneNumber),
                message
        ).create();

        return "SMS sent successfully.";
    }
}
