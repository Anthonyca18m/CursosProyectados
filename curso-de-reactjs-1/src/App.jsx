
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import Card from './componentes/Card'
import Count from './componentes/Count'
import ToggleButton from './componentes/ToggleButton'
import NameForm from './componentes/NameForm'

function App() {
  return (
    <>
      <div>
        <a href="https://vite.dev" target="_blank">
          <img src={viteLogo} className="logo" alt="Vite logo" />
        </a>
        <a href="https://react.dev" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
        <Card titulo={"oli"} descripcion={"descripcion"}></Card>
      </div>
      <h1>Vite + React</h1>
      <div className="card">
        <Count />
        <ToggleButton />
        <NameForm />
        <p>
          Edit <code>src/App.jsx</code> and save to test HMR
        </p>
      </div>
      <p className="read-the-docs">
        Click on the Vite and React logos to learn more
      </p>
    </>
  )
}

export default App
