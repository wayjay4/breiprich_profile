import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ItemService from './shared/mock-item-service';
import Composition from './composition';

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
      user: null
    }

    this.initializeApp();
  }

  initializeApp(){
    var params = {};

    this.apiRouter(function(){
      this.getUser(params);
      this.getCompositions(params);
    }.bind(this));
  }

  render(){
    const user = this.state.user;
    const comps = this.state.compositions;

    if(!comps || !user) return null;

    // display data for troubleshooting
    //console.log('user:'); console.dir(user);
    console.log('comps:'); console.dir(comps);

    return (
      <div className='CompositionsApp'>
        <div>
        {
          comps.map(
            comp =>
            <div key={comp.id} style={{marginBottom:'20px'}}>
              {/*<a href={'/comps/'+comp.id} style={{ paddingRight:'10px' }}>
                {comp.title}
              </a>*/}

              <Composition comp={comp} />
            </div>
          )
        }
        </div>

        {/* <div>
          <p>Token value: {this.state.token}</p>
        </div> */}
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
        compositions: items
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
