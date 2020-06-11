import React from "react";
import logo from "./logo.svg";
import "./App.css";
import BlogCard from "./components/BlogCard";

function App() {
  const firstName = "MAX ANTHONY";
  const lastName = "CACHI AYALA";
  const years = 21;
  const course = "ReactJS";

  const getFull = (firstName, lastName) => {
    return firstName + " " + lastName;
  };

  const data = [
    {
      id: 1,
      firstName: "MAX ANTHONY",
      lastName: "CACHI AYALA",
      years: 21,
      course: "ReactJS",
    },
    {
      id: 2,
      firstName: "MAX ANTHONY",
      lastName: "CACHI AYALA",
      years: 21,
      course: "ReactJS",
    },
    {
      id: 3,
      firstName: "MAX ANTHONY",
      lastName: "CACHI AYALA",
      years: 21,
      course: "ReactJS",
    },
  ];

  const datosHTML = data.map((data, i) => {
    return (
      <ul key={data.id}>
        <li> {data.firstName} </li>
        {/* <li> {data.lastName} </li>
        <li> {data.years} </li>
        <li> {data.course} </li> */}
      </ul>
    );
  });

  const datosHTML2 = data.map((data, i) => {
    return <BlogCard key={data.id} item={data} />;
  });

  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />

        {/* <ul>
          <li> First name: {firstName} </li>
          <li> Last name: {lastName}</li>
          <li> Years: {years}</li>
          <li> course: {course}</li>
        </ul> */}

        {/* <ul>
          <li> FullName: {getFull(firstName, lastName)} </li>
          <li> <input placeholder="Enter Data"></input> </li>
        </ul> */}

        {datosHTML}
        {datosHTML2}
      </header>
    </div>
  );
}

export default App;
