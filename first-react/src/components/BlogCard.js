// import React from 'react'

// const BlogCard = (props) => {

//     const item = props.item;

//     return (
//         <div class="card">
//             <h4>{item.title}</h4>
//             <p>{item.content}</p>
//             <p>{item.likes}</p>
//             <button onClick={() => {return alert(item.likes++)}} >Like</button>
//         </div>
//     )
// };

// export default BlogCard;

import React, { Component } from 'react'

export default class BlogCard extends Component {
    state = {
        item : []
    }
    render() {
        this.state.item = this.props.item;
        const item = this.state.item;
        
        return (
            <div class="card">
                <h4>{item.title}</h4>
                <p>{item.content}</p>
                <p>{this.state.item.likes}</p>
                <button onClick={ () => {this.setState((prevState, prevProp) => { return prevState.item.likes++})  } } >Like</button>
            </div>
        )
    }
}
