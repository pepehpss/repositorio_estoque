import ProductType from '../types/ProductType';

async function searchProducts() {
    const urlAPI = 'http://localhost/gerenciador_estoque/model/getProducts.php';
    try {
        const response = await fetch(urlAPI);
        const data = await response.json();
        return data.products as ProductType[];
    } catch (e: any) {
        alert('Não foi possível buscar os produtos. ' + e.message);
        return [];
    }
}

export default searchProducts;
