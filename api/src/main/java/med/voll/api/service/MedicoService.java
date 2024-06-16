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

    public void registrarMedico(RequestMedico medico) {
        medicoRepository.save(new Medico(medico));
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
