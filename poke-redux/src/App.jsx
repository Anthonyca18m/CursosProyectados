import React, { useEffect } from 'react'
import { connect } from 'react-redux'

import Search from 'antd/es/transfer/search'
import PokemonList from './components/PokemonList'
import { Col } from 'antd'
import './App.css'

import { getPokemons } from './api'
import { setPokemons as setPokemonsAction } from './actions'

function App({ pokemons, setPokemons }) {

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

const mapStateToProps = (state) => ({
  pokemons: state.pokemons  
})

const mapDispatchToProps = (dispatch) => {
  return {
    setPokemons: (value) => dispatch(setPokemonsAction(value))
  }
}

export default connect(mapStateToProps, mapDispatchToProps)(App)
