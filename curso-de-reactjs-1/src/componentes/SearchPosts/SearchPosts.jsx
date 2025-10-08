import { useState, useEffect } from "react"

const SearchPosts = () => {
    const [query, setQuery] = useState("")
    const [posts, setPosts] = useState([])
    const [loading, setLoading] = useState(false)
    const [error, setError] = useState(null)
    const [showNoResults, setShowNoResults] = useState(false)

    useEffect(() => {
        if (!query.trim()) {
            setPosts([])
            return
        }

        const controller = new AbortController()
        const delay = setTimeout(() => {
            setLoading(true)
            fetch(`https://jsonplaceholder.typicode.com/posts?title_like=${query}`, {
                signal: controller.signal,
            })
                .then((response) => {
                    if (!response.ok) throw new Error("Error en la petición");
                    return response.json()
                })
                .then((data) => setPosts(data))
                .catch((err) => {
                    if (err.name !== "AbortError") {
                        setError(err.message)
                    }
                })
                .finally(() => setLoading(false))
        }, 300);

        return () => {
            clearTimeout(delay)
            controller.abort()
        };
    }, [query])


    useEffect(() => {
        if (loading || query.trim() === "") {
            setShowNoResults(false)
            return
        }

        if (posts.length === 0) {
            const timer = setTimeout(() => {
                setShowNoResults(true)
            }, 500)

            return () => clearTimeout(timer)

        }
        else {
            setShowNoResults(false)
        }

    }, [loading, query, posts])

    return (
        <div className="text-center">
            <h1 className="text-3xl">Lista de post</h1>
            <input
                className="border-2 text-center border-amber-600 rounded-md border-solid"
                type="text"
                autoFocus
                value={query}
                onChange={(e) => setQuery(e.target.value)}
                placeholder="Buscar por título"
            />

            {loading && <p>Cargando...</p>}
            {error && <p style={{ color: "red" }}>{error}</p>}


            <ul>
                {showNoResults ? (
                    <li>Sin resultados</li>
                ) : (
                    posts.map((post) => (
                        <li className="my-2" key={post.id}>
                            {post.title}
                        </li>
                    ))
                )}
            </ul>
        </div>
    )
}

export default SearchPosts