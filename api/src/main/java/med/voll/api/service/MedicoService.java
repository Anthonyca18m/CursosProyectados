package med.voll.api.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.stereotype.Service;

import med.voll.api.dto.MedicoDTO;
import med.voll.api.model.Medico;
import med.voll.api.repository.MedicoRepository;
import med.voll.api.request.RequestMedico;

@Service
public class MedicoService {

    @Autowired
    private MedicoRepository medicoRepository;

    public Medico registrarMedico(RequestMedico request) {
        Medico medico = medicoRepository.save(new Medico(request));        
        return medico;
    }

    public MedicoDTO obtenerMedico(Long id) {
        Medico medico = medicoRepository.findById(id).get();
        return new MedicoDTO(medico.getId(), medico.getNombre(), medico.getDocumento(), medico.getEspecialidad());
    }

    public Page<MedicoDTO> obtenerMedicos(Pageable paginacion) {
        Page<Medico> medicoPage = medicoRepository.findAll(paginacion);
        return medicoPage.map(e -> new MedicoDTO(e.getId(), e.getNombre(), e.getDocumento(), e.getEspecialidad()));
    }

    public Medico actualizarMedico(Long id,RequestMedico request) {        
        Medico medico = medicoRepository.getReferenceById(id);
        medico.actualizar(request);
        return medico;
    }

    public void eliminarMedico(Long id) {
        Medico medico = medicoRepository.getReferenceById(id);
        medicoRepository.delete(medico);
    }
}
