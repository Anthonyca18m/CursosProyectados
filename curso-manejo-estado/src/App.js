// import logo from './logo.svg';
import './App.css';

import { UseState } from './components/UseState.js';
import { ClassState } from './components/ClassState.js';

function App() {
  return (
    <div className="App">
      <UseState />    
      <ClassState />
    </div>
  );
}

export default App;
