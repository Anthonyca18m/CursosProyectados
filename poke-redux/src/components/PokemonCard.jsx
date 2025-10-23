import { Card } from 'antd'
import Meta from 'antd/es/card/Meta'
import StartButton from './StartButton';
import { useSelector, useDispatch } from 'react-redux';
import { toggleFavorite } from '../actions';

const PokemonCard = ({ pokemon }) => {

    const dispatch = useDispatch()

    const favorites = useSelector(state => state.favorites);
    const abilities = pokemon.abilities.map((ability) => ability.ability.name).join(', ');

    const isFavorite = favorites.includes(pokemon);

    const handleOnFavorite = () => {
        dispatch(toggleFavorite(pokemon));
    }

    return (
        <Card
            hoverable
            style={{ width: 240 }}
            title={pokemon.name}
            cover={<img alt={pokemon.name} src={pokemon.sprites.front_default}/>}
            extra={<StartButton isFavorite={isFavorite} onClick={handleOnFavorite} />}
        >
            <Meta title="Habilidades:" description={abilities} />
        </Card>
    )
}

export default PokemonCard