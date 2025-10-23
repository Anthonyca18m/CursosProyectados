import React, { useEffect } from 'react'
import Search from 'antd/es/transfer/search'
import PokemonList from './components/PokemonList'
import { Col } from 'antd'

import { getPokemons } from './api'
import { setPokemons } from './actions'
import { useDispatch, useSelector } from 'react-redux'

import './App.css'

function App() {

  const pokemons = useSelector(state => state.pokemons)
  const dispatch = useDispatch()

  useEffect(() => {
    const fetchPokemons = async () => {
      const data = await getPokemons()
      dispatch(setPokemons(data))
    }

    fetchPokemons()
  }, [])

  return (
    <>
      <Col span={8} offset={8}>
        <Search />
        <PokemonList pokemons={pokemons} />
      </Col>
    </>
  )
}


export default App
