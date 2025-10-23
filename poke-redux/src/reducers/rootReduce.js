import { combineReducers } from 'redux';
import dataSlice from '../slices/dataSlice';
// import { pokemonsReducer } from './pokemons';
// import { uiReducer } from './ui';

const rootReducer = combineReducers({
//   data: pokemonsReducer,
//   ui: uiReducer,

    data: dataSlice
});

export default rootReducer;