import React, { useState } from 'react';
import { useNavigate, useParams } from 'react-router';
import { usePosts } from './hooks/useBlog';

const formStyle = {
    display: 'flex',
    flexDirection: 'column',
    gap: '8px',
    maxWidth: '400px',
    border: '1px solid #ccc',
    padding: '16px',
};

function EditPost() {
    const { updatePost, getById } = usePosts();
    const navigate = useNavigate();

    const { id } = useParams();
    
    const postToEdit = getById(Number(id));

    const [form, setForm] = useState(postToEdit);

    const handleSubmit = (e) => {
        e.preventDefault();

        updatePost(form);
        navigate('/blog');
    };

    return (
        <>
            <h2>Editar post</h2>
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

export { EditPost };
