const Card = ({ titulo, descripcion, imagen }) => {

    return (
        <div className="card">
            <img src={imagen} alt={titulo} className="card-img-top" />
            <div className="card-body">
                <h5 className="card-title">{titulo}</h5>
                <p className="card-text">{descripcion}</p>
            </div>
        </div>
    )
}

export default Card