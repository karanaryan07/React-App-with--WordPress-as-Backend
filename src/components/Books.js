import React , {Component} from 'react'
import axios from 'axios'
import BookItem from './BookItem'

export class Books extends Component
{
    state = {
        isLoaded : false,
        Books : []
    }

    componentDidMount()
    {
        axios.get('http://localhost/wordpress/index.php/wp-json/wp/v2/books/')
        .then(res => {
            this.setState({Books : res.data , isLoaded : true})
        })
        .catch(err => 
            {
                console.log("fetch error" , err)
            })
    }

    render()
    {
        console.log("status" , this.state)
        return(
            <div>
                {this.state.isLoaded === true ? this.state.Books.map(book => (
                    <BookItem key = {book.id} book = {book}/>
                )) : <h4>Loading...</h4>}
            </div>
        )
    }
}

export default Books