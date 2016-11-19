/**
 *   Single Post Container
 * =============================================================================
 */

// fetch polyfill
import 'whatwg-fetch';

// components
import Button from '../../components/button/button.js';

class Post extends React.Component {
  constructor(props) {
    super();
    this.state = {
      data: []
    };
  }

  componentDidMount() {
    // fetch latest posts
    fetch('//' + window.location.hostname + '/wp-json/wp/v2/posts/?slug=' + this.props.params.slug)
      .then((response) => response.json())
      .then((responseData) => {
        this.setState({
          data: responseData
        });
      })
      .catch((error) => {
        console.error(error);
      })
  }

  render() {
    return (
      <div>
        {this.state.data.map((post) =>
          <article className="post">
            <h1 className="post__title" dangerouslySetInnerHTML={{__html: post.title.rendered}} />
            <section className="post__entry" dangerouslySetInnerHTML={{__html: post.content.rendered}} />
          </article>
        )}
        <section className="post__nav">
          <Button>Previous Post</Button>
          <Button>Next Post</Button>
        </section>
      </div>
    );
  }
}

export default Post