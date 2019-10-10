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
}

export default ItemService;
