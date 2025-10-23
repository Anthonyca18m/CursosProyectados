import { createSlice, createAsyncThunk } from '@reduxjs/toolkit';
import { getPokemonDetail, getPokemons } from '../api';

const initialState = {
  pokemons: [],
  loading: false,
  favorites: [],
};

export const fetchPokemonsWithDetails = createAsyncThunk(
    'data/fetchPokemonsWithDetails',
    async (pokemons, { dispatch }) => {
        dispatch(setLoading(true))
        const data = await getPokemons()
        const pokemonDetailed = await Promise.all(
            data.map((pokemon) => getPokemonDetail(pokemon.url))
        )
        dispatch(setLoading(false))

        dispatch(setPokemons(pokemonDetailed))
    }
)

export const dataSlice = createSlice({
  name: 'data',
  initialState,
  reducers: {
    setPokemons: (state, action) => {
      state.pokemons = action.payload;
    },
    setLoading: (state, action) => {
      state.loading = action.payload;
    },
    setFavorite: (state, action) => {
        const pokemon = action.payload;
        const isFavorite = state.favorites.some((fav) => fav.id === pokemon.id);
        if (isFavorite) {
            state.favorites = state.favorites.filter((fav) => fav.id !== pokemon.id);
        } else {
            state.favorites.push(pokemon);
        }
    },
  },
});

export const { setFavorite, setPokemons, setLoading } = dataSlice.actions;
console.log('dataSlice.actions: ', dataSlice);

export default dataSlice.reducer;