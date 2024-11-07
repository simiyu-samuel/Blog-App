import React from "react";
import BlogList from "./components/BlogList";
import CreateBlog from "./components/CreateBlog";

function App() {
  return (
    <div>
      <h1>Blog App</h1>
      <CreateBlog />
      <BlogList />
    </div>
  );
}

export default App;
