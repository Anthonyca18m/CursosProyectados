
import { getPokemonDetail } from '../api';
import { SET_POKEMONS } from './types';

export const setPokemons = (payload) => ({
    type: SET_POKEMONS,
    payload    
})

export const setLoading = (payload) => ({
    type: 'SET_LOADING',
    payload    
})

export const toggleFavorite = (payload) => ({
    type: 'TOGGLE_FAVORITE',
    payload    
})

export const getPokemonWithDetail = 
    (pokemons = []) => 
    async (dispatch) => {
        const pokemonDetailed = await Promise.all(
            pokemons.map((pokemon) => getPokemonDetail(pokemon.url))
        )
        dispatch(setPokemons(pokemonDetailed))
}