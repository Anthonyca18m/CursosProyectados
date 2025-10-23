import PokemonCard from "./PokemonCard";
import './PokemonList.css'

const PokemonList = ({ pokemons }) => {
    return (
        <div className="PokemonList">
            {pokemons.map((pokemon, i) => (
                <PokemonCard key={i} pokemon={pokemon} />
            ))}
        </div>
    )
}

export default PokemonList;