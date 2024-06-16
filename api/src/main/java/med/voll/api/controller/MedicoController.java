package med.voll.api.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import jakarta.validation.Valid;
import med.voll.api.dto.MedicoDTO;
import med.voll.api.request.RequestMedico;
import med.voll.api.service.MedicoService;

@RestController
@RequestMapping("/medicos")
public class MedicoController {

    @Autowired
    private MedicoService service;

    @PostMapping
    public void registrarMedico(@RequestBody @Valid RequestMedico request) {
        service.registrarMedico(request);
    }

    @GetMapping
    public Page<MedicoDTO> obtenerMedicos(Pageable paginacion) {
        return service.obtenerMedicos(paginacion);
    }
}
