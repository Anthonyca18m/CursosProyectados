import { Card } from 'antd'
import Meta from 'antd/es/card/Meta'
import { StarOutlined } from '@ant-design/icons'

const PokemonCard = ({ pokemon }) => {

    const abilities = pokemon.abilities.map((ability) => ability.ability.name).join(', ');

    return (
        <Card
            hoverable
            style={{ width: 240 }}
            title={pokemon.name}
            cover={<img alt={pokemon.name} src={pokemon.sprites.front_default}/>}
            extra={<StarOutlined />}
        >
            <Meta title="Habilidades:" description={abilities} />
        </Card>
    )
}

export default PokemonCard