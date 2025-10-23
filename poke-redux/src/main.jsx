import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import App from './App.jsx'

import { pokemonsReducer } from './reducers/pokemons.js'
import { Provider } from 'react-redux'
import { legacy_createStore as createStore } from 'redux'

const store = createStore(pokemonsReducer)

const root = createRoot(document.getElementById('root'))

root.render(
  <StrictMode>
    <Provider store={store}>    
      <App />
    </Provider>
  </StrictMode>
)
