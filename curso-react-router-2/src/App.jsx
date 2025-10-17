import { HashRouter, Routes, Route } from 'react-router-dom';
import { Menu } from './Menu';
import { HomePage } from './HomePage';
import { BlogPage } from './BlogPage';
import { BlogPost } from './BlogPost';
import { ProfilePage } from './ProfilePage';
import { LoginPage } from './LoginPage';
import { LogoutPage } from './LogoutPage';
import { AuthProvider, AuthRoute } from './auth';
import { PostProvider } from './hooks/useBlog';
import { CreatePost } from './CreatePost';
import { EditPost } from './EditPost';

// /#/ -> Home
// /#/blog
// /#/profile
// /#/lalalala -> Not Found
// /blog, /lalala -> Home

function App() {
  return (
    <>
      <HashRouter>
        <AuthProvider>
          <Menu />
          <PostProvider>
            <Routes>
              <Route path="/" element={<HomePage />} />
              
                <Route path="/blog" element={<BlogPage />}>
                  <Route path="new" element={<CreatePost />} />
                  <Route path="edit/:id" element={<EditPost />} />
                  <Route path=":slug" element={<BlogPost />} />
                </Route>
              

              <Route path="/login" element={<LoginPage />} />
              <Route
                path="/logout"
                element={
                  <AuthRoute>
                    <LogoutPage />
                  </AuthRoute>
                }
              />
              <Route
                path="/profile"
                element={
                  <AuthRoute>
                    <ProfilePage />
                  </AuthRoute>
                }
              />
              <Route path="*" element={<p>Not found</p>} />
            </Routes>
          </PostProvider>
        </AuthProvider>
      </HashRouter>
    </>
  );
}

export default App;