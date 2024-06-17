package med.voll.api.security;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.Authentication;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import jakarta.validation.Valid;
import med.voll.api.dto.Login;
import med.voll.api.model.Usuario;

@RestController
@RequestMapping("/login")
public class LoginController {

    @Autowired
    private AuthenticationManager authenticationManager;

    @Autowired
    private TokenService tokenService;

    @PostMapping
    public ResponseEntity login(@RequestBody @Valid Login login) {
        Authentication authToken = new UsernamePasswordAuthenticationToken(login.username(), login.password());
        var auth = authenticationManager.authenticate(authToken);
        var JWTtoken = tokenService.generarToken((Usuario) auth.getPrincipal());
        return ResponseEntity.ok(JWTtoken);
    }
}
