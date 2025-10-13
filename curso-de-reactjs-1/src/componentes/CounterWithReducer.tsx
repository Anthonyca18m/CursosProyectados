import React from 'react'
import { useReducer } from 'react'

let initialState = {count: 0}

type State = { count: number };
type Action = { type: 'increment' } | { type: 'decrement' };

const reducer = (state: State, action : Action) => {
    switch (action.type) {
        case 'increment':
        return {count: state.count + 1}
        case 'decrement':
        return {count: state.count - 1}
        default:
        throw new Error()
    }
}

const CounterWithReducer = () => {

    const [state, dispatch] = useReducer(reducer, initialState)

  return (
    <>
        <p>Count: {state.count}</p>
        <button className='btn bg-blend-color p-2 border-2 m-2' onClick={() => dispatch({type: 'decrement'})}>-</button>
        <button className='btn bg-blend-color p-2 border-2 m-2' onClick={() => dispatch({type: 'increment'})}>+</button>
    </>
  )
}

export default CounterWithReducer