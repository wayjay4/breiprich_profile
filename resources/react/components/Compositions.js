import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ItemService from './shared/mock-item-service';
import Composition from './composition';
import LoadingMessage from './shared/LoadingMessage';

class Compositions extends Component {
  constructor(props){
    super(props);
    this.itemService = new ItemService();
    this.initializeApp = this.initializeApp.bind(this);
    this.apiRouter = this.apiRouter.bind(this);
    this.getApiToken = this.getApiToken.bind(this);
    this.getUser = this.getUser.bind(this);
    this.getCompositions = this.getCompositions.bind(this);

    this.state = {
      compositions: null,
      token: null,
      user: null,
      isLoading: false
    }
  }

  initializeApp(){
    var params = {};

    this.setState({
      isLoading: true
    });

    this.apiRouter(function(){
      this.getUser(params);
      this.getCompositions(params);
    }.bind(this));
  }

  componentDidMount(){
    this.initializeApp();
  }

  render(){
    const user = this.state.user;
    const comps = this.state.compositions;
    var compositonComponents = [];

    if(comps && user){
      compositonComponents = comps.map(comp =>
        <div key={comp.id} style={{marginBottom:'20px'}}>
          {/*<a href={'/comps/'+comp.id} style={{ paddingRight:'10px' }}>
            {comp.title}
          </a>*/}

          <Composition comp={comp} />
        </div>
      );
    }

    // display data for troubleshooting
    //console.log('user:'); console.dir(user);
    //console.log('comps:'); console.dir(comps);

    return (
      <div className='CompositionsApp'>
        <div>
          {compositonComponents}
        </div>

        {/* <div>
          <p>Token value: {this.state.token}</p>
        </div> */}

        {
          this.state.isLoading && <LoadingMessage />
        }
      </div>
    );
  }

  apiRouter(runActionRequest){
    if(this.state.token == null)
      this.getApiToken(function(){
        runActionRequest();
      }.bind(this));
    else
      runActionRequest();
  }

  getApiToken(runActionRequest){
    this.itemService.retrieveToken(function(token){
      this.setState({
        token: token.access_token
      });

      runActionRequest();
    }.bind(this));
  }

  getCompositions(params){
    this.itemService.retrieveItems(function(items){
      this.setState({
        compositions: items,
        isLoading: false
      });

      // display data for troubleshooting
      //console.log('items:'); console.dir(items);
      //console.log('params:'); console.dir(params);
    }.bind(this));
  }

  getUser(params){
    this.itemService.retrieveUser(this.state.token, function(user){
      this.setState({
        user: user
      });

      // display data for troubleshooting
      //console.log('user:'); console.dir(user);
      //console.log('params:'); console.dir(params);
    }.bind(this));
  }
}

if(document.getElementById('Compositions')){
  ReactDOM.render(<Compositions />, document.getElementById('Compositions'));
}

export default Compositions;
