import { useState, useEffect } from 'react'

const Count = () => {
    const [count, setCount] = useState(0);

    useEffect(() => {
        console.log(`El count ha cambiado a: ${count}`);
    }, [count]);

    return (
        <div className="card">
            <button onClick={() => setCount((count) => count + 1)}>
                count is {count}
            </button>
        </div>
    );
}

export default Count