import React, { useState } from 'react';
import { useNavigate } from 'react-router';
import { usePosts } from './hooks/useBlog';

const formStyle = {
    display: 'flex',
    flexDirection: 'column',
    gap: '8px',
    maxWidth: '400px',
    border: '1px solid #ccc',
    padding: '16px',
};

function CreatePost() {
    const { createPost } = usePosts();
    const navigate = useNavigate();
    
    const [form, setForm] = useState({
        title: '',
        content: '',
        author: '',
    });

    const handleSubmit = (e) => {
        e.preventDefault();

        const formParsed = {
            id: Date.now(),
            title: form.title,
            slug: form.title.toLowerCase().replace(/\s+/g, '-'),
            content: form.content,
            author: form.author,
        };

        createPost(formParsed);
        navigate('/blog');
    };

    return (
        <>
            <h2>Crear nuevo post</h2>
            <form onSubmit={handleSubmit} style={formStyle}>
                <label>
                    Título:
                    <input
                        type="text"
                        name="title"
                        onChange={(e) => setForm({ ...form, title: e.target.value })}
                        value={form.title}
                    />
                </label>
                <label>
                    Contenido:
                    <textarea
                        name="content"
                        onChange={(e) => setForm({ ...form, content: e.target.value })}
                        value={form.content}
                    />
                </label>
                <label>
                    Autor:
                    <input
                        type="text"
                        name="author"
                        onChange={(e) => setForm({ ...form, author: e.target.value })}
                        value={form.author}
                    />
                </label>
                <button type="submit">Crear post</button>
            </form>
        </>
    );
}

export { CreatePost };
