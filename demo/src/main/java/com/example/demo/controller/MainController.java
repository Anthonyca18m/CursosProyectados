package com.example.demo.controller;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RequestMapping("/")
@RestController
public class MainController {

    @RequestMapping
    public String main() {
        return "Hello, World!";
    }

}
