import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import App from './App.jsx'

import { pokemonsReducer } from './reducers/pokemons.js'
import { Provider } from 'react-redux'
import { thunk } from 'redux-thunk'
import { logger } from './middlewares/index.js'
import { 
    legacy_createStore as createStore ,
    applyMiddleware,
    compose
} from 'redux'

const composeAtl = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose

const composedEnhancers = composeAtl(
  applyMiddleware(thunk, logger)
)

const store = createStore(
  pokemonsReducer,
  composedEnhancers
)

const root = createRoot(document.getElementById('root'))

root.render(
  <StrictMode>
    <Provider store={store}>    
      <App />
    </Provider>
  </StrictMode>
)
