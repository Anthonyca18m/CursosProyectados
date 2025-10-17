import React from 'react';
import { Link, Outlet } from 'react-router-dom';

import { usePosts } from './hooks/useBlog';

function BlogPage() {

  const {
    listPosts
  } = usePosts();

  const blogdata = listPosts();

  return (
    <>
      <h1>Blog</h1>
      <Link to="/blog/new">➕ Nuevo post</Link>

      <Outlet />

      <ul>
        {blogdata.map(post => (
          <BlogLink key={post.slug} post={post} />
        ))}
      </ul>
    </>
  );
}

function BlogLink({ post }) {
  return (
    <li>
      <Link to={`/blog/${post.slug}`}>{post.title}</Link>
    </li>
  );
}

export { BlogPage };