package med.voll.api.request;

import jakarta.validation.Valid;
import jakarta.validation.constraints.Email;
import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Pattern;
import med.voll.api.dto.Direccion;
import med.voll.api.dto.Especialidad;

public record RequestMedico(

    @NotBlank
    String nombre,

    @NotBlank
    @Email
    String email,

    @NotBlank
    @Pattern(regexp = "\\d{8,11}")
    String documento,

    @NotNull
    @Valid
    Especialidad especialidad,

    @NotNull
    @Valid
    Direccion direccion
) {
}
