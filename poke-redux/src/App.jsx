import React, { useEffect, useState } from 'react'

import Search from 'antd/es/transfer/search'
import PokemonList from './components/PokemonList'
import { Col } from 'antd'
import './App.css'

import { getPokemons } from './api'

function App() {

  const [ pokemons, setPokemons ] = useState([])

  useEffect(() => {
    const fetchPokemons = async () => {
      const data = await getPokemons()
      setPokemons(data)
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
