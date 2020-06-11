import React from 'react'

const BlogCard = (props) => {

    const item = props.item;

    return (
        <ul className="BlogCard">
          <li>{item.firstName} </li>
          <li> </li>
          <li> </li>
          <li> </li>
        </ul>
    )
};

export default BlogCard;