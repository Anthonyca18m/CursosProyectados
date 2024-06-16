package med.voll.api.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import jakarta.transaction.Transactional;
import jakarta.validation.Valid;
import med.voll.api.dto.MedicoDTO;
import med.voll.api.model.Medico;
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

    @PutMapping("/{id}")
    @Transactional
    public Medico actualizarMedico(@PathVariable Long id,RequestMedico request) {
        return service.actualizarMedico(id, request);
    }

    @DeleteMapping("/{id}")
    public void eliminarMedico(@PathVariable Long id) {
        service.eliminarMedico(id);
    }
}
