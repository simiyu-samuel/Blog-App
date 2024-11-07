import React, { useState } from "react";
import axios from "axios";

function CreateBlog() {
  const [title, setTitle] = useState("");
  const [content, setContent] = useState("");

  const handleSubmit = async (e) => {
    e.preventDefault();
    const newPost = { title, content };

    try {
      await axios.post("http://localhost/php-backend/create.php", newPost);
      alert("Blog post created!");
    } catch (error) {
      console.error("There was an error creating the post!", error);
    }
  };

  return (
    <form onSubmit={handleSubmit}>
      <h2>Create New Blog</h2>
      <input
        type="text"
        placeholder="Title"
        value={title}
        onChange={(e) => setTitle(e.target.value)}
      />
      <textarea
        placeholder="Content"
        value={content}
        onChange={(e) => setContent(e.target.value)}
      />
      <button type="submit">Create Post</button>
    </form>
  );
}

export default CreateBlog;
