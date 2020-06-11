import React from "react";
import logo from "./logo.svg";
import "./App.css";
import BlogCard from "./components/BlogCard";

function App() {

  const data = [
    {id : 1, title: 'hold', content : 'asd mnasd owu wm loman u slndb ', likes: 0},
    {id : 2, title: 'hold', content : 'asd mnasd owu wm loman u slndb ', likes: 0},
    {id : 3, title: 'hold', content : 'asd mnasd owu wm loman u slndb ', likes: 0}
  ];

  const datahtml = data.map((data, i) => {
    return <BlogCard key={data.id} item={data}/>
  });

  return (
    <div className="App">
      {datahtml}
    </div>
  );
}

export default App;
