package med.voll.api.security;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.security.core.userdetails.UserDetails;

import med.voll.api.model.Usuario;

public interface UsuarioRepository extends  JpaRepository<Usuario, Long> {

    UserDetails findByUsername(String username);
}
