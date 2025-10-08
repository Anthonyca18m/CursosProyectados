// import reactLogo from './assets/react.svg'
// import viteLogo from '/vite.svg'
// import StaticComponent from './componentes/StaticComponent/StaticComponent'
// import UserList from './componentes/UserList/UserList'
import SearchPosts from './componentes/SearchPosts/SearchPosts'

function App() {
  return (
    <>
      {/* <div>
        <a href="https://vite.dev" target="_blank">
          <img src={viteLogo} className="logo" alt="Vite logo" />
        </a>
        <a href="https://react.dev" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
        <StaticComponent />
        <UserList />
      </div>
      <h1>Vite + React</h1>
      <h1 className="text-3xl font-bold underline">
        Hello world!
      </h1> */}
      <SearchPosts />
    </>
  )
}

export default App
