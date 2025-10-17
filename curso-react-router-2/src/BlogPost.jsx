import React from 'react';
import { useNavigate, useParams } from 'react-router-dom';
import { useAuth } from './auth';
import { usePosts } from './hooks/useBlog';

function BlogPost() {
	const navigate = useNavigate();
	const { slug } = useParams();

	const auth = useAuth();
	const { getPostBySlug, deletePost } = usePosts();

	const blogpost = getPostBySlug(slug);
	if (!blogpost) {
		return <p>Post no encontrado</p>;
	}

	const returnToBlog = () => {
		navigate('/blog');
	};

	const eliminar = (blogId) => {
		deletePost(blogId);
	}

	const editar = (blogId) => {
		navigate(`/blog/edit/${blogId}`);
	}

	return (
		<>
			<h2>{blogpost.title}</h2>
			<button onClick={returnToBlog}>Volver al blog</button>
			<p>{blogpost.author}</p>
			<p>{blogpost.content}</p>


			<button onClick={() => eliminar(blogpost.id)}>Eliminar</button>
			<button onClick={() => editar(blogpost.id)}>Editar</button>
		</>
	);
}

export { BlogPost };