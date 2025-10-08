import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import Card from './componentes/Card'

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
      <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
    </>
  )
}

export default App
