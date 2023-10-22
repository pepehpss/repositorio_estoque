async function getAll(){
    const get = await fetch("../../../Model/getProducts.php");
    const json = await get.json();
    return json;
}

export default getAll;