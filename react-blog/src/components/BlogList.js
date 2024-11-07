import React, { useEffect, useState } from "react";
import axios from "axios";

function BlogList() {
  const [posts, setPosts] = useState([]);

  useEffect(() => {
    const fetchPosts = async () => {
      const res = await axios.get("http://localhost/php-backend/read.php");
      setPosts(res.data);
    };

    fetchPosts();
  }, []);

  return (
    <div className="blog-list">
      <h2>All Blogs</h2>
      {posts.map((post) => (
        <div key={post.id} className="blog-card">
          <h3 className="blog-title">{post.title}</h3>
          <p className="blog-content">{post.content}</p>
        </div>
      ))}
    </div>
  );
}

export default BlogList;
