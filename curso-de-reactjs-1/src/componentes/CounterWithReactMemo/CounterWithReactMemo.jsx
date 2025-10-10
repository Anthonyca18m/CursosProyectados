import React, { useCallback, useMemo, useState } from 'react'

const Child = React.memo(({ count }) => {
    console.log('Me volví a renderizar :(')

    return (
        <div>
            <h4>{count}</h4>
        </div>
    )
})

function ExpensiveCalculation({num}) {
    const result = useMemo(() => {
        console.log('Calculando...')
        return num * 2
    }, [num])

    return <p>Resultado: { result }</p>
}

function CounterWithReactMemo() {

    const [count, setCount] = useState(0)

    const increment = useCallback(() => setCount(prev => prev + 1), [])

    return (
        <>
            <div>
                <button onClick={increment}>
                    Incrementar
                </button>
                <Child count={count} />
                <ExpensiveCalculation num={count} />
            </div>
        </>
    )
}

export default CounterWithReactMemo