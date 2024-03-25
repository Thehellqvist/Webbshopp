let searchButton = document.querySelector("#search")

searchButton.addEventListener("click", ()=>{
    console.log("button pressed")
    sendApiRequest()
})

async function sendApiRequest(){
    let APP_ID = "1b95f29c"
    let API_KEY = "bde4e5978c46fbbadf536b043b42be50"
    let response = await fetch ('https://api.edamam.com/api/recipes/v2?app_id=%7BAPP_ID%7D&app_key=$%7BAPI_KEY%7D&q=pizza%27');
    console.log(response)
}

function useApiData(data){

}