import { SET_LOADING, SET_POKEMONS, TOGGLE_FAVORITE } from "../actions/types"

const initialState = {
    pokemons: [],
    loading: false,
    favorites: [],
}

export const pokemonsReducer = (state = initialState, action) => {
    switch (action.type) {
        case SET_POKEMONS:
            return {
                ...state,
                pokemons: action.payload,
            }
        case SET_LOADING: {
            return {
                ...state,
                loading: action.payload,
            }
        }
        case TOGGLE_FAVORITE: {
            const { payload } = action
            const isFavorite = state.favorites.includes(payload)
            return {
                ...state,
                favorites: isFavorite
                    ? state.favorites.filter((name) => name !== payload)
                    : [...state.favorites, payload],
            }
        }
        default:
            return state
    }
}