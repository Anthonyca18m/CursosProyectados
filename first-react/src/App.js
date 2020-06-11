import React from 'react';
import logo from './logo.svg';
import './App.css';

function App() {

  const firstName = 'MAX ANTHONY';
  const lastName = 'CACHI AYALA';
  const years = 21;
  const course = 'ReactJS';

  const arr = [1,2,3,4,5,6];

  const getFull = (firstName, lastName) => {
    return firstName + ' ' + lastName;
  };

  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        
        <ul>
          <li> First name: {firstName} </li>
          <li> Last name: {lastName}</li>
          <li> Years: {years}</li>
          <li> course: {course}</li>
        </ul>  

        <ul>
          <li> FullName: {getFull(firstName, lastName)} </li>
          <li> <input placeholder="Enter Data"></input> </li>
        </ul>  

        
        
      </header>
    </div>
  );
}

export default App;
