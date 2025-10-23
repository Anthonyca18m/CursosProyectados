import React, { useEffect } from 'react'
import Search from 'antd/es/transfer/search'
import PokemonList from './components/PokemonList'
import { Col, Spin } from 'antd'

import { getPokemons } from './api'
import { getPokemonWithDetail, setLoading } from './actions'
import { useDispatch, useSelector } from 'react-redux'

import './App.css'

function App() {
  const pokemons = useSelector(state => state.data.pokemons)
  const loading = useSelector(state => state.data.loading)
  const dispatch = useDispatch()

  useEffect(() => {
    dispatch(setLoading(true))
    const fetchPokemons = async () => {
      const data = await getPokemons()
      dispatch(getPokemonWithDetail(data))
      dispatch(setLoading(false))
    }

    fetchPokemons()
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
      </Col>
    </>
  )
}


export default App
