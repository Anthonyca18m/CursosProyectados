import { Card } from 'antd'
import Meta from 'antd/es/card/Meta'
import { StarOutlined } from '@ant-design/icons'

const PokemonCard = ({ pokemon }) => {
    return (
        <Card
            hoverable
            style={{ width: 240 }}
            title={pokemon.name}
            cover={<img alt={pokemon.name} src={"https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/008.png"} />}
            extra={<StarOutlined />}
        >
            <Meta title={pokemon.name} />
        </Card>
    )
}

export default PokemonCard