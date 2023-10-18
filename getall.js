async function getall(){
    const get = await fetch("/pasta/model/getProducts.php");
    const json = await get.json();
    return json;
}
export default getall;