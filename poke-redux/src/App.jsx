import React, { useEffect } from 'react'
import Search from 'antd/es/transfer/search'
import PokemonList from './components/PokemonList'
import { Col, Spin } from 'antd'
import { fetchPokemonsWithDetails } from './slices/dataSlice'
import { shallowEqual, useDispatch, useSelector } from 'react-redux'

import './App.css'


function App() {
  const pokemons = useSelector(state => state.data.pokemons, shallowEqual)
  // const loading = useSelector(state => state.data.loading)
  const loading = false
  const dispatch = useDispatch()

  useEffect(() => {
    dispatch(fetchPokemonsWithDetails())
  }, [])

  const styleSpin = {
    margin: '3rem'
  }

  return (
    <>
      <Col span={8} offset={8}>
        <Search />
        { loading ? 
          (<Spin spinning size='large' style={styleSpin}></Spin>) : 
          (<PokemonList pokemons={pokemons} /> )
        }
        {
          !loading && pokemons.length === 0 && (
            <div>No se encontraron pokemones</div>
          )
        }
      </Col>
    </>
  )
}


export default App
