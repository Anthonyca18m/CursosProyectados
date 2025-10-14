import React from 'react'

function UseState({ name }) {

    const [error, setError] = React.useState(false)

    return (
        <div>
            <h2>Eliminar { name }</h2>
            <p>Por favor, escribe el código de seguridad.</p>

            {error && (
                <p style={{ color: 'red' }}>Error: el código es incorrecto</p>
            )}

            <input placeholder='Código de seguridad' />
            <button>Comprobar</button>
        </div>
    )
}

export { UseState }