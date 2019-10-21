class ItemService{
  constructor(){

  }

  async retrieveItems(handleResponse){
    var xhr = new XMLHttpRequest();

    // set callback function
    xhr.addEventListener('load', ()=>{
      return Promise.resolve(handleResponse(JSON.parse(xhr.responseText)));
    });

    xhr.open('GET', '/api_test', true);
    xhr.send();
  }

  async retrieveToken(handleResponse){
    // local vars
    var xhr, body;

    xhr = new XMLHttpRequest();

    // set callback function
    xhr.addEventListener('load', ()=>{
      return Promise.resolve(handleResponse(JSON.parse(xhr.responseText)));
    });

    xhr.open('POST', '/api/login', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    body = 'password=popquiz4u&username=wayjay4@yahoo.com';

    xhr.send(encodeURI(body));
  }

  async retrieveUser(token, handleResponse){
    // local vars
    var xhr;

    xhr = new XMLHttpRequest();

    // set callback function
    xhr.addEventListener('load', ()=>{
      return Promise.resolve(handleResponse(JSON.parse(xhr.responseText)));
    });

    xhr.open('GET', 'api/user', true);
    xhr.setRequestHeader('Accept', 'application/json');
    xhr.setRequestHeader('Authorization', 'Bearer '+token);

    xhr.send();

  }
}

export default ItemService;
