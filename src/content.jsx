/**
 *   Content :: The Main Application File
 * =============================================================================
 */

import { Router, Route, browserHistory } from 'react-router'

// import all content types
import Home from './containers/home/home.jsx';
import Page from './containers/page/page.jsx';
import Blog from './containers/blog/blog.jsx';
import Post from './containers/post/post.jsx';

ReactDOM.render(
  <Router history={browserHistory}>
    <Route path="/" component={Home} />
    <Route path="blog" component={Blog} />
    <Route path="blog/:slug" component={Post} />
    <Route path="/:slug" component={Page} />
  </Router>,
  document.getElementById('content')
);