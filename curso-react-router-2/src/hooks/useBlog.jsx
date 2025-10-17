import { createContext, useContext, useState } from "react"

import { blogdata } from '../blogdata'

const PostContext = createContext()

function PostProvider({ children }) {
    const [posts, setPosts] = useState(blogdata)

    const listPosts = () => {
        return posts
    }

    const createPost = (newPost) => {
        const newPosts = [...posts, newPost]
        setPosts(newPosts)
    }

    const getById = (id) => {
        return posts.find(post => post.id === id)
    }

    const getPostBySlug = (slug) => {
        return posts.find(post => post.slug === slug)
    }

    const updatePost = (updatedPost) => {
        setPosts(posts.map(post => post.id === updatedPost.id ? updatedPost : post))
    }

    const deletePost = (postId) => {
        setPosts(posts.filter(post => post.id !== postId))
    }

    return (
        <PostContext.Provider 
            value={{
                getById,
                listPosts, 
                createPost, 
                getPostBySlug, 
                updatePost, 
                deletePost 
                }}>
            {children}
        </PostContext.Provider>
    )

}

function usePosts() {
    const context = useContext(PostContext)
    if (!context) {
        throw new Error("usePosts debe usarse dentro de un PostProvider")
    }
    return context
}


export { 
    PostProvider,
    usePosts    
};