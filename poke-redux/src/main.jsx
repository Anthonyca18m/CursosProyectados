import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import App from './App.jsx'

import { pokemonsReducer } from './reducers/pokemons.js'
import { Provider } from 'react-redux'
import { featuring, logger } from './middlewares/index.js'
import { 
    legacy_createStore as createStore ,
    applyMiddleware,
    compose
} from 'redux'

const composedEnhancers = compose(  
  window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__(),
  applyMiddleware(logger, featuring)
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
