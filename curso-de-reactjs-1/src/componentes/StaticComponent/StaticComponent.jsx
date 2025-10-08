const StaticComponent = () => {
    const items = ['React', 'Vue', 'Angular', 'Svelte']

    return (
        <div>
            <h2>Static Component</h2>
            <ul>
                {items.map((item, index) => (
                    <li key={index}>{item}</li>
                ))}
            </ul>
        </div>
    )
}

export default StaticComponent