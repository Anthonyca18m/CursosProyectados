package med.voll.api.request;

import med.voll.api.dto.Direccion;
import med.voll.api.dto.Especialidad;

public record RequestMedico(
    String nombre,
    String email,
    String documento,
    Especialidad especialidad,
    Direccion direccion
) {
}
