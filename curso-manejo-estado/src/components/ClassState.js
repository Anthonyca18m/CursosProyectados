import React from 'react'

class ClassState extends React.Component {
    constructor(props) {
        super(props)
        this.state = {
            error: false,
        }
    }

    render() {
        return (
            <div>
                <h2>Eliminar ClassState</h2>
                <p>Por favor, escribe el código de seguridad.</p>

                {this.state.error && (
                    <p style={{ color: 'red' }}>Error: el código es incorrecto</p>
                )}

                <input placeholder='Código de seguridad' />
                <button>Comprobar</button>
            </div>
        )
    }
}

export { ClassState }