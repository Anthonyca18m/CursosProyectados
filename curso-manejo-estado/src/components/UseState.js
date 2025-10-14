import React from 'react'

function UseState({ name }) {

    const [error, setError] = React.useState(false)
    const [loading, setLoading] = React.useState(true)

    React.useEffect(() => {
        console.log('Empezando el efecto')

        if (loading) {
            setTimeout(() => {
                console.log('Haciendo la validación')

                if (name === 'paradigma') {
                    setLoading(false)
                    setError(false)
                } else {
                    setLoading(false)
                    setError(true)
                }

                console.log('Terminando la validación')
            }, 3000)
        }

        console.log('Terminando el efecto')
    }, [loading])

    return (
        <div>
            <h2>Eliminar { name }</h2>
            <p>Por favor, escribe el código de seguridad.</p>

            {error && (
                <p style={{ color: 'red' }}>Error: el código es incorrecto</p>
            )}

            {loading && (
                <p>Cargando...</p>
            )}

            <input placeholder='Código de seguridad' />
            <button>Comprobar</button>
        </div>
    )
}

export { UseState }