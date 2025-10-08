import { useState } from "react"

const NameForm = () => {
    const [name, setName] = useState('')
    const changeName = () => (e) => setName(e.target.value)

    return(
        <>
            <h2>Formulario de nombre</h2>
            <input
                type="text"
                placeholder="Ingresa tu nombre"
                value={name}
                onChange={changeName()}
            />
            <p>Hola {name || 'Visitante'}</p>
        </>
    )
}

export default NameForm