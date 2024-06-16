package med.voll.api.controller;

import java.net.URI;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.util.UriComponentsBuilder;

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
    public ResponseEntity<MedicoDTO> registrarMedico(@RequestBody @Valid RequestMedico request) {
        Medico medico = service.registrarMedico(request);
        URI url = UriComponentsBuilder.fromPath("/medicos/{id}").buildAndExpand(medico.getId()).toUri();
        return ResponseEntity.created(url).body(new MedicoDTO(medico.getId(),medico.getNombre(), medico.getDocumento(),medico.getEspecialidad()));
    }

    @GetMapping("/{id}")
    public ResponseEntity<MedicoDTO> obtenerMedico(@PathVariable Long id) {        
        return ResponseEntity.ok(service.obtenerMedico(id));
    }

    @GetMapping
    public ResponseEntity<Page<MedicoDTO>> obtenerMedicos(Pageable paginacion) {
        return ResponseEntity.ok(service.obtenerMedicos(paginacion));
    }

    @PutMapping("/{id}")
    @Transactional
    public ResponseEntity<MedicoDTO> actualizarMedico(@PathVariable Long id,@RequestBody @Valid RequestMedico  request) {
        service.actualizarMedico(id, request);
        return ResponseEntity.ok(service.obtenerMedico(id));
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<MedicoDTO> eliminarMedico(@PathVariable Long id) {
        service.eliminarMedico(id);
        return ResponseEntity.noContent().build();
    }
}
