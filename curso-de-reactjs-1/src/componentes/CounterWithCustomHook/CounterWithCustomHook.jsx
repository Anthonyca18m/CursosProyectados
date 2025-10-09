import useCounter from "../../hooks/useCounter"

const CounterWithCustomHook = () => {

    const { count, increment, decrement, reset } = useCounter({ initialValue: 0 })

    return (
        <div>
            <h2>Counter with Custom Hook: { count }</h2>
            <button onClick={ increment }>+1</button>
            <button onClick={ decrement }>-1</button>
            <button onClick={ reset }>Reset</button>
        </div>
    )
}

export default CounterWithCustomHook