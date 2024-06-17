package med.voll.api.security;

import java.time.Instant;
import java.time.LocalDateTime;
import java.time.ZoneOffset;

import org.springframework.stereotype.Service;

import com.auth0.jwt.JWT;
import com.auth0.jwt.algorithms.Algorithm;
import com.auth0.jwt.exceptions.JWTCreationException;

import med.voll.api.model.Usuario;



@Service
public class TokenService {

    public String generarToken(Usuario usuario) {
        try {
            Algorithm algorithm = Algorithm.HMAC256("ESTO-DEBE-SER-VARIABLE-DE-ENTORNO-ORRAI");

            return JWT.create().withIssuer("vell med")
                .withSubject(usuario.getUsername())
                .withClaim("id", usuario.getId())
                .withExpiresAt(expiracionSesion())
                .sign(algorithm);
            
        } catch (JWTCreationException exception) {
            throw new RuntimeException(exception);
        }
    }

    private Instant expiracionSesion() {
        return LocalDateTime.now().plusHours(2).toInstant(ZoneOffset.of("-05:00"));
    }
}
