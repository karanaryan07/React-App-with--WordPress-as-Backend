import React , {Component} from 'react'

class BookItem extends Component {

    render() {
        return (
            <div>
                    <h3 style = {{textAlign : "center"}}>{this.props.book.acf.publisher}</h3>
                    <h4 style = {{textAlign : "center"}}>{this.props.book.title.rendered}</h4>
                    <p dangerouslySetInnerHTML = {{__html : this.props.book.excerpt.rendered}} />
            </div>
        )
    }
}

export default BookItem