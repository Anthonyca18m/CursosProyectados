import { createSlice } from '@reduxjs/toolkit';

const initialState = {
  pokemons: [],
  loading: false,
  favorites: [],
};

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
      const currentPokemonIndex = state.pokemons.findIndex((pokemon) => {
        return pokemon == action.payload;
      });

      if (currentPokemonIndex >= 0) {
        const isFavorite = state.pokemons[currentPokemonIndex].favorite;

        state.pokemons[currentPokemonIndex].favorite = !isFavorite;
      }
    },
  },
});

export const { setFavorite, setPokemons, setLoading } = dataSlice.actions;
console.log('dataSlice.actions: ', dataSlice);

export default dataSlice.reducer;